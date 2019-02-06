<div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="pt-5">
          <a href="<?=base_url()?>"><img class="mx-auto d-block logo-size" src="<?=base_url()?>assets/img/logoph.png" alt="logo padel house"></a>
        </div>
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Datos de Registro</h5>
            <form name ="registro" action="<?=base_url()?>usuario/crearPost" class="form-signin" method="post">

              <div class="m-1"><span id="nombreError"></span></div>
              <div class="form-label-group">
                <input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Usuario">
                <label for="inputNombre">Nombre</label>
              </div>

              <div class="m-1"><span id="apellidosError"></span></div>
              <div class="form-label-group">
                <input type="text" id="inputApellidos" name="apellidos" class="form-control" placeholder="Apellidos">
                <label for="inputApellidos">Apellidos</label>
              </div>

              <div class="m-1"><span id="emailError"></span></div>
              <div class="form-label-group">
                <input type="text" id="inputEmail" name="correo" class="form-control" placeholder="email">
                <label for="inputEmail">email</label>
              </div>

              <div class="m-1"><span id="usuarioError"></span></div>
              <div class="form-label-group">
                <input type="text" id="inputUsuario" name="user" class="form-control" placeholder="Usuario">
                <label for="inputUsuario">Usuario</label>
              </div>

              <div class="m-1"><span id="pwError"></span></div>
              <div class="form-label-group">
                <input type="password" id="inputPwd" name="pwd" class="form-control" placeholder="Contraseña">
                <label for="inputPwd">Contraseña</label>
              </div>

                <div class="form-label-group">
                  <span id="rppwError"></span>
                  <input type="password" id="inputRepetirPwd" name="pwd" class="form-control" placeholder="Repetir Contraseña">
                  <label for="inputRepetirPwd">Repetir Contraseña</label>
                </div>

                <div class="form-label-group">
                  <span id="urbanizacionError"></span>
                  <input type="text" id="inputUrbanizacion" name="urbanizacion" class="form-control" placeholder="Urbanización">
                  <label for="inputUrbanizacion">Urbanización</label>
                </div>

              <hr>

              <button class="btn btn-lg btn-login btn-block text-uppercase" type="button" onclick="validarRegistro()">Registrarse</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>