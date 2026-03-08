<?php
include "koneksi.php";

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