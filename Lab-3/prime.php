<?php
    $x = 50;
    echo "Prime numbers less than " . $x . " are: <br>";
    for ($num = 2; $num < $x; $num++) {
        $is_prime = 1;
        for ($i = 2; $i < $num; $i++) {
            if (($num % $i) == 0) {
                $is_prime = 0;
                break;
            }
        }
        echo ($is_prime) ? $num . "<br>" : "";
    }
?>