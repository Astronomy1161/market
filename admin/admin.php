<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<style>
body {
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
}

.sidebar {
    width: 250px;
    background: #1d3557;
    color: white;
    height: 100vh;
    padding-top: 20px;
    position: fixed;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar a {
    display: block;
    padding: 15px;
    color: white;
    text-decoration: none;
}

.sidebar a:hover {
    background: #457b9d;
}

.content {
    margin-left: 250px;
    padding: 20px;
    width: 100%;
}
</style>
</head>
<body>

<div class="sidebar">
    <h2>ADMIN PANEL</h2>
    <a href="dashboard.php">Dashboard</a>
    <a href="users.php">Manage Users</a>
    <a href="registerfisherman.php">Register Fisherman</a>
    <a href="reports.php">Reports</a>
    <a href="logout.php">Logout</a>
</div>


<div class="content">
    <h1>Welcome, <?php echo $_SESSION["fullname"]; ?>!</h1>
    <p>This is your admin dashboard with sidebar navigation.</p>
</div>

</body>
</html>
