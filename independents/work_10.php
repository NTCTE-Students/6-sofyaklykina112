<?php

$data = [
    'Элемент 1',
    'Элемент 2',
    'Элемент 3',
];


$filename = 'output.csv';


$file = fopen($filename, 'w');

if ($file === false) {
    die("Не удалось открыть файл.");
}


foreach ($data as $row) {
    fputcsv($file, [$row]);
}

fclose($file);

echo "Данные успешно записаны в файл '$filename'.";
?>
