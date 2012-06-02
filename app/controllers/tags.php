<?php
class Tags extends CI_Controller
{
    public function index()
    {
        $set['title']='Etiquetas de los fontos de pantalla';
        $set['meta_des']='Nuebe de etiquetas de todos los fondos de pantalla';
        $set['meta_keys']='Etiquetas, fondos de pantalla, categoria';


	    $set['tpl']='tags/index';
        $set['og_url']=current_url();

        $tags=new Tag();
        $set['nube']=$tags->nubetags(220);
        $this->load->view('layout',$set);
    }
}
