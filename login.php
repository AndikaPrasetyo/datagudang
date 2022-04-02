<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" 
		aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Data Barang<span class="sr-only">(current)</span></a>
                </li>

                <?php
                if (empty($_SESSION['email'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="login.php">Login</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white" href="logout.php">Logout</a>
                    </li>
                <?php } ?>
           </ul>
       </div>
    </nav>
	
    <div class="container">
		<?php
			include 'alert.php';
		?>
		<h1>Login</h1>
		<form action="proseslogin.php" method="post">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" class="form-control">
			<button type="submit" class="btn btn-success" name="button">Login</button>
		</form>
	</div>
</body>
</html>
