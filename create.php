<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $deskripsi = $_POST['deskripsi'];
  $waktu = $_POST['waktu'];

  $sql = 'INSERT INTO tugas(deskripsi, waktu) VALUES(:deskripsi, :waktu)';
  $statement = $conn->prepare($sql);
  $statement->execute([
    ':deskripsi' => $deskripsi,
    ':waktu' => $waktu
  ]);

  header('Location: index.php');
  exit();
}
?>
<form method="post">
  Deskripsi: <input name="deskripsi"><br>
  Waktu: <input name="waktu" type="number"><br>
  <button type="submit">Tambah</button>
</form>
