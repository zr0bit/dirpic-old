<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Get CSS
 *
 * crear los link para css agregados en el controlador
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('pags'))
{

	function pags($items,$itemsXpag,$current,$url,$def)
	{

		$num_pags= ceil($items/$itemsXpag);

		if($num_pags==1)
			return '';

		$out='<ul id="pags">';

		$next=$current+1;
		$prev=$current-1;
		if($num_pags<6)
		{
			if($current>1)
			{
				$prev=$current-1;
				$out.="<li><a href='{$url}/{$prev}'>Anterior</a></li>";
			}
			for($i=1;$i<=$num_pags;$i++)
			{
				if($i==1)
				{
					$out.=($i!=$current)?"<li><a href={$def}>{$i}</a></li>":"<li><a class='current'>{$i}</a></li>";
					continue;
				}

				$out.=($i!=$current)?"<li><a href={$url}/{$i}>{$i}</a></li>":"<li><a class='current'>{$i}</a></li>";
			}
			if($current!=$num_pags)
			{

			$out.="<li><a href='{$url}/{$next}'>Siguiente</a></li>";
			}
			$out.='</ul>';
			return $out;
		}
		else{

		if($current>1)
		{
			if($current>3)
				$out.="<li><a href='{$def}'>...</a></li>";

			$out.="<li><a href='{$url}/{$prev}'>Anterior</a></li>";

		}

		if($current>=3&&$current<=$num_pags-2)
		{
			$ini=$current-2;
			$fin=$current+2;
		}
		elseif($current<=2)
		{
			$ini=1;
			$fin=5;
		}
		else
		{
			$ini=$num_pags-4;
			$fin=$num_pags;
		}

		for($i=$ini;$i<=$fin;$i++)
		{
			if($i==1)
				{
					$out.=($i!=$current)?"<li><a href={$def}>{$i}</a></li>":"<li><a class='current'>{$i}</a></li>";
					continue;
				}
			$out.=($i!=$current)?"<li><a href={$url}/{$i}>{$i}</a></li>":"<li><a class='current'>{$i}</a></li>";
		}
		if($current!=$num_pags)
		{
			$out.="<li><a href='{$url}/{$next}'>Siguiente</a></li>";
			if($num_pags-$current>2)
				$out.="<li><a href='{$url}/{$num_pags}'>...</a></li>";
		}
		$out.='</ul>';
		return $out;
		}
	}
}