<?php
// include 'koneksi.php';

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $username = $_POST['username'];
//     $password = md5($_POST['password']); // Tetap menggunakan md5 sesuai permintaan tugas

//     // Membuat query
//     $query = "SELECT * FROM user WHERE username = '$username' AND password='$password'";
//     $result = mysqli_query($connect, $query);
//     $fechResult = mysqli_fetch_assoc($result);

//     // Memeriksa apakah hasil query tidak null
//     if ($fechResult) {
//         if ($fechResult['role'] == 'admin') {
//             echo "Anda berhasil login ";
//             echo "<a href='adminDashboard.html'>Admin</a>";
//         } elseif ($fechResult['role'] == 'user') {
//             echo "Anda berhasil login ";
//             echo "<a href='userDashboard.html'>User Dashboard</a>";
//         } else {
//             echo "Role tidak dikenal.";
//         }
//     } else {
//         echo "Username atau password salah.";
//         echo "<a href='loginForm.html'> Login Form </a>";
//     }

//     mysqli_close($connect);
// } else {
//     echo "Metode permintaan tidak valid.";
// }

include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * from user where username = '$username' and password='$password'";
$result = mysqli_query($connect, $query);
$fechResult = mysqli_fetch_assoc($result);

if ($fechResult['role'] == 'admin') {
    echo "Anda berhasil login ";
    echo "<a href = 'adminDashboard.html'>Admin</a>";
} elseif ($fechResult['role'] == 'user') {
    echo "Anda berhasil login ";
    echo "<a href='userDashboard.html'>User Dasboard</a>";
} else {
    echo "Anda gagal login ";
    echo "<a href='loginForm.html'> Login Form </a>";
}
mysqli_close($connect);
