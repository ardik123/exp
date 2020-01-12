<?php

$workkk = "";

$firstname = $_POST['name'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$profession = $_POST['profession'];
$workkk = $_POST['work'];
$gender = $_POST['gender'];
$graduate = $_POST['graduate'];

echo $gender . "<br>";
echo $graduate . "<br>";


echo $firstname;

$to = "ardi.kastrat16@gmail.com";
$subject = "Projecti i ri ";
$body = "New message from " . $firstname . " " . $lastname;
$headers = "ardi.kastrat16@gmail.com"

mail($to, $subject, $body, $headers);








?>