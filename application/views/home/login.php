<!-- Login -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="pt-5">
					<img class="mx-auto d-block logo-size" src="<?=base_url()?>assets/img/logoph.png" alt="logo padel house">
					<h3 class="mt-5 text-center">Jugar al pádel nunca fué tan facil</h3>
				</div>
				<div class="card card-signin flex-row my-5">
					<div class="card-body">
						<h5 class="card-title text-center">Log in</h5>
						<form action="Usuario/loginPost" class="form-signin" method="post">
							<div class="form-label-group">
								<input type="text" id="inputUsuario" name="user" class="form-control" placeholder="Usuario">
								<label for="inputUsuario">Usuario</label>
							</div>
							<div class="form-label-group">
								<input type="password" id="inputPwd" name="pwd" class="form-control" placeholder="Contraseña">
								<label for="inputPwd">Contraseña</label>
							</div>

							<hr>

							<button class="btn btn-lg btn-block btn-login" type="submit">Iniciar sesión</button>
							<button class="mt-2 btn btn-lg btn-block btn-login" type="button" onclick="window.location.href='<?=base_url()?>Usuario/registrarse'">Registrarse</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Regsitrate -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="text-center">
					<p>Paso 1</p>
					<h3>Regístrate o inicia sesión</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Reseva tu pista -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="text-center">
					<p>Paso 2</p>
					<h3>Reserva tu pista</h3>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Juega! -->
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-xl-9 mx-auto">
				<div class="text-center">
					<p>Paso 3</p>
					<h3>¡Juega!</h3>
				</div>
			</div>
		</div>
	</div>
</section>
