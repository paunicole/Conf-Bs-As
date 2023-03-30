<?php

include 'conexion.php';

$id_orador = $_POST['id_orador'];

$sql_delete = "DELETE FROM oradores WHERE id_orador = '$id_orador'";

$resultado_delete = mysqli_query($conexion, $sql_delete);

if ($resultado_delete) {
    echo '<script type="text/javascript">
    alert("Se eliminó el orador");
    window.location.href="index.php";
    </script>';
} else {
    echo '<script type="text/javascript">
    alert("Has ocurrido un error en la eliminación. Intenta nuevamente");
    window.location.href="index.php";
    </script>';
}
