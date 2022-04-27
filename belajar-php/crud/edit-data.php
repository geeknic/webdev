<!-- step 1 -->
<?php



if (isset($_GET['no'])){
    $no = $_GET['no'];

    //echo $no;

    require_once "conn.php";

    // Tampil Data Semua 
    $sql = "SELECT * FROM mahasiswa WHERE no=".$no;


    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    var_dump($row);

    //echo $row['nim'];
    // buka localhost/...<sesuaikan>../edit-data.php?no=1
}

?>

<!-- end step 1 -->

<!-- step 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
   <h1>Input Data</h1>
   <form action="update-data.php" method="post">
    <label>NIM</label><br>
    <input type="text" name="nim" value="<?= $row['nim']; ?>"><br>
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $row['nama']; ?>"><br>
    <label>Jenis Kelamin</label><br>
    <select name="jns_kelamin">
        <option value="0">Pilih</option>
        <option value="Perempuan">Perempuan</option>
        <option value="Laki-laki">Laki-laki</option>
    </select><br>
    <label>Tempat Lahir</label><br>
    <input type="text" name="tpt_lahir" value="<?= $row['tpt_lahir']; ?>"><br>
    <label>Tanggal Lahir</label><br>
    <input type="text" name="tgl_lahir" value="<?= $row['tgl_lahir']; ?>"><br>
    <label>Alamat</label><br>
    <textarea name="alamat"><?= $row['alamat']; ?></textarea><br>
    <input type="submit" name="input" value="Update">
    <input type="hidden" name="no" value="<?= $row['no']; ?>">
   </form>  
</body>
</html>
<!-- end step 2 -->