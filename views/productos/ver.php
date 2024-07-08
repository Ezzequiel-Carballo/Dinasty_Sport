
<div class="products">
	<?php $pro = Utils::oneProduct()?>

    <div class="titular">
        <ul>
            <li>
                <a href="<?=base_url?>">Inicio </a><span>/</span>
                <a href="<?=base_url?>users/register"><?= $pro->categoria?></a><span>/</span>
                <h3><?=$pro->name?></h3>
            </li>
        </ul>
    </div>

    <div class="detail">
        <div class="detail-left">
			<div class="imgGroup">
				<ul class="imgLateral">
					<li>
						<img src="<?= base_url?>assets/img/<?= $pro->image?>">
					</li>    
					<li>
						<img src="<?= base_url?>assets/img/<?= $pro->image_path?>">
					</li> 
					<li>
						<img src="<?= base_url?>assets/img/<?= $pro->image_post?>">
					</li>             
				</ul>
				<div class="imgDetail">
					<img src="<?= base_url?>assets/img/<?= $pro->image?>">
				</div>
			</div>

			<div class="description">
				<h3>DESCRIPCION</h3>
				<p><?= $pro->description?></p>

				<h4>ESTADISTICAS</h4>
				<div class="table">
					<ul>
						<li>Tipo de producto</li>
						<li>Proveedor</li>
						<li>Genero</li>
						<li>Marca</li>
						<li>Color</li>
					</ul>
					<ul>
						<li>Zapatilla</li>
						<li>56465</li>
						<li><?= $pro->genero?></li>
						<li><?= $pro->marca?></li>
						<li><?= $pro->color?></li>
					</ul>
				</div>
			</div>
        </div>
		
        <ul class="detail-rigth">
            <li><img src="<?= base_url?>assets/img/<?= $pro->image_logo?>"></li>
            <li><h2><?= $pro->name?></h2></li>
            <li><h3>$ <?= $pro->precio?></h3></li>
            <li><h4><span>6</span> cuotas sin interres <span>$ <?= $pro->oferta?></span></h4></li>
            <li><a href="">ver metodos de pagos</a></li>
            <li><h5>COLOR: <span><?= $pro->color?></span></h5></li>
            <li><h6><?= $pro->color?></h6></li>
            <li class="talle">
                <p>seleccione el talle</p>
                <button id="talle"> Tabla de Talles </button>
            </li>
			<div class="tableTalle">
				<div class="detailTalle">
					<h3>GUIA DE TALLE</h3>
					<span id="cruse"><i class='bx bx-x-circle'></i></span>
					<ul>
						<li><img src="<?= base_url?>assets/img/medida_pie.jpg"></li>
						<li><img src="<?= base_url?>assets/img/talle_hombre.jpg"></li>
						<li><img src="<?= base_url?>assets/img/talle_mujer.jpg"></li>						
					</ul>
				</div>
			</div>
            <li class="box-talle">
                <a href="">36</a>
                <a href="">37</a>
                <a href="">38</a>
                <a href="">39</a>
                <a href="">40</a>
            </li>
            <li  class="btn-carrito"><a href="">AGREGAR AL CARRITO</a></li>
        </ul>
    </div>

    <div class="conteiner">
			<div class="central">
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/nike-Logo.webp" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/fila-logo.png" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/Adidas-logo.webp" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/Puma-Logo.png" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/topper-logo.jpg" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/Under-Armour-logo.png" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/vanz-logo.jpg" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
                <div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?= base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?= base_url?>assets/img/vanz-logo.jpg" class="minImg">
						</a>
					</div>
					<div class="boxText">
						<a>titulo del modelo</a>
						<h4>$10.000,00</h4>
					</div>
					<div class="boxCuotas">
						<p><span>6 </span>cuotas sin interes</p>
						<h4>$2.500,00</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/web-side/DinastySport/assets/js/script.js"></script>

