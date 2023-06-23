<?php
$message = ""; // Variabel untuk menyimpan pesan informasi

if (isset($_POST['kirim'])) {
    // Mendapatkan nilai input dari form
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $prodi = $_POST['prodi'];
    $nama_laporan = $_POST['nama-laporan'];
    $jenis_laporan = $_POST['jenis-laporan'];

    // Koneksi ke database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ult';

    $conn = mysqli_connect($host, $username, $password, $database);
    if (!$conn) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    // Query untuk menyimpan data ke dalam tabel form_pengisian
    $query = "INSERT INTO form_pengisian (nama_lengkap, nim, kelas, prodi, nama_laporan, jenis_laporan) 
              VALUES ('$nama', '$nim', '$kelas', '$prodi', '$nama_laporan', '$jenis_laporan')";

    if (mysqli_query($conn, $query)) {
        $message = "Data telah berhasil disimpan.";
    } else {
        $message = "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    // Menutup koneksi database
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>form Pengisian</title>
    <link rel="stylesheet" href="sform.css">
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

    <div class="pembagi">
        <div class="bungkus">
            <h2 class="teks">Form Pengisian</h2>
            <?php if (!empty($message)) : ?>
                <div class="pesan"><?php echo $message; ?></div>
            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="pembungkus">
                    <div class="isidata">
                        <label for="nama">Nama Lengkap:</label><br>
                        <input class="nama" type="text" id="nama" name="nama" required><br><br>

                        <label for="nim">NIM:</label><br>
                        <input class="nim" type="text" id="nim" name="nim" required><br><br>

                        <label for="kelas">Kelas:</label><br>
                        <input class="kelas" type="text" id="kelas" name="kelas" required><br><br>
                    </div>
                    <div class="isidata2">
                        <label for="prodi">Program Studi:</label><br>
                        <input class="prodi" type="text" id="prodi" name="prodi" required><br><br>

                        <label for="nama-laporan">Nama Laporan:</label><br>
                        <input class="laporan" type="text" id="nama-laporan" name="nama-laporan" required><br><br>

                        <label for="jenis-laporan">Jenis Laporan:</label><br>
                        <input class="jenis" type="text" id="jenis-laporan" name="jenis-laporan" required><br><br>

                        <button class="kirim" type="submit" name="kirim">kirim</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <img class="gambardata" src="isidata.png" alt="">
        </div>
    </div>

    <h2 class="penutup">jurusan BISNIS DAN INFORMATIKA</h2>
</body>

</html>
