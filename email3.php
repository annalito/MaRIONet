<?php
 $to      = 'giraffe21@gmail.com';
 $subject = 'a test subject';
$message = 'hello from manycore\r\nThis is a test message\r\nfrom Jeremy\r\n';
$headers = 'From: noreply@manycore.org.uk' . "\r\n" .
           'Reply-To: jeremy.singer@glasgow.ac.uk' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "sending email to: ", $to;
?>
