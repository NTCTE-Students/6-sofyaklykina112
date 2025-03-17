<?php
$targetDir = "uploads/"; 
$targetFile = $targetDir . basename($_FILES["file"]["name"]);
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


$allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $allowedTypes)) {
    die("Ошибка: файл должен быть изображением (JPEG, PNG, GIF).");
}


if ($_FILES["file"]["size"] > 2 * 1024 * 1024) {
    die("Ошибка: размер файла превышает 2 МБ.");
}

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "Файл ". htmlspecialchars(basename($_FILES["file"]["name"])) . " успешно загружен.";
} else {
    echo "Ошибка при загрузке файла.";
}
?>
