<?php
include 'koneksi.php';

session_start();



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $row['username'];
            echo "<script>alert('Login berhasil!'); window.location='home.php';</script>";
            exit;
        }
    }

    echo "<script>alert('Username atau password salah!'); window.location='../login.php';</script>";

}
?>
