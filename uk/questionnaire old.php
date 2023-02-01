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
// $title2 = "Power BI courses";
// $body2 = "<h2>Вітаємо з початком змін у житті на кращі та цікавіші!</h2> <br>
// Вам залишилося лише перейти на платформу BIJB Study та подивитися відео про майбутню спеціальність.
// <b>Лінк на платформу BIJB Study:</b>
// https://www.bijb.study/create-account/?i=ukr
// <br><br>
// Нагадуємо, що відео та тести треба пройти до <b>20 лютого</b>, Вам необхідно набрати быльше 70% прохідного балу (не лякайтеся, тест можна пройти декілька разів, якщо хочете підвищити шанси на навчання, вони легкі, і ті хто уважно продивляться відео пройдуть їх з легкістю).<br>
// Співбесіди відбудуться <b>з 20 по 26 лютого</b>.
// Тож, не зважайте та починайте прокладати свій шлях до змін.<br><br> 
// <br><br>
// <br><br>
// Якщо у Вас є питання по курсу чи ініціативі I helpukrainian women, ви можете написати Нам на пошту <b>contact@ihelpukrainianwomen.com </b><br>
// А ми бажаємо Вам натхнення та успіхів!<br><br>
// ";

// Формирование самого письма
$title1 = "Questionnaire form";
$body1 = "Тестовий лист 1 на мейл адміна";


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

        //Recipient 1
    $mail->setFrom('ihelpuw@gmail.com', 'Елена Рязанова');
    $mail->addAddress('leagaplay@gmail.com');
    // $mail->addAddress('julia@bijb.study');
    // $mail->addAddress('contact@ihelpukrainianwomen.com'); 
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title1;
    $mail->Body = $body1;   

    //Recipient 2
    $mail->setFrom('ihelpuw@gmail.com');
    $mail->addAddress($email);    
    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title2;
    $mail->Body = $body2; 

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "The message was not sent. Cause of error: {$mail->ErrorInfo}";
}

// Отображение результата
header('Location: index.html');
?>