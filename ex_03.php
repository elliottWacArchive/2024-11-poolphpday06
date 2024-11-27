<?php

function write_into_my_file($str, $path, $append = false)
{
    if (file_exists($path)) {
        a:
        $file = fopen($path, "r+");
        if ($append && (filesize($path) != 0)) {
            $txt = fread($file, filesize($path)) . $str;
            file_put_contents($path, $txt);
        } else {
            file_put_contents($path, $str);
        }
        fclose($file);
        return true;
    } else {
        $file = fopen($path, "w+");
        goto a;
    }
    return false;
}
