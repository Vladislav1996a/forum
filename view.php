<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<h3 id='user'></h3>
<p><a href="/registration.php">регистрация</a></p>
<p><a href="sigIn.php">вход</a></p>
<form>
   <div class="form-group">
    <label for="exampleFormControlTextarea1">оставьте комментарий</label>
    <textarea id='commit' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="button" class="btn btn-primary btn-lg btn-block">Оставить комментарий</button>
</form>
<script src='getcommit.js'></script>
<script src='sigIn.js'></script>
</body>
</html>