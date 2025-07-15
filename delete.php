<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tugas WHERE id = :id';
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);
header('Location: index.php');
