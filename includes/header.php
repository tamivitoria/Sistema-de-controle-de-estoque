<?php

include 'config.php';

?>
<!DOCTYPE html>
<html lang="pt-br">
	<meta charset="UTF-8">
	<head>
		<title>Estoque</title>
		<!-- Arquivos CSS -->
		<!-- Alguns parametros puxado do bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
		<link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		<link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
		<link href="assets/vendor/aos/aos.css" rel="stylesheet">

		<!-- Link do css  -->
		<link href="assets/css/style.css" rel="stylesheet">


	</head>
	<body>
		<header id="header" class="fixed-top">
		  <div class="container">

		    <div class="logo float-left">
		      <h1 class="text-light"><a href="index.php"><span>CONTROLE DE ESTOQUE</span></a></h1>
		    </div>

		      <nav class="nav-menu float-right d-none d-lg-block">
		        <ul>
		          <li class="active"><a href="index.php">Pagina Inicial</a></li>
		          <li class="drop-down"><a href="">Cadastrar</a>
		            <ul>
		              <li><a href="cadastro_prod.php">Produtos</a></li>
		              <li><a href="cadastro_tipo.php">Tipos </a></li>
		            </ul>
		          </li>
		          <li class="drop-down"><a href=""> Consultas </a>
		            <ul>
		              <li><a href="consultar_prod.php">Produtos</a></li>
		              <li><a href="consultar_tipo.php">Tipos </a></li>
		            </ul>
		          </li>
		        </ul>
		      </div>
		          
		      </nav>
		  </div>

		</header>

		<div class="container">
		
