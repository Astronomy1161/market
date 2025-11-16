<?php
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <h2>Reset Password</h2>
    <form action="update_password_pin.php" method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" value="<?php echo $email; ?>" required><br><br>

        <label>PIN:</label><br>
        <input type="text" name="pin" maxlength="6" required><br><br>

        <label>New Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
