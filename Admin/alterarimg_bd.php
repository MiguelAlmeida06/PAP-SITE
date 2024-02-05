<?php 
	if (!isset($_SESSION)) session_start();
	
	if (!isset($_SESSION['utilizador']))	{
		header("Location: index.html");
		exit;
	}
	
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "saopaio";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	
	// Receber os dados do formulário
	$id_img = $_POST["id_img"];
	$img_cidade = $_POST["img_cidade"];
	$desc_cidade = $_POST["desc_cidade"];

	// Comando para alterar os dados na BD
	$sql = "update imgscidade set img_cidade = '$img_cidade', desc_cidade = '$desc_cidade' where id_img = $id_img";
		
	// Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:imagenscidade.php");  // Chama a pagina imagenscidade.php
	else
		echo "Erro na alteração da imagem da cidade! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	
