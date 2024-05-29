<?php

require_once '../Model/ModelCliente.php';

$function = $_GET['function'];

switch ($function){
    case "Obtener":
        ObtenerCliente();
    break;
    case "Register":
        RegisterCliente();
    break;
}

function ObtenerCliente(){
    $resultado = (new cliente())->ObtenerClienteModel();
    echo json_encode($resultado);
}

function RegisterCliente(){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new cliente())->RegisterClienteModel($usuario, $email, $contraseña);
    echo json_encode($resultado);
}

?>