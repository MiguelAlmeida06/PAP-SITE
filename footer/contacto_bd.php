<?php 
	include "auxEnviaEmail.php";
		
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "saopaio";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	
	// Receber os dados do formulário
	$primeironome = $_POST["primeironome"];
	$ultimonome = $_POST["ultimonome"];
	$email = $_POST["email"];
	$numero = $_POST["numero"];
	$mensagem = $_POST["mensagem"];



	// Registar mensagem na BD
	$sql = "insert into contactos (primeironome, ultimonome, email, numero, mensagem) 
			values ('$primeironome', '$ultimonome', '$email', '$numero', '$mensagem')";
	
	if (!(mysqli_query($ligacao, $sql)))
		echo "Erro na inserção do Comentário! <br> <br>" . $sql;
		
	// Enviar email ao visitante
	
		$mensagem = "Exmo(a) Sr(a). " . $nome . "<br><br> 
					Recebemos o seu comentario / sugestão: 
					<br> \"" . $mensagem . "\"<br>
					Com os melhores cumprimentos, <br> São Paio SC";

		// Enviar email
		enviaEmail($primeironome, $ultimonome, $email, $numero, $mensagem);

	// Enviar email ao administrador
	
		$email = "migueljuniorabc40@gmail.com";
		enviaEmail($primeironome, $ultimonome, $email, $numero, $mensagem);
		
	
	// Mostra Mensagem de Email enviado
	echo "<h1> Mensagem enviada!!! </h1>";
		
	// Volta para o index.html
	?>
	<script type="text/javascript">
		setTimeout(function() {window.top.location="index.html"}, 2000);
	</script>
	