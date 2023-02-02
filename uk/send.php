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
$title = "Contact form uk";
$body = "
<h2>Пропозиція допомоги або співпраці</h2>
<b>Імя:</b> $name<br>
<b>І-мейл:</b> $email<br><br>
<b>Повідомлення:</b><br>$message
";


// Настройки PHPMailer
$mail = new PHPMailer(true);


try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;        //Enable verbose debug output
    $mail->isSMTP();                              //Send using SMTP
    $mail->CharSet = "UTF-8";
    $mail->Host       = 'smtp.gmail.com';         //Set the SMTP server to send through
    $mail->SMTPAuth   = true; 
    $mail->Username   = 'ihelpuw@gmail.com';     //SMTP username 
    $mail->Password   = 'wwapbtqnlnzhzhqp';                 
    //Enable SMTP authentication
                            //SMTP password
    $mail->SMTPSecure = 'ssl';  //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Elena Ryazanceva');
    $mail->addAddress('vassatret@gmail.com'); 
    $mail->addAddress('julia@bijb.study');  
    $mail->addAddress('contact@ihelpukrainianwomen.com');
       

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

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