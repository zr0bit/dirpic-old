<?php
class Wallback extends App_model{
    public function __construct()
    {
        parent::__construct();
    }
    public function add($doc=array())
    {
        $this->db->wallbacks->insert($doc);
    }
}