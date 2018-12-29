<?php 
    require_once("../config/conexion.php");

    class Company extends Connect{

        public function getCompanies(){

            $connect = parent :: connection();
            parent :: set_names();
            
            $sql = "SELECT * FROM companies";
            $sql = $connect -> prepare($sql);
            $sql -> execute();

            return $result = $sql -> fetchAll(PDO :: FETCH_ASSOC);
        }

        public function saveCompany($name, $rfc, $street, $internal_number, $external_number, $colony,
        $municipality, $zip_code, $state, $country, $mail1, $mail2, $mail3){
            
            $connect = parent :: connection();
            parent :: set_names();

            $sql = "INSERT INTO companies
            VALUES(null, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)";

            $sql = $connect -> prepare($sql);   

            $sql -> bindValue(1, $_POST["name"]);
            $sql -> bindValue(2, $_POST["rfc"]);
            $sql -> bindValue(3, $_POST["street"]);
            $sql -> bindValue(4, $_POST["internal_number"]);
            $sql -> bindValue(5, $_POST["external_number"]);
            $sql -> bindValue(6, $_POST["colony"]);
            $sql -> bindValue(7, $_POST["municipality"]);
            $sql -> bindValue(8, $_POST["zip_code"]);
            $sql -> bindValue(9, $_POST["state"]);
            $sql -> bindValue(10, $_POST["country"]);
            $sql -> bindValue(11, $_POST["mail1"]);
            $sql -> bindValue(12, $_POST["mail2"]);
            $sql -> bindValue(13, $_POST["mail3"]);

            $sql -> execute();
        }

        public function validateCompany($name, $rfc, $mail1){
            $connect = parent :: connection();
            parent :: set_names();
            
            $sql = "SELECT * FROM companies WHERE name = ? OR rfc = ? OR mail1 = ?";

            $sql = $connect -> prepare($sql);

            $sql -> bindValue(1, $_POST["name"]);
            $sql -> bindValue(2, $_POST["rfc"]);
            $sql -> bindValue(3, $_POST["mail1"]);

            $sql -> execute();
            
            return $result = $sql -> fetchAll(PDO :: FETCH_ASSOC);
        }
    }
?>
