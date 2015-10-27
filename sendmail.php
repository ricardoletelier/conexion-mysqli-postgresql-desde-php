<?php
while ( !file_exists($POSICION."conexion.php" )) {$POSICION .="../";}

$res = mail("r.letelier88@gmail.com", "Probando email en php", "Esto es una prueba a ver si funciona el mail en php") ;
echo($res);

/*
require($POSICION.'componente/phpmailer/class.phpmailer.php');
require($POSICION.'componente/phpmailer/class.smtp.php');

$mail = new PHPMailer(true); //defaults to using php "mail()"; the true param means it will throw exceptions on errors, which we need to catch

try {
	$mail->AddReplyTo('r.letelier88@gmail.com', 'First Last');
	$mail->AddAddress('r.letelier88@gmail.com', 'John Doe');
	$mail->SetFrom('r.letelier88@gmail.com', 'First Last');
	$mail->AddReplyTo('r.letelier88@gmail.com', 'First Last');
	$mail->Subject = 'PHPMailer Test Subject via mail(), advanced';
	$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!'; // optional - MsgHTML will create an alternate automatically
	//$mail->MsgHTML(file_get_contents('contents.html'));
	$mail->Body ="hola";
	//$mail->AddAttachment('images/phpmailer.gif');      // attachment
	//$mail->AddAttachment('images/phpmailer_mini.gif'); // attachment
	$mail->CharSet = 'UTF-8';
	$mail->Send();
	echo "Message Sent OK<p></p>\n";
} catch (phpmailerException $e) {
	echo $e->errorMessage();
} catch (Exception $e) {
	echo $e->getMessage(); 
}
*/
?>