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
	$id_jogador = $_POST["id_jogador "];
	$nome_jogador = $_POST["nome_jogador"];
	$naturalidade_jogador = $_POST["naturalidade_jogador"];
	$nascimento_jogador = $_POST["nascimento_jogador"];
	$cc_jogador = $_POST["cc_jogador"];
	$altura_jogador = $_POST["altura_jogador"];
	$numero_jogador = $_POST["numero_jogador"];
	$posicao_jogador = $_POST["posicao_jogador"];
	$foto_jogador = $_POST["foto_jogador"];
	$escalao_jogador = $_POST["escalao_jogador"];
	$amarelos_jogador = $_POST["amarelos"];
	$vermelhos_jogador = $_POST["vermelhos"];
	$jogos_jogador = $_POST["jogos"];
	$minutos_jogados = $_POST["minutos_jogados	"];
	$minutos_jogo = $_POST["minutos_jogo"];
	$golos_marcados = $_POST["golos_marcados"];

	// Comando para alterar os dados na BD
	$sql = "update jogadores set nome_jogador = '$nome_jogador', naturalidade_jogador = '$naturalidade_jogador', nascimento_jogador = '$nascimento_jogador', cc_jogador = '$cc_jogador', altura_jogador = '$altura_jogador', numero_jogador = '$numero_jogador', posicao_jogador = '$posicao_jogador', foto_jogador = '$foto_jogador', escalao_jogador = '$escalao_jogador', amarelos = '$amarelos_jogador', vermelhos = '$vermelhos_jogador', jogos = '$jogos_jogador', minutos_jogados = '$minutos_jogados', minutos_jogo = '$minutos_jogo', golos_marcados = '$golos_marcados' where id_jogador = $id_jogador";
		
	// Executar comando SQL
	if (mysqli_query($ligacao, $sql)) 
		header("location:informacoesjogadores.php");  // Chama a pagina informacoesjogadores.php
	else
		echo "Erro na alteração do Jogador! <br> <br>" . $sql;
	
	// Fecha a ligação à BD
	mysqli_close($ligacao);
?>	
