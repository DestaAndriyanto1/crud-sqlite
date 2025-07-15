<?php
include 'koneksi.php';
$sql = 'SELECT * FROM tugas';
$tugas = $conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
foreach ($tugas as $t) {
  echo $t['id'] . ' - ' . $t['deskripsi'] . ' (' . $t['waktu'] . ' menit) | 
  <a href="edit.php?id=' . $t['id'] . '">Edit</a> | 
  <a href="delete.php?id=' . $t['id'] . '">Hapus</a><br>';
}
?>
<a href="create.php">Tambah Tugas</a>
