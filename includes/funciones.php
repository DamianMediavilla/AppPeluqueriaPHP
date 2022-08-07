<?php

function obtenerServicios(): array
{

    try {
        require 'includes/database.php';
        $db->set_charset("utf8");
        $comando = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $comando);


        //  echo "<pre>";
        //  var_dump(mysqli_fetch_assoc($consulta)); // fetch_all nos retorna todo // fetch_array fetch_assoc
        // echo "</pre>";
        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['ID'];
            $servicios[$i]['nombre'] = $row['Nombre'];
            $servicios[$i]['precio'] = $row['Precio'];
            $i++;
        }
        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}
