<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pencatatan Prestasi Mahasiswa</title>
    <link rel="stylesheet" href="../style/styleValidasiMessageMhs.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="profile">
                <img src="../img/profil.png" alt="Profile" class="profile-img">
                <h3>Alvino Valerian</h3>
                <p>23410100100</p>
                <p>D-IV Teknik Informatika</p>
            </div>
            <nav class="menu">
                <a href="index_mahasiswa.php" class="menu-item"> 
                    <img src="../img/Beranda_Icon.png" alt="Beranda Icon" class="menu-icon">Beranda
                </a>
                <a href="profil_mahasiswa.php" class="menu-item">
                    <img src="../img/Profile_Icon.png" alt="profile Icon" class="menu-icon">Profile Mahasiswa
                </a>
                <a href="input_prestasi.php" class="menu-item">
                    <img src="../img/InputAgenda_Icon.png" alt="Input Agenda Icon" class="menu-icon">Input Prestasi
                </a>
                <a href="cetak_prestasi.php" class="menu-item">
                    <img src="../img/Cetak_Icon.png" alt="Leaderboard Icon" class="menu-icon">Cetak Prestasi
                </a>
                <a href="#" class="menu-item">
                    <img src="../img/Help_Icon.png" alt="Validasi Icon" class="menu-icon">Bantuan
                </a>
            </nav>
            <footer>
                <p>© polinema.sch.id</p>
            </footer>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header class="header">
                <div class="logo">
                    <img src="../img/logoSIPPMA.png" alt="Logo">
                </div>
                <h1 class="teks">
                    IPP<span class="highlight">MA</span>
                </h1>
                <div class="bell">
                    <a href="validasiMessage_mahasiswa.php"><img src="../img/Notification_Icon.png" alt="Notification"></a>
                </div>
                <div class="logout">
                    <button onclick="window.location.href='../login.php';">Logout</button>
                </div>
            </header>
            <section class="welcome">
                <h2>SELAMAT DATANG "Users"</h2>
            </section>
            <div class="content">
                <div class="judul">
                    <h1>Message Validasi</h1>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama Penghargaan</th>
                            <th>Juara</th>
                            <th>Kategori</th>
                            <th>Validasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 1</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="ditolak">Ditolak</p>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 2</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Juara 3</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="prosses">Prosses</p>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Harapan 1</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Lomba PKM KC PIMNAS Tahun 2023</td>
                            <td>Harapan 2</td>
                            <td>Nasional</td>
                            <td class="status">
                                <p class="diterima">Diterima</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
