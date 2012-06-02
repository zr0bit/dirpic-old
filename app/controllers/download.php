<?php class Download extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function img($id,$w,$h)
    {
        if($w==0&&$h==0)
        {
            $str_file = APPPATH."../../wallpaper.dirpic.com/{$id}/{$id}.jpg";
            $name="{$id}.jpg";
        }
        elseif(file_exists(APPPATH."../../wallpaper.dirpic.com/{$id}/{$w}x{$h}-{$id}.jpg"))
        {
            $str_file = APPPATH."../../wallpaper.dirpic.com/{$id}/{$w}x{$h}-{$id}.jpg";
            $name="{$w}x{$h}-{$id}.jpg";
        }
        else
        {
            $this->load->helper('cut');
            cut_img($id,$w,$h);
            $str_file = APPPATH."../../wallpaper.dirpic.com/{$id}/{$w}x{$h}-{$id}.jpg";
            $name="{$w}x{$h}-{$id}.jpg";
        }
        $pic = new Pic();
        $pic->incDowns($id);
        $this->load->helper('download');
        $data = file_get_contents($str_file);
        force_download($name,$data);
    }
}