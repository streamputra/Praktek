<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Pendaftaran Perpustakaan</title>

        <style>
            body {
                background-image: url("https://mmc.tirto.id/image/otf/1024x535/2017/05/02/perputakaan-kuno.JPG");
            }     
        </style>
    </head>

    <body>
        <div class="container-logout">
            <form action="" method="POST" class="login-email">
                <?php echo '<h1>Pendaftaran Perpustakaan</h1>'; ?>
                <?php echo '<h1>jayabakti</h1>'; ?>

                <br>


                

                <?php echo '<h3>Menu</h3>'; ?>
 
                <div class="input-group">
                    <a href="form-daftar.php" class="btn">Daftar Baru</a>
                    <a href="list-siswa.php" class="btn">Pendaftar</a>
                    <a href="logout.php" class="btn">Logout</a>
                </div>
            </form>
        </div>
    </body>
</html>