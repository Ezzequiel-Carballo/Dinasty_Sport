
<div class="form">	
	<ul>
		<li>
			<a href="<?=base_url?>">Inicio </a><span>/</span>
			<a href="<?=base_url?>users/register">Mi Cuenta</a><span>/</span>
			<h3>Crear Marca</h3>
		</li>
	</ul>

	<?php if(isset($_SESSION['marca']) && $_SESSION['marca'] == 'complete'):?>
		<p class="alert-green">Se creo correctamente la marca</p>
	<?php elseif(isset($_SESSION['marca']) && $_SESSION['marca'] == "failed"):?>
		<p class="alert-error">Ahi un error en el registro.</p>
	<?php else:?>
		<p>Crear la nueva marca.</p>
	<?php endif;?>
	<?php Utils::deleteSession('marca');?>

    <form action="<?= base_url?>marca/save" method="POST" enctype="multipart/form-data">
		<label for="name">NOMBRE</label>
		<input type="text" name="name" placeholder="Escribe tu Nombre..."/>
		<?php echo isset($_SESSION['errores']) ? Utils::mostrarError($_SESSION['errores'], 'name') : ''; ?>
		
		<label for="logo">Imagen Principal</label>
        <input type="file" name="logo"/>
		
		<input type="submit" value="CREAR MARCA" class="btn-submit" />
	</form>
</div>