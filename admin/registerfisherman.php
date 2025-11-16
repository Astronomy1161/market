<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: ../login.html");
    exit;
}

$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "fisherman";

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $first = trim($_POST["first_name"]);
    $last = trim($_POST["last_name"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $role = "fisherman";

    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password, role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first, $last, $email, $hashed, $role);

    if ($stmt->execute()) {
        echo "<script>alert('Fisherman registered successfully!'); window.location='register_fisherman.php';</script>";
    } else {
        echo "<script>alert('Error: Email may already exist.');</script>";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register Fisherman</title>
<style>
body {
    font-family: Arial;
    margin: 0;
    padding: 0;
}
.form-box {
    width: 400px;
    margin: 40px auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
}
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}
button {
    width: 100%;
    padding: 10px;
    background: #1d3557;
    color: white;
    border: none;
    cursor: pointer;
}
button:hover {
    background: #457b9d;
}
</style>
</head>
<body>

<div class="form-box">
    <h2>Register Fisherman</h2>

    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register Fisherman</button>
    </form>
</div>

</body>
</html>
