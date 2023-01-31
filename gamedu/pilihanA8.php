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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#"></a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
                    <img src="img/20.jpg" width="400" height="250"/>
					<span class="text">
						<p><b>Olahraga Aerobik </b><br>
						<p>Jenis : Jalan, lari, bernag, dan bersepeda dengan intentitas sedang 
							hingga mencapai 60-90% detak jantung maksimum sesuai usia.</p><br>
						<p>Durasi : 30 menit(tidak lebih dari 2 hari berturut-turut tanpa berolahraga)</p><br>
					</span>
				</li>
			</ul>

            <ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Olahraga resistensi</b></p>
						  <p>Jenis :Penggunaan dumbbells, yoga dan pilates dengan intentitas sedan dan repetisi.</p><br>
						<p>Durasi : 60 menit 2 sampai 3 kali seminggu.</p><br>
				</li>
			</ul><br><br>
			<a href="pilihanA7.php" class="previous">&laquo; Previous</a>
			<a href="pilihanA9.php" class="next">Next &raquo;</a>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>