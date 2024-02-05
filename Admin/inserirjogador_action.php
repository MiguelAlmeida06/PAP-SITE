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


	
	$sql = "insert into jogadores values ($id_jogador, '$nome_jogador', '$naturalidade_jogador', '$nascimento_jogador', '$cc_jogador', '$altura_jogador', '$numero_jogador', '$posicao_jogador', '$foto_jogador', '$escalao_jogador', '$amarelos_jogador', '$vermelhos_jogador', '$jogos_jogador', '$minutos_jogados', '$minutos_jogo', '$golos_marcados')";
	
	if (mysqli_query($conexao, $sql))
		header("location:informacoesjogadores.php");
	else
		echo "Erro na inserção do Jogador!! <br> <br> " . $sql;
	
	mysqli_close($conexao);
?>