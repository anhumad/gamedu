<?php

session_start();


if(isset($_SESSION['username'])){
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="admin.css">
	<script src="https://kit.fontawesome.com/21b088fd58.js" crossorigin="anonymous"></script>

	<title></title>
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
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			
			
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1> calon pasien</h1>
					<ul class="breadcrumb">
						<li>
							<a class="active" href="#"></a>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3></h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>nomor</th>
								<th>email</th>
								<th>tanggal</th>
								<th>program</th>
								<th>dokter</th>
								<th colspan="2">Aksi</th>
                                
							</tr>
						</thead>
						<?php
								$koneksi = mysqli_connect("localhost", "root", "", "konseling");

								$no = 1;
								$ambildata = mysqli_query($koneksi, "select * from frogram");
								while ($tampil = mysqli_fetch_array($ambildata)){
									echo "
									<tbody>
										<tr>
											<td>$tampil[nama]</td>
											<td>$tampil[nomor]</td>
											<td>$tampil[email]</td>
											<td>$tampil[tanggal]</td>
											<td>$tampil[program]</td>
											<td>$tampil[dokter]</td>
											<td><a href='ubah.php?id_nama=$tampil[id_nama]'><i class='fa fa-pen'></i></a></td>
											<td><a href='?id_nama=$tampil[id_nama]'><i class='fa fa-trash'></i></a></td>
											</a></td>
										</tr>
									</tbody>"; 
									
								}

								?>
					</table>
					<?php
					include "conn/acces.php";

					if(isset($_GET['id_nama'])){
					mysqli_query($koneksi,"delete  from frogram where id_nama='$_GET[id_nama]'");
					
					echo "Data berhasil dihapus";
					echo "<meta http-equiv=refresh content=2;URL='admin_page.php'>";

					}
					?>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="admin.js"></script>
</body>
</html>

