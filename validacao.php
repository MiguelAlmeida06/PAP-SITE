<?php 

	// Variáveis de ligação à BD
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "saopaio";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	
	// Passar o utilizador e a senha para variáveis
	$utilizador = $_POST['nome_login'];
	$senha = $_POST['senha_login'];
	
	// Validar o utilizador
	$sql = "select * from login where nome_login = '$utilizador' and senha_login = '$senha'";
		
    $resultado = mysqli_query($ligacao, $sql);	
	
	if (mysqli_num_rows($resultado) != 1){
		echo "O Utilizador ou Senha errada";
	?>
		<script type="text/javascript">
			setTimeout(function() {window.top.location="index.html"}, 2000);
		</script>
	<?php
	
	} else {
		
		if (!isset($_SESSION)) session_start();
		$_SESSION['nome_login'] = $utilizador;
		
		header("Location: ../Admin/menu.php");
	}
		
?>