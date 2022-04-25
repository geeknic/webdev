<?php

    $nama = "Browny";
    $umur = 3;
    $tinggi = 3.5;


    // $kalimat = "Halo, nama saya $nama umur saya adalah $umur tahun dan tinggi badan saya adalah $tinggi cm";

    // echo $kalimat;

    // percabangan if-else
    /*
    if($nama == "Browny") 
    {
        echo "Benar itu Browny";
    } else {
        echo "Kamu siapa?"; 
    }
*/

    // percabangan switch-case
    /*
    switch($nama) {
        case "Browny":
        echo "Benar itu Browny";
        break;
        default:
        echo "kamu siapa?";
    }
    */

    // Ternary Operator
    /*
    $kalimat = $nama == "Abdul"  ? "Benar itu Browny" : "Kamu siapa?";

    echo $kalimat;
    */

    // perulangan for
    /*
    for($i=0; $i <= 10; $i++) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
    }
    */

    // perulangan while
    /*
    $i = 0;
    while($i <= 10) {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    }
    */

    // perulangan do while
    /*
    $i = 0;

    do {
        echo "Ini adalah perulangan ke-$i";
        echo "<br/>";
        $i++;
    } while($i < 11);
  */

  // perulangan foreach + built-in function
  /* 
  $nama = array("Ega" => 25000000, 
                "Nazif" => 100000000, 
                "Gus Pur" => 230000000, 
                "Mulana" => 50000000, 
                "Abdul Wahid" => 450000000, 
                "Herlina" => 5000000000, 
                "Dea" => 4000000);

  foreach ($nama as $sebutan => $nilai) {
      echo "Nama saya adalah $sebutan nilai buruan saya adalah Rp ".number_format($nilai, 2, ".", ",");
      echo "<br/>";
  }
  */

  // user-defined function
  /*
  function sebut_nama($nama) {
      $sebut = "Halo, nama saya $nama";
      return $sebut;
  }

  echo sebut_nama($nama);
  */

  // built-in function
 /*
  echo strlen("Halo, nama saya $nama");
*/
?>