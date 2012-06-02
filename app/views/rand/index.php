<?php
$img_dir='http://wallpaper.dirpic.com/';
?>


<div class="rand-thumbs">
<? foreach($pics as $pic): ?>
    <div class="thumb">
        <a href="<?=$site.$pic['id'].'/'.$pic['token']?>">
        <img alt="fondo de pantalla" src="<?=$img_dir."{$pic['id']}/{$pic['img']}-120x75-{$pic['id']}.jpg"?>" />
        </a>
    </div>
<? endforeach;?>
</div>
<div class="rand-ads">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-5607696320418453";
/* dirpic rand */
google_ad_slot = "3135432920";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div class="mini-social-box">
    <div class="row">
        <fb:like href="http://www.facebook.com/dirpic" send="false" layout="button_count" width="200" show_faces="false" font="verdana"></fb:like>
    </div>
    <div class="row">
        <a href="https://twitter.com/dirpic" class="twitter-follow-button" data-lang="es">Seguir a @dirpic</a>
    </div>
    <div class="row">
        <g:plusone size="medium" href="http://dirpic.com"></g:plusone>
    </div>
</div>