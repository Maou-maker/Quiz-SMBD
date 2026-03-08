<?php
include "Koneksi.php";

$query = "SELECT * FROM supplier";
$result = mysqli_query($conn,$query);
?>

<h2>Data Supplier</h2>

<table border="1">
<tr>
<th>ID</th>
<th>Nama Supplier</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id_supplier']; ?></td>
<td><?php echo $row['nama_supplier']; ?></td>
</tr>

<?php } ?>

</table>