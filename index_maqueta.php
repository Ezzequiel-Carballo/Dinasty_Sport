<?php 
	require_once 'config/parameters.php'
?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Dinasty Sport</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/styles.css" />
		<meta name="viewport" content="width=divice-width, initial-scale=1.0"/>

        <!-- box iconos -->
        <link href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
		<!-- CABECERA -->
		<header class="header active">
			<div class="hbox">
				<div class="logo">
					<a href="">
						<h1>Dinasty</h1>
						<p>SPORT</p>
					</a>
				</div>

				<nav class="nav">
					<ul>
						<li>
							<a href="#">CATEGORIA</a>
							<ul>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
							</ul>
							
						</li>
						<li>
							<a href="#">CATEGORIA</a>
						</li>
						<li>
							<a href="#">CATEGORIA</a>
						</li>
						<li><a href="#">CATEGORIA</a>
							<ul>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
							</ul>
						</li>
						<li>
							<a href="#">CATEGORIA</a>
							<ul>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
								<li><a href="#">CATEGORIA</a></li>
							</ul>
						</li>
						<li>
							<a href="#">CATEGORIA</a>
						</li>
					</ul>
				</nav>
				<div class="login">
					<ul>
						<li>
							<div class="menuToggle"></div>
						</li>
						<li>
							<label for="" id="chk"><i class='bx bx-user-circle'></i></label>
							<div class="block_login active">
								<a href="">Iniciar Sesion</a>
								<a href="register.php">Registrate</a>
							</div>
						</li>
						<li><label for=""><i class='bx bxs-cart'></i></label></li>
					</ul>
				</div>
			</div>
		</header>

		<div class="cabezal">
			<img src="<?php base_url?>assets/img/cabezal2.jpg" alt="">
		</div>

		<div class="conteiner">
			<div class="central">
				<div class="boxPublic">
					<a href="">
						<img src="<?php base_url?>assets/img/zapatilla-hombre.jpg">
						<h3>HOMBRES</h3>
					</a>
				</div>
				<div class="boxPublic">
					<a href="">
						<img src="<?php base_url?>assets/img/zapatilla-niños.jpg">
						<h3>NIÑOS</h3>
					</a>
				</div>
				<div class="boxPublic">
					<a href="">
						<img src="<?php base_url?>assets/img/zapatilla-mujer2.jpg">
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
						<a><img src="<?php base_url?>assets/img/fila-logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/Adidas-logo.webp"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/Puma-Logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/topper-logo.jpg"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/Under-Armour-logo.png"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/vanz-logo.jpg"></a>
					</div>
					<div class="slide">
						<a><img src="<?php base_url?>assets/img/nike-Logo.webp"></a>
					</div>
			</div>
		</div>

		<div class="conteiner">
			<div class="central">
				<div class="box">
					<div class="boxImg">
						<a href="">
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/nike-Logo.webp" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/fila-logo.png" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/Adidas-logo.webp" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/Puma-Logo.png" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/topper-logo.jpg" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/Under-Armour-logo.png" class="minImg">
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
							<img src="<?php base_url?>assets/img/zapatillas 2.jpg" alt="">
							<img src="<?php base_url?>assets/img/vanz-logo.jpg" class="minImg">
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

		<!-- PIE DE PÁGINA -->
		
		<div class="conteiner_footer">
			<div class="footer_contact">
				<div class="mediosPagos">
					<h3>MEDIOS DE PAGOS</h3>
					<ul class="pagos">
						<li><img src="<?php base_url?>assets/img/cabal-logo-tarjeta.png"></li>
						<li><img src="<?php base_url?>assets/img/visa.jpg"></li>
						<li><img src="<?php base_url?>assets/img/mastercard.png"></li>
						<li><img src="<?php base_url?>assets/img/american-express.jpg"></li>
						<li><img src="<?php base_url?>assets/img/Logo_Naranja.png"></li>
						<li><img src="<?php base_url?>assets/img/mercadopago.webp"></li>
						<li><img src="<?php base_url?>assets/img/mercadopago.webp"></li>
					</ul>
				</div>
				<ul class="contact">
					<h3>CONTACTOS</h3>
					<li><i class='bx bx-envelope'></i><a href="">11-3136-1082</a></li>
					<li><i class='bx bxs-phone-incoming' ></i><a href="">dinastysport@gmail.com</a></li>
					<li><i class='bx bxl-chrome'></i><a href="">visita nuestro Blog</a></li>
					<li><i class='bx bxs-map'></i><a href="">Av.Rio de Janeiro 2024</a></li>
				</ul>
				<div class="redes">
					<h3>REDES SOCIALES</h3>
					<div class="sci">
                        <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
						<a href="#"><i class='bx bx-user-circle'></i></a>
                        
                    </div>
				</div>
			</div>
		</div>

		<div class="conteiner_footer">
            <ul class="footer">
                <li>
                    <p>ZekCode &copy <?= date('Y') ?> - Todos los derechos reservados |</p>
                </li>
                <li>
                    <a href="">Politicas de Privacidad |</a>
                </li>
                <li>
                    <a href="">Terminos y Condiciones </a>
                </li>
            </ul>                  
        </div>
		<script src="js/effect.js"></script>
	</body>
</html>