<?php

include('config.php');
   
$db = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    die();
}


echo "Dear ", $_POST['name'] , "Thank you for registering to the upcoming MaRIONet event";

$checkbox = 0;

if ($_POST['attend'].is(":checked")) {
  $checkboc = 1;
}

$db->query('INSERT INTO 
              event20160111 
              (name, email, affiliation, question, requirements, dinner)
            VALUES 
              (\''.$_POST['name'].'\',
              \''.$_POST['email'].'\', 
              \''.$_POST['affiliation'].'\', 
              \''.$_POST['panelquestion'].'\',
              \''.$_POST['reqs']'\',
              \''.$checkbox'\'
            )');
?>

