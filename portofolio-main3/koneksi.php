<?php
// Konfigurasi koneksi database
$host = "localhost";
$user = "root";
$password = "";
$database = "webportofolio";

$conn = mysqli_connect($host, $username, $password, $database);

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    echo "Gagal terhubung ke MySQL: " . mysqli_connect_error();
    exit();
}

// Memperoleh data dari formulir
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Menghindari serangan SQL Injection
$nama = mysqli_real_escape_string($conn, $nama);
$email = mysqli_real_escape_string($conn, $email);
$pesan = mysqli_real_escape_string($conn, $pesan);

// Query untuk meng-insert data ke dalam tabel
$query = "INSERT INTO umpan_balik (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

// Menjalankan query
if (mysqli_query($conn, $query)) {
    echo "Data berhasil diinsert ke dalam tabel umpan_balik.";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>

