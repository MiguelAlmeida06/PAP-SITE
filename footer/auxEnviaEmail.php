<?php
		ini_set('display_errors', 1); ini_set('display_startup_errors', 1); 
		error_reporting(E_ALL);
		
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMTP;
		use PHPMailer\PHPMailer\Exception;

		include("./PHPMailer/PHPMailer.php"); 	
		include("./PHPMailer/SMTP.php");
		include("./PHPMailer/Exception.php");


function enviaEmail($primeironome, $ultimonome, $email, $numero, $mensagem) {

		

		 $mail = new PHPMailer(True);
		 $mail->IsSMTP(); 
		 $mail->CharSet = 'UTF-8';
		 $mail->Host = "smtp.gmail.com"; // Servidor SMTP
		 $mail->SMTPSecure = "tls"; // conexão segura com TLS
		 $mail->Port = 587; 
		 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
		 $mail->Username = "migueljuniorabc40@gmail.com"; // SMTP username
		 $mail->Password = "gpkoizfrlfddnwoj"; // SMTP password 
		 $mail->From = "migueljuniorabc40@gmail.com"; // From
		 $mail->FromName = "São Paio SC" ; // Nome de quem envia o email
		 $mail->AddAddress($email, $nome); // Email e nome de quem receberá //Responder
		 $mail->WordWrap = 50; // Definir quebra de linha
		 $mail->IsHTML = true ; // Enviar como HTML
		 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
		 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML



		if(!$mail->Send()) // Envia o email
		{ 
		echo "Erro no envio da mensagem";
		} 

}

?>