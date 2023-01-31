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
				<a href="admin_page.php">
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
					<h1>Update</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Pilihlah dokter yang sesuai dengan program yang dipilih! </a>
						</li>
						
					</ul>
				</div>
			</div>

            <ul class="box-info">
				<li>
							<div class="row">

							<?php
							// error_reporting(0);
							include "conn/acces.php";
							$id_nama = $_GET['id_nama'];
							$sql=mysqli_query($koneksi,"select * from frogram where id_nama='$id_nama'");
							while ($data = mysqli_fetch_array($sql)){
							?>

							<form class="" action="" method="post">
									<tr>
										<input type="hidden" name="id_nama" value="<?php echo $data['id_nama']; ?>">
										<td><input type="" name="nama" autocomplete="off" class="box" placeholder="nama" value="<?php echo $data['nama']; ?>"></td><br>
									</tr>

									<tr>
										
										<td><input name="nomor" type="" autocomplete="off" class="box" placeholder="nomor" value="<?php echo $data['nomor']; ?>" ></td>
									</tr>

									<tr>
										
										<td><input name="email" type="" class="box" autocomplete="off" placeholder="email" value="<?php echo $data['email']; ?>"></td>
									</tr>

									<tr>
										
										<td><input name="tanggal" type="date" class="box" autocomplete="off" placeholder="tanggal"value="<?php echo $data['tanggal']; ?>"></td>
									</tr>

									<tr>
										<td><select name="program" type="" class="box" autocomplete="off" placeholder="program">
										<option value="psikoterapi" <?php if ($data['program']=='psikoterapi') {?>
											selected <?php } ?> >psikoterapi</option>
  										<option value ="Konseling kesehatan" <?php if ($data['program']=='Konseling kesehatan') {?>
											selected <?php } ?>>Konseling kesehatan</option></select>
										</td>
									</tr>

									<tr>
									<td>
									<select name="dokter" class="box" autocomplete="off" placeholder="dokter"><option>pilih dokter</option>
                                    <option value = "dr. Tri Kumoroyekti, Sp.KJ">dr. Tri Kumoroyekti, Sp.KJ</option>
                                    <option value = "Abella Saragih, S.Psi., M.Psi., Psikolog">Abella Saragih, S.Psi., M.Psi., Psikolog</option>
									</select>
									</td>
								</tr>
									
									<button class="pencetan" type="submit" name="submit"  value= <?php echo date("h:i:sa");?>>Submit</button>
								</form>
								<?php 
							}
							?>
								<?php
								include("conn/acces.php");
								if(isset($_POST['submit']))
								{	$id_nama = $_POST['id_nama'];
									$nama = $_POST['nama'];
									$nomor= $_POST['nomor'];
									$email = $_POST['email'];
									$tanggal = $_POST['tanggal'];
									$program = $_POST['program'];
									$dokter = $_POST['dokter'];
									$submit = $_POST['submit'];

									// $query = "INSERT INTO frogram (nama, nomor, email, tanggal, program, dokter, submit) VALUES ('$nama', '$nomor', '$email', '$tanggal', '$program', '$submit')";
									$update = "UPDATE frogram set nama='$nama', nomor='$nomor', email='$email', tanggal='$tanggal',program='$program',dokter='$dokter' WHERE id_nama='$id_nama' ";
									$result = mysqli_query($koneksi, $update);
									if($result){
										header("Location: admin_page.php");
									} else {
										header("Location: ");
									}
								}
								
								?>
				</li>
				

			</ul><br><br>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
</body>
</html>