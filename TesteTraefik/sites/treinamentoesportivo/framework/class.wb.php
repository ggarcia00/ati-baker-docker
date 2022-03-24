<?php

/**
 *
 * @category        frontend
 * @package         framework
 * @author          WebsiteBaker Project
 * @copyright       2004-2009, Ryan Djurovich
 * @copyright       2009-2010, Website Baker Org. e.V.
 * @link			http://www.websitebaker2.org/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 4.3.4 and higher
 * @version         $Id: class.wb.php 1277 2010-01-28 05:18:18Z Luisehahne $
 * @filesource		$HeadURL: $
 * @lastmodified    $Date:  $
 *
 */
// Include PHPLIB template class
require_once(WB_PATH . "/include/phplib/template.inc");

require_once(WB_PATH . '/framework/class.database.php');

// Include new wbmailer class (subclass of PHPmailer)
require_once(WB_PATH . "/framework/class.wbmailer.php");

class wb {

    // General initialization function 
    // performed when frontend or backend is loaded.
    function wb() {
        
    }

    // Check whether a page is visible or not.
    // This will check page-visibility and user- and group-rights.
    /* page_is_visible() returns
      false: if page-visibility is 'none' or 'deleted', or page-vis. is 'registered' or 'private' and user isn't allowed to see the page.
      true: if page-visibility is 'public' or 'hidden', or page-vis. is 'registered' or 'private' and user _is_ allowed to see the page.
     */
    function page_is_visible($page) {
        $show_it = false; // shall we show the page?
        $page_id = $page['page_id'];
        $visibility = $page['visibility'];
        $viewing_groups = $page['viewing_groups'];
        $viewing_users = $page['viewing_users'];

        // First check if visibility is 'none', 'deleted'
        if ($visibility == 'none') {
            return(false);
        } elseif ($visibility == 'deleted') {
            return(false);
        }

        // Now check if visibility is 'hidden', 'private' or 'registered'
        if ($visibility == 'hidden') { // hidden: hide the menu-link, but show the page
            $show_it = true;
        } elseif ($visibility == 'private' || $visibility == 'registered') {
            // Check if the user is logged in
            if ($this->is_authenticated() == true) {
                // Now check if the user has perms to view the page
                $in_group = false;
                foreach ($this->get_groups_id() as $cur_gid) {
                    if (in_array($cur_gid, explode(',', $viewing_groups))) {
                        $in_group = true;
                    }
                }
                if ($in_group || in_array($this->get_user_id(), explode(',', $viewing_users))) {
                    $show_it = true;
                } else {
                    $show_it = false;
                }
            } else {
                $show_it = false;
            }
        } elseif ($visibility == 'public') {
            $show_it = true;
        } else {
            $show_it = false;
        }
        return($show_it);
    }

    // Check if there is at least one active section on this page
    function page_is_active($page) {
        global $database;
        $has_active_sections = false;
        $page_id = $page['page_id'];
        $now = time();
        $query_sections = $database->query("SELECT publ_start,publ_end FROM " . TABLE_PREFIX . "sections WHERE page_id = '$page_id'");
        if ($query_sections->numRows() != 0) {
            while ($section = $query_sections->fetchRow()) {
                if ($now < $section['publ_end'] && ($now > $section['publ_start'] || $section['publ_start'] == 0) || $now > $section['publ_start'] && $section['publ_end'] == 0) {
                    $has_active_sections = true;
                    break;
                }
            }
        }
        return($has_active_sections);
    }

    // Check if there is at least one active section on this page
    function page_is_separador_menu($page) {
        global $database;
        $has_separador_menu_sections = false;
        $page_id = $page['page_id'];
        $now = time();
        $query_sections = $database->query("SELECT module FROM " . TABLE_PREFIX . "sections WHERE page_id = '$page_id'");
        if ($query_sections->numRows() != 0) {
            while ($section = $query_sections->fetchRow()) {
                if ($section['module'] == 'separador_menu') {
                    $has_separador_menu_sections = true;
                    break;
                }
            }
        }
        return($has_separador_menu_sections);
    }

    // Check whether we should show a page or not (for front-end)
    function show_page($page) {
        if ($this->page_is_visible($page) && $this->page_is_active($page)) {
            return true;
        } else {
            return false;
        }
    }

    // Check if the user is already authenticated or not
    function is_authenticated() {
        if (isset($_SESSION['USER_ID']) AND $_SESSION['USER_ID'] != "" AND is_numeric($_SESSION['USER_ID'])) {
            return true;
        } else {
            return false;
        }
    }

    // Modified addslashes function which takes into account magic_quotes
    function add_slashes($input) {
        if (get_magic_quotes_gpc() || (!is_string($input) )) {
            return $input;
        }
        $output = addslashes($input);
        return $output;
    }

    // Ditto for stripslashes
    // Attn: this is _not_ the counterpart to $this->add_slashes() !
    // Use stripslashes() to undo a preliminarily done $this->add_slashes()
    // The purpose of $this->strip_slashes() is to undo the effects of magic_quotes_gpc==On
    function strip_slashes($input) {
        if (!get_magic_quotes_gpc() || (!is_string($input) )) {
            return $input;
        }
        $output = stripslashes($input);
        return $output;
    }

    // Escape backslashes for use with mySQL LIKE strings
    function escape_backslashes($input) {
        return str_replace("\\", "\\\\", $input);
    }

    function page_link($link) {
        // Check for :// in the link (used in URL's) as well as mailto:
        if (strstr($link, '://') == '' AND substr($link, 0, 7) != 'mailto:') {
            return WB_URL . PAGES_DIRECTORY . $link . PAGE_EXTENSION;
        } else {
            return $link;
        }
    }

