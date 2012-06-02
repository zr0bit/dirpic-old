<!DOCTYPE html>
<html lang="es">
<head>

<?= css('main2,'.$css,'.min')?>
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="http://localhost/food/css/ie.css" />
<![endif]-->

<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="content-language" content="es" />
<meta name="robots" content="index,follow" />

<meta property="og:title" content="<?=$title?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?=$og_url?>" />
<meta property="og:image" content="<?=$og_img?>" />
<meta property="og:site_name" content="dirpic.com" />
<meta property="og:description" content='<?=$meta_des?>' />
<meta property="fb:app_id" content="151385418262557" />


<link rel="shortcut icon" href="<?=site_url('favicon.ico')?>"/>

<title><?=$title?></title>
<meta name="description" content="<?=$meta_des?>"/>
<meta name="keywords" content="<?=$meta_keys?>"/>
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