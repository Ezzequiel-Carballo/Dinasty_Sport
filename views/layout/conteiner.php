<div class="conteiner">
			<div class="central">
				<div class="boxPublic">
					<a href="">
						<img src="<?= base_url?>assets/img/zapatilla-hombre.jpg">
						<h3>HOMBRES</h3>
					</a>
				</div>
				<div class="boxPublic">
					<a href="">
						<img src="<?= base_url?>assets/img/zapatilla-niños.jpg">
						<h3>NIÑOS</h3>
					</a>
				</div>
				<div class="boxPublic">
					<a href="">
						<img src="<?= base_url?>assets/img/zapatilla-mujer2.jpg">
						<h3>MUJERES</h3>
					</a>
				</div>
				</div>
			</div>
		</div>

		<div class="conteiner">
			<div class="central">
				<div class="slider-track">
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/fila-logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/Adidas-logo.webp"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/Puma-Logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/topper-logo.jpg"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/Under-Armour-logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/vanz-logo.jpg"></a>
					</div>
					<div class="slide">
						<a><img src="<?= base_url?>assets/img/nike-Logo.webp"></a>
					</div>
			</div>
		</div>

		<?php $product = Utils::showProduct();?>

		<div class="conteiner">
			<div class="central">
				<?php while($pro = $product->fetch_object()):?>
				<div class="box">
					<div class="boxImg">
						<a href="<?= base_url?>producto/detail&id=<?= $pro->id?>">
							<img src="<?= base_url?>assets/img/<?= $pro->image?>">
							<img src="<?= base_url?>assets/img/nike-Logo.webp" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a><?= $pro->name?></a>
						<h4>$ <?= $pro->precio?></h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$ <?= $pro->oferta?></h4>
					</div>
				</div>
				<?php endwhile;?>
			</div>
		</div>