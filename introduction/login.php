<?php
session_start();

$servername = "localhost";
$username = "root";
$db_password = "";
$dbname = "fisherman";

$conn = new mysqli($servername, $username, $db_password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT userid, firstname, lastname, email, password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {

        $stmt->bind_result($id, $firstname, $lastname, $db_email, $db_password_hashed, $role);
        $stmt->fetch();

        if (password_verify($password, $db_password_hashed)) {

            $_SESSION["user_id"] = $id;
            $_SESSION["role"] = $role;
            $_SESSION["fullname"] = $firstname . " " . $lastname; 

            if ($role == "admin") {
                header("Location: ../admin/admin.php");
            } elseif ($role == "fisherman") {
                header("Location: ../dasboards/fisherman.php");
            } elseif ($role == "buyer") {
                header("Location: ../dashboards/buyer.php");
            } else {
                echo "Invalid role in database!";
            }
            exit;

        } else {
            echo "<script>alert('Incorrect password!'); window.location='login.html';</script>";
        }

    } else {
        echo "<script>alert('Email not found!'); window.location='login.html';</script>";
    }

    $stmt->close();
}

$conn->close();
?>
