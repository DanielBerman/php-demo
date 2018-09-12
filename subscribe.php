<?php 
if (array_key_exists('emails', $_POST)) {
   $to = 'resdenia@gmail.com';
   $subject = 'contact form from '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Email: ".$_POST['emails'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
}	
	
	$f = fopen("mails.txt", 'a+');
// Записать текст
fwrite($f, 'Emails:'); 
fwrite($f, $_POST["emails"]."\n"); 
// Закрыть текстовый файл
fclose($f);
// Открыть файл для чтения и прочитать строку
$f = fopen("mydata.txt", "r");
// Читать текст
echo fgets($f); 
fclose($f);
?>
