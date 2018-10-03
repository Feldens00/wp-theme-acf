<?php
require( 'config-db.php' );
class DatabaseConection extends ConfigDB
{
    private static $conexao;
    private function __construct()
    {

    }
    public static function getInstance()
    {   
        $dados_db = ConfigDB::parameter_conection();

        if (is_null(self::$conexao)) {
            $string_conection = 'mysql:host='.$dados_db['db_host'].';port=3306;dbname='.$dados_db['db_name'];
            self::$conexao = new \PDO($string_conection, $dados_db['db_user'], $dados_db['db_pswd']);
            self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            self::$conexao->exec('set names utf8');
        }
        return self::$conexao;
        
    }
}