<?php
include "koneksi.php";

$no_transaksi        = $_POST['no_transaksi'];
$id_user             = $_POST['id_user'];
$id_barang           = $_POST['id_barang'];
$jml_pinjam          = $_POST['jml_pinjam'];
$tgl_pinjam          = $_POST['tgl_pinjam'];
$tgl_batas_kembali   = $_POST['tgl_batas_kembali'];
$denda               = $_POST['denda'];
$tgl_kembali         = $_POST['tgl_kembali'];

/* Ambil data lama peminjaman */
$data_lama = mysqli_query($konek, "SELECT jml_pinjam, status FROM tbpeminjaman WHERE no_transaksi='$no_transaksi'");
$lama = mysqli_fetch_assoc($data_lama);

/* Update tabel peminjaman */
$hasil = mysqli_query($konek, "UPDATE tbpeminjaman SET 
        id_user='$id_user',
        id_barang='$id_barang',
        jml_pinjam='$jml_pinjam',
        tgl_pinjam='$tgl_pinjam',
        tgl_batas_kembali='$tgl_batas_kembali',
        status='kembali',
        denda='$denda',
        tgl_kembali='$tgl_kembali'
        WHERE no_transaksi='$no_transaksi'");

if(!$hasil){
    die("Penyimpanan data gagal dilaksanakan");
}

/* Kembalikan stok HANYA JIKA sebelumnya belum kembali */
if ($lama['status'] != 'kembali') {
    $query = mysqli_query($konek, 
        "UPDATE tbbarang 
         SET jml_barang = jml_barang + ".$lama['jml_pinjam']." 
         WHERE id_barang='$id_barang'"
    );

    if (!$query) {
        die("Gagal mengupdate jumlah barang");
    }
}

echo "<html>
<head>
<meta http-equiv='refresh' content='2;url=daftar_konfirmasi_pinjam.php'>
</head>
<body></body>
</html>";
?>
