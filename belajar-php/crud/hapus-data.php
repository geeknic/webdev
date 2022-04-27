<?php

if (isset($_GET['no'])){
    $no = $_GET['no'];

    require_once "conn.php";

    // Delete data
    $sql = "DELETE FROM mahasiswa WHERE `no`=$no";

    if ($conn->query($sql) === TRUE) {
        echo "Record Data Deleted Successfully";
    } else {
        echo "Error ". $sql . "<br>" . $conn->error;
    }
}