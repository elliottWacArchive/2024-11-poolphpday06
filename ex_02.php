<?php

function my_cat_files(...$paths)
{
    $i = 0;
    $mess = "";
    foreach ($paths as $path) {
        $file = fopen($path, "r");
        $content = fread($file, filesize($path));
        $mess = $mess . $content;
        $i++;
        if ($i < count($paths)) {
            $mess = $mess . "\n_____";
        }
        fclose($file);
    }
    return $mess;
}
// echo my_cat_files("cucul.txt", "fion.txt", "zizi.txt");
