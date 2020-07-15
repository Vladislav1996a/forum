<?php


$emailSign = $_POST['emailSign'];
$passSign = $_POST['passSign'];

$link = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');

if(isset($emailSign)){
    $sql = "SELECT * FROM users WHERE `email`= '$emailSign' and `pass`= '$passSign'";
    $sth = $link->prepare($sql);
    $sth->execute();
    $set = $sth->fetchALL(PDO::FETCH_ASSOC);
    $js = json_encode($set);
    print_r($js);
   
}


