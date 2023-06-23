<?php
$conn = mysqli_connect('localhost', 'root', '', 'ult');
if (isset($_POST['login'])) {

    $user = $_POST['NIM'];
    $password = $_POST['password'];

    $sql1 = mysqli_query($conn, "SELECT * FROM `mahasiswa` WHERE nim='$user' AND no_hp='$password'");
    $data_mahasiswa = mysqli_fetch_row($sql1);
    if ($user == $data_mahasiswa[0] && $password == $data_mahasiswa[4]) {
        echo '
        <script> alert("berhasil login")</script>
        '; 
        header('location:home.php');
    } else {
        echo '
        <script> alert("salah password")</script>
        ';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="slogin.css">
</head>

<body>
    <div class="posisi">
        <div class="gambar">
            <h2 class="selamat"> Selamat Datang Di</h2>
            <h2 class="ULT"> ULT INFORMATIKA</h2>
            <img class="kampus" src=" kampus.png" alt="">

        </div>
        <div class="container">
            <img class="ti" src="ti.png" alt="">
            <h2 class="hal"> Halaman Login</h2>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="NIM">NIM:</label>
                    <input class="form" placeholder="Masukkan NIM..." type="text" id="NIM" name="NIM" required>
                </div>
                <div class=" f-orm-group">
                    <label for="password">Password:</label>
                    <input class="form" placeholder="Masukkan Password..." type="password" id="password" name="password"
                        required>
                </div>
                <div class="form-group">
                    <button class="loginbut" type="Login" name="login">Login</button>
                </div>
                <div class="form-group">
                    <a href="logadmin.php">Login Admin?</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>