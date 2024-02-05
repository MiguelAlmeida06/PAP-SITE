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
	$id_monumento = $_GET["id_monumento"];
	$sql = "select * from monumentos where id_monumento = $id_monumento";
	$resultado = mysqli_query($ligacao, $sql);	
	$registo = mysqli_fetch_assoc($resultado)		
?>		
<html lang="pt">
	<head>
		<title> Alterar Imagem do Monumento</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/questionario.css">
	</head>
	<body>
		<center>
		<h1>  Alterar Imagem do Monumento </h1>
		<form action="alterarsocio_bd.php" method="POST">
			<p> Digite o ID: 
				<input readonly type="number" name="id_monumento" size="10" min="1" max="9999" 
					value="<?php echo $registo['id_monumento']; ?>">
			</p>
			<p> Digite Nome do Monumento: 
				<input type="text" name="nome" size="40" maxlength="30"
					value="<?php echo $registo['nome']; ?>">
			</p>
			<p> Digite Nome da Imagem: 
				<input type="text" name="img_monumento" size="40" maxlength="30"
					value="<?php echo $registo['img_monumento']; ?>">
			</p>
			<p> Digite a Data de Construção: 
				<input type="text" name="data_const" size="40" maxlength="50"
					value="<?php echo $registo['data_const']; ?>">
			</p>
			<p> Digite a Descrição: 
				<input type="text" name="desc_monumento" size="40" maxlength="50"
					value="<?php echo $registo['desc_monumento']; ?>">
			</p>
			<p>  
				<input type="submit" value="Alterar" name="alterar">
				<input type="reset" value="Limpar" name="limpar">
			</p>
			
		</form>
		
		<br><br>
		
		<button><a href="imagensmonumentos.php"> Voltar </a></button>

		</center>
	</body>
</html>