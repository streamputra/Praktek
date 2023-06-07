<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){ // jika button daftar di klik

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['asal_sekolah'];

    // buat query
    $sql = "INSERT INTO siswa (nama, jenis_kelamin, agama, alamat, asal_sekolah) VALUE ('$nama', '$jk', '$agama', '$alamat', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php dengan status=sukses
        header('Location: list-siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman list-siswa.php dengan status=gagal
        header('Location: list-siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>