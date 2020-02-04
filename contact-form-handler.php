<?php 
$name = $_POST['name'];
$email_from = 'yantranant@gmail.com';
$email_subject = 'new form';
$email_body = "user name:$name.\n";
$to="goyal.anirudh7@gmail.com";
$headers="From:$email_from\r\n";
$headers="Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("location:test.html");

?>


