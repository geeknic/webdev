<?php

class Hitung {
    public function tambah(int $a, int $b) {
        return $a + $b;
    }
}


class Penjumlahan {
    
    function __construct(int $a, int $b) {
        $hitung = new Hitung();
        $hitung->tambah($a, $b);
    }

}