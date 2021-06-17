<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="ss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body background="bg.jpg">
<font style="font-family: 'Roboto', sans-serif;">

<div class="loginbox">
<form action="action-login.php" method="post">
    <h4 align="center">Hey there, welcome to</h4>
    <h1 align="center"><font style="font-family: 'Mate SC', serif;">TheWebsite.com</font></h1>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button id="btncolor" type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember">
      Remember me
    </label>

    <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Forgot <a href="#">password?</a></span><br>
  </div>
  </div>

  
</form>

</div>
</font>
</body>
</html>