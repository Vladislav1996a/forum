<?php
$commit = $_POST['commits'];

$pdo = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');

if(isset($commit)){
    $sql = "INSERT INTO  commits(commits) VALUES (:commites)";
    $sth = $pdo->prepare($sql);
    $sth->execute(['commites'=>$commit]);
    $set = $sth->fetchALL(PDO::FETCH_ASSOC);
}
