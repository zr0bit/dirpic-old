<?php class View extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    private function destil($text='')
	{
	   $tildes = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú","ñ","Ñ");
       $sin = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U","n","N");
       return str_replace ($tildes, $sin, $text);
	}
    public function id($id=null,$text=null)
    {
        if($text==null)
        {
            $pic= new Pic();
            $result=$pic->getNameById($id);
            $name=$result['name'];
                $name=$this->destil($name);
                    $name=str_replace(' ','-',$name);
            redirect("{$id}/{$name}",'location', 301);
        }
        elseif(preg_match("/[A-Z]/",$text))
        {
            $name=strtolower($text);
            redirect("{$id}/{$name}", 'location', 301);
        }
    	else
    	{
    		$set['css']='view';
	        $set['js']='view';
	        $set['tpl']='view/id';
	        $set['id']=$id;
	        $set['on']='';

	        $pic = new Pic();

	        //cookie
	        $oreo_views=$this->input->cookie('views',true);
	        $oreo_likes=$this->input->cookie('likes',true);

	        if(!preg_match("/{$id}\./",$oreo_views))
	        {
	        	$pic->incViews($id);
	        	$oreo_views.="{$id}.";
	        }
	        if(preg_match("/{$id}\./",$oreo_likes))
	        {
	        	$set['on']='on';
	        }
	        $cookie = array(
	    			'name'   => 'views',
	    			'value'  => $oreo_views,
	    			'expire' => '1296000'
				);
			$this->input->set_cookie($cookie);

			//obteniedo pic

            $data_pic=$pic->get($id);
            $this->load->vars($data_pic);

            $set['relColors']=$pic->relColors($data_pic['colors']);
	        $set['relTags']=$pic->relTags($data_pic['tags']);

            //anterior siguiente

            $pic->antsig($id,$set['antsig']);
            $meta_keys=implode(', ',$data_pic['_keywords']);
            $set['meta_keys']="fondos de pantalla, wallpaper, {$meta_keys}, fondos de escritorio, imagenes";
            $set['og_img']="http://wallpaper.dirpic.com/{$id}/{$data_pic['img']}-200x125-{$id}.jpg";

            $tags=new Tag();
            $set['nube']=$tags->nubetags();
            $this->load->view('layout',$set);
    	}
    }
    public function wall($id=NULL,$name=NULL)
    {
        if($name===NULL)
        {
            $pic = new Pic();
            $result=$pic->token_by_id($id);
            $toke=$result['token'];

            if($toke!==FALSE)
                redirect("{$id}/{$token}");
            else
            echo 'XD';
            //cargamos el fondo de pantalla en modo tagme

        }

    }
}
