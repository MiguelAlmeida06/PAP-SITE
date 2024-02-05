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
	

	$sql = "select * from imgscidade order by id_img";
	
    $resultado = mysqli_query($ligacao, $sql);	
	
?>

<html>
	<head>

		<link href="https://fonts.googleapis.com/css2?family=Roboto%3Awght%40900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/styletabela.css">

		<title> Florença -> Imagens </title>
		
	</head>
	<body>
	
		<center>
			
		<h1> Tabela de Imagens da Cidade </h1>
	

		<div class="container">

		<table>
		  <tr>
			<th>Número</th>
			<th>Imagem</th>
			<th>Nome:</th>
			<th> </th>
			<th> </th>
		   </tr>
		<?php while ($registo = mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td> <?php echo $registo['id_img']; ?> </td>
				<td> <?php echo $registo['img_cidade']; ?> </td>
				<td> <?php echo $registo['desc_cidade']; ?> </td>
				<td> <a href="eliminacidade.php?id_img=<?php echo $registo['id_img']; ?>"><button name="button">Eliminar</button></a> </td>
				<td> <a href="alterarcidade.php?id_img=<?php echo $registo['id_img']; ?>"><button name="button">Alterar</button></a> </td>
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