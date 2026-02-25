<?php
if(isset($_FILES['f'])){
    $name = $_FILES['f']['name'];
    $size = $_FILES['f']['size'];
    $type = $_FILES['f']['type'];
    move_uploaded_file($_FILES['f']['tmp_name'],"UPLOADED_FILES/".$name);
    echo "File uploaded<br>";
    echo "Name: $name <br>";
    echo "Size: $size bytes<br>";
    echo "Type: $type";
}
?>