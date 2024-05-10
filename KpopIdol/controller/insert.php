<?php
// require_once $_SERVER['DOCUMENT_ROOT']. '/contactappp/model/contact.php';

// $res_insert = Contact::insert('1004','082278901066', 'Reza');
// echo $res_insert;
// if ($res_insert) {
//     header("Location: dashboard");
//     exit(); 
// }
// 

require_once $_SERVER['DOCUMENT_ROOT'] . '/KpopIdol/model/contact.php';

// Pastikan Anda menggunakan metode POST untuk mengambil nilai-nilai formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai-nilai dari formulir
    $Phone = $_POST['Phone'];
    $Idols_name = $_POST['Idols_name'];

    // Ambil ID terakhir dari database
    $last_contact = Contact::getLastContact();
    $last_ID = $last_contact['ID'];

    // Tambahkan satu ke ID terakhir untuk mendapatkan ID baru
    $ID = $last_ID + 1;

    // Sisipkan nilai-nilai ke database
    $res_insert = Contact::insert($ID, $Phone, $Idols_name);

    // Periksa apakah penyisipan berhasil atau tidak
    if ($res_insert) {
        header("Location: dashboard");
        exit(); // Pastikan untuk keluar dari skrip PHP setelah mengarahkan pengguna
    } else {
        echo "Penyisipan gagal. Silakan coba lagi.";
    }
}

?>