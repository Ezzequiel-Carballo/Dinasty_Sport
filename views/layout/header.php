<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Dinasty Sport</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/style.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- box iconos -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	</head>
	<body>
		<!-- CABECERA -->
		<header class="header">
			<div class="hbox">
				<div class="logo">
					<a href="<?= base_url?>">
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
					<button id="user"><i class='bx bx-user-circle'></i></button>
					<button id="carrito"><i class='bx bxs-cart'></i></button>
					
					<div class="block_login">
						<?php if(!isset($_SESSION['identity']) && !isset($_SESSION['admin'])):?>
							<a href="<?= base_url?>users/session">Iniciar Sesion</a>
							<a href="<?= base_url?>users/register">Registrate</a>
						<?php elseif (isset($_SESSION['identity']) && $_SESSION['admin'] == true):?>
							<h2>Bienvenido Administrador</h2>
							<a href="<?= base_url?>producto/crear">Agregar Producto</a>
							<a href="<?= base_url?>marca/crear">Agregar Marca</a>
							<a href="<?= base_url?>categoria/crear">Agregar Categoria</a>
							<a href="<?= base_url?>categoria/crearColor">Agregar Color</a>
							<a href="<?= base_url ?>users/logout" class="btn_out">Cerrar Session</a>
						<?php elseif (isset($_SESSION['identity']) && $_SESSION['admin'] === false): ?>
							<h2>Bienvenido Usuario</h2>
							<!-- Puedes agregar enlaces específicos para usuarios aquí -->
							<a href="<?= base_url ?>users/profile">Mi Perfil</a>
							<a href="<?= base_url ?>users/logout" class="btn_out">Cerrar Session</a>
						<?php endif;?>
					</div>
					<div class="carrito">
						<div class="seccion_carrito">
							<div class="carrito_cross" id="btn_cross"><i class='bx bx-x-circle'></i></div>
							<h1>CARRITO DE COMPRAS</h1>
							<ul>
								<li><h3>PRODUCTOS</h3></li>
								<li><h3>SUB TOTAL</h3></li>
							</ul>
							<div class="carrito_buy">
								<!--<h4>EL CARRITO DE COMPRAS ESTÁ VACÍO.</h4>-->
								<ul>
									<li>
										<img src="<?= base_url?>assets/img/zapatillas 2.jpg">
										<div class="info_buy">
											<h2>name</h2>
											<div class="info_cant">
												<button>-</button>
												<h3>10</h3>
												<button>+</button>
											</div>
										</div>
										<h3>$30.000</h3>
										<a href="">delete</a>
									</li>
								</ul>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</header>
