<?php

require_once '../Model/ClienteDAO.php';

$function = $_GET['function'];

switch ($function){
    case "Obtener":
        ObtenerCliente();
    break;
    case "loginUsuario":
        loginUsuario();
    break;
    case "registerUsuario":
        registerUsuario();
        break;
}

function ObtenerCliente(){
    $resultado = (new usuario())->ObtenerClienteDAO();
    echo json_encode($resultado);
}

function loginUsuario(){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuario())->loginUsuarioModel($usuario, $contraseña);
    echo json_encode($resultado);
}

function registerUsuario()
{   
    
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $resultado = (new usuario())->registerUsuarioModel($usuario, $email, $contraseña);
    echo json_encode($resultado);
}
?>