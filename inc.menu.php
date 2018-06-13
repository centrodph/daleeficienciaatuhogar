<ul class="menuPrincipal">
<li ><a href="robax.php" title="ROBAX"  >
    <img src="./de/images/robax.png" class="robax-menu" />
  </a></li>  
  <?php if(!isset($active)){
	$active="";
}
?>
  <li <?php if ($active == 2) {
	echo 'class="active"';
}
?>><a href="clima_perfecto.php" title="EXPERIENCIAS">EFICIENCIA ENERGETICA</a></li>
<li <?php if ($active == 5) {
	echo 'class="active"';
}
?>><a href="comprar.php" title="COMPRAR">COMPRAR</a></li>
  <li <?php if ($active == 6) {
	echo 'class="active"';
}
?>><a href="contacto.php" title="CONTACTO">CONTACTO</a></li>                
<li class="search-menu-item">
<div class="mm">
            <form action="" method="" class="fsearch">
            <select class="isearch" onchange="javascript: window.location=(this.value);">
            <option>Buscar</option>
                <option value="experiencias_calefactores.php">Calefactores y hogares a leña</option>
                <option value="instalacion.php">Instalación</option>
                <option value="limpieza.php">Limpieza</option>
                <option value="paneles.php">Paneles de Vitrocerámico</option>
                <option value="lena.php">Leña</option>
                <option value="clima_perfecto.php">Clima Perfecto</option>
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