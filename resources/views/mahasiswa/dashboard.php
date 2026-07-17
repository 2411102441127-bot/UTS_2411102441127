<?php
session_start();

if($_SESSION['role'] != 'mahasiswa'){
    header("Location: ../login.php");
}
?>

<h1>Dashboard Mahasiswa</h1>

<p>Selamat datang,
<?php echo $_SESSION['nama']; ?>
</p>

<ul>
    <li>
        <a href="lowongan.php">
            Cari Lowongan
        </a>
    </li>

    <li>
        <a href="upload_laporan.php">
            Upload Laporan
        </a>
    </li>

    <li>
        <a href="../logout.php">
            Logout
        </a>
    </li>
</ul>
