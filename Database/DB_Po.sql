CREATE TABLE supplier(
id_supplier VARCHAR(10) PRIMARY KEY,
nama_supplier VARCHAR(100)
);

CREATE TABLE barang(
id_barang VARCHAR(10) PRIMARY KEY,
nama_barang VARCHAR(100)
);

CREATE TABLE purchase_order(
no_po VARCHAR(20) PRIMARY KEY,
id_supplier VARCHAR(10),
FOREIGN KEY (id_supplier) REFERENCES supplier(id_supplier)
);

CREATE TABLE detail_po(
id_detail INT AUTO_INCREMENT PRIMARY KEY,
no_po VARCHAR(20),
id_barang VARCHAR(10),
qty INT,
harga_satuan INT,
FOREIGN KEY (no_po) REFERENCES purchase_order(no_po),
FOREIGN KEY (id_barang) REFERENCES barang(id_barang)
);

INSERT INTO supplier VALUES
('S001','Mega Wholesale');

INSERT INTO barang VALUES
('B001','Coca Cola Glass Bottle'),
('B002','Coca Cola Coke Classic');

INSERT INTO purchase_order VALUES
('21-PO2010000001','S001');

INSERT INTO detail_po(no_po,id_barang,qty,harga_satuan) VALUES
('21-PO2010000001','B001',10,5000),
('21-PO2010000001','B002',20,6000);