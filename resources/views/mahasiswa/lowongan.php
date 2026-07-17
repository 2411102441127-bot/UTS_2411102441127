<?php
include '../config/koneksi.php';

$data = mysqli_query($conn,
"SELECT * FROM lowongan 
WHERE status='approved'");
?>

<h2>Daftar Lowongan</h2>

<table border="1" cellpadding="10">

<tr>
    <th>Perusahaan</th>
    <th>Posisi</th>
    <th>Deskripsi</th>
</tr>

<?php while($d = mysqli_fetch_assoc($data)) { ?>

<tr>
    <td><?= $d['perusahaan']; ?></td>
    <td><?= $d['posisi']; ?></td>
    <td><?= $d['deskripsi']; ?></td>
</tr>

<?php } ?>

</table>
