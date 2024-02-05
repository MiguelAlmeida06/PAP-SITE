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
	
	$id_monumento = $_GET["id_monumento"];
	
	$sql = "delete from monumentos where id_monumento = $id_monumento";
	

   // Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:menu.php");  // Chama a pagina imagenscidade.php
	else
		echo "Erro na eliminação da imagem da cidade! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	