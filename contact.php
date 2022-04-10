<?php
include 'header.php';
?>


<table style="margin-left: auto; margin-right: auto;">
    <tr style="text-align: center;">
        <td colspan="2"></td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2"><h2>Contact Us</h2></td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2"><h3>We'd love to hear from you!</h3></td>
    </tr>
    <tr style="text-align: center;">
        <td colspan="2"><h3>Please let us know why you want to join Baked's exclusive bakery service.</h3></td>
    </tr>
    <form  action="contact.php" method="post">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td><label for="content">Comments or <br>Questions:</label></td>
            <td><textarea type="text" name="content" id="content" cols="20" rows="5"></textarea></td>
        </tr>
        <tr style="text-align: center;">
            <td colspan="2"><button type="submit" onclick="contact()" value="send">Submit</td>
        </tr>
    </form>
</table>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
        echo "<h3>Sent!</h3>";
    }
}catch (Exception $e){
    echo $mail->ErrorInfo;
}
?>

<?php
include 'footer.php';
?>