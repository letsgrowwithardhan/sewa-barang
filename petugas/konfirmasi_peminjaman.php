<?php
include "koneksi.php";
$no_transaksi=$_GET['no_transaksi'];
$hasil=mysqli_query($konek, "UPDATE tbpeminjaman SET status = 'tersewa' WHERE no_transaksi='$no_transaksi'; ");

echo "<br><br>";
print ("<html><head><meta http-equiv='refresh' content='2;url=daftar_konfirmasi_pinjam.php'></head><body></body></html>")
?>