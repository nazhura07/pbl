<!DOCTYPE html>
<html>

<head>
    <title>admin cek data</title>
    <link rel="stylesheet" href="sdataadmin.css">
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

    <form class="cari" action="" method="get">
        <input type="text" name="query" placeholder="Cari..." />
        <button type="submit">Cari</button>
    </form>

    <h2>Data laporan mahasiswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Status</th>
            <th>Tanggal</th>
            <th>Nama Laporan</th>
        </tr>
        <?php
        // Mengambil data dari database dan menampilkannya dalam loop
        $dataMahasiswa = [
            [
                'nama' => 'ardi',
                'status' => 'sudah di acc',
                'tanggal' => '2023-06-01',
                'laporan' => 'Laporan 1'
            ],
            [
                'nama' => 'somat',
                'status' => 'belum di acc',
                'tanggal' => '2023-05-20',
                'laporan' => 'Laporan 2'
            ],
            [
                'nama' => 'yanto',
                'status' => 'revisi',
                'tanggal' => '2023-06-05',
                'laporan' => 'Laporan 3'
            ]
        ];

        foreach ($dataMahasiswa as $mahasiswa) {
            echo "<tr>";
            echo "<td>" . $mahasiswa['nama'] . "</td>";
            echo "<td>";
            echo '<input type="text" class="status-input" value="' . $mahasiswa['status'] . '">';
            echo '<button onclick="ubahStatus(this.parentElement.parentElement)">Simpan</button>';
            echo "</td>";
            echo "<td>" . $mahasiswa['tanggal'] . "</td>";
            echo "<td>" . $mahasiswa['laporan'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2 class="penutup"> jurusan BISNIS DAN INFORMATIKA</h2>
</body>

</html>
