<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="/KpopIdol/view/auth/style_register.css">

</head>
<body>
  <img src='logo.jpg' alt="foto logo">

  <div class="register-container">

    <h2>Register</h2>
    <form id="register-form">
      <div class="form-group">
        <label for="username">Username</label>
        <div class="input-group has-validation">
          <input type="text" name="username" class="form-control" id="yourUsername" required>
        </div>
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <label for="phone">Nomor HP</label>
        <input type="text" id="phone" name="phone" required>
      </div>

      <div class="form-group">
        <label for="birthdate">Tanggal Lahir</label>
        <input type="date" id="birthdate" name="birthdate" required>
      </div>

      <a href="Pages-login.html"><button type="submit">Daftar</button></a>
      
      <div class="col-12">
        <p class="small mb-0">Sudah memiliki akun? <a href="login">Login</a></p>
      </div>
    </form>
  </div>
</body>
</html>