<?php class Archiver extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function move()
    {
        for($i=194;$i<=275;$i++)
        {
           mkdir('img/wallpaper/'.$i);
           rename ('img/wallpaper/'.$i.'.jpg','img/wallpaper/'.$i.'/'.$i.'.jpg');
        }
    }
    public function rename()
    {
        for($i=749;$i<=786;$i++)
        {
        rename ('img/wallpaper/'.$i.'/'.($i+38).'.jpg','img/wallpaper/'.$i.'/'.$i.'.jpg');
        rename ('img/wallpaper/'.$i.'/120x75-'.($i+38).'.jpg','img/wallpaper/'.$i.'/120x75-'.$i.'.jpg');
        rename ('img/wallpaper/'.$i.'/200x125-'.($i+38).'.jpg','img/wallpaper/'.$i.'/200x125-'.$i.'.jpg');
        rename ('img/wallpaper/'.$i.'/640x400-'.($i+38).'.jpg','img/wallpaper/'.$i.'/640x400-'.$i.'.jpg');
        }
    }
    public function rena()
    {
        for($i=706;$i<=800;$i++)
        {
            rename ('img/espera/'.$i,'img/wallpaper/'.$i);
        }
    }
}