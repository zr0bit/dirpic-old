<?php
//instancia de variableas comunes
$site=base_url();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<?= css('main,'.$css,'.min')?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="es" />
<meta name="robots" content="index,follow" />
<link rel="shortcut icon" href="<?=site_url('favicon.ico')?>"/>

<title></title>
</head>
<body>

<div id="container">
<? include(APPPATH.'views/elementos/header.php')?>
    <div id="content">
<? include($tpl.'.php')?>
    </div>

</div>
<div id="footer">
<div class="section">
	<ul>
		<li><a href="<?=base_url()?>">Inicio</a>|</li>
		<li><a href="#">Acerca</a><a></a>|</li>
		<li><a href="#">Contacto</a><a></a>|</li>
		<li><a href="#">Condiciones</a><a></a>|</li>
		<li><a href="#">Privacidad</a><a></a></li>
	</ul>
<p class="social">Síguenos en: <a href="http://www.facebook.com/pages/Dirpic/151385418262557">Facebook</a>  <a href="http://twitter.com/#!/dirpic">Twitter</a></p>
<p>	Copyright © 2011 Dirpic.com </p>
</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<?=(isset($js))?js($js,'.min'):'';?>

</body>
</html>