<?php
//instancia de variableas comunes
$site=base_url();
?>
<!DOCTYPE html>
<html lang="es" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <link rel="stylesheet" type="text/css" href="http://static.dirpic.com/css/compact.css"/>
    <link rel="shortcut icon" href="http://static.dirpic.com/favicon.ico"/>
    <title><?=$title?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="content-language" content="es"/>
    <meta name="robots" content="noindex,nofollow"/>

    <?=(isset($meta_des))?"<meta name='description' content='{$meta_des}'/>":NULL?>
    <?=(isset($meta_keys))?"<meta name='keywords' content='{$meta_keys}'/>":NULL?>

    <meta property="og:title" content="<?=$title?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=current_url()?>"/>
    <meta property="og:image" content="<?=(isset($og_img))?$og_img:'http://wallpaper.dirpic.com/1/dirpic-200x125-1.jpg'?>"/>
    <meta property="og:site_name" content="dirpic.com"/>
    <meta property="og:description" content='<?=$meta_des.' en http://dirpic.com'?>'/>
    <meta property="fb:app_id" content="151385418262557"/>

</head>
<body>
<? include(APPPATH.'views/elementos/header.php')?>
<div id="container">
    <div id="content">
<? include($tpl.'.php')?>
    </div>
</div>
<div id="footer">
    <div class="section">
    	<ul>
    		<li><a href="<?=$site?>">Inicio</a>|</li>
    		<li><a rel="nofollow" href="#">Acerca</a><a></a>|</li>
    		<li><a rel="nofollow" href="#">Contacto</a><a></a>|</li>
    		<li><a rel="nofollow" href="#">Condiciones</a><a></a>|</li>
    		<li><a rel="nofollow" href="#">Privacidad</a><a></a></li>
    	</ul>
        <p class="social">
            Síguenos en: <a href="http://www.facebook.com/pages/Dirpic/151385418262557">Facebook</a>  <a href="http://twitter.com/#!/dirpic">Twitter</a>
        </p>
        <p>
            Copyright © 2011 Dirpic.com
        </p>
    </div>
</div>
<!--jquery-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<?//=(isset($js))?js($js,'.min'):'';?>
<script type="text/javascript" charset="UTF-8" src="http://static.dirpic.com/js/view.min.js"></script>

<!--analytics -->
<script type="text/javascript">var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-3489599-6']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();</script>


<!-- Facebook button-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=212572808762816";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!--plus button-->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'es'}
</script>
<!--twitter button-->
<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
</body>
</html>
