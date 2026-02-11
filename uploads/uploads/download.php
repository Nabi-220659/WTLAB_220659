<?php
if (!isset($_GET['file'])) {
    die("No file specified.");
}

$fileName = basename($_GET['file']);
$filePath = "UPLOADS/" . $fileName;

if (!file_exists($filePath)) {
    die("File not found.");
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"" . $fileName . "\"");
header("Content-Length: " . filesize($filePath));

readfile($filePath);
exit;
?>
