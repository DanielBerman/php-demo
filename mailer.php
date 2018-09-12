<?php
if (array_key_exists('email', $_POST)) {
   $to = 'resdenia@gmail.com';
   $subject = 'contact form from '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Name: ".$_POST['fname']."\nLast Name: ".$_POST['lname']."\nEmail: ".$_POST['email']."\nPhone: ".$_POST['phone']."\nCity: ".$_POST['city']."\nCountry: ".$_POST['country']."\nIp: ".$_SERVER['REMOTE_ADDR']."\n Text: ".$_POST['messageFF'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['fname'];
}


$f = fopen("mydata.txt", 'a+');
// Записать текст
fwrite($f, "First name: ".$_POST["fname"]."\n"); 
fwrite($f, "Last name: ".$_POST["lname"]."\n"); 
fwrite($f, "Email: ".$_POST["email"]."\n"); 
fwrite($f, "Phone: ".$_POST["phone"]."\n"); 
fwrite($f, "City: ".$_POST["city"]."\n"); 
fwrite($f, "Country: ".$_POST["country"]."\n");
fwrite($f, "------"."\n");
// Закрыть текстовый файл
fclose($f);

?>
