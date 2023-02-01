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
$text = $_POST['text'];



// Формирование самого письма
$title1 = "Questionnaire form";
$body1 = "
<h2>Анкета</h2>
<b>Ім'я та Прізвище:</b> $name<br><br>
<b>Е-мейл:</b> $email<br><br>
<b>Телефон:</b> $phone<br><br>
<b>Громадянство:</b> $citizenship<br><br>
<b>Країна перебування</b> $country<br><br>
<b>Форма допомоги:</b> $select<br><br>
<b>Інше:</b> $text<br>
";

$title2 = "Power BI courses";
$body2 = "
<h2>Дякуємо, що подали заявку на курси аналітик Power BI!</h2>
Вам залишилося лише перейти на платформу BIJB Study та подивитися відео про майбутню спеціальність.
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
";


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                           //Send using SMTP
     $mail->CharSet = "UTF-8";                                        
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ihelpuw@gmail.com';                     //SMTP username
    $mail->Password   = 'wwapbtqnlnzhzhqp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Елена Рязанова');
    $mail->addAddress('vassatret@gmail.com');   //Add a recipient
    // $mail->addAddress('');   //Name is optional

// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title1;
$mail->Body = $body1;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "The message was not sent. Cause of error: {$mail->ErrorInfo}";
}
// Отображение результата
header('Location: course.html');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                           //Send using SMTP
     $mail->CharSet = "UTF-8";                                        
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'ihelpuw@gmail.com';                     //SMTP username
    $mail->Password   = 'wwapbtqnlnzhzhqp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ihelpuw@gmail.com', 'Елена Рязанова');
    $mail->addAddress($email);   //Add a recipient
    // $mail->addAddress('');   //Name is optional

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
header('Location: course.html');

?>