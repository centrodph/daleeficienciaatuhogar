<ul class="menuPrincipal">
  <li><a href="http://www.schott.com/hometech/spanish/products/robax/index.html?so=argentina&lang=spanish" title="ROBAX" target="_blank">
    <img src="./de/images/robax.png" class="robax-menu" />
  </a></li>  
  <?php if(!isset($active)){
	$active="";
}
?>
  <li <?php if ($active == 2) {
	echo 'class="active"';
}
?>><a href="experiencias.php" title="EXPERIENCIAS">EFICIENCIA ENERGETICA</a></li>
  <li <?php if ($active == 3) {
	echo 'class="active"';
}
?>><a href="paneles.php" title="PERGUNTAS FREQUENTES ">ROBAX A MEDIDA</a></li>
  <li <?php if ($active == 5) {
	echo 'class="active"';
}
?>><a href="comprar.php" title="COMPRAR">COMPRAR</a></li>
  <li <?php if ($active == 6) {
	echo 'class="active"';
}
?>><a href="contacto.php" title="CONTACTO">CONTACTO</a></li>                
<li>
<div class="mm">
            <form action="" method="" class="fsearch">
            <select class="isearch" onchange="javascript: window.location=(this.value);">
            	<option>Buscar</option>
                <option value="experiencias_calefactores.php">Lareiras</option>
                <option value="instalacion.php">Instalação</option>
                <option value="limpieza.php">Limpeza</option>
                <option value="paneles.php">Painéis vitrocerâmicos</option>
                <option value="lena.php">Lenha</option>
                <option value="clima_perfecto.php">Clima perfeito</option>
                <option value="experiencias_hogares_chimeneas.php">Hogares y chimeneas</option>
                <option value="experiencias_estufas_lena.php">Estufas a leña</option>
                <option value="experiencias_estufas_pellet.php">Estufas a pellet</option>
                <option value="experiencias_calefactores.php">Cocinas a leña</option> 
            </select>
            <input type="submit" class="ssearch" value=" " />
            </form>
            </div>
</li>
</ul>
<div class="clear"></div>
<div id="clearMenu"></div>