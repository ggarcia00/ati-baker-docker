<?/* PHP
                    Arquivo de configurção do gerenciador 30/08/2021 12:05:40
                    config.php
                    */

                    define('DB_TYPE', 'mysql');
                    define('DB_HOST', 'db');
                    define('DB_USERNAME', 'wpostreinamento');
                    define('DB_PASSWORD', '5x49vw3i');
                    define('DB_NAME', 'wpostreinamento');
                    define('TABLE_PREFIX', 'w_pos_treinamento_');

                    define('WB_PATH', dirname(__FILE__));
                    define('WB_URL', 'http://localhost/treinamentoesportivo');
                    define('ADMIN_PATH', WB_PATH.'/admin');
                    define('ADMIN_URL', 'http://localhost/treinamentoesportivo/admin');

                    // some mail provider do not deliver mails send via PHP mail() function as SMTP authentification is missing
                    // in that case activate SMTP for outgoing mails: un-comment next line and specify SMTP host of your domain
                    //define('WBMAILER_SMTP_HOST', 'smtp.uel.br');

                    require_once(WB_PATH.'/framework/initialize.php');

                    /*config.php*/?>
