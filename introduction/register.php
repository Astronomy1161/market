<?php
$servername = "localhost";
$username = "root";    
$password = "";        
$dbname = "fisherman";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password !== $confirm_password) {
    echo "<script>
            alert('Passwords do not match!');
            window.location.href = 'register.html';
          </script>";
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (firstname, lastname, email, contact, password)
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $firstname, $lastname, $email, $contact, $hashed_password);

if ($stmt->execute()) {

    echo "<script>
            alert('Registration successful! Please login.');
            window.location.href = 'login.html';
          </script>";

} else {

    echo "<script>
            alert('Registration failed: " . $stmt->error . "');
            window.location.href = 'register.html';
          </script>";
}

$stmt->close();
$conn->close();
?>
