<?php

include_once 'db.php';

class Persona extends DB{

    function obtenerPersonas(){
        $query = $this->connect()->query('SELECT * FROM personas');
        return $query;
    }

}

?>
