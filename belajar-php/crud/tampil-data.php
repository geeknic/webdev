<?php

require_once "conn.php";


// SQL tampil data individu
// $sql = "SELECT * FROM mahasiswa WHERE `no`=2";

// Tampil Data Semua 
$sql = "SELECT * FROM mahasiswa";


$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo $row['no']." | ".$row['nim']." | ".$row['nama']." | ".$row['jns_kelamin']." | ".$row['tpt_lahir']." | ".$row['tgl_lahir']." | ".$row['alamat'];
        echo ' | <a href="edit-data.php?no='.$row['no'].'">edit</a>';
        echo ' | <a href="hapus-data.php?no='.$row['no'].'">hapus</a>';
        echo "<br>";
    }
} else {
    echo "Result : 0";
}