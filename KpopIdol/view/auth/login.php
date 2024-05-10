<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Retha</title>
  <link rel="stylesheet" href="/KpopIdol/view/auth/style_login.css">
  

</head>
<body>
  <img src='logo.jpg' alt="foto logo">

  <div class="login-container">

    <h2>Login</h2>
    <form id="login-form">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" name="username" class="form-control" id="yourUsername" required>
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <a href="index.html"><button type="submit">Login</button></a>
      
      
      <div class="col-12">
        <p class="small mb-0">Belum memiliki akun? <a href="register">Buat Akun</a></p>
      </div>
    </form>
  </div>

</body>
</html>
