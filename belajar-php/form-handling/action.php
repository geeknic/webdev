<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
</head>
<body>
<?php
// Menampilkan hasil gambar

/*

$size = getimagesize($_FILES['file']['tmp_name']); //get size

$image = "data:" . $size["mime"] . ";base64," .
         base64_encode(file_get_contents($_FILES['file']['tmp_name'])); //get image

echo '<img src="'.$image.'" width="720px" />'; 

*/

/* ---------------------------------------------------- */
?>
<?php
// simpan nilai

$username = $_POST['username'];
$password = $_POST['password'];

// tampilkan nilai

if ($_POST['submit'] == 'Kirim') {

    function is_valid_password($password) {

        // pola regex harus ada huruf besar , huruf kecil dan angka

        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"; 

        if (preg_match($pattern, $password) == 1) {

            $msg = TRUE; // jika kondisi benar

        } else {

            $msg = FALSE; // jika kondisi salah

        }

        return $msg;
    }

    if (empty($username)) {
        echo "Username tidak diisi.";
        return;
    }

    if (empty($password)) {
        echo "Password tidak diisi.";
        return;

    }
    
    if (is_valid_password($password) == FALSE) {
        echo "Kombinasi Password Salah";
        return false;
    }

    if ($username == 'admin' && $password == 'SealIndo2') {
       echo "selamat datang di halaman utama. <br/> Berikut adalah data anda :<br>";
       echo "Username : ".$username;
       echo "<br>";
       echo "Password : ".$password;
   
    } else {
        echo "Anda tidak bisa mengakses halaman utama";
    }

   
} else {
    echo "halaman tidak dapat diakses";
}


?>
</body>
</html>


