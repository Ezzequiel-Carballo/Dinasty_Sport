<div class="form">	
	<ul>
		<li>
			<a href="<?=base_url?>">Inicio </a><span>/</span>
			<a href="<?=base_url?>users/register">Mi Cuenta</a><span>/</span>
			<h3>Crear Colores</h3>
		</li>
	</ul>

	<p>Crear Nuevo Color.</p>

    <form action="<?= base_url?>categoria/saveColor" method="POST">
		<label for="name">NOMBRE</label>
		<input type="text" name="name" placeholder="Escribe tu Nombre..."/>
		
		<input type="submit" value="CREAR COLOR" class="btn-submit" />
	</form>
</div>