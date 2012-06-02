<?php
class App_model{
    protected $db;
    public function __construct(){
    	include_once(APPPATH."class/db.class.php");
        $dba = new DB();
        $this->db= $dba->conect();
    }
}