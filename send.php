<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Волонтерська пропозиція";
$body = "
<h2>Новий лист</h2>
<b>Імя:</b> $name<br>
<b>І-мейл:</b> $email<br><br>
<b>Повідомлення:</b><br>$message
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    // $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'vassatret@gmail.com'; // Логин на почте
    $mail->Password   = 'yvpirgdhfnwxcmxr'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('vassatret@gmail.com', 'vassatret@gmail.com'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('st.vassa@gmail.com');  


    // Прикрипление файлов к письму
// if (!empty($file['name'][0])) {
//     for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
//         $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
//         $filename = $file['name'][$ct];
//         if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
//             $mail->addAttachment($uploadfile, $filename);
//             $rfile[] = "Файл $filename прикреплён";
//         } else {
//             $rfile[] = "Не удалось прикрепить файл $filename";
//         }
//     }   
// }
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
header('Location: index.html');