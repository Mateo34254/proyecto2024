<?php

require_once '../Model/ClienteDAO.php';

$function = $_GET['function'];

switch ($function){
    case "Obtener":
        ObtenerCliente();
    break;
}

function ObtenerCliente(){
    $resultado = (new cliente())->ObtenerClienteModel();
    echo json_encode($resultado);
}
?>