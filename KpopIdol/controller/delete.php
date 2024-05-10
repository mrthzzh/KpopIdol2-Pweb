<!-- require_once 'contact.php';
$res_delete = Contact::delete('1006');
// echo "Delete result: ";
// echo $res_delete ? "Success" : "Failed"; -->
<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/KpopIdol/model/contact.php';

// Pastikan parameter ID tersedia
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Panggil metode untuk menghapus data berdasarkan ID
    $result = Contact::delete($id);
    
    if($result) {
        // Redirect ke halaman dashboard setelah penghapusan berhasil
        header("Location: dashboard");
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID tidak tersedia.";
}
?>


