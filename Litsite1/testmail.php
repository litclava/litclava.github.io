<?php
$to = 'mansi22ag@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: swimmingpool1307@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
?>