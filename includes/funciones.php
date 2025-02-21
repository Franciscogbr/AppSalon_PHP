<?php

function obtener_servicios(){
    try {
        //Traer las credenciales
        require 'database.php';
        // Consulta SQL
        $sql="SELECT * FROM  servicios;";
        // Realizar la consulta
        $consulta = mysqli_query($db,$sql);

        //Cerrar la conexión(Opcional)
        $resultado = mysqli_close($db);
        echo $resultado;
        
        return $consulta;
        
    } catch (\Throwable $th)   { 
        var_dump($th);

    }
}
obtener_servicios();