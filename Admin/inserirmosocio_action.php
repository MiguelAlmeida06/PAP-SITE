<?php
	if (!isset($_SESSION)) session_start();

		if (!isset($_SESSION['utilizador'])) {
			header("Location: index.php");
			exit;
		}

	$nome_servidor = "localhost";
	$nome_utilizador = "root";
	$palavra_passe = "";
	$base_dados = "saopaio";
	
	// Ligação à Base de Dados
	$conexao = mysqli_connect($nome_servidor, $nome_utilizador, $palavra_passe, $base_dados);
	
	// Recebe os dados do formulário e mete-os em variáveis
	$id_socio  = $_POST["id_socio"];
	$nome_socio = $_POST["nome_socio"];
	$morada_socio = $_POST["morada_socio"];
	$localidade_socio = $_POST["localidade_socio"];
	$cp_socio = $_POST["cp_socio"];
	$nascimento_socio  = $_POST["nascimento_socio"];
	$tlm_socio  = $_POST["tlm_socio"];
	$genero_socio  = $_POST["genero_socio"];
	$cota  = $_POST["cota"];

	
	$sql = "insert into socios values ($id_socio, '$nome_socio', '$morada_socio', '$localidade_socio','$cp_socio', '$nascimento_socio', '$tlm_socio', '$genero_socio', '$cota')";
	
	if (mysqli_query($conexao, $sql))
		header("location:imagenssocio.php");
	else
		echo "Erro na inserção do Sócio!! <br> <br> " . $sql;
	
	mysqli_close($conexao);
?>