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
$phone = $_POST['phone'];
$citizenship = $_POST['citizenship'];
$country = $_POST['country'];
$select = $_POST['select'];
$text = $_POST['text'];


// Формирование самого письма
$title = "Help form uk";
$body = "Заявка на допомогу <br><br>
<b>Ім'я та Прізвище:</b> $name<br><br>
<b>Е-мейл:</b> $email<br><br>
<b>Телефон:</b> $phone<br><br>
<b>Громадянство:</b> $citizenship<br><br>
<b>Країна перебування</b> $country<br><br>
<b>Форма допомоги:</b> $select<br><br>
<b>Інше:</b> $text<br>
";

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
   //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->CharSet = "UTF-8";
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ihelpuw@gmail.com';                     //SMTP username
    $mail->Password   = 'wwapbtqnlnzhzhqp';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Elena Rezanceva');  
    $mail->addAddress('julia@bijb.study');
    $mail->addAddress('contact@ihelpukrainianwomen.com');
    $mail->addAddress('vassatret@gmail.com');

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