<?php

function my_generate_file($name)
{
    $file = fopen("$name.txt", "w+");
    if (isset($file)) {
        fclose($file);
        return true;
    }
    fclose($file);
    return false;
}
