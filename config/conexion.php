<?php 
    class Connect{

        protected $dbh;

        protected function connection(){
            try {
                $connect = $this-> $dbh = new PDO("mysql:local=localhost; dbname=regina_hotel", "root", "");

                return $connect;

            } catch (Exception $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die(); 
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }

        public function ruta(){
            return "http://localhost/REGINA/";
        }
    }
?>
