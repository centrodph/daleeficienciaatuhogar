<?php  $active=2;
$cache=date('l jS \of F Y h:i:s A');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php include("./de/meta.php");
?>
</head>

<body id="brgBody">
    <div id="brgWrapper">
        <div id="wrapper">
            <?php include("inc.head.php");
?>
            <div id="content">
                <?php include("inc.menu.php");
?>
                <?php include("inc.submenuExperiencias.php");
?>
                <div class="clear"></div>
                <div id="calefactores">
                    <img src="images/img_calefactores.jpg" width="949" height="237" class="imgPrincipal" />
                    <div class="clear"></div>
                    <div class="colLeft">
                        <h1 class="tGrisN">Fogões e fornos a lenha.</h1>
                        <?php
					//Eliminada por el cliente
					//<img src="images/cocinas_hornos_lena.png" width="196" height="223" /> ?>
                        <img src="images/cocinas_hornos_lena2.png" width="196" height="223" />
                    </div>
                    <div class="colCenter">
                        <img src="images/cocinas_hornos_lena_01.jpg" />
                    </div>
                    <div class="colRigth">
                        <?php include("inc.submenuExperiencias2.php");
?>
                        <div class="clear"></div>
                        <p class="jus">Fogões e fornos a lenha atualmente é um ressurgimento. Além de fornecer calor, eles também são excelentes
                            para cozinhar, esquentar e assar. Fogões a lenha dão aos pães, pizzas e outros alimentos, um
                            aroma inconfudível. A grande maioria de fogões e fornos tem uma porta com vitrocerâmica na câmara
                            de combustão e podem ser muito bem utilizadas na cozinha. </p>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php include("inc.footer.php");
?>
            </div>
        </div>
    </div>
</body>

</html>