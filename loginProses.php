<?php
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * from user where username='$username' and password ='$password'";
$result = mysqli_query($connect, $query);
$rowcount = mysqli_num_rows($result);

//cek
if ($rowcount > 0) {
    echo "Anda berhasil login";
    echo "<a href='adminDashboard.html'>Admin</a>";
} else {
    echo "Anda gagal login";
    echo "<a href = 'loginForm.html'> Login Form </a>";
}
mysqli_close($connect);
