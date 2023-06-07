<?php
// Ambil data yang dikirimkan dari halaman input
$nama_model = $_POST['nama_model'];
$nama_komponen = $_POST['nama_komponen'];
$jumlah = $_POST['jumlah'];
$tanggal_input = $_POST['tanggal_input'];

// Simpan data ke database atau lakukan operasi lain sesuai kebutuhan

// Redirect ke halaman hasil input
header('Location: hasil_input.php');
exit();
?>
