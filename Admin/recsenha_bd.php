<?php 
	include "auxEnviaEmail.php";
		
	$nomeservidor = "localhost";	
	$utilizador = "root";
	$palavrapasse= "";
	$basedados = "saopaio";
	
	// Criar a ligação
	$ligacao = mysqli_connect($nomeservidor, $utilizador, $palavrapasse, $basedados);
	
	// Receber os dados do formulário
	$email = $_POST["email"];

	// Registar mensagem na BD
	$sql = "select * from utilizadores where email='$email'";

    $resultado = mysqli_query($ligacao,$sql);

    if(mysqli_num_rows($resultado)!=1){
        echo"<h1> O Email não existe!!! </h1>";
    ?>
        <script type="text/javascript">
		    setTimeout(function() {window.top.location="index.html"}, 2000);
	    </script>
    <?php
    } else{

        $registo=mysqli_fetch_assoc($resultado);
        $nome=$registo['utilizador'];

        $assunto="recuperação da senha no programa Florença";
        $mensagem="Exmo(a) Sr(a)." .$nome."<br><br>
                    A senha de acesso ao programa de Florença é " .$registo['senha'] . 
                    "<br> Com os melhores cumprimentos, <br> O programa de Florença";

        //enviar email
        enviaEmail($nome, $email, $mensagem);

        //mostra mensagem de email enviado
        echo"<h1> Mensagem enviada!!! </h1>";

        //volta para o index.html
        ?>
            <script type="text/javascript">
                setTimeout(function() {window.top.location="index.html"}, 2000);
            </script>
        <?php
    }