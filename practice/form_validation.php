<?php
if ($_POST) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    if ($name=="" || $email=="" || $age=="" || $course=="") {
        echo "All fields required";
    }
    elseif ($age < 18) {
        echo "Age must be 18+";
    }
    else {
        echo "<h3>Student Details</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Age: $age <br>";
        echo "Course: $course";
    }
}
?>
