<?php
$filename = 'output.txt';

$newLine = "Hello, World!\n"; 
$fileHandle = fopen($filename, 'a'); 
if ($fileHandle) {
    fwrite($fileHandle, $newLine);

    fclose($fileHandle);
    echo "Новая строка была успешно добавлена в файл '$filename'.";
} else {

    echo "Ошибка: не удалось открыть файл '$filename'.";
}
?>
