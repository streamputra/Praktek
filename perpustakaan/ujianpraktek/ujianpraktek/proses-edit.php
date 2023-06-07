<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau belum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query update
    $sql = "UPDATE siswa SET nama='$nama', jenis_kelamin='$jk', agama='$agama', alamat='$alamat', asal_sekolah='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>