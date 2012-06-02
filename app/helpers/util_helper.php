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
if ( ! function_exists('css'))
{
	function css($css = '',$min='')
	{
	   $css=str_replace(' ','',$css);
	   $css=explode(',',$css);
       $tmp_str='';
	   foreach($css as $src)
       {
        $tmp_str.='<link rel="stylesheet" charset="UTF-8"  type="text/css" href="http://static.dirpic.com/css/'.$src.$min.'.css" />';
       }
       return $tmp_str;
	}
}

// ------------------------------------------------------------------------
/**
 * Get javascript:
 * incluye archivos javascript
 *
 * @access	public
 * @param	string, array
 * @return	string
 */
if(!function_exists('js'))
{

	function js($js='',$min='')
	{
		$js=str_replace(' ','',$js);
		$js=explode(',',$js);
       	$tmp_str='';
	   	foreach($js as $src)
        	$tmp_str.='<script type="text/javascript" charset="UTF-8" src="'.'http://static.dirpic.com/js/'.$src.$min.'.js"></script>';
  		return $tmp_str;
	}
}
// ------------------------------------------------------------------------

/**
 * Get Element
 *
 * incluye pequeñas elementos de vista para mejor organización del codigo
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('destil'))
{
	function destil($text='')
	{
	   $tildes = array("á", "Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú","ñ","Ñ");
       $sin = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U","n","N");
       return str_replace ($tildes, $sin, $text);
	}
}
if(!function_exists('get_static'))
{
    function get_static($dir)
    {
        $base='http://static.dirpic.com/';
        return $base.$dir.'/';
    }
}
