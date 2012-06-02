<img src="<?=site_url("static/backs/{$id}/640x400-{$id}.jpg")?>"/>

<form method="post" action="<?=site_url('edit/save')?>">
<input name="id" type="hidden" value="<?=$id?>" />
<label>Nombre:</label><input name="name" type="text" size="30" /><br />
<label>Tags:</label><input name="tags" type="text" size="30" /><br />
<input type="submit" value="guardar" />
</form>