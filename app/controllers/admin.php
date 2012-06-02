<?php
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		echo 'holaa sdsd';
	}

	public function cut($id)
	{
		$this->load->helper('imager');
	    cut_img($id,683,384,'683.384');//683:384
    	cut_img($id,320,180,'16.9');//16:9
    	cut_img($id,400,300,'4.3');//4:3
    	cut_img($id,500,400,'5.4');//5:4
    	cut_img($id,400,250,'8.5');//8:5
    	echo '=)';
	}
    private function destil($text='')
	{
	   $tildes = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú","ñ","Ñ");
       $sin = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U","n","N");
       return str_replace ($tildes, $sin, $text);
	}


    public function setKey()
    {
        for($i=1;$i<=275;$i++)
        {
            $a=array('id'=>$i);
            $f=array('name','tags');
            $col=$this->db->pics->findOne($a,$f);
            $aName=explode(' ',$col['name']);
            $keywords=array_merge($aName,$col['tags']);

            foreach($keywords as $key => $value)
            {
                $keywords[$key] = strtolower($this->destil($value));
            }
            $keywords=array_unique($keywords);

            $newKeywords=array();

            foreach($keywords as $value)
            {
                $newKeywords[]=$value;
            }

            $query=array('id'=>$i);
            $newData=array('$set'=>array('_keywords'=>$newKeywords));
            $this->db->pics->update($query,$newData);
        }
    }

	public function add($id){
		$back=$this->input->post('back');
		if($back==1)
		{
			$colors=array();

			if(trim($this->input->post('red'))!='')
				$colors[]=trim($this->input->post('red'));

			if(trim($this->input->post('pink'))!='')
				$colors[]=trim($this->input->post('pink'));

			if(trim($this->input->post('purple'))!='')
				$colors[]=trim($this->input->post('purple'));

			if(trim($this->input->post('blue'))!='')
				$colors[]=trim($this->input->post('blue'));

			if(trim($this->input->post('skyblue'))!='')
				$colors[]=trim($this->input->post('skyblue'));

			if(trim($this->input->post('green'))!='')
				$colors[]=trim($this->input->post('green'));

			if(trim($this->input->post('yellow'))!='')
				$colors[]=trim($this->input->post('yellow'));

			if(trim($this->input->post('orange'))!='')
				$colors[]=trim($this->input->post('orange'));

			if(trim($this->input->post('brown'))!='')
				$colors[]=trim($this->input->post('brown'));

			if(trim($this->input->post('white'))!='')
				$colors[]=trim($this->input->post('white'));

			if(trim($this->input->post('grey'))!='')
				$colors[]=trim($this->input->post('grey'));

			if(trim($this->input->post('black'))!='')
				$colors[]=trim($this->input->post('black'));



			$tags=trim($this->input->post('tags',true));
            	$tags=str_replace(' ','',$tags);
                	$tags=explode(',',$tags);

   	     	$doc['id']=$id;
	        $doc['name']=trim($this->input->post('name',true));
	        $doc['tags']=$tags;
	        $doc['colors']=$colors;
	        $doc['views']=0;
	        $doc['likes']=0;
	        $doc['downs']=0;
            ///keywords

            $aName=explode(' ',$doc['name']);
            $keywords=array_merge($aName,$doc['tags']);

            foreach($keywords as $key => $value)
            {
                $keywords[$key] = strtolower($this->destil($value));
            }
            $keywords=array_unique($keywords);

            $newKeywords=array();

            foreach($keywords as $value)
            {
                $newKeywords[]=$value;
            }

            ///fin de keywords
            $doc['_keywords']=$newKeywords;


	        $name= str_replace(' ','-',$doc['name']);
	        $tildes = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú","ñ","Ñ");
  			$sin = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U","n","N");
  			$name = str_replace ($tildes, $sin, $name);

			$doc['img']=$name;

			$pic = new Pic();


            ///add tags

            $tag =new Tag();

            foreach($tags as $val)
            {
                $tag->add($val);
            }

            ///fin de add tags
	        $pic->add($doc);

            rename (APPPATH."../../wallpaper.dirpic.com/{$id}/120x75-{$id}.jpg",APPPATH."../../wallpaper.dirpic.com/{$id}/{$name}-120x75-{$id}.jpg");
            rename (APPPATH."../../wallpaper.dirpic.com/{$id}/200x125-{$id}.jpg",APPPATH."../../wallpaper.dirpic.com/{$id}/{$name}-200x125-{$id}.jpg");
            rename (APPPATH."../../wallpaper.dirpic.com/{$id}/640x400-{$id}.jpg",APPPATH."../../wallpaper.dirpic.com/{$id}/{$name}-640x400-{$id}.jpg");
        	redirect('/admin/add/'.($id+1));
		}
		else
		{
			$set['css']='panel';
            $set['js']='';
			$set['tpl']='admin/add';
        	$set['id']=$id;
        	$this->load->view('layout_dev',$set);

		}
	}
}