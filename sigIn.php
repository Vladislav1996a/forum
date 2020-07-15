<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sigIn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h3 id='user'></h3>
    <div class="container mt-5 border p-5">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1"> Введите Email </label>
                <input type="email" class="form-control" id="emailSign" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Введите пароль</label>
                <input type="password" class="form-control" id="passSign" placeholder="Password">
            </div>
            <button type="button" onclick='signIn()' class="btn btn-primary">войти</button>
        </form>
    </div>
    <?php 
        require 'signInUser.php';
        
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src='./sigIn.js'></script>
</body>
</html>