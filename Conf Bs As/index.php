<?php
include 'header.html';
?>



<main>
    <div class="imagen_portada d-flex flex-column justify-content-center align-items-end">
        <p class="h2 text-white">Conf Bs As</p>

        <div class="row">
            <div class="col-7"></div>
            <p class="text-white text-end col-5">
                Bs As llega por primera vez a Argentina. Un evento para compartir
                con nuestra comunidad el conocimiento y experiencia de los expertos
                que están creando el futuro de Internet. Ven a conocer a miembros
                del evento, a otros estudiantes de Codo a Codo y los oradores de
                primer nivel que tenemos para ti. Te esperamos!
            </p>
        </div>

        <div class="botones_header">
            <a class="btn btn-primary-outline text-white border border-white" href="index.php#registro">
                Quiero ser orador
            </a>
            <a class="btn btn-success boton_comprar" href="comprar.html">Comprar tickets</a>
        </div>
    </div>
</main>

<section class="container mt-5">
    <p class="text-uppercase text-center mb-0">Conoce a los</p>
    <h2 class="text-uppercase text-center">Oradores</h2>

    <div class="d-flex ms-5 me-5">
        <div class="card me-3">
            <img src="imagenes_integrador_front/steve.jpg" class="card-img-top" alt="Jobs" />
            <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-info text-white">React</span>
                <h5 class="card-title">Steve Jobs</h5>
                <p class="card-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                    urna orci, laoreet ac luctus gravida, tristique eu sem. Aenean
                    malesuada ullamcorper elit eget accumsan. Phasellus blandit ante
                    at dui accumsan varius.
                </p>
            </div>
        </div>
        <div class="card me-3">
            <img src="imagenes_integrador_front/bill.jpg" class="card-img-top" alt="Gates" />
            <div class="card-body">
                <span class="badge bg-warning text-dark">JavaScript</span>
                <span class="badge bg-info text-white">React</span>
                <h5 class="card-title">Bill Gates</h5>
                <p class="card-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                    urna orci, laoreet ac luctus gravida, tristique eu sem. Aenean
                    malesuada ullamcorper elit eget accumsan. Phasellus blandit ante
                    at dui accumsan varius.
                </p>
            </div>
        </div>
        <div class="card">
            <img src="imagenes_integrador_front/ada.jpeg" class="card-img-top" alt="Lovelace" />
            <div class="card-body">
                <span class="badge bg-secondary">Negocios</span>
                <span class="badge bg-danger">Startups</span>
                <h5 class="card-title">Ada Lovelace</h5>
                <p class="card-text mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam
                    urna orci, laoreet ac luctus gravida, tristique eu sem. Aenean
                    malesuada ullamcorper elit eget accumsan. Phasellus blandit ante
                    at dui accumsan varius.
                </p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="row mt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide col-6 pe-0" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imagenes_integrador_front/hawaii.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="imagenes_integrador_front/hawaii2.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="imagenes_integrador_front/hawaii3.jpg" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="imagenes_integrador_front/honolulu.jpg" class="d-block w-100" alt="..." />
                </div>
            </div>
        </div>

        <div class="col-6 bg-oscuro pe-0">
            <h3 class="text-white mt-3">Bs As - Octubre</h3>
            <p class="text-white pe-3 parrafo_descripcion">
                Buenos Aires es la provincia y localidad más grande del estado de
                Argentina, en los Estados Unidos. Honolulu es la más sureña entre
                las principales ciudades estadounidenses. Aunque el nombre de
                Honolulu se refiere al área urbana en la costa sureste de la isla de
                Oahu, la ciudad y el condado de Honolulu han formado una
                ciudad-condado consolidada que cubre toda la ciudad (aproximadamente
                600km<sup>2</sup> de superficie).
            </p>
            <button class="btn btn-primary-outline text-white border border-white">
                Conocé más
            </button>
        </div>
    </div>
</section>

<section class="mt-5" id="registro">
    <p class="text-uppercase text-center mb-0">Conviértete en un</p>
    <h2 class="text-uppercase text-center">Orador</h2>
    <p class="text-center">
        Anótate como orador para dar una
        <abbr title="Acá va el significado de la abreviatura">charla ignite</abbr>. Cuéntanos de qué quieres hablar!
    </p>
    <form action="registro.php" method="POST">
        <div class="d-flex justify-content-center">
            <input type="text" name="nombre" placeholder="Nombre" class="col-3 me-1" maxlength="30" required>
            <input type="text" name="apellido" placeholder="Apellido" class="col-3" maxlength="30" required>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <input type="email" name="email" placeholder="Correo electrónico" class="col-6" maxlength="40" required>
        </div>
        <div class="row mt-3">
            <div class="col-3 p-0 m-0"></div>
            <div class="form-floating col-6 ps-0 pe-0">
                <textarea class="form-control" name="tema" placeholder="Leave a comment here" style="height: 100px" maxlength="200" required></textarea>
                <label class="fs-4 text-secondary pt-1">Sobre qué quieres hablar?</label>
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
            <button class="btn w-50 boton_enviar">Enviar</button>
        </div>
    </form>
</section>


<?php
include 'footer.html';
?>