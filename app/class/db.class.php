<?php class DB
{
    public function conect()
    {
        $CI = &get_instance();
        $CI->load->config('mongo');
        $host = $CI->config->item('mongo_host');
        $port = $CI->config->item('mongo_port');
        $user = $CI->config->item('mongo_user');
        $pass = $CI->config->item('mongo_pass');
        $db = $CI->config->item('mongo_db');
        $persist = $CI->config->item('mongo_persist');
        $persist_key = $CI->config->item('mongo_persist_key');
        $options = $CI->config->item('mongo_options');
        $conexion_str = "mongodb://{$user}:{$pass}@{$host}:{$port}";
        if ($persist === true)
        {
            $options['persist'] = $persist_key;
        }
        try
        {
            $conexion = new Mongo($conexion_str, $options);
            //$this->db = $conexion->{$db};
            //return($this);
            return ($conexion->{$db});
        }
        catch (MongoConnectionException $e)
        {
            show_error("No se puede conectar a MongoDB: {$e->getMessage()}", 500);
        }
    }
}