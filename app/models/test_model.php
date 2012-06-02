<?php
class Test_model extends App_model
{
    public function get()
    {
        $dba =new Mongo();
       //return $db->dirpic->fuck->findOne(array());
    }
    public function destil($text='')
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
}