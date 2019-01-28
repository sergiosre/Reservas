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
                    <a class="nav-link-color nav-link" href="<?=base_url()?>Reserva/misReservas">Mis Reservas</a>
                </li>
            </ul>
            <form action="<?=base_url()?>Usuario/logout" method="post" class="form-inline my-2 my-lg-0">
                <button type="submit" class="btn btn-outline-light my-2 my-sm-0" type="button">Salir</button>
            </form>
        </div>
    </nav>
</section>
<!-- Perfil -->
<section class="perfil">
    <div class="container-fluid px-2">
        <div class="container">
            <div class="row pt-4 justify-content-center">
                <div class="d-flex mt-1 flex-column col px-0 align-items-center">
                    <figure class="img-pr-size rounded-circle bg-white">
                        <img class="img-fluid" src="<?=base_url()?>assets/img/profile.png" alt="Foto">
                    </figure>
                    <h3><?=$_SESSION['usuario']?></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Reserva -->
<section class="bg-reserva">
    <div class="container">
        <div class="row justify-content-center">
            <span id="confirmacion"></span>
            <form method="post">
                <div class="p-2">
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" name="fecha" id="datepicker" placeholder="Fecha" onchange="mostrarHoras()"/>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </div>
                        <div class="col">
                            <select name="hora" id="hora" class="form-control custom-select" width="276"></select>
                        </div>
                        <div class="col">
                            <input type="button" onclick="reserva()" class="form-control btn btn-success" type="button" value="Reservar"/>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


