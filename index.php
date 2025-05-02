<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>M Ilham Firdaus</h2>
    <h2>Login Form (SQL Injection Test)</h2>
    <form method="post" action="login-safe.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Ganti action ke <code>login-safe.php</code> untuk versi aman.</p>
</body>
</html>
