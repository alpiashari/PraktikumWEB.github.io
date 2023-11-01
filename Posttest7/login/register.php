<?php
require "../functions.php";

if (isset($_POST["signup"])) {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];
    $email = $_POST["email"];

    $check = mysqli_query($koneksi, "SELECT username FROM akun WHERE username = '$user' ");
    if (mysqli_fetch_assoc($check)) {
        echo "<script LANGUAGE='JavaScript'>
                    window.alert('Username telah digunakan!');
                    window.location.href='register.php';
                </script>";
        die();
    } else {
        if ($pass === $cpass) {
            $pass = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `akun` VALUES ('', '$user', '$email', '$pass', 'user')";
            $result = mysqli_query($koneksi, $sql);

            if ($result) {
                echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Berhasil Ditambah');
                            window.location.href='login.php';
                        </script>";
                die();
            } else {
                echo "<script LANGUAGE='JavaScript'>
                            window.alert('Akun Gagal Ditambah');
                            window.location.href='register.php';
                        </script>";
                die();
            }
        } else {
            echo "<script LANGUAGE='JavaScript'>
                        window.alert('Password tidak sama');
                        window.location.href='register.php';
                    </script>";
            die();
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css" />
    <title> Sign Up </title>
</head>

<body>
    <nav class="header">
        <img src="../img/logo.png" class="logo" width="100" height="100">
    </nav>
    <main>
        <div class="input-group">
            <form id="signup" action="register.php" method="post">
                <table>
                    <tr>
                        <td> Username </td>
                        <td> <input type="text" name="user" placeholder="input username" required> </td>
                    </tr>
                    <tr>
                        <td> Email </td>
                        <td> <input type="email" name="email" placeholder="input email" required> </td>
                    </tr>
                    <tr>
                        <td> Password </td>
                        <td> <input type="password" name="pass" placeholder="input password" required> </td>
                    </tr>
                    <tr>
                        <td> Konfirmasi Password </td>
                        <td> <input type="password" name="cpass" placeholder="confirm password" required> </td>
                    </tr>
                </table>
                <input type="submit" name='signup' value="Sign Up">
                <div class="fnav">
                    <p>
                        Already a member? <a href="login.php"> Sign in </a>
                    </p>
                </div>
        </div>
        </form>
    </main>