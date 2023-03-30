<?php

$conexion = mysqli_connect("localhost", "root", "password", "conf_bs_as");

if (mysqli_connect_errno()) {
    echo "Se produjo un error en la conexión a la base de datos";
}