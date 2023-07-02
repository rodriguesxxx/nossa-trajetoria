<?php 

include("Database.php");
class Conection{
    private $cnx;
    public function __construct(){
        $this->cnx = $this->conection();
    }

    private function getConection(){
        $db = new Database("localhost", "nossa_trajetoria", "root", "");
        if($db->isValidDb()){
            return $db->getConection();
        }
        return false;
    }
}