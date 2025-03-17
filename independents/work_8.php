<?php

$oldFilename = 'opppaaa.txt'; 
$newFilename = 'big_work'; 


if (file_exists($oldFilename)) {
   
    if (file_exists($newFilename)) {
       
        echo "Ошибка: файл '$newFilename' уже существует. Переименование не выполнено.";
    } else {
      
        if (rename($oldFilename, $newFilename)) {
            echo "Файл '$oldFilename' успешно переименован в '$newFilename'.";
        } else {
            echo "Ошибка: не удалось переименовать файл '$oldFilename'.";
        }
    }
} else {
  
    echo "Ошибка: файл '$oldFilename' не существует.";
}
?>
