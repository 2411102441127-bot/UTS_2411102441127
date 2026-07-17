<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM users 
         WHERE email='$email' 
         AND password='$password'");

    $data = mysqli_fetch_assoc($query);

    if($data){

        $_SESSION['role'] = $data['role'];
        $_SESSION['nama'] = $data['nama'];

        if($data['role'] == 'mahasiswa'){
            header("Location: mahasiswa/dashboard.php");
        }

        elseif($data['role'] == 'dosen'){
            header("Location: dosen/dashboard.php");
        }

        elseif($data['role'] == 'admin'){
            header("Location: admin/dashboard.php");
        }

        else{
            header("Location: perusahaan/dashboard.php");
        }

    } else {
        echo "Login gagal";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login SIPMAG</title>
</head>
<body>

<h2>Login SIPMAG</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Email">
    <br><br>

    <input type="password" name="password" placeholder="Password">
    <br><br>

    <button type="submit" name="login">
        Login
    </button>
</form>

</body>
</html>
