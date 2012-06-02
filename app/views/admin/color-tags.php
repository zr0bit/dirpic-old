<? $colors=array('red','pink','purple','blue','skyblue','green','yellow','orange','brown','white','grey','black') ?>
<div id="color-tags">
<ul>
<? foreach($colors as $color):?>
    <li><a id="<?=$color?>" href="#"></a><input type="checkbox" name="<?=$color?>" value="<?=$color?>" /></li>
<? endforeach;?>
</ul>
</div>