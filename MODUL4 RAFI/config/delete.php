<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_rafi_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
  header("location: ../pages/List-Rafi.php?pesan=hapus");
} else {
  header("location: ../pages/List-Rafi.php?pesan=gagal");
}