<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/Login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  
</head>
<body class="bground">
    <div class="box">
        <h1 class="textlogin"><b>Login</b></h1>
        <form class="formbox" method="POST" action="aksi_login.php">
            <p><b>Username</b></p>
            <input type="text" name="username" placeholder="Enter Username" class="userpass">
            <p><b>Password</b></p>
            <input type="password" name="password" placeholder="Enter Password" class="userpass">
            <br>
            <input type="submit" name="" value="Login" class="loginbutton">
        </form>
    </div>
</body>
</html>