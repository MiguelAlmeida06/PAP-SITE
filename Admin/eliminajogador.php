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
	
	$id_jogador = $_GET["id_jogador"];
	
	$sql = "delete from jogadores where id_jogador = $id_jogador";
	

   // Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:informacoesjogadores.php");  // Chama a pagina imagenscidade.php
	else
		echo "Erro na eliminação do Jogador! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	