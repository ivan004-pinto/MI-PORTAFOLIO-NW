<?php
require 'includes/header.php';
?>
    <main class="container">
        <form class="formulario" method="POST" action="index.php">
            <fieldset>
                <legend>digite sus datos</legend>
                <div class="campos">
                    <div class="campo">
                        <label for="nombre">nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="digite nombre completo" required autofocus>
                    </div>
                    <div class="campo">
                        <label for="tel">telefono</label>
                        <input type="number" name="tel" id="tel" placeholder="+57 xxx xxx xxx">
                    </div>
                    <div class="campo">
                        <label for="email">email</label>
                        <input type="text" name="email" id="email" placeholder="correo@correo.com">
                    </div>
                    <div class="campo">
                        <label for="men">mensaje</label>
                        <textarea name="mensaje" id="men"></textarea>
                    </div>
                </div>
                <input type="submit" class="btn" value="Enviar">
            </fieldset>
        </form>
    </main>

<?php

$nombre = $_POST['nombre'];
$telefono = $_POST['tel'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];
try {
    require __DIR__.('/includes/conexion_bd.php');
    $sql = "INSERT INTO formulario (nombre, telefono, correo, mensaje) VALUES 
    ('$nombre', '$telefono', '$correo', '$mensaje');";
    $query = mysqli_query($coneccion, $sql);
    echo' hemos recivido tu mensaje';
} catch (\Throwable $th) {
    var_dump($th);
}

include 'includes/footer.php';
?>