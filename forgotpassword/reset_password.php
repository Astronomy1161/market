<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - AQUATRADE</title>
    <link rel="stylesheet" href="forgot.css">
</head>
<body>

<div class="background"></div>

<header>
    <nav>
        <div class="logo">
            <img src="logo.jpg" alt="Aquatrade Logo" />
            <div class="logo-text">AQUATRADE</div>
        </div>
    </nav>
</header>

<div class="container">
    <h2>SET NEW<br>PASSWORD</h2>

    <form action="save_new_password.php" method="POST">
        <input type="password" name="password" placeholder="New Password" required>
        <input type="password" name="confirm" placeholder="Confirm Password" required>
        <button type="submit">Save Password</button>
    </form>

</div>

<footer>
    ©AQUATRADE 2025. ALL RIGHTS RESERVED
</footer>

</body>
</html>
