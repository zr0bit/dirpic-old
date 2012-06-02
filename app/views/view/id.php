<?php
$img_dir='http://wallpaper.dirpic.com/';
?>


<?$tab=null?>

<div id="main">
    <h1><?=$name?></h1>
	<div id="view">

	    <img alt="fondo de pantalla <?=implode(', ',$_keywords)?>" src="<?=$img_dir."{$id}/{$img}-640x400-{$id}.jpg"?>"/>
	    <ul id="info">
	        <li id="downs"><?=$downs?> descargas</li>
	        <li id="views"><?=$views?> vistas</li>
	        <li id="like" class="<?=$on?>"><span><?=$likes?></span> favoritos</li>
	    </ul>
        <ul id="nav-sig-ant">
            <li><a class="ant" href="<?=$site.$antsig[1]['id'].'/'.$antsig[1]['img']?>">Anterior</a></li>
            <li><a class="sig" href="<?=$site.$antsig[0]['id'].'/'.$antsig[0]['img']?>">Siguiente</a></li>
        </ul>

	</div>
    <?include 'share_social.php'?>

	<div id="download" class="<?=$id?>">
        <h2>Descarga sugerida para su pantalla</h2>
        <a id="sugest" class="dowload" href="" >Descargar <span class="size"></span></a>


        <h2>Descarga en otras resoluciones:</h2>
        <ul id="resolutions">
            <li><a href="#0x0">Imagen original</a></li>
            <li><a href="#800x600">800x600</a></li>
            <li><a href="#1024x768">1024x768</a></li>
            <li><a href="#1152x864">1152x864</a></li>
            <li><a href="#1280x1024">1280x1024</a></li>
            <li><a href="#1280x800">1280x800</a></li>
            <li><a href="#1280x768">1280x768</a></li>
            <li><a href="#1366x768">1366x768</a></li>
            <li><a href="#1440x900">1440x900</a></li>
            <li><a href="#1600x900">1600x900</a></li>
            <li><a href="#1600x1200">1600x1200</a></li>
            <li><a href="#1680x1050">1680x1050</a></li>
            <li><a href="#1360x768">1360x768</a></li>
            <li><a href="#1920x1080">1920x1080</a></li>
            <li><a href="#1920x1200">1920x1200</a></li>

        </ul>
	</div>
	<div id="rel-wallpapers">
		<h2>Fondos de pantalla similares</h2>
		<div class="mini-thumbs">
    		<? foreach($relTags as $rel): ?>
    		<div class="thumb">
    		<a href="<?=$site.$rel['id'].'/'.$rel['img']?>">
    		    <img alt="fondo de pantalla <?=implode(', ',$rel['_keywords'])?>" src="<?=$img_dir."{$rel['id']}/{$rel['img']}-120x75-{$rel['id']}.jpg"?>" />
    		</a>
    		</div>
            <? endforeach;?>
        </div>

        <h2>Colores similares</h2>
        <div class="mini-thumbs">
            <? foreach($relColors as $rel): ?>
    		<div class="thumb">
    		<a href="<?=$site.$rel['id'].'/'.$rel['img']?>">
    		    <img alt="fondo de pantalla <?=implode(', ',$rel['_keywords'])?>" src="<?=$img_dir."{$rel['id']}/{$rel['img']}-120x75-{$rel['id']}.jpg"?>" />
    		</a>
		      </div>
		<? endforeach;?>
		</div>
	</div>
</div>
<?include('view-sidebar.php')?>
<div class="tag-clound">
<h2>Otras Etiquetas</h2>
<?foreach($nube as $name_tag =>$pt_tag):?>
<a href="<?=$site.'tags/'.destil($name_tag)?>" class="tag-level-<?=$pt_tag?>"><?=$name_tag?></a>
<?endforeach;?>

</div>
