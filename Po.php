<?php
include "Koneksi.php";

$query = "SELECT 
po.no_po,
s.nama_supplier,
b.nama_barang,
d.qty,
d.harga_satuan,
(d.qty * d.harga_satuan) as jumlah
FROM detail_po d
JOIN purchase_order po ON d.no_po = po.no_po
JOIN supplier s ON po.id_supplier = s.id_supplier
JOIN barang b ON d.id_barang = b.id_barang";

$result = mysqli_query($conn,$query);
?>

<h2>Data Purchase Order</h2>

<table border="1">
<tr>
<th>No PO</th>
<th>Supplier</th>
<th>Barang</th>
<th>Qty</th>
<th>Harga</th>
<th>Total</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['no_po']; ?></td>
<td><?php echo $row['nama_supplier']; ?></td>
<td><?php echo $row['nama_barang']; ?></td>
<td><?php echo $row['qty']; ?></td>
<td><?php echo $row['harga_satuan']; ?></td>
<td><?php echo $row['jumlah']; ?></td>
</tr>

<?php } ?>

</table>