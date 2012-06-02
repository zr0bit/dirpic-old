<?php
class Tag extends App_model {
	public function __construct()
	{
		parent::__construct();
	}
	public function add($tag)
	{
		$col=$this->db->tags;

		if($col->count(array('name'=>$tag))>0)
		{
			$col->update(array('name'=>$tag),array('$inc'=>array('num'=>1)));
		}
		else
		{
			$doc=array('_id'=>new MongoId,'name'=>$tag,'num'=>1);
			$col->insert($doc);
		}
	}
	public function all($limit=50)
	{
	   $limit=70;
		return $col=$this->db->tags->find(array(),array('name'))->sort(array('num'=>-1))->limit($limit);
	}

     public function nubetags($limit=40)
    {
        $col=$this->db->tags;
        $tags=$col->find(array(),array('num'))->limit(1)->sort(array('num'=>-1));


        $max_val=$tags->getNext();
        $max_val=$max_val['num'];
        $tags->reset();
        $min_val=$tags->skip($limit-1)->getNext();
        $min_val=$min_val['num'];

        $dif=$max_val-$min_val;
        $tags=$col->find(array(),array('name','num'))->limit($limit)->sort(array('num'=>-1));
        $new_tags=array();
        foreach($tags as $tag)
        {
            $val_tag=round((($tag['num'] - $min_val) / $dif) * 10);
            $new_tags[$tag['name']]=$val_tag;
        }
        ksort($new_tags);
        return $new_tags;
    }
    public function token()
    {
    	function getToken($cadena)
    	{
    		$tildes = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú","ñ","Ñ");
       		$sin = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U","n","N");
       		$cadena = str_replace ($tildes, $sin, $cadena);
       		$cadena = strtolower($cadena);
       		return $cadena;
    	}
    	$col=$this->db->tags;
    	for($i=0;$i<363;$i++)
    	{
    		$tags=$col->find(array(),array('name','_id'))->limit(1)->sort(array('_id'=>-1))->skip($i);
    		$doc=$tags->getNext();
    		$name=$doc['name'];
    		$token = getToken($name);
    		$col->update(array('_id'=>$doc['_id']),array('$set'=>array('token'=>$token)));
    		$tags->reset();
    	}
    }
}