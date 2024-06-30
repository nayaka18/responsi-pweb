<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $produk = $_POST['produk'];

    $data = "Nama: $nama, Telepon: $telepon, Produk: $produk\n";

    file_put_contents('penjualan.txt', $data, FILE_APPEND);

    echo "Terima kasih atas pesanan Anda!";
}
?>
