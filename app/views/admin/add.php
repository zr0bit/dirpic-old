<img id="img-id" src="<?=site_url("img/wallpaper/{$id}/640x400-{$id}.jpg");?>" />
<form method="post" action="<?=site_url("admin/add/{$id}")?>">
<p>
<label>Nombre:</label>
<input name="name" type="text" />
</p>
<p>
<label>Tags:(separados por coma)</label>
<input name="tags" type="text" />
</p>
<p>
<label>Color: </label>
<?include('color-tags.php');?>
</p>
<p>
<input type="hidden" name="back" value="1" />
<input type="submit" value="Guardar y llenar siguiente" />
</p>
</form>