<?php  $active=6;
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
<link href="css/lib.min.css"  rel="stylesheet" type="text/css" />
<link href="css/aque.css?q=<?php echo $cache;
?>" rel="stylesheet" type="text/css" />
<script src="js/lib.min.js" type="text/javascript" ></script>
<script src="js/dvath.js" type="text/javascript"></script>
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
        <img src="images/imgCentralComprar.jpg" width="1000" height="284" class="imgCentral" />
		  <h1>Contato</h1>
		  <p>Se tiver alguma dúvida, por favor, não deixe de entrar em contato. Em todas as cidades as pessoas lhe atenderão prontamente. </p>
         <h4><a href="mailto:info@aquecendoseular.com.br">info@aquecendoseular.com.br</a></h4>
          <div class="formContacto">
          	<div class="formLeft">
            	<input type="text" class="inputC" name="nombre" id="nombre"/>
                Nome
            </div>
           	<div class="formRight">
            	<input type="text" class="inputC" name="apellido" id="apellido"/>
                Apelido
            </div>
           	<div class="formFull">
            	<input type="text" class="inputC" name="email" id="email"/>
                Email
            </div>
           	<div class="formFull">
            	<textarea  class="inputM" name="mensaje" id="mensaje"></textarea>
                Mensagem
            </div>
           	<div class="formFull">
            <div id="result"></div>
            	<input type="submit" class="inputS" value="enviar" onclick="return validar();" />
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
