<?
//instancia de variables

?>

<div id="header">
<div class="center">
    <a id="logo" href="<?=$site?>"></a>
    <ul class="nav">
        <li><a href="<?=$site?>" <?=(@$tab==1)?'class="current"':NULL?> >Inicio</a></li>
        <li><a href="<?=$site.'favoritos'?>" <?=(@$tab==2)?'class="current"':NULL?> >Favoritos</a></li>
        <li><a href="<?=$site.'vistos'?>" <?=(@$tab==3)?'class="current"':NULL?> >+ Visto</a></li>
        <li><a href="<?=$site.'descargados'?>" <?=(@$tab==4)?'class="current"':NULL?> >+ Descargado</a></li>
        <li><a rel="nofollow" href="<?=$site.'rand'?>" <?=(@$tab==5)?'class="current"':NULL?> >Aleatorio</a></li>
    </ul>
</div>
</div>