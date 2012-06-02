<div id="sidebar">
	<div id="ads"></div>

	<h3>Colores</h3>
	<ul id="color-tags">
		<?foreach($colors as $color):?>
		<li><a id="<?=$color?>" href="<?=site_url("color/{$color}")?>"></a></li>
		<?endforeach;?>
	</ul>
	<h3>Etiquetas</h3>
	<ul id="tags">
		<?foreach($tags as $tag):?>
			<li><a href="<?=site_url("tags/{$tag['tag']}")?>"><?=$tag['tag']?></a></li>
		<?endforeach;?>
	</ul>
</div>

