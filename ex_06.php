<?php

function my_comb_n($n)
{
    $arr = [];
    $j = 1;
    for ($i = 0; $i < $n; $i++) {
        array_push($arr, $j);
        $j++;
    }
    aff_tab($arr);
}

function aff_tab($arr)
{
    foreach ($arr as $val) {
        echo $val;
    }
    echo "\n";
}

my_comb_n(3);