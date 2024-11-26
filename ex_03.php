<?php

function write_into_file($str, $path, $append = false)
{
    if (file_exists($path)) {
        $file = fopen($path, "r+");
        if ($append) {
            $txt = fread($file, filesize($path)) . $str;
            file_put_contents($path, $txt);
        } else {
            file_put_contents($path, $str);
        }
        return true;
    }
    return false;
}
//echo write_into_file("fesse","dede.txt", true);
