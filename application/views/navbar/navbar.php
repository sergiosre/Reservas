<!-- Navbar -->
<section>
    <nav class="navbar navbar-expand-lg navbar-light navbar-color">
        <a class="navbar-brand" href="<?=base_url()?>"><img class="img-nav" src="<?=base_url()?>assets/img/logoph.png" alt=""></a>
        <button class="btn-color-nav navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link-color nav-link" href="<?=base_url()?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-color nav-link" href="<?=base_url()?>Reserva/proximosPartidos">Próximos Partidos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link-color nav-link" href="<?=base_url()?>Reserva/historialPartidos">Historial de Partidos</a>
                </li>
            </ul>
            <form action="<?=base_url()?>Usuario/logout" method="post" class="form-inline my-2 my-lg-0">
                <button type="submit" class="btn btn-outline-light my-2 my-sm-0" type="button">Salir</button>
            </form>
        </div>
    </nav>
</section>