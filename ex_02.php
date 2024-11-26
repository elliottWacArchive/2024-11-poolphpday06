<?php

function my_cat_files(...$paths)
{
    $i = 0;
    foreach ($paths as $path) {
        $file = fopen($path, "r");
        $content = fread($file, filesize($path));
        echo $content;
        $i++;
        if ($i < count($paths)) {
            echo "\n_____";
        }
        echo "\n";
    }
}
// my_cat_files("cucul.txt", "fion.txt", "zizi.txt");
