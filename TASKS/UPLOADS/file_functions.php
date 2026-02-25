<?php

echo "<h1>PHP File Functions Demonstration</h1>";
echo "<hr>";

$file = "File_Functions.txt";

//fwrite()
$handle = fopen($file, "w");
fwrite($handle, "Hello Nabi\nThis is PHP File Handling Lab.\n");//overwrite content and create file if not exist
fclose($handle);
echo "<h3>File Created & Written Successfully</h3>";
$handle = fopen($file, "r");
$content = fread($handle, filesize($file));// fread():reads file content
fclose($handle);
echo "<h3>File Content using fread():</h3>";
echo nl2br($content);//nl2br prints the content with including line breaks instead of in a single line
echo "<h3>File Content using file_get_contents():</h3>";
echo nl2br(file_get_contents($file)); // file_get_contents() :- it is shortcut for fopen & fread()
file_put_contents($file, "\nNew Line Added using file_put_contents()");
echo "<h3>Reading file line-by-line using file():</h3>";
$lines = file($file);//file() it stores data as an array
foreach ($lines as $line) {
    echo $line . "<br>";
}

echo "<hr>";

// FILE INFORMATION FUNCTIONS

echo "<h2>File Information</h2>";

if (file_exists($file))
    {
    echo "File Exists<br>";
    echo "File Size: " . filesize($file) . " bytes<br>";
    echo "File Type: " . filetype($file) . "<br>";
    echo "Last Access Time: " . date("Y-m-d H:i:s", fileatime($file)) . "<br>";
    echo "Last Modified Time: " . date("Y-m-d H:i:s", filemtime($file)) . "<br>";
    echo "Creation Time: " . date("Y-m-d H:i:s", filectime($file)) . "<br>";
    echo "Permissions: " . fileperms($file) . "<br>";
    echo "Owner ID: " . fileowner($file) . "<br>";
    echo "Group ID: " . filegroup($file) . "<br>";
    echo "Inode: " . fileinode($file) . "<br>";
}

echo "<hr>";

// FILE & FOLDER MANAGEMENT

echo "<h2>File & Folder Management</h2>";
copy($file, "copy_sample.txt");//copy() function left side file copied to right side one if no txt file it creates it
echo "File Copied<br>";
rename("copy_sample.txt", "renamed_sample.txt"); // rename(a,b) a with b
echo "File Renamed<br>";
if (!is_dir("test_folder")) {
    mkdir("test_folder");
    echo "Folder Created<br>";
}
echo "Is sample.txt a file? " . (is_file($file) ? "Yes<br>" : "No<br>");//checks it is file or not
echo "Is test_folder a directory? " . (is_dir("test_folder") ? "Yes<br>" : "No<br>");//checks is dir or not
unlink("renamed_sample.txt"); // removes/delete file unlink()
echo "Renamed File Deleted<br>";
rmdir("test_folder"); // removes folder rmdir()
echo "Folder Deleted<br>";
echo "<hr>";

// DIRECTORY HANDLING

echo "<h2>Directory Handling</h2>";
echo "Current Working Directory: " . getcwd() . "<br>";// show current directory
echo "<h3>Files using scandir():</h3>";
$files = scandir(".");//scandir(".") it means to scan every dir and store it in an array
print_r ($files);
echo "It is using print_r which prints as an array:";
foreach ($files as $f) {
    echo $f . "<br>";
}
echo "It is using echo foreach file which prints a file using loop";


echo "<h3>Files using opendir() & readdir():</h3>";
$dir = opendir(".");
while (($file = readdir($dir)) !== false) {
    echo $file . "<br>";
}
closedir($dir);


mkdir("new_folder");
chdir("new_folder");// change directory
echo "Changed Directory To: " . getcwd() . "<br>";
chdir("..");
rmdir("new_folder");

echo "<hr>";

// FILE LOCKING

echo "<h2>File Locking</h2>";

// open file and lock
$handle = fopen("lock_file.txt", "w");

if (flock($handle, LOCK_EX)) {
    fwrite($handle, "This file is locked during writing.");
    flock($handle, LOCK_UN);
    echo "File Locked & Written Successfully<br>";
} else {
    echo "Could not lock the file<br>";
}

fclose($handle);

echo "<hr>";
echo "<h2>All Major PHP File Functions Demonstrated Successfully</h2>";
print "Programmer is nabi";

?>
