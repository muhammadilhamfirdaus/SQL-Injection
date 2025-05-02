<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "contoh_sql_injection");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<h3>Login berhasil (AMAN)</h3>";
} else {
    echo "<h3>Login gagal</h3>";
}

$stmt->close();
$conn->close();
?>
