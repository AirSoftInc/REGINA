<?php 
    class Connect{

        public function connection(){
            try {
                $connect = new PDO("mysql:local=localhost; dbname=regina_hotel", "root", "");

                return $connect;

            } catch (Exception $e) {
                print "¡Error!: " . $e->getMessage() . "<br/>";
                die(); 
            }
        }

        public function ruta(){
            return "http://localhost/REGINA/";
        }
    }
?>
