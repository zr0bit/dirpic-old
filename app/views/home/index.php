<?php
//instancia de variables
$img_dir='http://wallpaper.dirpic.com/';
?>
<div id="main">
	<div id="thumbs-home">
	<? foreach($pics as $pic): ?>
	<div class="thumb">
		<h2><a href="<?=$site.$pic['id'].'/'.$pic['token']?>"><?=$pic['name']?></a></h2>
		<a href="<?=$site.$pic['id'].'/'.$pic['token']?>">
		    <img alt="fondo de pantalla <?=implode(' ',$pic['_keywords'])?>" src="<?=$img_dir."{$pic['id']}/{$pic['img']}-200x125-{$pic['id']}.jpg"?>" />
		</a>
		<ul class="info">
			<li class="likes"><?=$pic['likes']?> <span>favoritos</span></li>
			<li class="views"><?=$pic['views']?><span>vistas</span></li>
	  		<li class="downs"><?=$pic['downs']?><span>descargas</span></li>
	 	</ul>
	 	

	</div>
	<? endforeach;?>
	</div>

	<?=$pags;?>
    <div class="add-main">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-5607696320418453";
/* ads final de lista */
google_ad_slot = "6798037036";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
    </div>

</div>

<?include('home-sidebar.php')?>
