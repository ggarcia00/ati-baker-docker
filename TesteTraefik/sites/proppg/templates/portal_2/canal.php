<div id="canal">
    <?php
    //if ($liberarPortalTransparencia == 1) {
    require_once("/net/estrutura/functions/agenciaUelNoticias/agenciaUelNoticias.php");
    $agn = new agenciaUelNoticias();

//    if($_SERVER['REMOTE_ADDR']=='189.90.70.56'){
        $agn->viewDestaques();
//    }
    $agn->viewCanais();
    ?>
</div>