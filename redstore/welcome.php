<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <H1>Selamat kamu berhasil Login</H1>
    <h1>SILAHKAN PESAN TIKET KAMU</h1>
    <a href="logout.php">
        <button>Logout</button>
    </a>
</body>
</html>