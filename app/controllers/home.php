<?php
class Home extends CI_Controller{
	private $set;
	private $pics;

	public function __construct()
	{
	    parent::__construct();
	    $this->pics= new Pic();
	    $tags= new Tag();
	    $this->load->helper('pags');
		$this->set['css']='thumbs';
		//$this->set['js']='hola';
        $this->set['title']='Fondos de pantalla - Dirpic ';
        $this->set['og_url']=current_url();
$this->set['meta_des']='Descarga fondos de pantalla gratis de una forma simple y rápida, paisajes, autos, coches, carros, naturaleza, arte, digital';
$this->set['meta_keys']='fondos,wallpaper,fonditos,fondo de pantallas,fondo de escritorios, fondo de pantall, fondo de pantalla,paisajes,autos,coches,carros,naturaleza';
	    $this->set['tpl']='home/index';
	    $this->set['tags']=$tags->all(30);

$this->set['colors']=array('red','pink','purple','blue','skyblue','green','yellow','orange','brown','white','grey','black');

	}
	public function index()
	{
		$this->news();
	}
	public function news($pag=1)
	{
		$this->set['tab']=1;
		$this->set['pics']=$this->pics->news($pag);
		$this->set['pags']=pags($this->pics->count(),30,$pag,site_url('pag'),site_url('/'));
		$this->load->view('layout',$this->set);
	}
	public function favoritos($pag=1)
	{
		$this->set['tab']=2;
		$this->set['pics']=$this->pics->likes($pag);
		$this->set['pags']=pags($this->pics->count(),30,$pag,site_url('favoritos/pag'),site_url('favoritos'));
		$this->load->view('layout',$this->set);
	}
	public function vistos($pag=1)
	{
		$this->set['tab']=3;
		$this->set['pics']=$this->pics->views($pag);
		$this->set['pags']=pags($this->pics->count(),30,$pag,site_url('vistos/pag'),site_url('vistos'));
		$this->load->view('layout',$this->set);
	}
	public function descargados($pag=1)
	{
		$this->set['tab']=4;
		$this->set['pics']=$this->pics->downs($pag);
		$this->set['pags']=pags($this->pics->count(),30,$pag,site_url('descargados/pag'),site_url('descargados'));
		$this->load->view('layout',$this->set);
	}
    public function dev($pag=1)
    {
        $this->set['tab']=1;
        $this->set['css']='thumbs2';
		$this->set['pics']=$this->pics->news($pag);
		$this->set['pags']=pags($this->pics->count(),30,$pag,site_url('pag'),site_url('/'));
		$this->load->view('lay',$this->set);

    }
}
