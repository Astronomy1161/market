<?php
$conn = new mysqli("localhost", "root", "", "fisherman");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$email = trim($_POST['email']);
$pin = trim($_POST['pin']);
$newPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("
    SELECT * FROM password_resets 
    WHERE email = ? AND pin = ? AND expires_at > NOW()
");
if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("ss", $email, $pin);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Invalid or expired PIN.");
}
$stmt->close();

$stmt2 = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
if (!$stmt2) {
    die("Prepare failed: " . $conn->error);
}
$stmt2->bind_param("ss", $newPassword, $email);
$stmt2->execute();
$stmt2->close();

$stmt3 = $conn->prepare("DELETE FROM password_resets WHERE email = ?");
if (!$stmt3) {
    die("Prepare failed: " . $conn->error);
}
$stmt3->bind_param("s", $email);
$stmt3->execute();
$stmt3->close();

header("Location: ../introduction/login.html?reset=success");
exit;
?>
