<?php

for ($i=0; $i < 100; $i++) {

    if ($i % 15 == 0 && $i != 0) {
        $msg = "Fizz Buzz";
    } else if ($i % 3 == 0 && $i != 0) {
        $msg = "Fizz";
    } else if ($i % 5 == 0 && $i != 0) {
        $msg = "Buzz";
    } else {
        $msg = $i;
    }

    echo $msg."<br/>";
}