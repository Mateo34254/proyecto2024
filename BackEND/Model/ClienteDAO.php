<?php

require_once "../Connection/Connection.php";

//Clase Cliente que contiene un método ObtenerClienteModelo 
class Cliente {
//Funcion ObtenerClienteModelo que 
    public function ObtenerClienteDAO(){
        $connection = connection();
        $sql = "SELECT * FROM cliente";
        $respuesta = $connection->query($sql);
        $clientes = $respuesta->fetch_all(MYSQLI_ASSOC);
        return $clientes;
    }
}
?>
