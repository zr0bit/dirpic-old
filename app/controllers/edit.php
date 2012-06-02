<?php class Edit extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function id($id)
    {
        $set['tpl']='edit/id';
        $set['css']='';
        $set['id']=$id;
        $this->load->view('layout',$set);
    }
    public function save()
    {
        
        $tags=trim($this->input->post('tags',true));
            $tags=str_replace(' ','',$tags);
                $tags=explode(',',$tags);
        $doc['id']=trim($this->input->post('id',true));
        $doc['name']=trim($this->input->post('name',true));
        $doc['cats']=array('no cat');
        $doc['tags']=$tags;
        $doc['screens']=array('800x600','1024x768','1152x864','1280x1024','1280x800','1280x768','1366x768','1440x900','1600x900','1600x1200','1680x1050','1360x768','1920x1080','1920x1200');
        $doc['downs']=0;
        $doc['views']=0;
        $doc['likes']=0;
        $doc['type']='pc';
        $wallback = new Wallback();
        $wallback->add($doc);
        //redirect('edit/id/'.$doc['id']+1);
        echo"=)";
    }
}