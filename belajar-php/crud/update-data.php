<?php

require_once "conn.php";

if ($_POST['input'] == "Update") {

    $no = $_POST['no'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jns_kelamin = $_POST['jns_kelamin'];
    $tpt_lahir = $_POST['tpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];

    //var_dump($_POST);

    $sql = "UPDATE mahasiswa SET 
    `nim`='$nim',
    `nama` = '$nama',
    `jns_kelamin` = '$jns_kelamin',
    `tpt_lahir` = '$tpt_lahir',
    `tgl_lahir` = '$tgl_lahir',
    `alamat` = '$alamat'
    WHERE `no`=$no";

    if ($conn->query($sql) === TRUE) {
        echo "Record Updated Successfully";
    } else {
        echo "Error ". $sql . "<br>" . $conn->error;
    }
}

