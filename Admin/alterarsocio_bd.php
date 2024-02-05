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
	$id_monumento = $_POST["id_monumento"];
	$nome = $_POST["nome"];
	$img_monumento = $_POST["img_monumento"];
	$data_const = $_POST["data_const"];
	$desc_monumento = $_POST["desc_monumento"];

	// Comando para alterar os dados na BD
	$sql = "update monumentos set nome='$nome', img_monumento = '$img_monumento',data_const='$data_const', desc_monumento = '$desc_monumento' where id_monumento = $id_monumento";
		
	// Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:imagensmonumentos.php");  // Chama a pagina imagenscidade.php
	else
		echo "Erro na alteração da imagem do Monumento! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	
