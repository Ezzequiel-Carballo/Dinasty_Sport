
<div class="form">	
	<ul>
		<li>
			<a href="<?=base_url?>">Inicio </a><span>/</span>
			<a href="<?=base_url?>users/register">Mi Cuenta</a><span>/</span>
			<h3>Login</h3>
		</li>
	</ul>

	<form action="<?=base_url?>users/login" method="POST">
		<label for="email">EMAIL</label>
		<input type="email" name="email"/>
		
		<label for="password">PASSWORD</label>
		<input type="password" name="password" />
		<a href="">¿Olvidaste tu contraseña?</a>

		<input type="submit" value="INICIAR SESION" class="btn-submit" />
	</form>

	<div class="iniSession">
		<p>¿no tenes una cuenta?</p><a href="<?=base_url?>users/register">Registrarse</a>
	</div>
</div>