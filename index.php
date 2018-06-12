<?php $active=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include("./de/meta.php");
?>
    <script type="text/javascript">
        $j(document).ready(function () {        
        Shadowbox.init();
    </script>
    <link rel="stylesheet" type="text/css" href="sh/shadowbox.css">
</head>
<body id="brgBody">
    <div id="brgWrapper">
        <div id="wrapper">
            <?php include("inc.head.php");
?>
            <div id="content">
                <?php include("inc.menu.php");
?>
                <div id="homeC">
                    <div id="slider" class="hidden-mobile">
                        <img src="./de/images/Imagen-para-Home-web.jpg" />
                    </div>
                    <div class="homeD">
                        <div class="homebanner-top-right">
                            <img src="./de/images/homeTR.png" />
                        </div>
                        <div class="homebanner-bottom-left">
                            <a href="https://www.youtube.com/embed/9QBYdMfgHiw?rel=0&autoplay=1" class="blue linkbig hidden-mobile" title="Video 1 de 5"
                                rel="shadowbox[Videos];height=315;width=560">video</a>
                            <p>Aproveche al máximo la eficiencia de un equipo a leña y disfrute de la calidez de su hogar.</p>
                        </div>
                        <a href="https://www.youtube.com/embed/HdpAAJ2xqVc?rel=0&autoplay=1" class="blue linkbig" title="Video 2 de 5" rel="shadowbox[Videos];height=315;width=560"
                            style="display:none;">HdpAAJ2xqVc</a>
                        <a href="https://www.youtube.com/embed/zF7swCALSqo?rel=0&autoplay=1" class="blue linkbig" title="Video 3 de 5" rel="shadowbox[Videos];height=315;width=560"
                            style="display:none;">zF7swCALSqo</a>
                        <a href="https://www.youtube.com/embed/uYeDkoGk4a4?rel=0&autoplay=1" class="blue linkbig" title="Video 4 de 5" rel="shadowbox[Videos];height=315;width=560"
                            style="display:none;">uYeDkoGk4a4</a>
                        <a href="https://www.youtube.com/embed/OCKEzsXER-k?rel=0&autoplay=1" class="blue linkbig" title="Video 5 de 5" rel="shadowbox[Videos];height=315;width=560"
                            style="display:none;">OCKEzsXER-k</a>
                        <div class="slidermobile">
                            <div id="sliderImages">
                            <img src="./de/images/homeMobile.jpg" class="only-mobile" />
                            <img src="./de/images/homeMobile1.jpg" class="only-mobile" />
                            <img src="./de/images/homeMobile2.jpg" class="only-mobile" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homeBottom">
                    <div class="colLeft brgGray">
                        <h4>La leña ya no será
                            <br />un problema</h4>
                        <a href="lena.php" class="orange linklittle">+</a>
                    </div>
                    <div class="colCenter brgGray">
                        <h4>Fácil instalación</h4>
                        <p>Tan fácil de instalar como usted desee.</p>
                        <a href="instalacion.php" class="orange linklittle">+</a>
                    </div>
                    <div class="colRigth brgGray">
                        <h4>Dónde encontrarlos</h4>
                        <p>Encontrá el local de ventas más cercano y elegí el equipo a leña que mejor se adapte a tu estilo.</p>
                        <a href="comprar.php" class="orange linklittle">+</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="fab">
                    <img src="./de/images/fabricantes.jpg" usemap="#Map" border="0" />
                    <map name="Map" id="Map">
                        <area shape="rect" coords="677,74,955,157" href="http://www.productosnuke.com.ar/" target="_blank" />
                        <area shape="rect" coords="334,74,612,157" href="http://www.lepencalefactores.com.ar/" target="_blank" />
                        <area shape="rect" coords="2,74,280,157" href="http://bosca.net.ar/" target="_blank" />
                </div>
                <?php
            include("inc.footer.php");
?>
            </div>
        </div>
    </div>
</body>
</html>