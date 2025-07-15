<?php
include 'koneksi.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $deskripsi = $_POST['deskripsi'];
  $waktu = $_POST['waktu'];

  $sql = 'UPDATE tugas SET deskripsi = :deskripsi, waktu = :waktu WHERE id = :id';
  $stmt = $conn->prepare($sql);
  $stmt->execute([
    ':deskripsi' => $deskripsi,
    ':waktu' => $waktu,
    ':id' => $id
  ]);
  header('Location: index.php');
  exit();
}

$stmt = $conn->prepare('SELECT * FROM tugas WHERE id = :id');
$stmt->execute([':id' => $id]);
$tugas = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<form method="post">
  Deskripsi: <input name="deskripsi" value="<?= $tugas['deskripsi'] ?>"><br>
  Waktu: <input name="waktu" type="number" value="<?= $tugas['waktu'] ?>"><br>
  <button type="submit">Simpan</button>
</form>
