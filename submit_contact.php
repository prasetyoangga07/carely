<?php
// Konfigurasi koneksi ke database
$host = 'localhost'; // Sesuaikan dengan host Anda
$dbname = 'carely';
$username = 'root'; // Ganti dengan username MySQL Anda
$password = ''; // Ganti dengan password MySQL Anda

try {
    // Membuat koneksi ke database menggunakan PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cek apakah request adalah POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        // Query untuk menyimpan data ke tabel contacts
        $sql = "INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)";
        $stmt = $conn->prepare($sql);

        // Bind parameter
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);

        // Eksekusi query
        $stmt->execute();

        // Redirect atau tampilkan pesan sukses
        echo "Data berhasil disimpan!";
    }
} catch (PDOException $e) {
    echo "Koneksi atau query bermasalah: " . $e->getMessage();
}
?>
