<?php

/**
 * Project:     Securimage: A PHP class for creating and managing form CAPTCHA images<br />
 * File:        securimage_show.php<br />
 *
 * Copyright (c) 2013, Drew Phillips
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without modification,
 * are permitted provided that the following conditions are met:
 *
 *  - Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *  - Redistributions in binary form must reproduce the above copyright notice,
 *    this list of conditions and the following disclaimer in the documentation
 *    and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * Any modifications to the library should be indicated clearly in the source code
 * to inform users that the changes are not a part of the original software.<br /><br />
 *
 * If you found this script useful, please take a quick moment to rate it.<br />
 * http://www.hotscripts.com/rate/49400.html  Thanks.
 *
 * @link https://www.phpcaptcha.org Securimage PHP CAPTCHA
 * @link https://www.phpcaptcha.org/latest.zip Download Latest Version
 * @link https://www.phpcaptcha.org/Securimage_Docs/ Online Documentation
 * @copyright 2013 Drew Phillips
 * @author Drew Phillips <drew@drew-phillips.com>
 * @version 3.6.6 (Nov 20 2017)
 * @package Securimage
 *
 */


// Remove the "//" from the following line for debugging problems
// error_reporting(E_ALL); ini_set('display_errors', 1);

if (!\defined('SYSTEM_RUN')) {require((\dirname(\dirname((__DIR__)))).'/config.php');}

/*
print '<pre  class="mod-pre rounded">function <span>'.__FUNCTION__.'( '.''.' );</span>  filename: <span>'.\basename(__FILE__).'</span>  line: '.__LINE__.' -> <br />';
\print_r( $oRequest->getParamNames() ); print '</pre>'.PHP_EOL; \flush (); //  ob_flush();;sleep(10); die();
*/
    $sSecKeyId = $oRequest->getParam('captchaId',FILTER_VALIDATE_INT); //  FILTER_SANITIZE_STRING
    $sCaptchaPath = WB_PATH.'/include/captcha/';

/*          future use
    $captchaId = \bin\SecureTokens::checkIDKEY($sSecKeyId);
    \trigger_error(sprintf('[%d] namespace lautet %s - idKey %s checkIDKEY (%s) typehint %s',__LINE__,$namespace,$sSecKeyId,$captchaId,gettype($captchaId)), E_USER_NOTICE);
*/
    $captchaId = $sSecKeyId;
    $namespace = $oRequest->getParam('namespace',FILTER_SANITIZE_STRING);
    $namespace = ($namespace ? $namespace : 'captcha'.$captchaId);
    $table = TABLE_PREFIX.'mod_captcha_control';
    if (!is_null($captchaId)){
    //  settings from table captcha_controll
        if ($oSettings = $database->query("SELECT * FROM $table")) {
            $aSettings = $oSettings->fetchRow(MYSQLI_ASSOC);
            $sPathToBGImage =  $sCaptchaPath.(empty($aSettings['image_bg_dir']) ? 'backgrounds/' : ''.$aSettings['image_bg_dir']);
            $options = [
                        'section_id'   => $captchaId,
                        'image_width'  => $aSettings['image_width'],
                        'image_height' => ((empty($aSettings['image_height']) || $aSettings['image_height']==0) ? $aSettings['image_width'] * 0.35 : $aSettings['image_height']),
                        'perturbation' => .75,
                        'num_lines'    => $aSettings['num_lines'],
                        'noise_level'  => $aSettings['noise_level'],
                        'line_color'   => $aSettings['line_color'],
                        'noise_color'  => $aSettings['noise_color'],
                        'debug'        => false,
                        'namespace'    => $namespace,
                        'image_signature' => $aSettings['image_signature'],
                        'signature_color' => $aSettings['signature_color'],
                        'ttf_file'        => $sCaptchaPath.(empty($aSettings['ttf_file']) ? 'fonts/'.'AHGBold.ttf' : ''.$aSettings['ttf_file']),
                        'font_ratio'      => 0.55,
                        'text_transparency_percentage' => 0,
                        'text_color'      => $aSettings['text_color'],
                        'background_directory' => $sPathToBGImage,
                        'image_bg_color'       => $aSettings['image_bg_color'],
                        'captcha_type'    => (($aSettings['use_sec_type']==-1) ? mt_rand(0,2) : $aSettings['use_sec_type']),
                /**** Code Storage & Database Options ****/
                        // true if you *DO NOT* want to use PHP sessions at all, false to use PHP sessions
                        'no_session'      => false,
                        // the PHP session name to use (null for default PHP session name)
                        // do not change unless you know what you are doing
                        'session_name'    => $namespace,
                        // change to true to store codes in a database
                        'use_database'    => false,
                        // database engine to use for storing codes.  must have the PDO extension loaded
                        // Values choices are:
                        // Securimage::SI_DRIVER_MYSQL, Securimage::SI_DRIVER_SQLITE3, Securimage::SI_DRIVER_PGSQL
                        'database_driver' => \vendor\captcha\Securimage::SI_DRIVER_MYSQL,
                        'database_host'   => DB_HOST,     // database server host to connect to
                        'database_user'   => DB_USERNAME,          // database user to connect as
                        'database_pass'   => DB_PASSWORD,              // database user password
                        'database_name'   => DB_NAME,    // name of database to select (you must create this first or use an existing database)
                        'database_table'  => 'captcha_codes', // database table for storing codes, will be created automatically
                        // Securimage will automatically create the database table if it is not found
                        // change to true for performance reasons once database table is up and running
                        'skip_table_check' => false,
           ];
            $img = new \vendor\captcha\Securimage($options);
            $img->getWBSession();
            $img->show();  // outputs the image and content headers to the browser
        } //  end $captchaId
    } //  end sanitize $captchaId
