<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "buyer") {
    header("Location: ../login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Buyer Home</title>
<style>
body {
    font-family: Arial;
    background: #fff4d6;
    margin: 0;
}
.header {
    padding: 20px;
    background: #f77f00;
    color: white;
}
.container {
    padding: 20px;
}
</style>
</head>
<body>

<div class="header">
    <h2>Buyer Dashboard</h2>
</div>

<div class="container">
    <h3>Welcome, <?php echo $_SESSION["fullname"]; ?>!</h3>
    <p>Browse fish listings and make purchases.</p>

    <a href="logout.php">Logout</a>
</div>

</body>
</html>
