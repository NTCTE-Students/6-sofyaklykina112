<?php

$filename = 'Без имени 1.csv'; 


if (file_exists($filename)) {
 
    if (($handle = fopen($filename, 'r')) !== false) {
      
        echo "<table border='1'>";

        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
         
            echo "<tr>";
            
            foreach ($data as $cell) {
                echo "<td>" . htmlspecialchars($cell) . "</td>"; 
            }
           
            echo "</tr>";
        }

        echo "</table>";

    
        fclose($handle);
    } else {
        echo "Ошибка: не удалось открыть файл '$filename'.";
    }
} else {
    echo "Ошибка: файл '$filename' не существует.";
}
?>
