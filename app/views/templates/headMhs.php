<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?=BASEIMG?>/logo_SIPPMA.png">
    <title>SIPPMA</title>
    <link rel="stylesheet" href="<?= BASECSS?>/adminGlobal.css">
    <link rel="stylesheet" href="<?= BASECSS?>/styleIndexMahasiswa.css">
    <link rel="stylesheet" href="<?= BASECSS?>/styleInputPrestasi.css">
    <link rel="stylesheet" href="<?= BASECSS?>/styleFormInput.css">
    <link rel="stylesheet" href="<?= BASECSS?>/styleProfilMahasiswa.css">
    <link rel="stylesheet" href="<?= BASECSS?>/styleValidasiMessageMhs.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="logo">
                <img src="<?=BASEIMG?>/logo_SIPPMA.png" alt="Logo">
            </div>
            <h1 class="teks">
                IPP<span class="highlight">MA</span>
            </h1>
            <div class="logout">
            <button onclick="window.location.href='<?= BASEURL ?>/login/logout'">Logout</button>
            </div>
        </header>
        <div class="main">
            <aside class="sidebar">
                <div class="profile">
                    <img src="<?=BASEIMG?>/profil.png" alt="Profile" class="profile-img">
                    <h3 class="profile-name"><?=$data['namaMhs']?></h3>
                    <p class="profile-name"><?=$data['NIM']?></p>
                </div>
                <nav class="menu">
                    <a href="<?=BASEURL?>/mahasiswa/beranda" class="menu-item"> 
                        <img src="<?=BASEIMG?>/Beranda_Icon.png" alt="Beranda Icon" class="menu-icon">Beranda
                    </a>
                    <a href="<?=BASEURL?>/mahasiswa/profil" class="menu-item">
                        <img src="<?=BASEIMG?>/Profile_Icon.png" alt="Profile Icon" class="menu-icon">Profile Mahasiswa
                    </a>
                    <a href="<?=BASEURL?>/mahasiswa/input_prestasi" class="menu-item">
                        <img src="<?=BASEIMG?>/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Input Prestasi
                    </a>
                    <a href="<?=BASEURL?>/mahasiswa/inputprestasi" class="menu-item">
                        <img src="<?=BASEIMG?>/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Cetak Prestasi
                    </a>
                    <a href="<?=BASEURL?>/mahasiswa/validasiMessage_mahasiswa" class="menu-item">
                        <img src="<?=BASEIMG?>/Validasi_Icon.png" alt="Validasi Icon" class="menu-icon">Bantuan
                    </a>
                </nav>
                <footer>
                    <p>© polinema.sch.id</p>
                </footer>
            </aside>