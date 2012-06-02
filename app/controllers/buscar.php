<?php
class Buscar extends CI_Controller
{
    private $set;
    private $pics;

    public function __construct()
    {
        parent::__construct();
	    $this->pics= new Pic();
	    $tags= new Tag();

        $this->load->helper('pags');
		$this->set['css']='thumbs';
		//$this->set['js']='';
	    $this->set['tpl']='buscar/main';
	    $this->set['tags']=$tags->all(30);
$this->set['colors']=array('red','pink','purple','blue','skyblue','green','yellow','orange','brown','white','grey','black');

$this->set['og_url']=current_url();
    }

    public function tags($name=null,$page=1)
    {
        $this->set['title']='Fondos de pantalla '.$name;
$this->set['meta_des']="Descarga fondos de pantalla {$name} gratis de una forma simple y rápida";
$this->set['meta_keys']='fondos,fondo de pantallas,fondo de escritorios, fondo de pantall, fondo de pantalla, '.$name;
        $name=strtolower($name);
        $num=null;
        $this->set['header']='tag';
		$this->set['pics']=$this->pics->findByTag($name,$num,$page);
		$this->set['pags']=pags($num,30,$page,site_url("tags/{$name}"),site_url('tags/'.$name));
		$this->load->view('layout',$this->set);
    }
    public function color($name=null,$page=1)
    {

        $this->set['title']='Fondos de pantalla '.$name;
$this->set['meta_des']="Descarga fondos de pantalla {$name} gratis de una forma simple y rápida";
$this->set['meta_keys']='fondos,fondo de pantallas,fondo de escritorios, fondo de pantall, fondo de pantalla, '.$name;


        $num=null;
        $this->set['header']='color';
		$this->set['pics']=$this->pics->findByColor($name,$num,$page);
		$this->set['pags']=pags($num,30,$page,site_url("color/{$name}"),site_url('color/'.$name));
		$this->load->view('layout',$this->set);
    }
}
