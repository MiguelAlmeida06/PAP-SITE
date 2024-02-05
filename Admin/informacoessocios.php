<?php 
	if (!isset($_SESSION)) session_start();
	
	if (!isset($_SESSION['utilizador']))	{
		header("Location: index.php");
		exit;
	}
		
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "florença";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	

	$sql = "select * from monumentos order by id_monumento";
	
    $resultado = mysqli_query($ligacao, $sql);	
	
?>

<html>
	<head>
		<title> Florença -> Imagens </title>

		<link href="https://fonts.googleapis.com/css2?family=Roboto%3Awght%40900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/styletabela.css">
		
	</head>
	<body>
	
		<center>

		<h1> Tabela Monumentos </h1>
	
		<div class="container">

		<table>
		  <tr>
			<th>Número</th>
			<th>Nome</th>
			<th>Imagem</th>
			<th>Data de Construção</th>
			<th>Descrição</th>
			<th> </th>
			<th> </th>
		   </tr>
		<?php while ($registo = mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td> <?php echo $registo['id_monumento']; ?> </td>
				<td> <?php echo $registo['nome']; ?> </td>
				<td> <?php echo $registo['img_monumento']; ?> </td>
				<td> <?php echo $registo['data_const']; ?> </td>
				<td> <?php echo $registo['desc_monumento']; ?> </td>
				<td> <a href="eliminamonumento.php?id_monumento=<?php echo $registo['id_monumento']; ?>"><button name="button">Eliminar</button></a> </td>
				<td> <a href="alterarmonumento.php?id_monumento=<?php echo $registo['id_monumento']; ?>"><button name="button">Alterar</button></a> </td>
			</tr>
		<?php } ?>
		
		</table>

		</div>
		
		
		<br><br>
		
		<button><a href="menu.php"> Voltar </a></button>
		</center>
		
	</body>
<?php 
	mysqli_close($ligacao);
?>
	
</html>