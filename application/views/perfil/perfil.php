<!-- Perfil -->
<section class="perfil">
    <div class="container-fluid px-2">
        <div class="container">
            <div class="row pt-4 justify-content-center">
                <div class="d-flex mt-1 flex-column col px-0 align-items-center">
                    <figure class="img-pr-size rounded-circle bg-white">
                        <img class="img-fluid" src="<?=base_url()?>assets/img/profile.png" alt="Foto">
                    </figure>
                    <h3><?=$this->session->usuario?></h3>
                </div>
            </div>
        </div>
    </div>
</section>