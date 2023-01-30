<?php
// Импортируем классы PHPMailer в глобальное пространство имен
// Эти строки должны быть вначале скрипта, не внутри функции
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Формирование самого письма
$title_1 = "Лист 1";
$body_1 = "Тестовий лист 1 на имейл відправника";

// Формирование самого письма
$title_2 = "Лист 2";
$body_2 = "Тестовий лист 2 на имейл адміна";

// Настройки PHPMailer
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;   //Enable verbose debug output
    $mail->isSMTP();                         //Send using SMTP
    $mail->CharSet = "UTF-8";
    $mail->Host       = 'smtp.gmail.com';    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                //Enable SMTP authentication
    $mail->Username   = 'ihelpuw@gmail.com'; //SMTP username
    $mail->Password   = 'wwapbtqnlnzhzhqp';  //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;//Enable implicit TLS encryption
    $mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Елена Рязанова');
    $mail->addAddress($email);    
    // Отправка сообщения
$mail->isHTML(true);
$mail->Subject_1 = $title_1;
$mail->Body_1 = $body_1; 

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Елена Рязанова');
    $mail->addAddress('st.vassa@gmail.com', 'Васса Степанова');    
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject_2 = $title_2;
$mail->Body_2 = $body_2;   

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "The message was not sent. Cause of error: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: success.html');
?>