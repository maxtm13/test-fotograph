<? 
$to = 'webadmin@top-site.info, maxtm1@yandex.ru';
$email = 'mail@mail.ru';
$phone = '8 999 999 99 99';
$time = date('H:i:s');

$subject = 'заявка ' . 'Тихонов '. $time;
$message = 'Email из формы: ' . $email . "\r\n". 'Телефон: ' . $phone . "\r\n";
$headers = 'Content-Type: text/plain; charset=utf-8' . 'From: webmaster@forma-test' . "\r\n" .
    'Reply-To: webmaster@forma-test' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
if (mail($to, $subject, $message, $headers)) 
echo 'Email из формы: ' . $email . "\r\n". "<br>" . 'Телефон: ' . $phone . ' ' . $time;