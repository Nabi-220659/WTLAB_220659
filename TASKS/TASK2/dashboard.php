<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body{
            background:#111;
            color:white;
            font-family:Arial;
            text-align:center;
            padding-top:80px;
        }
        img{
            border-radius:50%;
            margin-bottom:20px;
        }
        .box{
            background:#222;
            padding:30px;
            display:inline-block;
            border-radius:10px;
        }
        button{
            padding:10px 20px;
            margin-top:20px;
            background:#ff4d4d;
            border:none;
            color:white;
            font-weight:bold;
            cursor:pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <img src="<?php echo $user['picture']; ?>" width="120"><br>

    <h2><?php echo htmlspecialchars($user['name']); ?></h2>
    <p><?php echo htmlspecialchars($user['email']); ?></p>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>
</div>

</body>
</html>
