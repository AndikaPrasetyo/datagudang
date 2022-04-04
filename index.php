<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang Gudang</title>
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
    include 'koneksi.php';
    
    $data = mysqli_query($koneksi, "SELECT * FROM gudang") or die(mysqli_error($koneksi));
    ?> 

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
		aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-link active">
                    <a class="nav-link" href="index.php">Data Barang <span class="sr-only">(current)</span></a>
                </li>

                <?php
                if (empty($_SESSION['email'])) { ?>
                    <li class="nav-link">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
					<li class="nav-link text-center">
                        <a class="nav-link btn btn-secondary text-white" href="#"><?php echo $_SESSION['email'] ?></a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a>
                    </li>
					<li class="nav-link">
                        <a class="nav-link btn btn-success text-white" href="tambahbarang.php">Tambah Data Barang</a>
                    </li>
					<li class="nav-link">
						<a class="nav-link btn btn-primary text-white" href="tambahuser.php">Tambah User</a>
					</li>
					<?php
					include 'alert.php';
					?>
                <?php } ?>

            </ul>
        </div>
    </nav>
	
	<header>
		<div class="header_content">
			<h1>PT. Properti Bersama</h1>
		</div>
	</header>
	<div class="container">
        <h1>Tabel Data Barang</h1>
        <table border="1" class="text-center">
            <thead>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Stok Barang</th>
                <th>Harga Barang Satuan(Rp)</th>
				<th>Opsi</th>
            </thead>
            <tbody>
            <?php foreach($data as $baris): ?>
            <tr>
                <td><?php echo $baris['kodebarang'] ?></td>
                <td><?php echo $baris['namabarang'] ?></td>
                <td><?php echo $baris['stokbarang'] ?></td>
				<td><?php echo $baris['hargabarangsatuan'] ?></td>
                
			<?php if (empty($_SESSION['email'])) { ?>
					<td>
						<a><font color="red">Muncul setelah Login.</font></a>
					</td>
				<?php } else { ?>
					<td>
						<a href="update.php?kodebarang=<?php echo $baris['kodebarang'] ?>" class="btn btn-success">Update Data</a>
						<a href="hapus.php?kodebarang=<?php echo $baris['kodebarang'] ?>" class="btn btn-danger">Hapus Data</a>
					</td>
             
				
                <?php } ?>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
    </div>
</body>
</html>
