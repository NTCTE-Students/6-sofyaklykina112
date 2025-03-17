<?php
$logFile = 'log.txt'; 
$message = 'Ваше произвольное сообщение'; 


$currentDateTime = date('Y-m-d H:i:s');


$logEntry = "[$currentDateTime] $message" . PHP_EOL;


file_put_contents($logFile, $logEntry, FILE_APPEND);

echo "Сообщение успешно записано в лог.";
?>
