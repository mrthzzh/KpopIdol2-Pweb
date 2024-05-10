<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/KpopIdol/model/contact.php';
// var_dump($arr['ID']);
$arr = Contact::select();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link rel="stylesheet" href="/KpopIdol/view/crud/style_add.css">

</head>
<body>
    <div class="register-container">

        <h2>Tambah Data Idol</h2>
        <form id="register-form" action="add?action=create" method="post">
          <div class="form-group">
            <label for="username">Nama</label>
            <div class="input-group has-validation">
              <input type="text" id="Idols_name" name="Idols_name" class="form-control">
            </div>
          <div class="form-group">
            <label for="phone">No HP</label>
            <input type="text" id="Phone" name="Phone" required>
          </div>
          <button type="submit" value="Submit">Simpan</button>
        </form>
      </div>
</body>
</html>