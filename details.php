<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM tugas WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
$tugas = $stmt->fetch(PDO::FETCH_ASSOC);
echo $tugas ? $tugas['deskripsi'] . ' - ' . $tugas['waktu'] : 'Tugas tidak ditemukan';
