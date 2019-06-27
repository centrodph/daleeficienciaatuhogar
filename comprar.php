<?php  $active=5;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php include("./de/meta.php");
?>
<style>
.rowComprar{
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  padding-bottom: 20px;
}
.rowComprar img{
  padding: 10px;
}
</style>
</head>
<body id="brgBody">
  <div id="brgWrapper">
    <div id="wrapper">
      <?php include("inc.head.php");
?>
      <div id="content">
        <?php include("inc.menu.php");
?>
        <div id="comprar">
          <img src="./de/images/comprarTop.jpg" class="imgCentral" />
          <h1>Comprar equipos a leña.</h1>
		  <p>Visite el local de ventas más cercano y aproveche al máximo la eficiencia en calefacción proporcionada por un hogar o estufa a<br />
leña moderno, disfrutando de la calidez y visión de las llamas.</p>   


          <div class="rowComprar">
              <a href="http://bosca.net.ar/" target="_blank">
                <img src="./de/images/images/1.jpg"/>
              </a>
              <a href="http://filfer.com/" target="_blank">
                <img src="./de/images/images/2.jpg"/>
              </a>
              <a href="https://www.forzacalefaccion.com.ar/" target="_blank">
                <img src="./de/images/images/3.jpg"/>
              </a>
          </div>
          <div class="rowComprar">
              <a href="http://www.lepencalefactores.com.ar/" target="_blank">
                <img src="./de/images/images/4.jpg"/>
              </a>
              <a href="http://www.hogaresmagma.com/" target="_blank">
                <img src="./de/images/images/5.jpg"/>
              </a>
              <a href="http://ofen.com.ar/" target="_blank">
                <img src="./de/images/images/6.jpg"/>
              </a>
          </div>
          <div class="rowComprar">
              <a href="http://www.qutral.com.ar/" target="_blank">
                <img src="./de/images/images/7.jpg"/>
              </a>
              <a href="http://tromen.com/" target="_blank">
                <img src="./de/images/images/8.jpg"/>
              </a>
              <a href="http://www.ulstrup.com.ar/" target="_blank">
                <img src="./de/images/images/9.jpg"/>
              </a>
          </div>
          <div class="rowComprar">
              <a href="http://www.salamandrasverellen.com.ar/" target="_blank">
                <img src="./de/images/images/10.jpg"/>
              </a>
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