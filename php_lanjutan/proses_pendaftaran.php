<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pendaftaran</title>
</head>
<body>
    Selamat Datang <?php echo $_POST['nama'];?> <br><br>
    NIM: <?php echo $_POST['nim'];?> <br><br>
    E-mail: <?php echo $_POST['email'];?> <br><br>
    Tempat, Tanggal Lahir: <?php echo $_POST['tempat'];?>,  <?php echo $_POST['ttl'];?><br><br>
    Alamat: <?php echo $_POST['alamat'];?> <br><br>
    Jenis Kelamin: <?php echo $_POST['gender'];?> <br><br>
</body>
</html>