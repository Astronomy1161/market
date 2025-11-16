<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter PIN - AQUATRADE</title>
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
    <h2>ENTER YOUR<br>RESET PIN</h2>

    <form action="verify_pin.php" method="POST">
        <input type="text" name="pin" placeholder="Enter 6-digit PIN" maxlength="6" pattern="\d{6}" required>
        <button type="submit">Verify PIN</button>
    </form>

</div>

<footer>
    ©AQUATRADE 2025. ALL RIGHTS RESERVED
</footer>

</body>
</html>
