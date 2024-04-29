<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$config['email'] = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,
    'smtp_user' => 'thienb2111865@student.ctu.edu.vn',
    'smtp_fullname' => 'CỬA HÀNG CÂY CẢNH PLANTSHOPE',
    'smtp_pass' => 'ptfd ilty lxrr szie ',
    'smtp_secure' => 'tls',
    'smtp_timeout' => '7',
    'mailtype' => 'html',
    'charset' => 'UTF-8'
);


function send_mail($send_to_email, $send_to_fullname, $subject, $content, $option = array())
{
    global $config; //Dùng global để kéo biến $config_email từ file config qua
    $config_email = $config['email'];
    $mail = new PHPMailer(true);

    try {
        //Server settings 
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $config_email['smtp_host'];                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $config_email['smtp_user'];                  //SMTP username
        $mail->Password   = $config_email['smtp_pass'];                      //SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];                                  //Enable implicit TLS encryption
        $mail->Port       = $config_email['smtp_port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->CharSet = "UTF-8";

        //Recipients
        $mail->setFrom($config_email['smtp_user'], $config_email['smtp_fullname']);
        $mail->addAddress($send_to_email, $send_to_fullname);     //Add a recipient
        // $mail->addAddress('cudun6789@gmail.com');               //Name is optional
        $mail->addReplyTo($config_email['smtp_user'], $config_email['smtp_fullname']); //Email đích để người nhận rep lại
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
return "Email chưa được gửi. Chi tiết lỗi" . $mail->ErrorInfo;
    }
}