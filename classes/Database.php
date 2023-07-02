<?php
    class Database{
        private $conection;
        public $error;
        public function __construct($host, $dbname, $user, $passwd){
            try{
                $this->conection = new PDO("mysql:host=$host;dbname=$dbname", $user, $passwd);
            }catch(Exception $e){

                $this->error = $e->getMessage();
            }
        }

        public function getConection(){
            return $this->conection;
        }
        
        public function isValidDb(){
            if($this->getConection()){
                return true;
            }
            return false;
        }
    }

?>