    // Get POST data
    function get_post($field) {
        if (isset($_POST[$field])) {
            return $_POST[$field];
        } else {
            return null;
        }
    }

    // Get POST data and escape it
    function get_post_escaped($field) {
        $result = $this->get_post($field);
        return (is_null($result)) ? null : $this->add_slashes($result);
    }

    // Get GET data
    function get_get($field) {
        if (isset($_GET[$field])) {
            return $_GET[$field];
        } else {
            return null;
        }
    }

    // Get SESSION data
    function get_session($field) {
        if (isset($_SESSION[$field])) {
            return $_SESSION[$field];
        } else {
            return null;
        }
    }

    // Get SERVER data
    function get_server($field) {
        if (isset($_SERVER[$field])) {
            return $_SERVER[$field];
        } else {
            return null;
        }
    }

    // Get the current users id
    function get_user_id() {
        return $_SESSION['USER_ID'];
    }

    // Get the current users group id
    function get_group_id() {
        return $_SESSION['GROUP_ID'];
    }

    // Get the current users group ids
    function get_groups_id() {
        return explode(",", $_SESSION['GROUPS_ID']);
    }

    // Get the current users group name
    function get_group_name() {
        return implode(",", $_SESSION['GROUP_NAME']);
    }

    // Get the current users group name
    function get_groups_name() {
        return $_SESSION['GROUP_NAME'];
    }

    // Get the current users username
    function get_username() {
        return $_SESSION['USERNAME'];
    }

    // Get the current users display name
    function get_display_name() {
        return ($_SESSION['DISPLAY_NAME']);
    }

    // Get the current users email address
    function get_email() {
        return $_SESSION['EMAIL'];
    }

    // Get the current users home folder
    function get_home_folder() {
        return $_SESSION['HOME_FOLDER'];
    }

    // Get the current users timezone
    function get_timezone() {
        if (!isset($_SESSION['USE_DEFAULT_TIMEZONE'])) {
            return $_SESSION['TIMEZONE'];
        } else {
            return '-72000';
        }
    }

    // Validate supplied email address
    function validate_email($email) {
        if (preg_match('/^([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}$/', $email)) {
            return true;
        } else {
            return false;
        }
    }

    // Print a success message which then automatically redirects the user to another page
    function print_success($message, $redirect = 'index.php') {
        global $TEXT, $database;

        // fetch redirect timer for sucess messages from settings table
        $table = TABLE_PREFIX . 'settings';
        $results = @$database->get_one("SELECT `value` FROM `$table` WHERE `name` = 'redirect_timer'");
        $redirect_timer = ($results) ? $results : '1500';

        // add template variables
        $success_template = new Template(THEME_PATH . '/templates');
        $success_template->set_file('page', 'success.htt');
        $success_template->set_block('page', 'main_block', 'main');
        $success_template->set_var('MESSAGE', $message);
        $success_template->set_var('REDIRECT', $redirect);
        $success_template->set_var('REDIRECT_TIMER', $redirect_timer);
        $success_template->set_var('NEXT', $TEXT['NEXT']);
        $success_template->parse('main', 'main_block', false);
        $success_template->pparse('output', 'page');
    }

    // Print an error message
    function print_error($message, $link = 'index.php', $auto_footer = true) {
        global $TEXT;
        $success_template = new Template(THEME_PATH . '/templates');
        $success_template->set_file('page', 'error.htt');
        $success_template->set_block('page', 'main_block', 'main');
        $success_template->set_var('MESSAGE', $message);
        $success_template->set_var('LINK', $link);
        $success_template->set_var('BACK', $TEXT['BACK']);
        $success_template->parse('main', 'main_block', false);
        $success_template->pparse('output', 'page');
        if ($auto_footer == true) {
            if (method_exists($this, "print_footer")) {
                $this->print_footer();
            }
        }
        exit();
    }

    // Validate send email
    function mail($fromaddress, $toaddress, $subject, $message, $fromname = '') {
        /*
          INTEGRATED OPEN SOURCE PHPMAILER CLASS FOR SMTP SUPPORT AND MORE
          SOME SERVICE PROVIDERS DO NOT SUPPORT SENDING MAIL VIA PHP AS IT DOES NOT PROVIDE SMTP AUTHENTICATION
          NEW WBMAILER CLASS IS ABLE TO SEND OUT MESSAGES USING SMTP WHICH RESOLVE THESE ISSUE (C. Sommer)

          NOTE:
          To use SMTP for sending out mails, you have to specify the SMTP host of your domain
          via the Settings panel in the backend of Website Baker
         */

        $fromaddress = preg_replace('/[\r\n]/', '', $fromaddress);
        $toaddress = preg_replace('/[\r\n]/', '', $toaddress);
        $subject = preg_replace('/[\r\n]/', '', $subject);
        $message_alt = $message;
        $message = preg_replace('/[\r\n]/', '<br \>', $message);

        // create PHPMailer object and define default settings
        $myMail = new wbmailer();

        // set user defined from address
        if ($fromaddress != '') {
            if ($fromname != '')
                $myMail->FromName = $fromname;         // FROM-NAME
            $myMail->From = $fromaddress;                            // FROM:
            $myMail->AddReplyTo($fromaddress);                       // REPLY TO:
        }

        // define recepient and information to send out
        $myMail->AddAddress($toaddress);                            // TO:
        $myMail->Subject = $subject;                                // SUBJECT
        $myMail->Body = $message;                                   // CONTENT (HTML)
        $myMail->AltBody = strip_tags($message_alt);    // CONTENT (TEXT)
        // check if there are any send mail errors, otherwise say successful
        if (!$myMail->Send()) {
            return false;
        } else {
            return true;
        }
    }

}

?>