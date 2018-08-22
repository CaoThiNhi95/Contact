<?php

require('config.php');

extract($_POST);

$sql = "INSERT into contactus (name,email,message,created_date) VALUES('" . $name . "','" . $email . "','" . $message . "','" . date('Y-m-d') . "')";

$success = $mysqli->query($sql);

if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}

require_once('send_form_email.php');

echo "Thank You For Contacting Us ";

$mysqli->close();
?>