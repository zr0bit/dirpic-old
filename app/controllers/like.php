<?php
class Like extends CI_Controller {

	public function this()
	{
		if($this->input->is_ajax_request())
        {

			$id=$this->input->post('id');
			$action=$this->input->post('action');
			$oreo_likes=$this->input->cookie('likes');

			$pic= new Pic();

			if($action=='like')
			{
				if(!preg_match("/{$id}\./",$oreo_likes))
	        	{
	        	  $pic->incLikes($id);
	        	}
	        	echo 'on';
			}
			elseif($action=='unlike')
			{
				if(preg_match("/{$id}\./",$oreo_likes))
	        	{
	        		$pic->decLikes($id);
	        	}
				echo 'off';
			}
		}
		else
		{
			redirect('favoritos');
		}
	}
}