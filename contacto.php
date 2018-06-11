<?php  $active=6;
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
            <?php 
include("inc.head.php");
?>
            <div id="content">
                <?php 
include("inc.menu.php");
?>
                <div id="comprar">
                    <img src="images/imgCentralComprar.jpg" width="1000" height="284" class="imgCentral" />
                    <h1>Contacto</h1>
                    <p>Si tiene alguna duda, o consulta, por favor no dude en contactarnos. En todas las ciudades hay personas
                        que lo asesorarán con mucho gusto. </p>
                    <h4>
                        <a href="mailto:info@daleeficienciaatuhogar.com.ar">info@daleeficienciaatuhogar.com.ar</a>
                    </h4>
                    <div class="formContacto">
                        <div class="formLeft">
                            <input type="text" class="inputC" name="nombre" id="nombre" /> Nombre
                        </div>
                        <div class="formRight">
                            <input type="text" class="inputC" name="apellido" id="apellido" /> Apellido
                        </div>
                        <div class="formFull">
                            <input type="text" class="inputC" name="email" id="email" /> Email
                        </div>
                        <div class="formFull">
                            <textarea class="inputM" name="mensaje" id="mensaje"></textarea> Mensaje
                        </div>
                        <div class="formFull">
                            <div id="result"></div>
                            <input type="submit" class="inputS" value="enviar" onclick="return validar();" />
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php 
include("inc.footer.php");
?>
            </div>
        </div>
    </div>
</body>
</html>