<?php

$to = "giraffe21@live.co.uk";
$subject = "Manycore Summer School 2018 Application";
$txt = "Dear Jeremy,\n\nThanks for submitting your application for the Manycore Summer School in Glasgow. Please note, to secure your registration, you _must_ ask your PhD supervisor or line manager to submit an email reference for you, to n.harth.1@research.gla.ac.uk - ideally within the next two weeks. Once we receive your reference, we will be in touch to confirm your registration.\n\nBest regards,\nJeremy Singer, Phil Trinder, Natascha Harth\n(Summer School Organizers)\n\n";
$headers = "From: noreply@manycore.org.uk" . "\r\n" .
"CC: giraffe21@gmail.com, jeremy.singer@glasgow.ac.uk" . "\r\n" .
"MIME-Version: 1.0" . "\r\n" .
"Content-Type: text/plain" . "\r\n" .
"X-Mailer: PHP/" . phpversion() . "\r\n";

$txt = wordwrap($txt,70);

echo "sending email to ", $to;

mail($to,$subject,$txt,$headers);
?> 
