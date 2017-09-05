<?php
$to      = 'naim.ayat@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: naim.ayat@gmail.com' . "\r\n" .
    'Reply-To: naim.ayat@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
