<?php

function obtenerServicios(){
    try {
        //1.Importar una conexión
        require 'database.php';
        $db->set_charset("utf8");
        //2.Escribir el código SQL
        $query = 'SELECT * FROM servicios ';

        $consulta = mysqli_query($db, $query);//se hace la consulta pasando la conexión a la bd y el query

        //Arreglo vacio
        $servicios = [];
        $i = 0;
        //3.Obtener los resultados
        //var_dump( mysqli_fetch_assoc($consulta));//dependiendo del fecth que se use así será el retorno de resultados que haga, */
        
        while( $row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            
            $i++;
        }

            // echo '<pre>';
            // var_dump(json_encode($servicios));
            // echo '</pre>';
        return $servicios;
    } catch (\Throwable $th) {
        //throw $th;
        var_dump($th);
    }
}

obtenerServicios();