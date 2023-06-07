<?php

    include("config.php");

    // kalau tidak ada id di query string
    if( !isset($_GET['id']) ){
        header('Location: list-siswa.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if( mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulir Edit perpustakaan</title>

    <style>
        body {
            background-image: url("https://assets.universitas123.com/images/109/7-peralatan-sekolah-sma-lengkap-anak-ipa.jpg");
        }

        button {
            background-color: #6c5ce7;
            border-color: #a29bfe;
            border-radius: 5px;
            padding: 2.5px 2.5px 2.5px 2.5px;
        }
    </style>
</head>

    <body>
        <div class="container">

            <form action="proses-edit.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <header>
                                <h3>Formulir Edit perpustakaan</h3>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $id['id'] ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nama">Nama Pengunjung : </label>
                        <input type="text" name="nm_pengunjung" placeholder="nama lengkap" value="<?php echo $id['nm_pengunjung'] ?>" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="jenis_buku">Jenis Kelamin : </label></td>
                    </tr>
                    <tr>
                        <td><?php $jb = $id['jenis_buku']; ?>
                        <label><input type="radio" name="jenis_buku" value="anime" <?php echo ($jb == 'Anime') ? "checked": "" ?> style="border-color: #a29bfe;"> Anime</label>
                        <label><input type="radio" name="jenis_buku" value="pelajaran" <?php echo ($jb == 'Pelajaran') ? "checked": "" ?> style="border-color: #a29bfe;"> Pelajaran</label>
                        <label><input type="radio" name="jenis_buku" value="ensiklopedia" <?php echo ($jb == 'Ensiklopedia') ? "checked": "" ?> style="border-color: #a29bfe;"> Ensiklopedia</label>
                        <label><input type="radio" name="jenis_buku" value="sejarah" <?php echo ($jb == 'Sejarah') ? "checked": "" ?> style="border-color: #a29bfe;"> Sejarah</label>
                        <label><input type="radio" name="jenis_buku" value="puisi" <?php echo ($jb == 'Puisi') ? "checked": "" ?> style="border-color: #a29bfe;"> Puisi</label></td>
                    </tr>
                    <tr>
                        <td><label for="nm_buku">nama buku : </label>
                        <?php $nm_buku = $id['nm_buku']; ?></td>
                    </tr>
                    <tr>
                        <td><select name="nm_buku" style="border-radius: 5px; border-color: #a29bfe;">
                            <option <?php echo ($nm_buku == 'naruto') ? "selected": "" ?>>naruto</option>
                            <option <?php echo ($nm_buku == 'matematika') ? "selected": "" ?>>matematika</option>
                            <option <?php echo ($nm_buku == 'ensiklopedia benua') ? "selected": "" ?>>ensiklopedia benua</option>
                            <option <?php echo ($nm_buku == 'perang dunia') ? "selected": "" ?>>perang dunia</option>
                            <option <?php echo ($nm_buku == 'puisi bunda') ? "selected": "" ?>>puisi bunda</option>
                        </select></td>
                    </tr>
                   
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Simpan" name="simpan" style="color: #fff; background-color: #6c5ce7; border-color: #a29bfe; border-radius: 5px; padding: 2.5px 2.5px 2.5px 2.5px;" /></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><p><button><a href="halaman-depan.php" style="color: #fff; text-decoration: none;">Kembali Ke Halaman Depan</a></button></p></td>
                    </tr>
                    <tr>
                        <td><p><button><a href="list-siswa.php" style="color: #fff; text-decoration: none;">Menuju Ke Halaman Data Pendaftar</a></button></p></td>
                    </tr>
                </table>   
            </form>

        </div>
    </body>
</html>