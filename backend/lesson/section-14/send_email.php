
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'doanhahap@gmail.com';                     // SMTP username
    $mail->Password   = 'Nikolatesla1413';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('doanhahap@gmail.com', 'Hoc Web');
    $mail->addAddress('doanphong.1413@gmail.com', 'Nguyen Hoang Ven');     // Add a recipient
    //    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('doanhahap@gmail.com', 'Hoc Web');
    //    $mail->addCC('cc@example.com');
    //    $mail->addBCC('bcc@example.com');

    // Attachments
    //    $mail->addAttachment('anh.jpg');         // Add attachments
    //    $mail->addAttachment('images.jpg', 'hoangven.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Gửi mail từ Học Web';
    $mail->Body    = 'Học lập trình web cơ bản với <b>PHP</b>';
    //    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'đã gửi thành công!';
} catch (Exception $e) {
    echo "Gửi không thành công!xem lỗi tại đây: {$mail->ErrorInfo}";
}
