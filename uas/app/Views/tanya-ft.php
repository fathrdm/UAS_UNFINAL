<html>

<head>
    <link href="<?= base_url('css/stylefix.css') ?>" rel="stylesheet">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const statusElements = document.querySelectorAll('.approval-status');
            statusElements.forEach((statusElement) => {
                setTimeout(() => {
                    statusElement.textContent = 'Disetujui';
                    statusElement.classList.remove('status-diproses');
                    statusElement.classList.add('status-disetujui');
                }, 5000); // 5000 ms = 5 detik
            });
        });
    </script>

</head>

<body>
    <header class="header">
        <div class="logo-container">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1107e6ae3e0c4ffc75a966ee66cb08b8c2211ec669962e10fe7c3aa7d7a9c2ff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                alt="University Logo" class="logo">
            <div class="logo-text">
                <span class="university-name">Fakultas Teknik</span>
                <span class="faculty-name">Universitas Lambung Mangkurat</span>
            </div>
        </div>
        <div class="search-bar">
            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/413e5cc496fa41cde703fccff3798ef6d2b9e7d8ba3cf4d88385979ad6375060?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                alt="Search Icon" class="search-icon">
            <span>Cari Layanan...</span>
        </div>
        <div class="user-info">
            <div class="notification-icon">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/25771309cdb260988e61996623d886458102f7e2ab6fed10a0fa21be1c7f4a0a?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                    alt="Notification Icon" class="menu-icon">
            </div>
            <div class="user-profile">
                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/853bbc0819994faa9a2050eb7ed7e58b892a6642457e2d21275bcb5e0a032bc5?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                    alt="User Avatar" class="user-avatar">
                <span> <?= session()->get('nama') ?></span>
            </div>
        </div>
    </header>
    <div class="flex-container">
        <aside>
            <nav class="sidebar-content">
                <h2 class="menu-header">Menu</h2>
                <a href="#" class="menu-item menu-item-active">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/23004516897fd89185417a24df5acd2efde7ada021f51aab905ec7013a0973b6?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Dashboard</span>
                </a>
                <h3 class="menu-header">Layanan</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/909303d04b13c4acdfb2bb01bbaaedf0e71d42d4e2bf6ab9ed92b70d463a1b58?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Services</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/54841956b91c3a2b13b141b520d2691772abcb6dec3811da97999e14199b6753?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Command Center</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/318e321b6fd55843b33e1681cc0913c190905de5a4bdb7991de9c9cf1ef7fd3c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Response</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/a964d722666545a042baf2f0b0397bead9636984f60422d7df7814e82b361c7f?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Commerce</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d671927639c5ee40b4c7229ed2cb85fd3a37cb9e9b36cedbcaa9f595e0d40bff?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">e-Office</span>
                </a>
                <h3 class="menu-header">Other</h3>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6b12d8c8eb208bff01c27d17403c7a6bb41a6c6727d2b5d13ec0e2237152d88c?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Kuisioner</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/422190efdeea378ad4c6fca0dbda3a8481c2f22eae302e129275831406912fea?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">FAQ</span>
                </a>
                <a href="#" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/dd53464b406c2f4142d4492ebedc4cce680b02e10192833514de60977148dae1?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Profile</span>
                </a>
                <a href="<?= base_url('login') ?>" class="menu-item">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/9cb424fbc848abd359c1a5e087aa8b264a3f19718a8ba4e083fb1568891b35df?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="" class="menu-icon" />
                    <span class="menu-text">Logout</span>
                </a>
            </nav>
        </aside>
        <main>
            <div class="content">
                <a href="<?= base_url('response') ?>" class="back-button">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/56b0e97e03d1a545d2a516906aa5a04969cc559ff326afef2943428b84cd6f2d?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="Back Arrow" class="menu-icon">
                    <span>Kembali</span>
                </a>
                <div class="divider"></div>
                <section class="service-info">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/7cdba200b51831ae0de8af7a66abcdff56dfc8ea218296257d55c4a0d1308692?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                        alt="Tanya FT Service" class="service-image1">
                    <div class="service-details">
                        <h1 class="service-title-tanyaft">Tanya FT</h1>
                        <p class="service-description-tanyaft">Layanan ini disediakan untuk menyampaikan permohonan informasi
                            publik terkait Fakultas Teknik ULM
                        </p>
                    </div>
                </section>

                <h2 class="section-title">Deskripsi</h2>
                <p class="section-content"><strong>TANYA FT</strong> merupakan Layanan Informasi Publik FT ULM. Layanan
                    ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas
                    Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi
                    Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan
                    didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM
                    secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.</p>
                <h2 class="section-title">Alur Pengajuan</h2>
                <p class="section-content">
                    1. Mahasiswa mengisi data pertanyaan<br>
                    2. Admin Akademik akan menanggapi pertanyaan tersebut<br>
                    3. Tanggapan dapat dilihat melalui tabel pengajuan
                </p>
                <a href="<?= base_url('formpengajuan') ?>">
                    <div class="table-header-pengajuan">
                        <h2 class="section-title-pengajuan">Tabel Pengajuan</h2>
                        <button class="add-button">
                            <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/2a8ed5e5247929b7fa919f1983a2481e7c413ab8b30da300f0cbe2506f3ca545?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                alt="Add Icon" class="menu-icon">
                            <span>Tambah Pengajuan</span>
                        </button>
                    </div>
                </a>



                <section class="table__body">
                    <table>
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>ID Pengajuan</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomor = 1; ?>
                            <?php
                            // Ambil data dari database (contoh CodeIgniter)
                            foreach ($pengajuan as $row) {
                                $formattedDate = date('d F Y', strtotime($row['tanggal_pengajuan']));
                            }
                            ?>
                            <?php foreach ($pengajuan as $row): ?>
                                <tr>
                                    <td><?php echo $nomor++; ?></td>
                                    <td><?= esc($row['id_tanyaft']) ?></td>
                                    <td><?= esc($row['nama_lengkap']) ?></td>
                                    <td>Tanya FT</td>
                                    <td><?= date('d F Y', strtotime($row['tanggal_pengajuan'])) ?></td>
                                    <td>
                                        <section class="approval-container">
                                            <p class="approval-status status-diproses"
                                                id="status-<?= esc($row['id_tanyaft']) ?>">Diproses
                                            </p>
                                        </section>
                                    </td>
                                    <td>
                                        <nav class="action-bar">
                                            <a href="<?= base_url($row['id_tanyaft'] . '/preview') ?>">

                                                <button class="action-button action-button-detail">
                                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/be3c7dad9e7898184e35146d72d1889895012cfdbf6b7abe40318e40611756cd?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                                        alt="" class="action-icon" />
                                                    <span>Detail</span>

                                                </button>
                                            </a>

                                            <a href="<?= base_url($row['id_tanyaft'] . '/tanggapan') ?>">


                                                <button class="action-button action-button-download">
                                                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/14d8c0daa13f96f007c96240439e6c60f549c14d23ad3c4e4ce387de8c0579ba?apiKey=e72ded3b641e48ceb0e36e65e1fc6345&"
                                                        alt="" class="action-icon" />

                                                    <span>Tanggapan</span>

                                                </button>
                                            </a>

                                        </nav>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </section>
            </div>
        </main>
    </div>
</body>

</html>