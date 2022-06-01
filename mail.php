<?php 
//ini_set('display_errors', 1);
//error_reporting( E_ALL );
$to  = $_POST['mail']; 
$subject = "NordStudio"; 

$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";
//$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
$headers .= "From: Від кого лист <from@example.com>\r\n"; 
$headers .= "Reply-To: reply-to@example.com\r\n"; 

$message = 'Вітаю Вас, '.$_POST['name'].'!  <p>Ви обрали послугу </br> <b> '.$_POST['type'].' тип сайту </b> </br>';

mail($to, $subject, $message, $headers); 

echo 'Дякуємо, Ваше повідомлення відправлене';

?>