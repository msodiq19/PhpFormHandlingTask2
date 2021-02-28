<?php
if(isset($_POST['submit'])){

     $user = $_POST['user'];

     if (empty ($user)){
         echo "Enter your name";
       }else {
          echo $user;
       }

  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic form handling in php</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <div class="container">
        <h1>Basic Php Form handling</h1>
        <form method="POST" action="index.php">
          <input type="text" name="user" placeholder="Enter your name...">
          <input type="submit" name="submit" value="submit">
        </form>
     </div>
  </body>
</html>
