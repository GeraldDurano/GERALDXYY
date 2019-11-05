<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
  body{
    background-image: url(aics2.jpg);
   

  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #b0c4de40;
    background: #ffffff80;
    border-radius: 0px 0px 10px 10px;
}
</style>
<body>
  <div class="header">
    <h2>Login</h2>

  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>