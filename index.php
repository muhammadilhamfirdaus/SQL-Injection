<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Login Form (SQL Injection Test)</h2>
    <form method="post" action="login-vuln.php">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="text" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
    <p>Ganti action ke <code>login-safe.php</code> untuk versi aman.</p>
</body>
</html>
