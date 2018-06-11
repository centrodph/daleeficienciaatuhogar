<?php  $active=2;  $cache=date('l jS \of F Y h:i:s A'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include("./de/meta.php");
?>
</head>

<body id="brgBody">
    <div id="brgWrapper">
        <div id="wrapper">
            <?php include("inc.head.php"); ?>
            <div id="content">
                <?php include("inc.menu.php"); ?>

                <?php include("inc.submenuExperiencias.php"); ?>
                <div class="clear"></div>
                <div id="estufas">
                    <img src="images/img_calefactores.jpg" width="949" height="237" class="imgPrincipal" />
                    <div class="clear"></div>

                    <div class="colLeft">
                        <h1 class="tGrisBlueN" style="background: #ff6600;">Lareiras</h1>
                        <p>Lareiras a Pellet</p>
                        <img src="images/pellet_left_01.jpg" class="imgleft01" />
                        <img src="images/pellet_left_02.jpg" class="imgleft02" />
                    </div>
                    <div class="colCenter">
                        <img src="images/pellet_center.jpg" />
                    </div>
                    <div class="colRigth">
                        <?php include("inc.submenuExperiencias2.php"); ?>
                        <div class="clear"></div>
                        <p class="jus">Lareiras a pellet oferecem uma forma particularmente simples de usar madeira para aquecimento. Suas
                            vantagens incluem a qualidade padrão de combustível, o que é garantido para queima de forma limpa
                            deixando pouco resíduo, e facilidade de uso. Muitas lareiras a pellet são parcialmente ou totalmente
                            automáticas. O que significa que não requerem nada manualmente. Por ter uma porta com vitrocerâmico,
                            as lareiras a pallet são totalmente cativante. </p>
                    </div>


                    <div class="clear"></div>
                </div>
                <?php include("inc.footer.php"); ?>
            </div>
        </div>
    </div>
</body>

</html>