<?php 

require_once('phpmailer/PHPMailerAutoload.php');
require_once('apps/config.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['person-name'];
$items = $_POST['items'];
$tprice = $_POST['total-price'];


$sql = "INSERT INTO orders (user_id, items, total_price) 			
						VALUES (:user_id, :items, :tprice)";

$stmt = $db->prepare($sql);
$stmt->bindValue(':user_id',$_POST['person-id']);
$stmt->bindValue(':items',$_POST['items']);
$stmt->bindValue(':tprice',$_POST['total-price']);
$stmt->execute();

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sstoreorder@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'Champion2020'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('sstoreorder@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('grneade28@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject =  'Оставили заявку';
$mail->Body    = '' .$name . ' оставил заявку, <br>На сумму' .$tprice. '<br>' .$items;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: cart-page.php');
}
?>