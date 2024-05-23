<?php

require_once "../Conexion/Conexion.php";

class Cliente {

    public function ObtenerClienteModelo(){
        $connection = connection();
        $sql = "SELECT * FROM cliente";
        $respuesta = $connection->query($sql);
        $usuarios = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $clientes;
    }

    public function RegisterCliente($usuario, $email, $contraseña){
        $sql = "INSERT INTO cliente(usuario, email, contraseña) VALUES( '$usuario', '$email', '$contraseña');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

}
?>