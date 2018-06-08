<?php  $active=4;  $cache=date('l jS \of F Y h:i:s A'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Aquecendo seu lar</title>
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />

<link href="css/lib.min.css"  rel="stylesheet" type="text/css" />
<link href="css/aque.css?q=<?php echo $cache; ?>" rel="stylesheet" type="text/css" />
<script src="js/lib.min.js" type="text/javascript" ></script>
<script src="js/dvath.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.jQTwitter.js"></script>
<script type="text/javascript">
$j(document).ready(function(){
	$j('#tweets').jQTwitter({
	username: 'DaleVidatuhogar',
	count: 6,
	show_image: true
	});
});
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
        <div class="clear"></div>
        <div id="novedades">
			<div id="novedades_l">
           	  <div class="boxNews">
               	<div class="date">
               	  <div class="mes">Maio</div>
               	  <div class="dia">26</div></div>
                      <img src="images/AvisoCrop.po.png"  class="thu" style="height:auto !important" />
                <div class="ndescr">
                  <h4>Campanha Aquecendo seu Lar </h4>
                  <p>Abrange uma alta presença na grande mídia impressa no país, um site novo e renovado e intensa atividade nas redes sociais - Facebook  e Twitter.</p>
                </div>
              </div>
              <?php
			  //Diseño Original de Novedades

/*
<div class="boxNews">
               	<div class="date"><div class="mes">Jun</div><div class="dia">03</div></div>
               	<img src="images/imgNovedadesDemo.jpg" width="269" height="233" />
                <div class="ndescr">
                 <b>22-06-2011</b>
                 <h4>Feria HPB</h4>
                 <p>Feria Hearth, Patio and Barbeque Expo (HPB) en Reno, NV, EEUU.</p>
                </div>
                <a href="#" class="orange linklittle">más</a>
              </div>
              */
			  ?>
            <div class="clear"></div>
            </div>
            <div id="novedades_r">
            	<div id="boxLateralNews">
                	<h3>Nós convidamos você a <br/>seguir as nossas notícias instantaneamente em sua <br/>rede social
</h3>
<div id="fb-root"></div>
<script src="//connect.facebook.net/en_US/all.js#xfbml=1"></script>
<fb:like-box href="//www.facebook.com/pages/Dale-vida-a-tu-hogar/140625592677754" width="320" show_faces="true" stream="true" header="true"></fb:like-box>
<h3 style="padding-top:20px; display:none">Novidades no Twitter</h3>
<ul id="tweets">
</ul>
                </div>
            <div class="clear"></div>
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
