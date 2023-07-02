<?php
    require_once("Database.php");
    class Application{
        private $conection;
        public function __construct(){
            $this->conection = $this->conection();
        }

        private function conection(){
            $db = new Database("localhost", "nossa_trajetoria", "root", "");
            if($db->isValidDb()){
                return $db->getConection();
            }
            return false;
        }
        public function getAllInfo(){
            $SQL = "SELECT * FROM infos";
            $smt = $this->conection->prepare($SQL);
            $smt->execute();
            $infos = $smt->fetchAll();
            return $infos;
        }
    }



?>