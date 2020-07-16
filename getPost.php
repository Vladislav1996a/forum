<?php

$pdo = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');

$sql = "SELECT * FROM commits";
$result = $pdo->prepare($sql);
$result->execute();
$getPost = $result->fetchALL(PDO::FETCH_ASSOC);

return $getPost;
