<?php 
    require_once("../config/conexion.php");
    require_once("../modelos/Companies.php");

    $companies = new Company();

    $name = isset($_POST["name"]);
    $rfc = isset($_POST["rfc"]);
    $street = isset($_POST["street"]);
    $internal_number = isset($_POST["internal_number"]);
    $external_number = isset($_POST["external_number"]);
    $colony = isset($_POST["colony"]);
    $municipality = isset($_POST["municipality"]);
    $zip_code = isset($_POST["zip_code"]);
    $state = isset($_POST["state"]);
    $country = isset($_POST["country"]);
    $mail1 = isset($_POST["mail1"]);
    $mail2 = isset($_POST["mail2"]);
    $mail3 = isset($_POST["mail3"]);
?>