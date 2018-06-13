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
                    <h1 class="tGrisN">Cocinas & hornos a leña.</h1>
                                        <img src="images/cocinas_hornos_lena2.png" width="196" height="223" />
            	</div>
                <div class="colCenter">
     				<img src="images/cocinas_hornos_lena_01.jpg" />
                </div>
                <div class="colRigth">
                <?php  include("inc.menu-experiencias-estufas.php");
?>
               <div class="clear"></div>
                    <p class="jus">Las cocinas y hornos a leña actualmente experimentan un resurgimiento. Aparte de proporcionar calor, también son excelentes para cocinar, hornear y asar. Los hornos de leña confieren al pan, las pizzas, etc., un aroma inconfundible. La gran mayoría de las cocinas y hornos tienen una puerta de vitrocerámico en la cámara de combustión y son demasiado atractivas para estar situadas en la cocina. </p>
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