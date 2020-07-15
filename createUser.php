<?php

$email = $_POST['email'];
$pass = $_POST['pass'];

$link = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');
if(isset($email)){
    $sql = "INSERT INTO users(email, pass) VALUES (:email, :pass)";
    $sth = $link->prepare($sql);
    $sth->execute(['email'=>$email,'pass'=>$pass]);
}