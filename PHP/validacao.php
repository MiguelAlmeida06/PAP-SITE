<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pap";

	// Criar a ligação
	$ligacao = mysqli_connect($servername,$username, $password, $dbname);  
	
	// Testar a ligação
	if (!$ligacao) {
		die("Ligação falhada: " . mysqli_connect_error());
	}
	
	$utilizador = $_POST['utilizador'];
	$password = $_POST['password'];
	
	$sql= "select * from utilizador where nome = '$utilizador' and senha = '$password'";
	
	$resultado = mysqli_query($ligacao, $sql);
	
	//Verifica se o utilizador existe
	if (mysqli_num_rows($resultado) == 0) {
		echo "Utilizador ou Password Erradas";
		?>
			<script type="text/javascript">
				setTimeout (function() {window.top.location="index.php"}, 2000);
			</script>
		<?php
		}
	else {
		//utilizador e passoword corretos
		if (!isset($_SESSION)) session_start();
		$_SESSION['utilizador']= $utilizador;
		
		header("location: index.html");
		}
?>