<?php
class Rand extends CI_Controller{
	private $set;
	private $pics;

	public function __construct()
	{
     parent::__construct();
	    $this->pics= new Pic();
	    $tags= new Tag();
        $this->set['title']='Fondos de pantalla - Dirpic ';
        $this->set['og_url']=current_url();
$this->set['meta_des']='Descarga fondos de pantalla gratis de una forma simple y rápida, paisajes, autos, coches, carros, naturaleza, arte, digital';
$this->set['meta_keys']='fondos,wallpaper,fonditos,fondo de pantallas,fondo de escritorios, fondo de pantall, fondo de pantalla,paisajes,autos,coches,carros,naturaleza';
	    $this->set['tpl']='rand/index';
	    $this->set['tags']=$tags->all(30);
$this->set['colors']=array('red','pink','purple','blue','skyblue','green','yellow','orange','brown','white','grey','black');
	}
    public function index()
    {
        $pic = new Pic();
        $this->set['pics']=$pic->pics_rand(35);
        $this->load->view('layout',$this->set);
    }
 }
