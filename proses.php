<?php
include 'db.php';

$nama = strtolower(trim($_POST['nama']));
$password = trim($_POST['password']);

$sql = "SELECT cek_skor FROM volunteer WHERE nama_vol = ? AND pass_vol = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nama, $password);
$stmt->execute();
$result = $stmt->get_result();

echo "<h2>Hasil Pengecekan</h2>";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Skor Anda: " . $row['cek_skor'];
} else {
    echo "Nama atau Password salah!";
}

$stmt->close();
$conn->close();
?>