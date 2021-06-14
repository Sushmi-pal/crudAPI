<?php
class Database{
    private $host= 'localhost';
    private $db = 'crud';
    private $user = 'postgres';
    private $password = '';
    private $pdo;

    public function connectme(){
        try{
            $this->pdo = new PDO("pgsql:host=$this->host,dbname=$this->db",$this->user,$this->password);
        }
        catch (PDOException $e){
            echo $e->getMessage();
        }
        return $this->pdo;
    }


}
?>
