<?php

$file = basename($_GET["file"]);
$path = "uploads/" . $file;

if (file_exists($path)) {
    if (unlink($path)) {
        echo "File deleted successfully";
    } else {
        echo "File not deleted";
    }
} else {
    echo "File does not exist";
}

?>
