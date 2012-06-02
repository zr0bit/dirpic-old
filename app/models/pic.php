<?php
class Pic extends App_model
{
    public function getNameById($id)
    {
       return $this->db->pics->findOne(array('id'=>(int)$id),array('name'));
    }

	public function add($doc)
	{
		$doc['id']=(int)$doc['id'];
		$this->db->pics->save($doc);

	}
	public function incViews($id=null)
	{
		$this->db->pics->update(array('id'=>(int)$id),array('$inc'=>array('views'=>1)));
	}
	public function incLikes($id=null)
	{
		$this->db->pics->update(array('id'=>(int)$id),array('$inc'=>array('likes'=>1)));
	}
    public function incDowns($id=null)
    {
        $this->db->pics->update(array('id'=>(int)$id),array('$inc'=>array('downs'=>1)));
    }

	public function decLikes($id=null)
	{
		$this->db->pics->update(array('id'=>(int)$id),array('$inc'=>array('likes'=>-1)));
	}

	public function count()
	{
		return $this->db->pics->count();
	}

    //////////////buscar por...///////////
    public function findByTag($tags=null,&$num,$pag=1)
    {
        $indice=30*($pag-1);
        $query=array('_keywords'=>$tags);
        $num=$this->db->pics->count($query);
        return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('id'=>-1));
    }
    public function findByColor($color=null,&$num,$pag=1)
    {
        $indice=30*($pag-1);
        $query=array('colors'=>$color);
        $num=$this->db->pics->count($query);
        return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('id'=>-1));
    }

    public function antsig($id,&$items)
    {
        $item=array();
        $total=$this->count();
        $id= (int)$id;
        $ant=($id!=$total)?$id+1:1;
        $sig=($id!=1)?$id-1:$total;

        $items[1]=$this->db->pics->findOne(array('id'=>$ant),array('img','id'));
        $items[0]=$this->db->pics->findOne(array('id'=>$sig),array('img','id'));
    }

	//////////////ordenando///////////////
	public function news($pag=1)
	{
		$indice=30*($pag-1);
		$query=array();
		return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('id'=>-1));
	}
	public function likes($pag=1)
	{
		$indice=30*($pag-1);
		$query=array();
		return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('likes'=>-1));
	}
	public function downs($pag=1)
	{
		$indice=30*($pag-1);
		$query=array();
		return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('downs'=>-1));
	}
	public function views($pag=1)
	{
		$indice=30*($pag-1);
		$query=array();
		return $this->db->pics->find($query,array('tags'=>0,'colors'=>0))->limit(30)->skip($indice)->sort(array('views'=>-1));
	}



	public function get($id=1)
	{
		$pic=$this->db->pics->findOne(array('id'=>(int)$id),array());
		return $pic;
	}
	public function relTags($tags)
	{
	   $query=array('tags'=>array('$in'=>$tags));
       return $this->db->pics->find($query,array('img','id','_keywords'))->limit(5)->sort(array('id'=>-1));
	}
	public function relColors($color)
	{
	   $query=array('colors'=>array('$in'=>$color));
		return $this->db->pics->find($query,array('img','id','_keywords'))->limit(5);
	}
    public function pics_rand($num)
    {
        $col = $this->db->pics;
        $num_docs = $col->count();
        $ids = array();
        for($i=1;$i<=$num;$i++)
        {
            $ids[] = rand(1,$num_docs);
        }
        return $col->find(array('id'=>array('$in'=>$ids)),array('id','img','token'));
    }



//scripts para hacer cambios
	public function token()
    {
    	$col=$this->db->pics;
    	for($i=0;$i<1109;$i++)
    	{
    		$tags=$col->find(array(),array('img','_id'))->limit(1)->sort(array('_id'=>-1))->skip($i);
    		$doc=$tags->getNext();
    		$name=$doc['img'];
    		$token = strtolower($name);
    		$col->update(array('_id'=>$doc['_id']),array('$set'=>array('token'=>$token)));
    		$tags->reset();
    	}
    }
    public function title()
    {
    	$col=$this->db->pics;
    	for($i=1;$i<=1109;$i++)
    	{
    		$doc=$col->findOne(array('id'=>$i),array('name','_id'));
    		$titulo="Fondo de pantalla: {$doc['name']} - dirpic.com";
    		$col->update(array('_id'=>$doc['_id']),array('$set'=>array('title'=>$titulo)));
    	}
    }
    public function des()
    {
    	$col=$this->db->pics;
    	for($i=1;$i<=1109;$i++)
    	{
    		$doc=$col->findOne(array('id'=>$i),array('name','tags'));
    		$id=$doc['_id'];
    		$name=$doc['name'];
    		$tags=implode(' ', $doc['tags']);
    		$tags= str_replace('-',' ',$tags);

    		$meta_des="Fondo de pantalla: {$name}, descárgalo desde dirpic.com en tu escritorio; encuentra otros fondos de escritorio: {$tags}";
    		$col->update(array('_id'=>$id),array('$set'=>array('meta_des'=>$meta_des)));
    	}
    }
    public function img()
    {
        $col=$this->db->pics;
        set_time_limit(0);
        for($i=1;$i<=1109;$i++)
        {
            $doc=$col->findOne(array('id'=>$i),array('token'));
            $col->update(array('_id'=>$doc['_id']),array('$set'=>array('img'=>$doc['token'])));
        }
    }
}
