<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>MaRIONet : the UK Manycore Network</title>

  
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/pure-min.css">
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="https://purecss.io/combo/1.18.13?/css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="https://purecss.io/combo/1.18.13?/css/layouts/side-menu.css">
        <!--<![endif]-->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div id="layout">

   <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- random icon -->
        <span></span>
    </a>


    <div id="menu">
        <div class="pure-menu">
            <a class="pure-menu-heading" href="#">Menu</a>

            <ul class="pure-menu-list">
                <li class="pure-menu-item">
                  <a href="index.html" class="pure-menu-link">Home</a>
                </li>
                <li class="pure-menu-item">
                  <a href="http://gow.epsrc.ac.uk/NGBOViewGrant.aspx?GrantRef=EP/P006434/1" class="pure-menu-link">About</a>
                </li>
                <li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                  <a href="form.html" class="pure-menu-link">Register</a>
                </li>
				
				<li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                  <a href="members.html" class="pure-menu-link">Members</a>
                </li>
				
				<li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                  <a href="events.html" class="pure-menu-link">Events</a>
                </li>
				
				<li class="pure-menu-item" class="menu-item-divided pure-menu-selected">
                  <a href="joining.html" class="pure-menu-link">Joining</a>
                </li>

                <li class="pure-menu-item">
                  <a href="contact.html" class="pure-menu-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>



<div id="main">

<div class="header">
    <img class="pure-img" src="marionet_logo.png" alt="marionet logo">
  </div>

<div class="content">

<h2 class="content-subhead">Summer School Application Completed</h2>

<?php

include('config.php');

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

if ($db->connect_errno) {
    echo "Failed to connect to MySQL: ", $db->connect_error;
    die();
}

// form details missing (if fetch php directly?)    
if (empty($_POST['name']) or empty($_POST['email'])) {
    echo "<p><font color=\"red\">Invalid data</font> --- please fill in the Manycore Summer School <a href=\"ss_form.html\">registration form</a> completely.</p>";
}
else {
    
echo "<p>Dear ", $_POST['name'], "<br/>&nbsp;<br/>";
echo "Thank you for applying to attend the <a href=\"summerschool.html\">Manycore Summer School</a> in Glasgow, 16-20 July 2018. We will send you an auto-confirmation by email, but note that our message may drop into your spam folder! You <b>must</b> ensure your supervisor or line manager sends us a <b>reference</b>, attesting your academic status and the relevance of your research topic to the Manycore Summer School. Ask your supervisor to email this reference to <a href=\"mailto:n.harth.1@research.gla.ac.uk\">n.harth.1@research.gla.ac.uk</a>, ideally within the next two weeks.<br/>&nbsp;<br/> We look forward to meeting you! Please let other researchers know about this event and encourage them to sign up too.<br/></p><hr/>";

}
/*    

$name = $_POST['name'];
$affiliation = $_POST['affiliation'];
$email = $_POST['email'];
$reqs = $_POST['reqs'];
$accomm = $_POST['accomm'];    
$motivation = $_POST['motivation'];
$supername = $_POST['supername'];


$db->query('INSERT INTO ss2018 (name, affiliation, email, reqs, accomm, motivation, supername)
            VALUES (\''.$db->escape_string($name).'\',
                    \''.$db->escape_string($affiliation).'\',
                    \''.$db->escape_string($email).'\',
                    \''.$db->escape_string($reqs).'\',
                    \''.$db->escape_string($accomm).'\',
                    \''.$db->escape_string($motivation).'\',
                    \''.$db->escape_string($supername).'\')
    ');

// display summary
echo "<h4>Application Summary</h4>\n<ul>";
echo "<li>Name:".$name."</li>";
echo "<li>Affiliation:".$affiliation."</li>";
echo "<li>Email:".$email."</li>";
echo "<li>Special requirements:".$reqs."</li>";
echo "<li>Accommodation:".$accomm."</li>";
echo "<li>Motivation:".$motivation."</li>";      
echo "<li>Name:".$supername."</li>";
echo "</ul>";
    
// send confirmation email
    
$to = $email;
$subject = "Manycore Summer School 2018 Application";
$txt = "Dear {$name},\n\nThanks for submitting your application for the Manycore Summer School in Glasgow. Please note, to secure your registration, you _must_ ask your PhD supervisor or line manager to submit an email reference for you, to n.harth.1@research.gla.ac.uk - ideally within the next two weeks. Once we receive your reference, we will be in touch to confirm your registration.\n\nBest regards,\nJeremy Singer, Phil Trinder, Natascha Harth\n(Summer School Organizers)\n\n";
$headers = "From: noreply@manycore.org.uk" . "\r\n" .
"CC: n.harth.1@research.gla.ac.uk, jeremy.singer@glasgow.ac.uk" . "\r\n" .
"MIME-Version: 1.0" . "\r\n" .
"Content-Type: text/plain" . "\r\n" .
"X-Mailer: PHP/" . phpversion() . "\r\n";

$txt = wordwrap($txt,70);

echo "<p>Confirmation email sent to: ", $to, "</p>;

mail($to,$subject,$txt,$headers);
*/

?> 
    
</div>

</div> <!-- main -->
</div>


  
<script src="https://purecss.io/combo/1.18.13?/js/ui.js"></script>

</body>


</html>
