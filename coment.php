<?php

$id = $_POST['id'];
$value = $_POST['value'];

$pdo = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root','');


$sql = "INSERT INTO  reply_to_commit(id_table, value_commit ) VALUES (:id, :value_com)";
$result = $pdo->prepare($sql);
$result->execute(['id'=> $id, 'value_com'=>$value]);
