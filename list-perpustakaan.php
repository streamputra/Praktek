<?php 

    include("config.php"); 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Pendaftaran perpustakaan Baru</title>

    <style>
        body {
            background-image: url("https://scontent.fcgk27-1.fna.fbcdn.net/v/t39.30808-6/323136986_1350746869029405_5568785056163240281_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=e3f864&_nc_eui2=AeG9qCFJT9V-4CqGfKL92WV3i9dTc5Os1YmL11Nzk6zViX1r71JYoiwTFlFRp5m6BhuYdteaEpUhtxWpnt8oj27L&_nc_ohc=lKo6aq7SzSQAX_Fjk4b&_nc_ht=scontent.fcgk27-1.fna&oh=00_AfD0JLn-enVvk0llLh7lDkIgvSi34s96Fd1lml9bUSR9LQ&oe=64840F52");
            color: white;
        }

        table {
            background-color: #6c5ce7;
            border-color: #a29bfe;
            border-radius: 5px;
            padding: 10px 10px 10px 10px;
        }
    </style>
</head>

    <left>
        <body>
            <table border="0">
                <tr>
                    <td>
                        <header>
                            <h3>pengunjung yang sudah mendaftar</h3>
                        </header>
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav>
                            <a href="form-daftar.php" style="color: white; text-decoration: none;">[+] Tambah Baru</a>
                        </nav>
                    </td>
                </tr>
                <tr>
                    <td>
                        <nav>
                            <a href="halaman-depan.php" style="color: #fff; text-decoration: none;">[<-] Kembali Ke Halaman Depan</a>
                        </nav>
                    </td>
                </tr>
            </table>

            <br>

            <table border="1">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nm_pengunjung</th>
                        <th>jenis_buku</th>
                        <th>nm_buku</th>

                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM perpustakaan\\
                    ";
                    $query = mysqli_query($db, $sql);

                    while($id = mysqli_fetch_array($query)){
                        echo "<tr>";

                        echo "<td>".$id['id']."</td>";
                        echo "<td>".$id['nm_pengunjung']."</td>";
                        echo "<td>".$id['jenis_buku']."</td>";
                        echo "<td>".$id['nm_buku']."</td>";


                        echo "<td>";
                        echo "<a style='color: white; text-decoration: none;' href='form-edit.php?id=".$id['id']."'>Edit</a> | ";
                        echo "<a style='color: white; text-decoration: none;' href='hapus.php?id=".$id['id']."'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                    ?>

                </tbody>
            </table>

            <br>

            <table border="0">
                <tr>
                    <td>
                        <header>
                            <p>Total : <?php echo mysqli_num_rows($query) ?></p>
                        </header>
                    </td>
                </tr>
            </table>

        </body>
    </left>
</html>