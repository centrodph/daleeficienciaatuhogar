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
                        <img src="./de/images/Imagen-para-Home-web2.jpg" />
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
                            <img src="./de/images/homeMobileA.jpg" class="only-mobile" />
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
                <a href="comprar.php">
                <img src="./de/images/fabricantes2.jpg" usemap="#Map" border="0" style='max-width: 100%;'/>
                </a>
<?php                
                // <map name="Map" id="Map">
                // <area shape="rect" coords="3,46,172,114" href="#bosca" />
                // <area shape="rect" coords="277,40,450,117" href="#filfer" />
                // <area shape="rect" coords="568,41,746,116" href="#forza" />
                // <area shape="rect" coords="844,36,1028,109" href="#lepen" />
                // <area shape="rect" coords="0,137,167,190" href="#ofen" />
                // <area shape="rect" coords="277,138,452,197" href="#qutral" />
                // <area shape="rect" coords="550,132,738,196" href="#tromen" />
                // <area shape="rect" coords="818,128,1012,192" href="#ulstrup" />
                // <area shape="rect" coords="1069,123,1305,198" href="#verellen" />
                // <area shape="rect" coords="1112,35,1312,118" href="#magna" />
                // </map>
?>                
                </div>
                <?php
            include("inc.footer.php");
?>
            </div>
        </div>
    </div>
</body>
</html>