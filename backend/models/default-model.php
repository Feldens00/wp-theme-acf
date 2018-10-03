<?php
require( '../backend/database-conection.php' );
class DefaultModel extends DatabaseConection
{
    private $db;

    public function __construct()
    {
        
        $this->db = DatabaseConection::getInstance();
    }

    /*
     * save na tabela 
     */
    public function create($table,$values)
    {   
        if(isset($values)){
            $query = "INSERT INTO " . $table;
            $query .= " (`".implode("`, `", array_keys($values))."`)";
            $query .= " VALUES ('".implode("', '", $values)."') ";
            $stmt = $this->db->prepare($query);
            if ($stmt->execute()) {
                return true;
            }
        } 
        return false;
    }

}