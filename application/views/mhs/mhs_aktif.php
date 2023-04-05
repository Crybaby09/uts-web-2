<body>
    <div class="container">
        <div class="navbar">
            <a href="#"><i data-feather="menu"></i></a>
            <a href="#">
                <p>UNIVERSITAS KH. WAHAB HASBULLAH</p>
            </a>
            <a href="#"><i data-feather="user"></i></a>
        </div>
        <h1>DAFTAR MAHASISWA AKTIF</h1>
        <div class="tabel-container">
            <table class="dtabel">
                <thead>
                    <tr>
                        <th>NO </th>
                        <th>NIM</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>LAHIR</th>
                        <th>JK</th>
                        <th>WA</th>
                        <th>EMAIL</th>
                        <th>FAKULTAS</th>
                        <th>PRODI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($mhs_aktif as $key) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $key["nim"]; ?></td>
                            <td><?= $key["nama"]; ?></td>
                            <td><?= $key["alamat"]; ?></td>
                            <td><?= $key["lahir"]; ?></td>
                            <td><?= $key["jk"]; ?></td>
                            <td><?= $key["wa"]; ?></td>
                            <td><?= $key["email"]; ?></td>
                            <td><?= $key["fakultas"]; ?></td>
                            <td><?= $key["prodi"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tambah">
        <button><a href="#">TAMBAH DATA</a></button>
    </div>
</body>