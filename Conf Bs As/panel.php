<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if ($usuario == 'admin' and $clave == 123456) {

    include 'header.html';

    include 'conexion.php';

    $sqlquery = "SELECT * FROM oradores";
    $consulta = mysqli_query($conexion, $sqlquery);
?>

    <div class="container">

        <h2 class="my-5 text-uppercase text-center">Panel de administración</h2>
        <h4 class="mb-3 ">Oradores</h4>
        <table class="table table-hover mt-3">

            <thead>
                <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Tema</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                <?php while ($listado = mysqli_fetch_array($consulta)) { ?>
                    <tr>
                        <td> <?php echo $listado['apellido'] ?> </td>
                        <td> <?php echo $listado['nombre'] ?> </td>
                        <td> <?php echo $listado['email'] ?> </td>
                        <td> <?php echo $listado['tema'] ?> </td>
                        <form action="editar.php" method="POST">
                            <td> <button class="btn btn-success" value=<?php echo $listado['id_orador']; ?> name='id_orador'>Editar</button> </td>
                        </form>
                        <form action="eliminar.php" method="POST">
                            <td> <button class="btn btn-danger" value=<?php echo $listado['id_orador']; ?> name='id_orador'>Eliminar</button> </td>
                        </form>

                    </tr>
                <?php } ?>
            </tbody>
        </table>



    </div>

<?php

} else {
    echo '<script type="text/javascript">
    alert("No estás habilitado para ingresar");
    window.location.href="index.php";
    </script>';
}
