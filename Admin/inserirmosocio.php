<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['utilizador'])) {
		header("Location: index.php");
		exit;
	}
?>

<html lang = "pt">
	<head>
		<title> Inserir Novo Sócio </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/questionario.css">
	</head>
	<body>
		<center>
		<h1> Inserir Novo Sócio </h1>

		<form action="inserirsocio_action.php" method="POST">
			<p> Id Sócio: <input type="number" name="id_socio" size="15" min="1" max="9999"> </p>
			<p> Nome Sócio: <input type="text" name="nome_socio" size="15" min="1" max="9999"> </p>
			<p> Morada Sócio: <input type="file" name="morada_socio" size="30" maxlength="30"> </p>
			<p> Localidade Sócio: <input type="text" name="localidade_socio" size="30" maxlength="30"> </p>
			<p> CP Sócio: <input type="text" name="cp_socio" size="30" maxlength="30"> </p>
			<p> Nascimento Sócio: <input type="text" name="nascimento_socio" size="30" maxlength="30"> </p>
			<p> TLM Sócio: <input type="text" name="tlm_socio" size="30" maxlength="30"> </p>
			<p> Género Sócio: <input type="text" name="genero_socio" size="30" maxlength="30"> </p>
			<p> Tipo de Cota: <input type="text" name="cota" size="30" maxlength="30"> </p>
			
			<p> <input type="submit" value="Enviar" name="enviar"> 
				<input type="reset" value="Limpar" name="limpar">
			</p>

		</form>
		
		<br> <br>
		
		<button><a href="admin.php"> Voltar </a></button>

		</center>
	</body>
</html>