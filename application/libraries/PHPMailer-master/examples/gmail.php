<?php
if(empty($_POST)){

?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Subject: <input type="text" name="subject"><br>
    Message: <textarea rows="10" cols="40" name="message"></textarea><br>
    <input type="submit" name="submit" value="Submit Feedback">
    </form>

<?php

}else{

    /**
     * This example shows settings to use when sending via Google's Gmail servers.
     */

    //SMTP needs accurate times, and the PHP time zone MUST be set
    //This should be done in your php.ini, but this is how to do it if you don't have access to that
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;

    //Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //Enable SMTP debugging
    // 0 = off (for production use)
    // 1 = client messages
    // 2 = client and server messages
    $mail->SMTPDebug = 2;

    //Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';

    //Set the hostname of the mail server
    $mail->Host = 'smtp.gmail.com';

    //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    //Set the encryption system to use - ssl (deprecated) or tls
    $mail->SMTPSecure = 'tls';

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = "cobaajah12@gmail.com";

    //Password to use for SMTP authentication
    $mail->Password = "1234567hehe123";

    //Set who the message is to be sent from
    $mail->setFrom('cobaajah12@gmail.com', 'First Last');

    //Set an alternative reply-to address
    //$mail->addReplyTo('nourishindonesia@gmail.com', 'First Last');

    //Set who the message is to be sent to
    $mail->addAddress('esha.rama@gmail.com', 'John Doe');

    //Set the subject line
    $mail->Subject = $_POST['subject'];

    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML($_POST['message']);

    //Replace the plain text body with one created manually
    $mail->AltBody = $_POST['message'];

    //Attach an image file
   // $mail->addAttachment('images/phpmailer_mini.png');

    //send the message, check for errors
    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent!";
    }
}