<?php
$a= 0; $b=0; $c=0; $d=0; $e=0; $f=0; $g=0; $h=0; $i=0; $j=0;
foreach($numbers as $value) {
    if ($value=='1') {
        $a++;
    }

    if ($value=='2') {
        $b++;
    }

    if ($value=='3') {
        $c++;
    }

    if ($value=='4') {
        $d++;
    }

    if ($value=='5') {
        $e++;
    }

    if ($value=='6') {
        $f++;
    }

    if ($value=='7') {
        $g++;
    }

    if ($value=='8') {
        $h++;
    }

    if ($value=='9') {
        $i++;
    }

    if ($value=='10') {
        $j++;
    }
}
    echo '<br><br>';
    echo 'The number of 1s are ' . $a . '.<br>';
    echo 'The number of 2s are ' . $b . '.<br>';
    echo 'The number of 3s are ' . $c . '.<br>';
    echo 'The number of 4s are ' . $d . '.<br>';
    echo 'The number of 5s are ' . $e . '.<br>';
    echo 'The number of 6s are ' . $f . '.<br>';
    echo 'The number of 7s are ' . $g . '.<br>';
    echo 'The number of 8s are ' . $h . '.<br>';
    echo 'The number of 9s are ' . $i . '.<br>';
    echo 'The number of 10s are ' . $j . '.<br>';
?>
