<div id="tabs">
    <ul>
    <li><a <?=($tab==1)?'class="current"':'href='.base_url()?> >Inicio</a></li>
    <li><a <?=($tab==2)?'class="current"':'href='.site_url('favoritos')?> >Favoritos</a></li>
    <li><a <?=($tab==3)?'class="current"':'href='.site_url('vistos')?> >Más visto</a></li>
    <li><a <?=($tab==4)?'class="current"':'href='.site_url('descargados')?> >Más descargado</a></li>
    </ul>
</div>