<?php

function my_sort_int_tab(&$tab)
{
    $size = count($tab);
    for ($i = 0; $i < $size - 1; $i++) {
        for ($j = 0; $j < $size - $i - 1; $j++) {
            if ((string)$tab[$j] > (string)$tab[$j + 1]) {
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
}
