<?php

include 'conexion.php';

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$tema = $_POST['tema'];

$sql_registro = "INSERT INTO oradores VALUES (NULL, '$nombre', '$apellido', '$email', '$tema')";

$registro = mysqli_query($conexion, $sql_registro);

if ($registro) {
    echo '<script type="text/javascript">
    alert("Has sido correctamente registrado/a");
    window.location.href="index.php";
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Ha ocurrido un error en tu registro. Intenta nuevamente");
    window.location.href="index.php";
    </script>';
}
