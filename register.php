<html>
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>MaRIONet : the UK Manycore Network</title>

<link rel="stylesheet" href="https://unpkg.com/purecss@0.6.1/build/pure-min.css">
    
        <!--[if lte IE 8]>
            <link rel="stylesheet" href="http://purecss.io/combo/1.18.13?/css/layouts/side-menu-old-ie.css">
        <![endif]-->
        <!--[if gt IE 8]><!-->
            <link rel="stylesheet" href="http://purecss.io/combo/1.18.13?/css/layouts/side-menu.css">
        <!--<![endif]-->
    <!--[if lt IE 9]>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
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
                  <a href="mailto:jeremy.singer@glasgow.ac.uk" class="pure-menu-link">Contact</a>
                </li>
            </ul>
        </div>
    </div>



<div id="main">

<div class="header">
    <img class="pure-img" src="marionet_logo.png" alt="marionet logo">
  </div>

<div class="content">

<h2 class="content-subhead">Registration Complete</h2>

<p>
<?php

include('config.php');

if (!function_exists('boolval')) {
        function boolval($val) {
                return (bool) $val;
        }
}

$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    die();
}


echo "Dear ", $_POST['name'], "<br>";
echo "Thank you for registering for the MaRIONet launch event on Wednesday 11 January in Imperial College London. We look forward to meeting you! Please let other researchers know about this event and encourage them to sign up too.<br>";

$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_affiliation = $_POST['affiliation'];
$users_quest = $_POST['panelquestion'];
$users_request = $_POST['reqs'];

$checkbox = 0;

if($_POST['dinner'] == 'attend') {
  echo "We are glad you can join us for dinner after the workshop.<br>";
  $checkbox = 1;
}

$db->query('INSERT INTO event20160111 (id, name, email, affiliation, question, requirements, dinner)
            VALUES (NULL,
                    \''.$db->escape_string($users_name).'\',
                    \''.$db->escape_string($users_email).'\', 
                    \''.$db->escape_string($users_affiliation).'\', 
                    \''.$db->escape_string($users_quest).'\',
                    \''.$db->escape_string($users_request).'\',
                    \''.boolval($checkbox).'\')
            ');
?>

</p>
  
</div>

</div> <!-- main -->
</div>


  
<script src="http://purecss.io/combo/1.18.13?/js/ui.js"></script>

</body>


</html>
