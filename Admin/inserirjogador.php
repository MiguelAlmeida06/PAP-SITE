<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['utilizador'])) {
		header("Location: index.php");
		exit;
	}
?>

<html lang = "pt">
	<head>
		<title> Inserir Novo Jogador </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/questionario.css">
	</head>
	<body>
		<center>
		<h1> Inserir Novo Jogador </h1>

		<form action="inserircidade_action.php" method="POST">
			<p> Id Jogador: <input type="number" name="id_jogador" size="15" min="1" max="9999"> </p>
			<p> Nome Jogador: <input type="file" name="nome_jogador" size="30" maxlength="30"> </p>
			<p> Naturalidade Jogador: <input type="text" name="naturalidade_jogador" size="30" maxlength="30"> </p>
			<p> Nascimento Jogador: <input type="data" name="nascimento_jogador" size="15" min="1" max="9999"> </p>
			<p> CC Jogador: <input type="number" name="cc_jogador" size="15" min="1" max="9999"> </p>
			<p> Altura Jogador: <input type="number" name="altura_jogador" size="15" min="1" max="9999"> </p>
			<p> Numero Jogador: <input type="number" name="numero_jogador" size="15" min="1" max="9999"> </p>
			<p> Posição Jogador: <input type="number" name="posicao_jogador" size="15" min="1" max="9999"> </p>
			<p> Foto Jogador: <input type="number" name="foto_jogador" size="15" min="1" max="9999"> </p>
			<p> Escalão Jogador: <input type="number" name="escalao_jogador" size="15" min="1" max="9999"> </p>
			<p> Amarelos Jogador: <input type="number" name="amarelos_jogador" size="15" min="1" max="9999"> </p>
			<p> Vermelhos Jogador: <input type="number" name="vermelhos_jogador" size="15" min="1" max="9999"> </p>
			<p> Jogos Jogador: <input type="number" name="jogos_jogador" size="15" min="1" max="9999"> </p>
			<p> Minutos Jogados: <input type="number" name="minutos_jogados" size="15" min="1" max="9999"> </p>
			<p> Minutos Jogo: <input type="number" name="minutos_jogo" size="15" min="1" max="9999"> </p>
			<p> Golos Marcados: <input type="number" name="golos_marcados" size="15" min="1" max="9999"> </p>
			
			<p> <input type="submit" value="Enviar" name="enviar"> 
				<input type="reset" value="Limpar" name="limpar">
			</p>

		</form>
		
		<br> <br>
		
		<button><a href="menu.php"> Voltar </a></button>

		</center>
	</body>
</html>