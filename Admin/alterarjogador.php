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
	// Vai buscar a tabelas escolas à BD
	$id_img = $_GET["id_img"];
	$sql = "select * from jogadores where id_jogador = $id_jogador";
	$resultado = mysqli_query($ligacao, $sql);	
	$registo = mysqli_fetch_assoc($resultado)		
?>		
<html lang="pt">
	<head>
		<title> Alterar Informação Jogador </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/questionario.css">
	</head>
	<body>
		<center>
		<h1>  Alterar Informação Jogador </h1>
		<form action="alterarimg_bd.php" method="POST">
			<p> Digite o ID: 
				<input readonly type="number" name="id_img" size="10" min="1" max="9999" 
					value="<?php echo $registo['id_img']; ?>">
			</p>
			<p> Digite Nome do Ficheiro: 
				<input type="text" name="img_cidade" size="40" maxlength="30"
					value="<?php echo $registo['img_cidade']; ?>">
			</p>
			<p> Digite o Nome: 
				<input type="text" name="desc_cidade" size="40" maxlength="50"
					value="<?php echo $registo['desc_cidade']; ?>">
			</p>
			<p>  
				<input type="submit" value="Alterar" name="alterar">
				<input type="reset" value="Limpar" name="limpar">
			</p>
			
		</form>
		
		<br><br>
		
		<button><a href="informacoesjogadores.php"> Voltar </a></button>~

		</center>
	</body>
</html>