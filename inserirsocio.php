<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['utilizador'])) {
		header("Location: index.php");
		exit;
	}
?>

<html lang = "pt">
	<head>
		<title> Faz-te Sócio </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/questionario.css">
		<link rel="shortcut icon" type="image/svg" href="img/logo.svg"/>
	</head>
	<body>
		<center>
		<img src="img/logo.svg" class="logofaztesocio">
		<h1> Faz-te Sócio </h1>

		<form action="inserirsocio_action.php" method="POST">
			<p> Nome de sócio: <input type="number" name="id" size="15" min="1" max="9999"> </p>
			<input type="radio" id="html" name="fav_language" value="masculino">
			<label for="masculino">Masculino</label><br>
			<input type="radio" id="css" name="fav_language" value="femenino">
			<label for="femenino">Femenino</label><br>
			<p> Morada: <input type="file" name="imagem" size="30" maxlength="30"> </p>
			<p> Localidade: <input type="text" name="descricao" size="30" maxlength="30"> </p>
			<p> Código Postal: <input type="text" name="descricao" size="30" maxlength="30"> </p>
			<p> Data de Nascimento: <input type="text" name="descricao" size="30" maxlength="30"> </p>
			<p> Numero Telemóvel: <input type="number" name="descricao" size="30" maxlength="30"> </p>
			
			<p> <input type="submit" value="Enviar" name="enviar"> 
				<input type="reset" value="Limpar" name="limpar">
			</p>

		</form>
		
		<br> <br>
		
		<button><a href="menu.php"> Voltar </a></button>

		</center>
	</body>
</html>