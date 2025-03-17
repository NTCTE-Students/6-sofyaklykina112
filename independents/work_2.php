<?php

$filename = 'output.txt';


$content = "Hello, World!";

file_put_contents($filename, $content);

echo "Содержимое было успешно записано в файл '$filename'.";
?>
