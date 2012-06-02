<?php
class Test extends CI_Controller
{
	public function go()
	{
		for($i=1;;$i<=12)





		if(file_exists(APPPATH.'../../wallpaper'))
			echo 'si';
	}
	public function des()
	{
		set_time_limit(0);
		for($i=1110;$i<=1231;$i++)
        {
            //$doc=$col->findOne(array('id'=>$i),array('img','token'));
            copy(APPPATH.'../../dirpic.com/img/wallpaper/'.$i.'/200x125-'.$i.'.jpg', APPPATH.'../../wallpaper/'.$i.'/200x125-'.$i.'.jpg');
            copy(APPPATH.'../../dirpic.com/img/wallpaper/'.$i.'/640x400-'.$i.'.jpg', APPPATH.'../../wallpaper/'.$i.'/640x400-'.$i.'.jpg');
        }
	}
	public function xd()
	{
		set_time_limit(0);
		$pic = new Pic();
		$pic->img();
		echo ':}';
	}
}
