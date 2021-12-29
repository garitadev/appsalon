<?php

$db = mysqli_connect('localhost', 'root', '1542', 'appservicios'); //conecta a la base de datos

if(! $db){
    echo 'Error en la conexión';
    exit;
}