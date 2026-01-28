<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "<h3>Please submit the form first.</h3>";
    exit;
}

// Database connection
$servername = "localhost";
$username   = "root";   // XAMPP default
$password   = "";       // XAMPP default
$database   = "user_details";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Get form data
$name   = trim($_POST['name']);
$email  = trim($_POST['email']);
$mobile = trim($_POST['mobile']);

$errors = [];

// Name validation
if (empty($name)) {
    $errors[] = "Name is required";
} elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
    $errors[] = "Name should contain only letters and spaces";
}

// Email validation
if (empty($email)) {
    $errors[] = "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
}

// Mobile validation
if (empty($mobile)) {
    $errors[] = "Mobile number is required";
} elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
    $errors[] = "Mobile number must be 10 digits";
}

// Insert into DB if no errors
if (empty($errors)) {
    $stmt = mysqli_prepare(
        $conn,
        "INSERT INTO details (name, email, mobile) VALUES (?, ?, ?)"
    );

    mysqli_stmt_bind_param($stmt, "ssi", $name, $email, $mobile);

    if (mysqli_stmt_execute($stmt)) {
        echo "<h3 style='color:green;'>Registration Successful!</h3>";
        echo "Name: $name <br>Email: $email <br>Mobile: $mobile";
    } else {
        echo "<h3 style='color:red;'>Database Error: " . mysqli_error($conn) . "</h3>";
    }

    mysqli_stmt_close($stmt);

} else {
    echo "<h3 style='color:red;'>Errors:</h3>";
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
}

mysqli_close($conn);
?>
