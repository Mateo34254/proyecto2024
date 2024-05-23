<?php

require_once '../Modelo/ModeloCliente.php';

$funcion = $_GET['funcion'];

switch ($funcion){
    case "Obtener":
        ObtenerCliente();
    break;
    case "Register":
        RegisterCliente();
    break;
}

function ObtenerCliente(){
    $resultado = (new usuario())->ObtenerClienteModelo();
    echo json_encode($resultado);
}

function RegisterCliente(){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new cliente())->RegisterCliente($usuario, $email, $contraseña);
    echo json_encode($resultado);
}

?>