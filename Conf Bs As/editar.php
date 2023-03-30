<?php

include 'header.html';

include 'conexion.php';

$id_orador = $_POST['id_orador'];

$sql_query = "SELECT * FROM oradores WHERE id_orador = '$id_orador'";
$consulta = mysqli_query($conexion, $sql_query);

$orador = mysqli_fetch_array($consulta);



?>
<div class="container mt-5">
    <h2 class="text-center my-3">Editar orador</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_orador" value=<?php echo $orador['id_orador']; ?>>
        <div class="d-flex justify-content-center">
            <input type="text" name="nombre" placeholder="Nombre" value=<?php echo $orador['nombre']; ?> class="col-3 me-1" maxlength="30" required>
            <input type="text" name="apellido" placeholder="Apellido" value=<?php echo $orador['apellido']; ?> class="col-3" maxlength="30" required />
        </div>
        <div class="d-flex justify-content-center mt-3">
            <input type="email" name="email" value=<?php echo $orador['email']; ?> placeholder="Correo electrónico" class="col-6" maxlength="40" required>
        </div>
        <div class="row mt-3">
            <div class="col-3 p-0 m-0"></div>
            <div class="form-floating col-6 ps-0 pe-0">
                <textarea class="form-control" name="tema" style="height: 100px" maxlength="200" required><?php echo $orador['tema']; ?> </textarea>
                <label class="fs-5 text-secondary pt-1">Sobre qué quieres hablar?</label>
            </div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mt-2 p-0 text-secondary">
                <p class="formulario_help">
                    Recuerda incluir un título para tu charla
                </p>
            </div>
            <div class="col-3"></div>
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn w-50 boton_enviar">Guardar cambios</button>
        </div>
    </form>
</div>