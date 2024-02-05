<?php
	if (!isset($_SESSION)) session_start();

	if (!isset($_SESSION['utilizador'])) {
		header("Location: index.php");
		exit;
	}
?>

<html>
	<body>

	<center>
		<h1 style="border:2px solid black;">Menu Principal</h1>

		<button><a href="imagenssocio.php"> <h3> Tabela de Informações Sócios </h3> </a></button>
		<p>
		<button><a href="inserirsocio.php"> <h3> Inserir Novo Sócio </h3> </a></button>
		<p>
		<button><a href="imagensjogadores.php"> <h3> Tabela de Informações Jogadores </h3> </a></button>
		<p>
		<button><a href="inserirjogadores.php"> <h3> Inserir Novo Jogador </h3> </a></button>
		<p>
		<button><a href="imagenstreinador.php"> <h3> Tabela de Informações Treinadores </h3> </a></button>
		<p>
		<button><a href="inserirtreinador.php"> <h3> Inserir Novo Treinador </h3> </a></button>
		<br> <br>

		<button><a href="sair.php"> Sair </a></button>

		<h3 style="border:2px solid black">Trabalho Realizado Por:
		</br>Miguel Almeida </h5>

	</center>

	</body>

</html>