<?php

echo "<h2>Demonstration of All fopen() Modes</h2><hr>";

$file = "demo.txt";

echo "<h3>Mode: r (Read Only)</h3>";
if (file_exists($file)) {
    $handle = fopen($file, "r");
    echo nl2br(fread($handle, filesize($file)));
    fclose($handle);
} else {
    echo "File does not exist for read mode.<br>";
}
echo "<hr>";

echo "<h3>Mode: w (Write Only - Erases Old Data)</h3>";
$handle = fopen($file, "w");
fwrite($handle, "This file is opened in w mode.\nOld content erased.\n");
fclose($handle);
echo "Data written using w mode.<br>";
echo "<hr>";

echo "<h3>Mode: a (Append Only)</h3>";
$handle = fopen($file, "a");
fwrite($handle, "This line is appended using a mode.\n");
fclose($handle);
echo "Data appended successfully.<br>";
echo "<hr>";

echo "<h3>Mode: x (Create New File)</h3>";
$newFile = "newfile.txt";
if (!file_exists($newFile)) {
    $handle = fopen($newFile, "x");
    fwrite($handle, "File created using x mode.\n");
    fclose($handle);
    echo "New file created successfully.<br>";
} else {
    echo "File already exists. x mode failed.<br>";
}
echo "<hr>";

echo "<h3>Mode: r+ (Read & Write)</h3>";
if (file_exists($file)) {
    $handle = fopen($file, "r+");
    fwrite($handle, "Updated using r+ mode.\n");
    rewind($handle);
    echo nl2br(fread($handle, filesize($file)));
    fclose($handle);
} else {
    echo "File not found for r+ mode.<br>";
}
echo "<hr>";

echo "<h3>Mode: w+ (Read & Write - Erase Old Data)</h3>";
$handle = fopen($file, "w+");
fwrite($handle, "File opened with w+ mode.\nOld content removed.\n");
rewind($handle);
echo nl2br(fread($handle, filesize($file)));
fclose($handle);
echo "<hr>";

echo "<h3>Mode: a+ (Read & Append)</h3>";
$handle = fopen($file, "a+");
fwrite($handle, "Appended using a+ mode.\n");
rewind($handle);
echo nl2br(fread($handle, filesize($file)));
fclose($handle);
echo "<hr>";

echo "<h3>Mode: x+ (Create New File for Read & Write)</h3>";
$anotherFile = "anotherfile.txt";
if (!file_exists($anotherFile)) {
    $handle = fopen($anotherFile, "x+");
    fwrite($handle, "Created using x+ mode.\n");
    rewind($handle);
    echo nl2br(fread($handle, filesize($anotherFile)));
    fclose($handle);
} else {
    echo "File already exists. x+ mode failed.<br>";
}
echo "<hr>";

echo "<h2>All fopen() Modes Demonstrated Successfully</h2>";

?>
