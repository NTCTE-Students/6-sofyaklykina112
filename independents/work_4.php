<?php

$filename = 'example.txt';


if (file_exists($filename)) {
    
    $fileHandle = fopen($filename, 'r');

   
    $lineCount = 0;

  
    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);
      
        if ($line !== false) {
            $lineCount++;
        }
    }

  
    fclose($fileHandle);

    echo "Количество строк в файле '$filename': $lineCount";
} else {

    echo "Ошибка: файл '$filename' не существует.";
}
?>
