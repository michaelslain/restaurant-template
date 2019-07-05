<?php
    
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    // Load Composer's autoloader
    require 'vendor/autoload.php';

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['mail'])) {
        $mail = $_POST['mail'];
    }
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            $mail->SMTPDebug = 2;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.mail.me.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'example@example.com';                     // SMTP username
            $mail->Password   = 'YourPassword';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;    

            //Recipients
            $mail->setFrom('example@example.com', 'Your Name');
            $mail->addAddress('example@example.com', 'PHP Mailer');     // Add a recipient
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = "Client".
            $mail->Body =  "From: " . $name . " Email: " . $mail . " Message: " . $comment;
            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {

        }
}
?>