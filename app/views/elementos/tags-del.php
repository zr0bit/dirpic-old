<? $tags=array('hola','mundo','esto','ejemplo','etiqueta')?>

<div id="tags">
<h3>Etiquetas</h3>
    <ul>
    <? foreach($tags as $tag):?>
        <li><a href="/tag/<?=$tag?>"><?=$tag?></a></li>
    <? endforeach;?>
    </ul>
</div>