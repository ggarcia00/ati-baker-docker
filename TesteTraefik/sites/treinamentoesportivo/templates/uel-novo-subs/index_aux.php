<?php
if(!defined('WB_URL')) {
        header('Location: ../index.php');
        exit(0);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php page_title(); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php if(defined('DEFAULT_CHARSET')) { echo DEFAULT_CHARSET; } else { echo 'utf-8'; }?>" />
<meta name="description" content="<?php page_description(); ?>" />
<meta name="keywords" content="<?php page_keywords(); ?>" />
<link href="<?php echo TEMPLATE_DIR; ?>/css/estilo.css" rel="stylesheet" type="text/css" media="estilo" />

<script type="text/javascript" src="/javascript/valida.js"></script>
        <?
        If (isset($ISSN) && ($ISSN!="")){
          echo "<meta scheme=\"ISSN\" name=\"identifier\" content=\"".$ISSN."\">";
        }
        ?>

</head>

<body onLoad="alinhamento();IEHoverPseudo();" onResize="alinhamento()">
        <div id="alinha" style="position:absolute">

                        <div id="barra">
                <?php include("barra.php"); ?>
            </div>

                        <div id="aba">
                <?php page_menu(); ?>
            </div>

            <div id="conteudo-portal">
                <div id="background-branco">

                                <?php page_content(); ?>

                                </div>
            </div>


                        <div id="rodape">
                <?php include("rodape.php"); ?>
            </div>

                </div>

</body>
</html>
