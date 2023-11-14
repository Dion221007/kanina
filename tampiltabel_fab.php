<html>
<head><title> Data Tabel</title>
</head>
<body bgcolor=#006400>
<h2><mark> Menampilkan Data dari Tabel Database di Browser </mark></h2>
<table border=1>
<tr bgcolor=#FAF0E6>
<th> No </th>
<th> NAMA</th>
<th> SEKOLAH</th>
<th> EMAIL </th>
</tr>
<?php
include ("koneksi_fab.php");
$no = 1;
$data = mysqli_query ($koneksi_fab, "select * from tbs1_fab");
while ($d = mysqli_fetch_array($data)) 
{
?>
<tr>
<td bgcolor=#FAF0E6><?php echo $no++; ?></td>
<!-- $d[sesuaikan nama header di tabel database] -->
<td bgcolor=#FAF0E6><?php echo $d['Nama']; ?> </td>
<td bgcolor=#FAF0E6><?php echo $d['Sekolah'];?></td>
<td bgcolor=#FAF0E6><?php echo $d['Email']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>