<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulir Pendaftaran Perpustakaan </title>

    <style>
        body {
            background-image: url("https://www.itb.ac.id/files/dokumentasi/1645421808-teknologi-kuantum-freepik.jpg");
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

            <form action="proses-pendaftaran.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <header>
                                <h3>Formulir Pendaftaran Perpustakaan</h3>
                            </header>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="id">id : </label>
                        <input type="text" name="id" placeholder="Masukkan id Anda" style="width: 300px; border-radius: 5px; border-color: #a29bfe;" /></td>
                    </tr>
                    <tr>
                        <td><label for="nm_pengunjung">nama pengunjung : </label></td>
                    </tr>
                   
                    <tr>
                        <td><label for="jenis_buku">jenis_buku : </label></td>
                    </tr>
                    <tr>
                        <td><select name="jenis_buku" style="border-radius: 5px; border-color: #a29bfe;">
                            <option>anime</option>
                            <option>pelajaran</option>
                            <option>ensiklopedia</option>
                            <option>sejarah</option>
                            <option>puisi</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td><label for="nm_buku">nama buku : </label>
                        <textarea name="nm_buku" placeholder="Masukkan Nama buku anda" style="width: 300px; border-radius: 5px; border-color: #a29bfe;"></textarea></td>
                    </tr>
                    <tr>
                        <td>
                            <br>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Daftar" name="daftar" style="color: #fff; background-color: #6c5ce7; border-color: #a29bfe; border-radius: 5px; padding: 2.5px 2.5px 2.5px 2.5px;" /></td>
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