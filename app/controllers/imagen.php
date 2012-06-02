<?php class Imagen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->helper(array('form', 'url'));
        $set['css'] = '';
        $set['error']='';
        $set['tpl'] = 'imagen/index';
        $this->load->view('layout', $set);
    }
 
        
    public function all($num)
    {
        $this->load->helper('imager');
        for($i=6;$i<=10;$i++)
        {
            $id=5*$num + $i;
            //if($id==2384) break;
            
        cut_img($id,200,125);//thumbmail
        cut_img($id,640,400);//para el view
        cut_img($id,800,600);//800x600
        cut_img($id,1024,768);//1024x768
        cut_img($id,1152,864);//1152x864
        cut_img($id,1280,1024);//1280x1024
        cut_img($id,1280,800);//1280x800
        cut_img($id,1280,768);//1280x768
        cut_img($id,1366,768);//1366x768
        cut_img($id,1440,900);//1440x900
        cut_img($id,1600,900);//1600x900
        cut_img($id,1600,1200);//1600x1200
        cut_img($id,1680,1050);//1680x1050
        cut_img($id,1360,768);//1360x768
        cut_img($id,1920,1080);//1920x1080
        cut_img($id,1920,1200);//1920x1200
        
        }
        echo '=)';
    }
}
