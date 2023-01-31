<?php
date_default_timezone_set("Asia/bangkok");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="index.php" class="brand">
		<img src="img/1670927158323.png" width="70" height="60"/>
			<span class="text">GamEdu</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Terimakasih</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Kami menyediakan beberapa layanan kesehatan jika anda tertarik silahkan isi form dibawah ini! </a>
						</li>
						
					</ul>
				</div>
			</div>

            <ul class="box-info">
				<li>
							<div class="row">

							<form class="" action="" method="post">
									<tr>
										
										<td><input type="" name="nama" autocomplete="off" class="box" placeholder="nama"></td><br>
									</tr>

									<tr>
										
										<td><input name="nomor" type="" autocomplete="off" class="box" placeholder="nomor" ></td>
									</tr>

									<tr>
										
										<td><input name="email" type="" class="box" autocomplete="off" placeholder="email"></td>
									</tr>

									<tr>
										
										<td><input name="tanggal" type="date" class="box" autocomplete="off" placeholder="tanggal"></td>
									</tr>

									<tr>
										<td><select name="program" type="" class="box" autocomplete="off" placeholder="program">
										<option>psikoterapi</option>
  										<option>Konseling kesehatan</option></select>
										</td>
									</tr>
									
									<button class="pencetan" type="submit" name="submit"  value= <?php echo date("h:i:sa");?>>Submit</button>
								</form>
								<?php
								include("conn/acces.php");
								if(isset($_POST['submit']))
								{	$nama = $_POST['nama'];
									$nomor= $_POST['nomor'];
									$email = $_POST['email'];
									$tanggal = $_POST['tanggal'];
									$program = $_POST['program'];
									$submit = $_POST['submit'];

									$query = "INSERT INTO frogram (nama, nomor, email, tanggal, program, submit) VALUES ('$nama', '$nomor', '$email', '$tanggal', '$program', '$submit')";

									$result = mysqli_query($koneksi, $query);
									if($result){
										header("Location: index.php");
									} else {
										header("Location: ");
									}
								}
								
								?>
				</li>
				

			</ul><br><br>
			<a href="pilihanA9.php" class="previous">&laquo; Previous</a>
			<a href="index.php" class="next">Finish &raquo;</a>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</body>
</html>