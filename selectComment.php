<?php

$pdo = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');

    $sql = "SELECT * FROM reply_to_commit";
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $result = $sth->fetchALL(PDO::FETCH_ASSOC);

    return $result;