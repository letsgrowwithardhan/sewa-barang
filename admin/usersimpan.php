<?php
include "koneksi.php";
$id_user          = $_POST['id_user'];
$nama             = $_POST['nama'];
$jk               = $_POST['jk'];
$telp             = $_POST['telp'];
$email            = $_POST['email'];
$alamat           = $_POST['alamat'];
$tgl_entry        = $_POST['tgl_entry'];

$lokasi_file= $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
move_uploaded_file($lokasi_file,"../admin/foto/$foto");

$hasil=mysqli_query($konek, "insert into tbuser (id_user, nama, jk, telp, email, alamat, tgl_entry, foto) 
    values ('$id_user', '$nama', '$jk', '$telp', '$email', '$alamat', '$tgl_entry', '$foto');");
            if(!$hasil)
                die("Penyimpanan data gagal dilaksanakan");

            echo "<br><br>";
            print("<html><head><meta http-equiv='refresh' content='2;url=finputuser.php'></head><body></body></html>");
            ?>