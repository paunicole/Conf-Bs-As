<?php

include 'header.html';

?>


<div class="container mt-5 mb-5">
    <form action="panel.php" method="POST">

        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario">
            <div id="textHelp" class="form-text">Solo los administradores pueden ingresar</div>
        </div>
        <div class="mb-3">
            <label for="clave" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="clave">
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>

    </form>

</div>