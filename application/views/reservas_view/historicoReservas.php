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
                    <a class="nav-link-color nav-link" href="<?=base_url()?>Reserva/mostrarHistoricoReservas">Mis Reservas</a>
                </li>
            </ul>
            <form action="<?=base_url()?>Usuario/logout" method="post" class="form-inline my-2 my-lg-0">
                <button type="submit" class="btn btn-outline-light my-2 my-sm-0" type="button">Salir</button>
            </form>
        </div>
    </nav>
</section>
<section class="bg-reserva">
    <div class="container p-2">
        <div class="row justify-content-center">
            <div class="p-2">
                <h3>Mis Reservas</h3>
            </div>
            <table class="table table-hover text-center">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora</th>
                <th scope="col">Cancelar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td><button type="button" class="btn btn-danger"><img src="<?=base_url()?>/assets/icons/x-2x.png" alt=""></button></td>
                </tr>
            </tbody>
            </table>
        </div>
    </div>
</section>