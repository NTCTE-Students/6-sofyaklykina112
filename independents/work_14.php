<?php
$sourceDir = 'source_directory'; 
$backupDir = 'backup_' . date('Y-m-d'); 


if (!is_dir($backupDir)) {
    mkdir($backupDir);
}


$files = scandir($sourceDir);

foreach ($files as $file) {
 
    if ($file !== '.' && $file !== '..') {
      
        copy("$sourceDir/$file", "$backupDir/$file");
    }
}

echo "Резервная копия создана в директории $backupDir.";
?>
