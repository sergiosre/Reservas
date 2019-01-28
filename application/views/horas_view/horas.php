<section class="bg-reserva">
    <div class="container">
        <div class="row justify-content-center">
            <form>
                <div class="p-2">
                    <div class="form-row">
                        <div class="col">
                            <input class="form-control" id="datepicker" placeholder="Fecha"/>
                            <script>
                                $('#datepicker').datepicker({
                                    uiLibrary: 'bootstrap4'
                                });
                            </script>
                        </div>
                        <div class="col">
                            <select class="form-control custom-select" width="276">
                                <?php foreach ($horas as $hora): ?>
                                    <option><?=$hora->hora?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="col">
                            <button class="form-control btn btn-success" type="button">Reservar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
