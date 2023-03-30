<?php

include 'conexion.php';

$id_orador = $_POST['id_orador'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$tema = $_POST['tema'];

$sql_update = "UPDATE oradores SET nombre = '$nombre', apellido = '$apellido', email = '$email', tema = '$tema' WHERE id_orador = '$id_orador'";

$update = mysqli_query($conexion, $sql_update);

if ($update) {
    echo '<script type="text/javascript">
    alert("La modificación se ha hecho con éxito");
    window.location.href="index.php";
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Ha ocurrido un error en la modificación. Intenta nuevamente");
    window.location.href="index.php";
    </script>';
}
