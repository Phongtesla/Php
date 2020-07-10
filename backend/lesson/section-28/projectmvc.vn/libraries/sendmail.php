<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
function send_mail($send_to_email, $send_to_fullname, $subject, $content, $option = array())
{
    global $config;
    $config_email = $config['email'];
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings: thiết lập server
        $mail->SMTPDebug = 0;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        //Chuẩn smtp của google
        $mail->Host       = $config_email['smtp_host'];  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $config_email['smtp_user'];                     // SMTP username
        $mail->Password   = $config_email['smtp_pass'];                               // SMTP password
        $mail->SMTPSecure = $config_email['smtp_secure'];                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = $config_email['smtp_port'];                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        //Recipients: nhập thông tin email
        $mail->setFrom("doanhahap@gmail.com", "Dân chơi");         // Người gửi
        $mail->addAddress("doanphong.1413@gmail.com", "Dân thường");     // Người nhận
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo("doanhahap@gmail.com", "Dân chơi");      // Thông tin phản hồi lại địa chỉ server
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments: thêm file
        //$mail->addAttachment('camdeptrai.jpg');         // Add attachments
        //    $mail->addAttachment('camdeptrai.jpg', 'camdt.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        //Tiêu đề
        $mail->Subject = $subject;
        $mail->Body    = $content;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
    } catch (Exception $e) {
        echo "Email không được gửi. Chi tiết lỗi: {$mail->ErrorInfo}";
    }
}
