<?php

function my_generate_file($name)
{
    $file = fopen("$name.txt", "w+");
    if (isset($file)) {
        return true;
    }
    return false;
}
