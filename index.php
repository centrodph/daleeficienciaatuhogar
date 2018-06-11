<?php $active=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include("./de/meta.php");
?>
    <script type="text/javascript">
        $j(document).ready(function () {
            // var size = $j(window).width();
            // if (size  1000) return;
            // $j('#slider').nivoSlider({
            //     effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
            //     slices: 15, // For slice animations
            //     boxCols: 8, // For box animations
            //     boxRows: 4, // For box animations
            //     animSpeed: 900, // Slide transition speed
            //     pauseTime: 5000, // How long each slide will show
            //     startSlide: 0, // Set starting Slide (0 index)
            //     directionNav: false, // Next & Prev navigation
            //     directionNavHide: false, // Only show on hover
            //     controlNav: false, // 1,2,3... navigation
            //     controlNavThumbs: false, // Use thumbnails for Control Nav
            //     controlNavThumbsFromRel: false, // Use image rel for thumbs
            //     controlNavThumbsSearch: '.jpg', // Replace this with...
            //     controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
            //     keyboardNav: true, // Use left & right arrows
            //     pauseOnHover: false, // Stop animation while hovering
            //     manualAdvance: false, // Force manual transitions
            //     captionOpacity: 0.8, // Universal caption opacity
            //     prevText: 'Prev', // Prev directionNav text
            //     nextText: 'Next', // Next directionNav text
            //     beforeChange: function () { }, // Triggers before a slide transition
            //     afterChange: function () { }, // Triggers after a slide transition
            //     slideshowEnd: function () { }, // Triggers after all slides have been shown
            //     lastSlide: function () { }, // Triggers when last slide is shown
            //     afterLoad: function () { } // Triggers when slider has loaded
            // });
        });
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
                        <img src="./de/images/home.jpg" />
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
                        <img src="./de/images/homeMobile.jpg" class="only-mobile" />
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