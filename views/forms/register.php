
<div class="form">	
	<ul>
		<li>
			<a href="<?=base_url?>">Inicio </a><span>/</span>
			<a href="<?=base_url?>users/register">Mi Cuenta</a><span>/</span>
			<h3>Login</h3>
		</li>
	</ul>

	<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'):?>
		<p class="alert-green">Te has registrado correctamente, Muchas Gracias.</p>
	<?php elseif(isset($_SESSION['errores']) && $_SESSION['errores'] == "failed"):?>
		<p class="alert-error">Ahi un error en el registro.</p>
	<?php else:?>
		<p>Registrate para hacer tus compras mas rapido y poder gestionar tus pedidos.</p>
	<?php endif;?>
	<?php Utils::deleteSession('register');?>

	<form action="<?= base_url?>users/save" method="POST">
		<label for="name">NOMBRE</label>
		<input type="text" name="name" placeholder="Escribe tu Nombre..."/>
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'name') : ''; ?>
		
		<label for="surname">APELLIDO</label>
		<input type="text" name="surname" placeholder="Escribe tu Apellido..."/>
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'surname') : ''; ?>
		
		<label for="email">EMAIL</label>
		<input type="email" name="email" placeholder="Ej: tunombre@gmail.com"/>
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'email') : ''; ?>
		
		<label for="password">PASSWORD</label>
		<input type="password" name="password" />
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'password') : ''; ?>

		<label for="passAdmin">CONFIRMAR PASSWORD</label>
		<input type="password" name="passAdmin"/>
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'passAdmin') : ''; ?>
		
		<input type="submit" value="CREAR USUARIO" class="btn-submit" />
	</form>

	<?php Utils::borrarErrores();?>
	
	<div class="iniSession">
		<p>¿ya tenes una cuenta?</p><a href="<?=base_url?>users/session">Inicia Sesion</a>
	</div>
</div>