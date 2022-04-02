<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi User</title>
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
        <h1>Registrasi User</h1>
        <div class="col-md-6">
            <form action="prosestambahuser.php" method="post">
				<fieldset>
                <label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" required>
				<label for="password">Password</label>
				<input type="password" name="password" id="password" class="form-control" required>
                <button class="btn btn-primary" type="submit" name="button" >Simpan Data</button>
				<a href="index.php" class="btn btn-danger"> Batal</a>
				</fieldset>
            </form>
        </div>
    </div>
</body>
</html>
