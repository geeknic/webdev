<?php

require_once "conn.php";

$sql = "UPDATE mahasiswa SET `tpt_lahir`='Malang' WHERE `no`=6";

if ($conn->query($sql) === TRUE) {
    echo "Record Updated Successfully";
} else {
    echo "Error ". $sql . "<br>" . $conn->error;
}