<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// allow only POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("<h3>Error: Form submission required.</h3>");
}

// database connection
$conn = mysqli_connect("localhost", "root", "", "user_details");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// clean input
$name   = trim($_POST['name']);
$email  = trim($_POST['email']);
$mobile = trim($_POST['mobile']);

// validate name length
if (strlen($name) < 2) {
    die("Error: Name is too short (Minimum 2 characters required).");
}

// validate mobile number
if (!ctype_digit($mobile) || strlen($mobile) !== 10) {
    die("Error: Mobile number must contain exactly 10 digits.");
}

// validate email using strpos
if (strpos($email, "@") === false) {
    die("Error: Invalid email format (Missing @).");
}

// format name
$name = ucwords(strtolower($name));

// insert data using prepared statement
$stmt = mysqli_prepare($conn, "INSERT INTO details (name, email, mobile) VALUES (?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sss", $name, $email, $mobile);

if (mysqli_stmt_execute($stmt)) {
    echo "<h3>Registration Successful!</h3>";
    echo "Processed Name: " . htmlspecialchars($name) . "<br>";
    echo "Processed Email: " . htmlspecialchars(strtolower($email)) . "<br>";
    echo "Mobile: " . htmlspecialchars($mobile) . "<br>";
} else {
    die("Error: Database insertion failed.");
}

mysqli_stmt_close($stmt);

// LOGIN STRING COMPARISON (ADDED : NOTHING REMOVED)
$stmt2 = mysqli_prepare($conn, "SELECT name, email FROM details WHERE email = ?");
mysqli_stmt_bind_param($stmt2, "s", $email);
mysqli_stmt_execute($stmt2);
$result = mysqli_stmt_get_result($stmt2);
$user = mysqli_fetch_assoc($result);

// logic error handling
if (!$user) {
    die("Error: Login failed. User not found.");
}

// compare strings properly and handle case sensitivity
if (strcasecmp($user['email'], $email) !== 0) {
    die("Error: Email comparison failed.");
}

// display messages using echo and print
echo "<hr>";
echo "<h3>Login Successful!</h3>";
echo "Welcome: " . htmlspecialchars($user['name']) . "<br>";
print "Logged in Email: " . htmlspecialchars(strtolower($user['email'])) . "<br>";

mysqli_stmt_close($stmt2);

// task completion message
echo "<hr>";
echo "<h2>Part-C Task Complete</h2>";
echo "
Functions used:<br>
trim() : clean input name<br>
strlen() : it is used to know string length<br>
strpos() : email validation <br>
strcasecmp() : string comparison to handle case sensitivity<br>
strtolower(), ucwords() : formatting the username<br>
die() : logic and database errors to stop execution of file
";

print "Programmer is nabi";

mysqli_close($conn);
?>
