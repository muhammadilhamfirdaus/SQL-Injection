<?php
$conn = mysqli_connect("127.0.0.1:3307", "root", "", "contoh_sql_injection");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
echo "<pre>QUERY: $query</pre>"; // tampilkan query untuk debugging

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<h3>Login berhasil (VULNERABLE)</h3>";
} else {
    echo "<h3>Login gagal</h3>";
}

mysqli_close($conn);
?>
