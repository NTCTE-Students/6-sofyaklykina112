<?php

$sourceFile = 'example.txt';
$destinationFile = 'copy.txt';


if (file_exists($sourceFile)) {
    
    if (file_exists($destinationFile)) {

        echo "Предупреждение: файл '$destinationFile' уже существует. Копирование не выполнено.";
    } else {

        if (copy($sourceFile, $destinationFile)) {
            echo "Содержимое файла '$sourceFile' успешно скопировано в '$destinationFile'.";
        } else {
            echo "Ошибка: не удалось скопировать файл '$sourceFile' в '$destinationFile'.";
        }
    }
} else {
    echo "Ошибка: файл '$sourceFile' не существует.";
}
?>
