<?php
//Conexion a la Base de Datos
function connection (){ 
    $host = "localhost";
    $usr = "root";
    $pass = "";
    $bd = "aluminiosofia";
    $puerto = 3306;
    $mysqli = new mysqli ($host, $usr, $pass, $bd, $puerto);
    return $mysqli;
}
?>