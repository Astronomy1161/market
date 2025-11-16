<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "fisherman") {
    header("Location: ../login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Fisherman Home</title>
<style>
body {
    font-family: Arial;
    background: #e0f7fa;
    margin: 0;
}
.header {
    padding: 20px;
    background: #0077b6;
    color: white;
}
.container {
    padding: 20px;
}
</style>
</head>
<body>

<div class="header">
    <h2>Fisherman Dashboard</h2>
</div>

<div class="container">
    <h3>Welcome, <?php echo $_SESSION["fullname"]; ?>!</h3>
    <p>You can manage your fish listings, update catch quantity, etc.</p>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>
