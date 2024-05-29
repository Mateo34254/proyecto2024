<?php

require_once "../Connection/Connection.php";

class Cliente {

    public function ObtenerClienteModel(){
        $connection = connection();
        $sql = "SELECT * FROM cliente";
        $respuesta = $connection->query($sql);
        $clientes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $clientes;
    }

    public function RegisterClienteModel($usuario, $email, $contraseña){
        $sql = "INSERT INTO cliente(usuario, email, contraseña) VALUES( '$usuario', '$email', '$contraseña');";
        $connection = connection();
        $respuesta = $connection->query($sql);
        return $respuesta;
    }

}
?>