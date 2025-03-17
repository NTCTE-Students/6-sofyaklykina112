<?php

$filename = 'copy.txt';

if (file_exists($filename)) {

    if (unlink($filename)) {
        echo "Файл '$filename' успешно удален.";
    } else {
        echo "Ошибка: не удалось удалить файл '$filename'.";
    }
} else {
   
    echo "Ошибка: файл '$filename' не существует.";
}
?>
