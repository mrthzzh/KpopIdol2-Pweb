<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/KpopIdol/model/contact.php';
// var_dump($arr['ID']);
$arr = Contact::select();
// Menerima ID dari URL
$id = $_GET['id'];

// Mengambil data kontak berdasarkan ID
$contact = Contact::selectByID($id);

// Memeriksa apakah kontak ditemukan
if (!$contact) {
    // Jika kontak tidak ditemukan, lakukan penanganan kesalahan di sini
    // Misalnya, tampilkan pesan kesalahan atau redirect ke halaman lain
    echo "Kontak tidak ditemukan";
    exit;
}
// Nilai-nilai default untuk formulir
$ID = $contact['ID'];
$Phone = $contact['Phone'];
$Idols_name = $contact['Idols_name'];
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

        <h2>Edit Data Idol</h2>
        <form id="register-form" action="update?action=update" method="post">
          <input type="text" id="ID" name="ID" value="<?php echo $ID; ?>" style="visibility:hidden; z-index:999; position:absolute;"><br>
          <div class="form-group">
            <label for="username">Nama</label>
            <div class="input-group has-validation">
              <input type="text" id="Idols_name" name="Idols_name" value="<?php echo $Idols_name; ?>" class="form-control">
            </div>
          <div class="form-group">
            <label for="phone">No HP</label>
            <input type="text" id="Phone" name="Phone" value="<?php echo $Phone; ?>" required>
          </div>
          <button type="submit" value="Submit">Simpan</button>
        </form>
      </div>
</body>
</html>