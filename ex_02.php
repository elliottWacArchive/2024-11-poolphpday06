<?php

function my_cat_files(...$paths)
{
    $i = 0;
    $mess = "";
    foreach ($paths as $path) {
        $file = fopen($path, "r");
        if (filesize($path) != 0) {
            $content = fread($file, filesize($path));
            $mess = $mess . $content;
        }
        $i++;
        if ($i < count($paths) && filesize($path) != 0) {
            $mess = $mess . "_____\n";
        }
        fclose($file);
    }
    return $mess;
}
echo my_cat_files("caca.txt","pipi.txt");
