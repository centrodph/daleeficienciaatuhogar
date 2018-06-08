<?php $active=1; $cache=date('l jS \of F Y h:i:s A'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
<title>Aquecendo seu lar</title>
<meta name="description" content="lareira,lareira fechada,lareira com porta de vidro,lareira de alto desempenho,gas,pellet,lenha,eficiência,dupla combustão,Schott Robax,vitrocerâmico,resitente a altas temperaturas,choque térmico,controle de fumaça,sustentável, vidro especial, lareira sem fumaça ,lareira de vidro ,vidros curvos ,lareira ecológica,aquecimento,recuperador de calor,Estufas,Salamandras,fogão a lenha ,calefatores,chaminés "/>
<link rel="stylesheet" type="text/css" href="css/lib.min.css">
<link href="css/aque.css?q=<?php echo $cache; ?>" rel="stylesheet" type="text/css" />
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
            <img src="images/brgHome201505.jpg" />
            </div>
            	<div class="homeD">
           	    <h1 style="font-size:26px; width:400px">Design e Tecnologia,
                  <br/>para seu novo lar.</h1>
                <h4>Consumo eficiente de combustível (lenha, pellets, gás...)<br />
                  Alta transmissão de calor <br />
                  Sem riscos de faíscas, fumaças ou cheiro. </h4>
                <p style="color:#000;">
                  Aproveite o máximo a eficiência de<br />
                  uma lareira moderna e desfrute do<br />
                  calor e da visão das chamas.</p>
				   <a href="640_480_dvh.flv"
                        class="blue linkbig" title="Video 1 de 4"
                        rel="shadowbox[Videos];height=500;width=740"
                        style="display:none;">video</a>
                <a href="VIDEO_FINAL_1_dale_vida.flv" class="blue linkbig" title="Video 2 de 4"
    rel="shadowbox[Videos];height=500;width=740" style="display:none;">video</a>
<a href="VIDEO_FINAL_2_dale_vida.flv" class="blue linkbig" title="Video 3 de 4"  rel="shadowbox[Videos];height=500;width=740"style="display:none;">video</a>
<a href="VIDEO_FINAL_3_dale_vida.flv" class="blue linkbig" title="Video 4 de 4"  rel="shadowbox[Videos];height=500;width=740"style="display:none;">video</a>
                    <img src="images/brgHome.jpg" class="only-mobile" />
                </div>
            </div>
            <div class="homeBottom">
              <div class="colLeft brgGray">
                	<h4>A lenha não será<br />um problema</h4>
                    <a href="lena.php" class="orange linklittle">Mais</a>
                </div>
                <div class="colCenter brgGray">
                	<h4>Fácil instalação</h4>
                    <p>Você poderá instalar como deseja.</p>
                    <a href="instalacion.php" class="orange linklittle">Mais</a>
                </div>
                <div class="colRigth brgGray">
                	<h4>Onde encontramos</h4>
                    <p>Encontre a equipe de vendas mais próxima e escolha o <br/>
                      que melhor se adapte ao seu estilo.</p>
                    <a href="comprar.php" class="orange linklittle">Mais</a>
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
