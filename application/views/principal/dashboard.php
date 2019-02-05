<!-- Reserva -->
<section class="bg-reserva">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <span id="confirmacion"></span>
            </div>
        </div>
        <div class="row justify-content-center">
            <form method="post">
                <div class="col-12 p-2">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" name="fecha" id="datepicker" placeholder="Fecha" onchange="mostrarHoras()"/>
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


