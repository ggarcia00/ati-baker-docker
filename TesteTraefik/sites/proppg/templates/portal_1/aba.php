                <div id="logo"><a href="http://www.uel.br/portal/index.php?pagina=principal.php" class="linkimagem">
                    <img border="0" src="/skin/img/logo-uel.gif" title="Universidade Estadual de Londrina"></a>
                </div>                      
                <div id="aba-esquerda"></div>
                <div id="aba-opcao"><a href="http://www.uel.br/portal/index.php?pagina=estrutura-adm.php">ESTRUTURA ADM</a></div>
                <div id="aba-divisor"></div>
                <div id="aba-opcao"><a href="http://www.uel.br/prograd/">GRADUA&Ccedil;&Atilde;O</a></div>
                <div id="aba-divisor"></div>
                <div id="aba-opcao"><a href="http://www.uel.br/proppg/">PESQUISA|P&Oacute;S</a></div>
                <div id="aba-divisor"></div>
                <div id="aba-opcao"><a href="http://www.proex.uel.br/?novo-portal=true">EXTENS&Atilde;O</a></div>
                <div id="aba-divisor"></div>
                <div id="aba-opcao"><a href="http://www.uel.br/cops/">VESTIBULAR</a></div>
                <?php if($liberarPortalTransparencia == 1){?> 
                <?php if (MULTILINGUAL == "true") { ?>
                    <div id="aba-divisor"></div>
                    <div id="aba-opcao">                        
                        <a style='padding-left:3px;padding-right:3px;'      href='<?= WB_URL ?>/pages/pt/inicial.php'>
                            <img src='http://www.uel.br/skin/pro-reitorias/images/band-brasil.gif' border='0' width='19px'>
                        </a>
                        
                        <?php if (MULTILINGUAL_EN == "true") { ?>
                            <a  style='padding-left:3px;padding-right:3px;' href='<?= WB_URL ?>/pages/en/home.php'>    
                                <img src='http://www.uel.br/skin/pro-reitorias/images/band-inglaterra.gif'
                                title="International Visitors" alt="International Visitors" border='0' width='19px'>
                            </a>
                        <?php } ?>
                                    
                        <?php if (MULTILINGUAL_ES == "true") { ?>
                            <a  style='padding-left:3px;padding-right:3px;' href='<?= WB_URL ?>/pages/es/espanhol.php'>
                                <img src='http://www.uel.br/skin/pro-reitorias/images/band-espanha.gif' border='0' width='19px'>
                            </a>
                        <?php } ?>
                        
                    </div>
                <?php } ?>                
                
                <div id="aba-divisor"></div>
                <div id="aba-opcao"> <!--id="aba-opcao-transparencia"-->
                    <a style='padding-left:3px;padding-right:3px;'href="http://www.uel.br/portaltransparencia/">TRANSPAR&Ecirc;NCIA
                    <img style='padding-right:0px;' border="0" src="/skin/img/logo-transparencia.gif" align="top" height="19" width="19" title="Portal da Transparência" style="margin: -3px 0px 0px 3px;"/>
                    </a>
                </div>
                
                <?php }?>
                <div id="aba-direita"></div>
