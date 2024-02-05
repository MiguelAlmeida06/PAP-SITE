<?php
	if (!isset($_SESSION)) session_start();

		if (!isset($_SESSION['utilizador'])) {
			header("Location: index.php");
			exit;
		}

	$nome_servidor = "localhost";
	$nome_utilizador = "root";
	$palavra_passe = "";
	$base_dados = "sãopaio";
	
	// Ligação à Base de Dados
	$conexao = mysqli_connect($nome_servidor, $nome_utilizador, $palavra_passe, $base_dados);
	
	// Recebe os dados do formulário e mete-os em variáveis
	$id = $_POST["id"];
	$imagem = $_POST["imagem"];
	$descricao = $_POST["descricao"];

	
	$sql = "insert into imgscidade values ($id, '$imagem', '$descricao')";
	
	if (mysqli_query($conexao, $sql))
		header("location:imagenscidade.php");
	else
		echo "Erro na inserção da cidade!! <br> <br> " . $sql;
	
	mysqli_close($conexao);
?>