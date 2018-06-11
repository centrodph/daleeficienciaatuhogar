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
                <div id="estufas">
                    <img src="images/img_calefactores.jpg" width="949" height="237" class="imgPrincipal" />
                    <div class="clear"></div>
                    <div class="colLeft">
                        <h1 class="tGrisBlueN">Lareiras</h1>
                        <p>Lareiras a lenha</p>
                        <img src="images/estufas_left_01.jpg" class="imgleft01" />
                        <img src="images/estufas_left_02.jpg" class="imgleft02" />
                    </div>
                    <div class="colCenter">
                        <img src="images/estufas_center.jpg" />
                    </div>
                    <div class="colRigth">
                        <?php include("inc.submenuExperiencias2.php");
?>
                        <div class="clear"></div>
                        <p class="jus">Hoje existe uma nova geração de lareiras, onde você pode aquecer sua casa sem fumaça, sem cheiro
                            e sem faíscas devido às portas que utilizam vitrocerâmico. Essas lareiras têm se tornado muito
                            populares em nosso país, por diferentes razões: </p>
                        <p class="pNarBullet jus">Há uma gama de opções disponíveis para as lareiras de alta qualidade e que são fáceis de instalar
                            e usar. </p>
                        <p class="pBlueBullet jus">Lareiras a lenha aquecem rapidamente (ideal para quem trabalha e quer aquecer a sua casa apenas à
                            noite), mas também pode ser usada para o aquecimento constante. </p>
                        <p class="pNarBullet jus">Alguns modelos tem aquecedores de água como uma segunda alternativa a outros de sistemas de aquecimento.
                            Existem também modelos que incluem fornos.</p>
                        <p class="pBlueBullet jus">Você pode levar à lareira quando mudar de casa.</p>
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