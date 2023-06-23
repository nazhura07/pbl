<?php
// Pengecekan saat formulir kelas dikirimkan
if(isset($_POST['kelas'])) {
    $kelas = $_POST['kelas'];
    echo "Anda memilih kelas: $kelas";
}

// Pengecekan saat formulir dokumen dikirimkan
if(isset($_POST['dokumen'])) {
    $dokumen = $_POST['dokumen'];
    echo "Anda menambahkan dokumen: $dokumen";
    header("Location: form.php"); // Ubah "halaman_lain.php" dengan URL halaman tujuanskelas.css
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>pilihkelas</title>
    <link rel="stylesheet" href="skelas.css">
</head>

<body>
    <div class="navbar">
        <div class="judul">ULT INFORMATIKA</div>
        <div class="header">
            <button class="logout" type="logout">logout</button>
        </div>
    </div>
    <div class="gambar">
        <img class="sampul" src="admin.jpg" alt="">
    </div>

    <div class="gabung">
        <div class="gambar2">
            <div class="ta">Laporan Tugas Akhir</div>
            <img class="foto" src="kelas.png" alt="">
        </div>
        <div class="pilih">
            <div class="text">Cek Data Kelas</div>
            <div class="kelas1">
                <form method="POST" action ="datauser.php">
                    <input type="hidden" name="kelas" value="Teknologi Rekayasa Perangkat Lunak">
                    <button type="submit">Teknologi Rekayasa<br>Perangkat Lunak</button>
                </form>
            </div>
            <div class="kelas2">
                <form method="POST" action ="datauser.php">
                    <input type="hidden" name="kelas" value="Teknologi Rekayasa Komputer">
                    <button type="submit">Teknologi Rekayasa<br>Komputer</button>
                </form>
            </div>
            <div class="kelas3">
                <form method="POST" action ="datauser.php">
                    <input type="hidden" name="kelas" value="Bisnis Digital">
                    <button type="submit">Bisnis Digital</button>
                </form>
            </div>
            <div class="tambah">
                <form method="POST" action="form.php"> <!-- Ubah "halaman_lain.php" dengan URL halaman tujuan -->
                    <h3>Tambah Dokumen</h3>
                    <input type="hidden" id="dokumen" name="dokumen" required><br>
                    <button type="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>

    <h2 class="penutup">jurusan BISNIS DAN INFORMATIKA</h2>

</body>

</html>
