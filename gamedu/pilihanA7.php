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
                    <img src="img/2_Desember_2020_04 (1).png " width="400" height="450"/>
					<span class="text">
						<p>Tingkatkan konsumsi karbohidrat kompleks, seperti nasi merah, kentang, ubi, gandum.</p><br>
						<p>Kosnusmsi protein 10-20% dari total asupan energi, seperti ikan, ayam tanpa kulit, tahu dan tempe.</p><br>
						<p>Mengurangi asupan karbohidrat dengan karbohidrat yang dianjurkan sebesar 45-65% total asupan energi.</p><br>
						<p>Konssumsi lemak sehat, asupan kurang lebih 20-25% kebutuhan kalori, seperti kacang-kacangan dan suplementasi omega 3.</p><br>
						<p>Mengonsumsi makanan kaya akan serat, seperti kacang-kacangan dan buah-buahan.</p><br>
					</span>
				</li>
			</ul>

            <ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Rencana diet ini juga perlu diimbangi dengan olahraga yang teratur.</b></p><br>
						<a href="pilihanA8.php" class="textw">Lihat kegiatan olahraga yang harus dilakukan</a><br>
					  
				</li>
			</ul><br><br>
			<a href="pilihan3.php" class="previous">&laquo; Previous</a>
			<a href="pilihanA8.php" class="next">Next &raquo;</a>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>