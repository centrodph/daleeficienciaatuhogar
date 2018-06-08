<ul class="menuPrincipal">
  <?php if(!isset($active)){$active="";}?>
  <li <?php if ($active == 1) {
  echo 'class="active"';
} ?>><a href="index.php" title="PÁGINA INICIAL">PÁGINA INICIAL</a></li>
  <li <?php if ($active == 2) {
  echo 'class="active"';
} ?>><a href="experiencias.php" title="EXPERIENCIAS">EXPERIÊNCIAS</a></li>
  <li <?php if ($active == 3) {
  echo 'class="active"';
} ?>><a href="preguntas_frecuentes.php" title="PERGUNTAS FREQUENTES ">PERGUNTAS FREQUENTES</a></li>
  <li <?php if ($active == 4) {
  echo 'class="active"';
} ?>><a href="novedades.php" title="NOVIDADES E EVENTOS">NOVIDADES E EVENTOS</a></li>
  <li <?php if ($active == 5) {
  echo 'class="active"';
} ?>><a href="comprar.php" title="COMPRAR">COMPRAR</a></li>
  <li <?php if ($active == 6) {
  echo 'class="active"';
} ?>><a href="contacto.php" title="CONTATO">CONTATO</a></li>                
</ul>
<div class="clear"></div>
<div id="clearMenu"></div>