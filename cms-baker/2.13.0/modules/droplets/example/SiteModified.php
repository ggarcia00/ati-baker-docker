//:Create information on when your site was last updated.
//:Create information on when your site was last updated. Any page update counts.
global $database, $wb;
$retVal = ' ';
if (PAGE_ID > 0) {
    $query = $database->query("SELECT max(modified_when) FROM ".TABLE_PREFIX."pages");
    $mod_details = $query->fetchRow();
    $retVal = "This site was last modified on ".date("d/m/Y", $mod_details[0])." at ".date("H:i", $mod_details[0]).".";
}
return $retVal;
