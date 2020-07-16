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
  <div id='login'>
    <p><a href="/registration.php">регистрация</a></p>
    <p><a href="sigIn.php">вход</a></p>
  </div>
  <p id='logout' onclick='logout()'><a href="#">выход</a></p>
  <form>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">оставьте комментарий</label>
      <textarea id='commit' class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button onclick='addCommit()' type="button" class="btn btn-primary btn-lg btn-block">Оставить комментарий</button>
  </form>
  <?require 'getPost.php';?>
  <?require 'selectComment.php';?>
  <div class='mt-5'>
    <?php
      foreach($getPost as $item) : ?>
        <div class='border p-2 m-2 ml-5 mr-5' id='post' data-id='<?echo $item['id'] ?>'><? echo  $item['commits'] ?></div>
        <div class='d-flex justify-content-end mr-5'>
        <input id='reply_to_commit' type="text">
        <input  type="button" id='btn' onclick='getId()' value='ответить'>
        </div>

        <?php
          foreach($result as $items) : ?>
          <div>
            <?php
              if($item['id'] == $items['id_table']){
                echo $items['value_commit'];
              } 
              
            ?>
          </div>
        <?php endforeach ?>

    <?php endforeach ?>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src='getcommit.js'></script>
<script src='sigIn.js'></script>
<script src='getId.js'></script>
</body>
</html>