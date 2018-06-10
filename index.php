<?php $active=1;
$cache=date('l jS \of F Y h:i:s A');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Aquecendo seu lar</title>
<meta name="description" content="lareira,lareira fechada,lareira com porta de vidro,lareira de alto desempenho,gas,pellet,lenha,eficiência,dupla combustão,Schott Robax,vitrocerâmico,resitente a altas temperaturas,choque térmico,controle de fumaça,sustentável, vidro especial, lareira sem fumaça ,lareira de vidro ,vidros curvos ,lareira ecológica,aquecimento,recuperador de calor,Estufas,Salamandras,fogão a lenha ,calefatores,chaminés "/>
<link rel="stylesheet" type="text/css" href="css/lib.min.css">
<link href="css/aque.css?q=<?php echo $cache;
?>" rel="stylesheet" type="text/css" />
<script src="js/lib.min.js" type="text/javascript" ></script>
<script type="text/javascript" src="js/dvath.js"></script>
<script type="text/javascript">
$j(document).ready(function() {
    var size=$( window ).width();
    if(size <1000) return;
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
Shadowbox.init();
</script>
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
                        <a href="https://www.youtube.com/embed/9QBYdMfgHiw?rel=0&autoplay=1"
                            class="blue linkbig" title="Video 1 de 4"
                            rel="shadowbox[Videos];height=315;width=560">video</a>
                        <p>Aproveche al máximo la eficiencia de un equipo a leña y disfrute de la calidez de su hogar.</p>
                    </div>
                    <a href="https://www.youtube.com/embed/HdpAAJ2xqVc?rel=0&autoplay=1"
                        class="blue linkbig" 
                        title="Video 2 de 4" 
                        rel="shadowbox[Videos];height=315;width=560"
                        style="display:none;">HdpAAJ2xqVc</a>
                    <a href="https://www.youtube.com/embed/zF7swCALSqo?rel=0&autoplay=1"
                        class="blue linkbig" 
                        title="Video 3 de 4"  
                        rel="shadowbox[Videos];height=315;width=560"
                        style="display:none;">zF7swCALSqo</a>
                    <a href="https://www.youtube.com/embed/uYeDkoGk4a4?rel=0&autoplay=1"
                        class="blue linkbig" 
                        title="Video 4 de 4"  
                        rel="shadowbox[Videos];height=315;width=560"
                        style="display:none;">uYeDkoGk4a4</a>
                    <a href="https://www.youtube.com/embed/OCKEzsXER-k?rel=0&autoplay=1"
                        class="blue linkbig" 
                        title="Video 4 de 4"  
                        rel="shadowbox[Videos];height=315;width=560"
                        style="display:none;">OCKEzsXER-k</a>
                        <img src="images/brgHome.jpg" class="only-mobile" />
                </div>
            </div>
            <div class="homeBottom">
              <div class="colLeft brgGray">
                	<h4>La leña ya no será<br />un problema</h4>
                    <a href="lena.php" class="orange linklittle">+</a>
                </div>
                <div class="colCenter brgGray">
                	<h4>Fácil instalación</h4>
                    <p>Tan fácil de instalar como usted desee.</p>
                    <a href="instalacion.php" class="orange linklittle">+</a>
                </div>
                <div class="colRigth brgGray">
                	<h4>Dónde encontrarlos</h4>
                    <p>Encontrá el local de ventas más cercano y elegí el equipo 
                    a leña que mejor se adapte a tu estilo.</p>
                    <a href="comprar.php" class="orange linklittle">+</a>
                </div>
                <div class="clear"></div>    
            </div>   
            <div id="fab" style="display:none">
            	<a href="http://www.fiammazuccato.com.ar/" class="fiamma" target="_blank" ></a>
                <a href="http://www.hogaresramses.com.ar/" class="ramses" target="_blank"  ></a>
                <a href="http://www.lepencalefactores.com.ar/" class="lepen" target="_blank"  ></a>
                <a href="http://www.productosnuke.com.ar/" class="nuke" target="_blank"  ></a>
                <a href="http://www.tromensalamandras.com.ar/" class="tromen" target="_blank"  ></a>
                <a href="http://www.ulstrup.com.ar/" class="ulstrup" target="_blank"  ></a>
                <a href="http://www.salamandrasverellen.com.ar/" class="verellen" target="_blank"  ></a>
            </div>
<?php
            include("inc.footer.php");
?>
        </div>
    </div>
</div>
</body>
</html>
