<?php
include "Koneksi.php";

$query = "SELECT * FROM barang";
$result = mysqli_query($conn,$query);
?>

<h2>Data Barang</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Nama Barang</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id_barang']; ?></td>
<td><?php echo $row['nama_barang']; ?></td>
</tr>

<?php } ?>

</table>