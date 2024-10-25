<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);

} catch (\Throwable $th) {
    var_dump($th);
}