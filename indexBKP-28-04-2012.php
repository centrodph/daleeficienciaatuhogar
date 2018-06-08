<?php
	//active link menu
	$active=1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Dale Vida a Tu Hogar</title>
<link href="css/dvath.css" rel="stylesheet" type="text/css" /><link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.5.2.min.js"></script>
<script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
<script src="http://cufon.shoqolate.com/js/cufon-yui.js" type="text/javascript"></script>
<script src="js/myriad-pro.cufonfonts.js" type="text/javascript"></script>
<script type="text/javascript" src="js/dvath.js"></script>
<script src="js/jquery.nivo.slider.pack.js" type="text/javascript"></script>
<!--[if lt IE 7]>
   <script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]--> 
<script type="text/javascript">
$j(document).ready(function() {
    $j('#slider').nivoSlider({
        effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
        slices:15, // For slice animations
        boxCols: 8, // For box animations
        boxRows: 4, // For box animations
        animSpeed:900, // Slide transition speed
        pauseTime:5000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:false, // Next & Prev navigation
        directionNavHide:false, // Only show on hover
        controlNav:false, // 1,2,3... navigation
        controlNavThumbs:false, // Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, // Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', // Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', // ...this in thumb Image src
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:false, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>
<link rel="stylesheet" type="text/css" href="sh/shadowbox.css">
<script type="text/javascript" src="sh/shadowbox.js"></script>
<script type="text/javascript">
Shadowbox.init();
</script>
</head>

<body id="brgBody">
<div id="brgWrapper">
	<div id="wrapper">
<?php include("inc.head.php"); ?>
        <div id="content">
<?php include("inc.menu.php"); ?>
            <div id="homeC">
            <div id="slider">
            <img src="images/brgHome1.jpg" width="950" height="497" />
            <img src="images/brgHome2.jpg" width="950" height="497" />
            <?php //Imagenes eliminadas del diseño original
			/*<img src="images/brgHome3.jpg" width="950" height="497" />
            <img src="images/brgHome4.jpg" width="950" height="497" />
            <img src="images/brgHome5.jpg" width="950" height="497" />
            <img src="images/brgHome6.jpg" width="950" height="497" />*/
			?>
            </div>
            	<div class="homeD">
           	    <h1>No dejes que el invierno entre a tu casa.</h1>
                    <h4>Consumo eficiente de leña<br />Alta transmisión de calor<br />Sin riesgos de chispas, humo ni olor</h4>
                    <p>Aproveche al máximo la eficiencia de<br />un equipo a leña moderno y disfrute de<br />la calidez y visión de las llamas.</p>
                   <?php 
				   //Link eliminado por falta de contenido
				   // <a href="#" class="orange linkbig">más</a> ?>
				   <a href="640_480_dvh.flv" class="blue linkbig"  rel="shadowbox;height=500;width=740">video</a>
                </div>
            </div>
            <div class="homeBottom">
              <div class="colLeft brgGray">
                	<h4>La leña ya no será<br />un problema</h4>
                    <a href="lena.php" class="orange linklittle">más</a>
                </div>
                <div class="colCenter brgGray">
                	<h4>Fácil instalación</h4>
                    <p>Tan fácil de instalar como usted desee.</p>
                    <a href="instalacion.php" class="orange linklittle">más</a>
                </div>
                <div class="colRigth brgGray">
                	<h4>Dónde encontrarlos</h4>
                    <p>Encontrá el local de ventas más cercano y elegí el equipo <br />
a leña que mejor se adapte a tu estilo.</p>
                    <a href="comprar.php" class="orange linklittle">más</a>
                </div>
            <div class="clear"></div>    
            </div>              
            <div id="fab">
            	<a href="http://www.fiammazuccato.com.ar/" class="fiamma" target="_blank" ></a>
                <a href="http://www.hogaresramses.com.ar/" class="ramses" target="_blank"  ></a>
                <a href="http://www.lepencalefactores.com.ar/" class="lepen" target="_blank"  ></a>
                <a href="http://www.hogaresmagma.com/" class="magna" target="_blank"  ></a>
                <a href="http://www.productosnuke.com.ar/" class="nuke" target="_blank"  ></a>
                <a href="http://www.tromensalamandras.com.ar/" class="tromen" target="_blank"  ></a>
                <a href="http://www.ulstrup.com.ar/" class="ulstrup" target="_blank"  ></a>
            </div>
<?php include("inc.footer.php"); ?>    
        </div>
    </div>

</div>
</body>
</html>