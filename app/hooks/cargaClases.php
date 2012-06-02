<?php
function cargaClases()
{
	function __autoload($class)
    {
        if(file_exists(APPPATH."models/".strtolower($class).'.php'))
        {
            include(APPPATH."models/".strtolower($class).'.php');
        }
    }
}