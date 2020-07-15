<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<?php 
require 'createUser.php';
?>
    <div class="container mt-5 border p-5">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1"> Введите Email </label>
                <input type="email" id='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">Мы никогда не передадим вашу электронную почту кому-либо еще. (на самом деле это тестовый сайт так что можем и передать)</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Введите пароль</label>
                <input type="password" id='password' class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Повторите пароль</label>
                <input type="password" id='password_2' class="form-control"placeholder="Password">
            </div>
            <button type="button" onclick='getData()' class="btn btn-primary">Зарегистрироваться</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src='./registration.js'></script>
</body>
</html>