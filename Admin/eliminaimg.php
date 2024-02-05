<?php 
	if (!isset($_SESSION)) session_start();
	
	if (!isset($_SESSION['utilizador']))	{
		header("Location: index.php");
		exit;
	}
	
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "saopaio";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	
	$id_img = $_GET["id_img"];
	
	$sql = "delete from imgscidade where id_img = $id_img";
	

   // Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:imagenscidade.php");  // Chama a pagina imagenscidade.php
	else
		echo "Erro na eliminação da imagem da cidade! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	