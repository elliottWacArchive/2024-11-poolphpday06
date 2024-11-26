<?php

function my_generate_file($name)
{
    if (file_exists("$name.txt")) {
        return false;
    }
    $file = fopen("$name.txt", "x");
    fclose($file);
    return true;
}
