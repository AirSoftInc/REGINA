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

    switch ($_GET["op"]) {
        case 'save':

            $datos = $companies -> validateCompany($_POST["name"], $_POST["rfc"], $_POST["mail1"]);

            if (is_array($datos) == true and count($datos) == 0) {
                $companies -> saveCompany($name, $rfc, $street, $internal_number, $external_number, $colony,
                $municipality, $zip_code, $state, $country, $mail1, $mail2, $mail3);

                $messages [] = "Succes"; 
            } else {
                $errors[] = "Error";
            }

            if (isset($messages)){	
				?>
                <script>
                    alertify.success("Se ha insertado correctamente la empresa ");
                </script>
				<?php
            }

            if (isset($errors)){
                ?>
                <script>
                    alertify.error("La empresa ya se encuentra registrada");
                </script>
				<?php
            }
            
            break;
        
            case 'getCompanies':

                $datos = $companies -> getCompanies();

                $data = Array();

                foreach ($datos as $row) {
                    $sub_array = array();

                    $sub_array[] = $row["name"];
                    $sub_array[] = $row["rfc"];
                    $sub_array[] = $row["street"];
                    $sub_array[] = $row["external_number"];
                    $sub_array[] = $row["colony"];
                    $sub_array[] = $row["municipality"];
                    $sub_array[] = $row["zip_code"];
                    $sub_array[] = $row["state"];
                    $sub_array[] = $row["country"];
                    $sub_array[] = $row["mail1"];
                    $sub_array[] = '<button type="button" class="btn btn-primary">Editar</button>';
                    $sub_array[] = '<button type="button" class="btn btn-danger">Eliminar</button>';

                    $data[] = $sub_array;
                }

                $results = array(
                    "sEcho" => 1,
                    "iTotalRecords" => count($data),
                    "iTotalDisplayRecords" => count($data),
                    "aaData" => $data);

                    echo json_encode($results);
            break;
    }
?>