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
echo "Thank you for registering to the upcoming MaRIONet event<br>";

$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_affiliation = $_POST['affiliation'];
$users_quest = $_POST['panelquestion'];
$users_request = $_POST['reqs'];

$checkbox = 0;

if($_POST['dinner'] == 'attend') {
  echo "and for joining us for dinner<br>";
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

