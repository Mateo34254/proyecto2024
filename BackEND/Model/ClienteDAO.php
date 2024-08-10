<?php

require_once "../Connection/Connection.php";

//Clase Cliente que contiene un método ObtenerClienteModelo 
class usuario {
//Funcion ObtenerClienteModelo que 
    public function ObtenerClienteDAO(){
        $connection = connection();
        $sql = "SELECT * FROM cliente";
        $respuesta = $connection->query($sql);
        $clientes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $clientes;
    }

    function registerUsuarioModel($usuario, $email, $contraseña)
{
    $connection = connection();
    $sql = "INSERT INTO usuarios(usuario, email, contraseña ) values ('$usuario','$email','$contraseña')";
    $respuesta = $connection->query($sql);
    return $respuesta;

}

function loginUsuarioModel($usuario, $contraseña){
    $connection = connection();
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' and contraseña= '$contraseña'";
    $respuesta = $connection->query($sql);
    $resultado = $respuesta ->fetch_assoc();
    if($resultado == null ){
        return $resultado;
    }else{
         $_SESSION["usuario"] = $usuario; 
         return "resultado correcto";
        }

    }

}

?>
