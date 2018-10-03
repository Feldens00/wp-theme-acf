<?php
class ConfigDB 
{
   static function parameter_conection(){
    $parametros = array(
        'db_name' => 'dbname',
        'db_user' => 'user',
        'db_pswd' => '',
        'db_host' => 'localhost',
    );

    return $parametros;
   }
}

?>
