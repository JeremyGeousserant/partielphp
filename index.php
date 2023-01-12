<?php require_once "cfg/config.php";
      $_SESSION; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php 
    if($_SESSION['user']['admin']==1){
      echo "<a href='admin.php'>Panel admin</a>";
    }else{echo 'lol';}?>
    

    <h1>Hello world</h1>
    <h2>Inscris-toi</h2>
    <form action="action/signup.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit">
    </form>
    <h2>Connecte-toi</h2>
    <form action="action/login.php" method="post">
      <input type="text" name="username" placeholder="Username">
      <input type="password" name="password" placeholder="Password">
      <input type="submit">
    </form>
  </body>
</html>
