<?php
include_once __DIR__ . "/app/Config/auth.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome</h1>
    <h2><?= htmlspecialchars($_SESSION['user_name']) ?></h2>
    <a href="logout.php">Logout</a>
</body>

</html>