<?php
// untuk koneksi
include_once ('../db/koneksi.php');

$kdbar = $_GET['kd_barang'];
$sql   = "DELETE FROM tbl_barang WHERE kd_barang = '$kdbar'";
$query = $mysqli->query($sql);

if ($query) {
  header('location:'.'barangData.php');
}
?>
