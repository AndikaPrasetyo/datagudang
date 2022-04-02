<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<div class="header_content">
			<h1>PT. Properti Bersama</h1>
		</div>
	</header>
    <div class="container">
        <h1>Tambah Data Barang</h1>
        <div class="col-md-6">
            <form action="prosestambah.php" method="post">
                <label for="kodebarang">Kode Barang</label>
                <input type="number" class="form-control" name="kodebarang">
                <label for="namabarang">Nama Barang</label>
                <input type="text" class="form-control" name="namabarang">
                <label for="stokbarang">Stok Barang</label>
                <input type="number" class="form-control" name="stokbarang">
				<label for="hargabarangsatuan">Harga Barang Satuan(Rp)</label>
                <input type="number" class="form-control" name="hargabarangsatuan">
                <button class="btn btn-primary" type="submit" name="button" >Simpan Data</button>
				<a href="index.php" class="btn btn-danger"> Batal</a>
            </form>
        </div>
    </div>
</body>
</html>
