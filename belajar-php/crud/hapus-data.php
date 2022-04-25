<?php

require_once "conn.php";

$sql = "DELETE FROM mahasiswa WHERE `no`=5";

if ($conn->query($sql) === TRUE) {
    echo "Record Data Deleted Successfully";
} else {
    echo "Error ". $sql . "<br>" . $conn->error;
}