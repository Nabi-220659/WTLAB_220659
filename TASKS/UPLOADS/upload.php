<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_FILES["file"])) {
        die("No file selected.");
    }

    $fileName = $_FILES["file"]["name"];
    $tmpName  = $_FILES["file"]["tmp_name"];
    $error    = $_FILES["file"]["error"];

    $uploadDir = "uploads/";
    $destination = $uploadDir . basename($fileName);

    if ($error === 0) {

        if (move_uploaded_file($tmpName, $destination)) {
            echo "<h3>File uploaded successfully!</h3>";
            echo "<a href='download.php?file=" . urlencode($fileName) . "'>
                    <button>Download File</button>
                  </a><br><br><br>";
            echo "<a href='delete.php?file=" . urlencode($fileName) . "'>
        <button>DELETE FILE</button>
      </a>";

        } 
        else {
            echo "Error moving uploaded file.";
        }

    } else {
        echo "Upload error.";
    }

} else {
    echo "<h3>Please upload a file first.</h3>";
}
?>
