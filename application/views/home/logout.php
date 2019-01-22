<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="pt-5">
          <img class="mx-auto d-block logo-size" src="<?=base_url()?>assets/img/logoph.png" alt="logo padel house">
          <h3 class="mt-5 text-center" >Jugar al pádel nunca fué tan facil</h3>
        </div>
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log in</h5>
            <form action="" class="form-signin" method="post">
              <div class="form-label-group">
                <input type="text" id="inputUsuario" name="user" class="form-control" placeholder="Usuario">
                <label for="inputUsuario">Usuario</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPwd" name="pwd" class="form-control" placeholder="Contraseña">
                <label for="inputPwd">Contraseña</label>
              </div>

              <hr>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Conectarse</button>
              <a class="d-block text-center mt-2 small" href="<?=base_url()?>Home/registro">Sign In</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

