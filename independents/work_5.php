<?php

$filename = 'example.txt';

$searchWord = 'tempus'; 

if (file_exists($filename)) {

    $fileHandle = fopen($filename, 'r');

   
    $wordCount = 0;

    while (!feof($fileHandle)) {
        $line = fgets($fileHandle);

        $wordCount += substr_count($line, $searchWord);
    }

  
    fclose($fileHandle);

    echo "Слово '$searchWord' встречается в файле '$filename': $wordCount раз.";
} else {
  
    echo "Ошибка: файл '$filename' не существует.";
}
?>
