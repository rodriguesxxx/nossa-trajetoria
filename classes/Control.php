<?php
    require_once("Database.php");
    class Control{
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

        public function updateTotalAcess(){
            $total = $this->getTotal();
            $total+=1;
            $SQL = "UPDATE control_acess SET total = '$total'";
            $this->conection->exec($SQL);
        }

        private function getTotal(){
            $SQL = "SELECT total from control_acess";
            $smt = $this->conection->prepare($SQL);
            $smt->execute();
            $total = $smt->fetch()[0];
            return $total;
        }
        

    }

?>