<div id="sidebar">
	<div id="ads">

    <script type="text/javascript"><!--
google_ad_client = "ca-pub-5607696320418453";
/* ad sidebar */
google_ad_slot = "2811084107";
google_ad_width = 300;
google_ad_height = 250;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

    </div>

	<h3>Colores</h3>
	<ul id="color-tags">
		<?foreach($colors as $color):?>
		<li><a id="<?=$color?>" href="<?=$site."color/{$color}"?>"></a></li>
		<?endforeach;?>
	</ul>
	<h3>Etiquetas</h3>
	<ul id="tags">
		<?foreach($tags as $tag):?>
			<li><a href="<?=$site.'tags/'.destil($tag['name'])?>"><?=$tag['name']?></a></li>
		<?endforeach;?>
	</ul>
    <?include(__DIR__.'/../elementos/social_box.php')?>
</div>

