<?php

include_once 'personas.php';

class Api{


    function getAll(){
        $persona = new Persona();
        $personas = array();
        $personas["items"] = array();

        $res = $persona->obtenerPersonas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){

                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "imagen" => $row['imagen'],
                );
                array_push($personas["items"], $item);
            }

            echo json_encode($personas);
        }else{
            echo json_encode(array('mensaje' => 'No hay elementos'));
        }
    }
}

?>
