<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Login</title>
</head>
<body>
    <div class="container">
  <img src="logo.png">
  <h1>LOGIN</h1>
  <form action="proses_login.php" method="POST" name="login">
<label>Username</label> : <input type="text" name="username"><br>
<label>Email</label> : <input type="text" name="Email"><br>
<label>Password</label> : <input type="password" name="password"><br>
<button type="submit" name="kirim" value="login">Login</button>

<div class="register">
  <p>Belum Punya akun?
  <a href="register.php">Klik disini</a></p>
</div>

</form>

</div>
<style>
  body {
         background: linear-gradient(to right, rgb(63, 63, 172), rgb(233, 233, 233));
     }
</style>
</body>
</html>