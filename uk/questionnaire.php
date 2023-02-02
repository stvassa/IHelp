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
<<<<<<< HEAD
$name = $_POST['name3'];
$email = $_POST['email3'];
$email2 = $_POST['emaildop'];
if($_POST['emaildop'] == ''){
   $email2 = 'додатковий імейл не надано';}
$phone = $_POST['phone3'];
$citizenship = $_POST['citizenship3'];
$country = $_POST['country3'];
// $languages = $_POST['languages3'];
$job = $_POST['job3'];
$message = $_POST['message3'];

=======
$name = $_POST['name'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$phone = $_POST['phone'];
$citizenship = $_POST['citizenship'];
$country = $_POST['country'];
$job = $_POST['job'];
$text = $_POST['message2'];
>>>>>>> 27dbb5065a6d5765c1a9d894a41325810d8fd8b5



// Формирование самого письма
$title1 = "Questionnaire form";
$body1 = "
<h2>Анкета кандидата</h2>
<<<<<<< HEAD
<p><b>Ім'я та Прізвище:</b> $name</p>
<p><b>Е-мейл:</b> $email</p>
<p><b>Е-мейл додатковий:</b> $email2</p>
<p><b>Телефон:</b> $phone</p>
<p><b>Громадянство:</b> $citizenship</p>
<p><b>Країна перебування</b> $country</p>
<p><b>Професія:</b> $job</p>
<p><b>Чому ви хочете пройти цей курс:</b> $message</p>
=======
<b>Ім'я та Прізвище:</b> $name<br><br>
<b>Е-мейл:</b> $email<br><br>
<b>Е-мейл додатковий:</b> $email2<br><br>
<b>Телефон:</b> $phone<br><br>
<b>Громадянство:</b> $citizenship<br><br>
<b>Країна перебування</b> $country<br><br>
<b>Мова</b>                       <br><br>
<b>Професія:</b> $job<br><br>
<b>Чому ви хочете пройти цей курс?:</b> $message2<br>
>>>>>>> 27dbb5065a6d5765c1a9d894a41325810d8fd8b5
";

$title2 = "Power BI courses";
$body2 = "
<h2>Дякуємо, що подали заявку на курси аналітик Power BI!</h2>
Для наступного кроку перейдіть на платформу BIJB Study та подивитися відео та пройдіть тести.<br>
<b>Лінк на реєстрацію на платформі BIJB Study: </b>
https://www.bijb.study/create-account/?i=ukr
<br><br>
Нагадуємо, що відео та тести треба пройти до <b>20 лютого</b>.<br> 
Для запрошення на співбесіду Вам необхідно надати 70% або більше вірних відповідей.
Тест можна пройти декілька разів, якщо хочете підвищити шанси на навчання.<br>
Співбесіди відбудуться <b>з 20 по 26 лютого</b>. Запрошення на співбесіду буде надіслано окремо.<br><br>
Починайте прокладати свій шлях до змін зараз! <br><br>
Якщо у Вас є питання по курсу чи ініціативі I helpukrainian women, ви можете написати Нам на пошту julia@bijb.study <br>
<<<<<<< HEAD

А ми бажаємо Вам натхнення та успіхів!<br><br>
";

=======

А ми бажаємо Вам натхнення та успіхів!<br><br>
";

>>>>>>> 27dbb5065a6d5765c1a9d894a41325810d8fd8b5

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
<<<<<<< HEAD
// header('Location: course.html');
=======
header('Location: course.html');
>>>>>>> 27dbb5065a6d5765c1a9d894a41325810d8fd8b5
// убрать для теста

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