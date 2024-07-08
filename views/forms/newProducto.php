
<div class="form">	
	<ul>
		<li>
			<a href="<?=base_url?>">Inicio </a><span>/</span>
			<a href="<?=base_url?>users/register">Mi Cuenta</a><span>/</span>
			<h3>Crear Producto</h3>
		</li>
	</ul>

	<?php if(isset($_SESSION['producto']) && $_SESSION['producto'] == 'complete'):?>
		<p class="alert-green">Se creo el producto correctamente.</p>
	<?php elseif(isset($_SESSION['producto']) && $_SESSION['producto'] == "failed"):?>
		<p class="alert-error">Ahi un error en el registro.</p>
	<?php else:?>
		<p>Crea un nuevo producto.</p>
	<?php endif;?>
	<?php Utils::deleteSession('producto');?>

    <form action="<?= base_url?>producto/save" method="POST" enctype="multipart/form-data">
	<?php $marca = utils::showMarcas();?>
	<?php $categorias = utils::showCategorias();?>
	<?php $color = utils::showColores();?>
		
		<label for="name">NOMBRE</label>
		<input type="text" name="name">

		<label for="categoria">CATEGORIA</label>
		<select name="categoria">
		<?php while($cat = $categorias->fetch_object()):?>
			<option value="<?= $cat->name?>"><?= $cat->name?></option>
		<?php endwhile;?> 
		</select>		
		
		<label for="marca">MARCA</label>
		<select name="marca">
		<?php while($logo = $marca->fetch_object()):?>
			<option value="<?=$logo->name?>"><?=$logo->name?></option>
		<?php endwhile;?> 
		</select>

		<label for="genero">GENERO</label>
		<select name="genero">
			<option value="hombre">Hombre</option>
			<option value="mujer">Mujer</option>
			<option value="niños">Niños</option>
		</select>

		<label for="color">COLOR</label>
		<select name="color">
		<?php while($col = $color->fetch_object()):?>
			<option value="<?=$col->name?>"><?=$col->name?></option>
		<?php endwhile;?> 
		</select>
		
		<label for="description">DESCRIPCION</label>
        <textarea name="description"></textarea>

		<label for="precio">PRECIO</label>
		<input type="float" name="precio"/>

		<label for="stock">STOCK</label>
		<input type="number" name="stock" min="1" max="200"/>

		<label for="image">FOTOGRAFIA</label>
        <input type="file" name="image">

		<label for="image_path">FOTOGRAFIA</label>
        <input type="file" name="image_path">

		<label for="image_post">FOTOGRAFIA</label>
        <input type="file" name="image_post">
		
		<input type="submit" value="CREAR PRODUCTO" class="btn-submit" />
	</form>
</div>