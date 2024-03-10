<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "migueljuniorabc40@gmail.com"; // Replace with your email address
    $primeironome = $_POST["primeironome"];
    $ultimonome = $_POST["ultimonome"];
    $numero = $_POST["numero"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 2; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'migueljuniorabc40@gmail.com'; // Replace with your Gmail address
        $mail->Password   = 'jyuf wgdj yipm aavw'; // Replace with your Gmail App Password
        $mail->SMTPSecure = 'Tls';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom($_POST["email"]);
        $mail->addAddress($to);

        //Content
        $mail->isHTML(false);
        $mail->Subject = $subject;
        $mail->Body = "Sender's Email: " . $_POST["email"] . "\n\n" . $_POST["message"];


        $mail->send();
        echo '<script>alert("Email sent successfully!");</script>';
        header("Location: index.php?status=success");
        exit();
    } catch (Exception $e) {
        echo '<script>alert("Error sending email. Please try again later.");</script>';
        header("Location: index.php?status=error");
    exit();


    }
}


?>