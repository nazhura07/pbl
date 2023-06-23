<?php
$conn = mysqli_connect('localhost', 'root', '', 'ult');
if (isset($_POST['login'])) {

    $adm = $_POST['ID'];
    $password = $_POST['pass_admin'];

    $sql1 = mysqli_query($conn, "SELECT * FROM `admin` WHERE id_admin='$adm' AND pass_admin='$password'");
    $admin = mysqli_fetch_row($sql1);
    if ($admin == $admin[0] && $password == $admin[2]) {
        echo '
        <script> alert("berhasil login")</script>
        '; 
        header('location:dataadmin.php');
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
    <link rel="stylesheet" href="sloginadmin.css">
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
            <h2 class="hal"> Login Admin</h2>
            <form method="POST" action="logadmin.php">
                <div class="form-group">
                    <label for="ID">ID:</label>
                    <input class="form" placeholder="Masukkan ID..." type="text" id="ID" name="ID" required>
                </div>
                <div class=" form-group">
                    <label for="password">Password:</label>
                    <input class="form" placeholder="Masukkan Password..." type="password" id="password" name="password"
                        required>
                </div>
                <div class="form-group">
                    <button class="loginbut" type="Login" name="login">Login</button>
                </div>
                <div class="form-group">
                <a href="login.php">Login Mahasiswa?</a>
                    
                </div>

            </form>
        </div>
    </div>
</body>

</html>