<?php

class Files
{
    function displayContent($filename)
    {
        $result = true;
        try {
            echo "Read the content of the: $filename" . PHP_EOL;
            $content = file_get_contents($filename);
            echo "Displaying content of the file: $filename\n" . PHP_EOL;
            echo $content;

        } catch (\Throwable $th) {
            $result = false;
        }

    }
}

$file = new Files();
$file->displayContent(__DIR__ . '\text.txt');

// $file->displayContent('C:\laragon\www\php\oop\text.txt'); 