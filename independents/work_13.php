<?php
$jsonFile = 'data.json'; 


$jsonData = file_get_contents($jsonFile);
$arrayData = json_decode($jsonData, true);


$newElement = [
    'id' => 4,
    'name' => 'Новое имя',
    'value' => 'Новое значение'
];


$arrayData[] = $newElement;


file_put_contents($jsonFile, json_encode($arrayData, JSON_PRETTY_PRINT));

echo "Новый элемент успешно добавлен в файл.";
?>
