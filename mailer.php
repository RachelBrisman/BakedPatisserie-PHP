<?php
use PHPMailer\PHPMailer\PHPMailer;

try{
    if(isset($_POST['name']) && isset($_POST['email'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $content = $_POST['content'];

        require_once "PHPMailer.php";
        require_once "SMTP.php";
        require_once "Exception.php";
        
        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "bakedpatisserie358@gmail.com";
        $mail->Password = "MCON358!";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("bakedpatisserie358@gmail.com");
        $mail->Body = $content;

        $mail->send();
        echo "sent!";
    }
}catch (Exception $e){
    echo $mail->ErrorInfo;
}

?>