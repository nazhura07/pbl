<!DOCTYPE html>
<html>

<head>
    <title>homepage</title>
    <link rel="stylesheet" href="shome.css">
    <style>
        body {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
    </style>
    <script>
        window.onload = function () {
            document.body.style.opacity = "1";
        };
    </script>
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
    <div class="pilihan">
        <div class="pilihan1" >
          <div>Laporan Tugas Akhir </div>
            <?php
                $laporanTugasAkhir = "pilih";
                $linkTugasAkhir = "pilkelas.php"; // Ubah dengan URL halaman tujuan
                echo "<a href='$linkTugasAkhir'><button class='pilih'>$laporanTugasAkhir</button></a>";
            ?>
        </div>
        <div class="pilihan2">
          <div>Laporan Magang </div>

            <?php
                $laporanMagang = "pilih";
                $linkMagang = "pilkelas.php"; // Ubah dengan URL halaman tujuan
                echo "<a href='$linkMagang'><button class='pilih'>$laporanMagang</button></a>";
            ?>
        </div>
        <div class="pilihan3">
          <div>Laporan Lainnya. </div>

            <?php
                $laporanLainnya = "pilih";
                $linkLainnya = "form.php"; // Ubah dengan URL halaman tujuan
                echo "<a href='$linkLainnya'><button class='pilih'>$laporanLainnya</button></a>";
            ?>
        </div>
    </div> 
    <div class="bagi"> 
        <div>
            <img class="fotodes" src="deskrip.jpeg" alt="">
        </div>
        <div class="deskripsi">
            <div class="text1">Politeknik Negeri Banyuwangi </div>
            <div class="text2"> ULT INFORMATIKA</div>
            <div class="text3">    Website ini adalah sarana yang membantu <br>
                mahasiswa jurusan Teknik Informatika <br>
                dalam mengumpulkan sebuah laporan <br>
                ke Admin Prodi guna mengetahui perjalanan <br>
                laporan tersebut apakah sudah di Acc <br> 
                oleh pihak lembaga. Hal tersebut akan <br>
                membantu mahasiswa yang ingin mengambil <br>
                laporan tersebut.</div>
        </div>
    </div>
    <h2 class="penutup"> jurusan BISNIS DAN INFORMATIKA</h2>
</body>

</html>
