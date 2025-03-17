<?php
$filename = 'example.txt';

if (file_exists($filename)) {

    $content = file_get_contents($filename);

    echo nl2br(htmlspecialchars($content));
} else {
    echo "Ошибка: файл '$filename' не существует.";
}
?>
