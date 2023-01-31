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
							<a href="#">Maria mendengarkan saranmu dan meminta daniel untuk menemaninya pergi ke dokter kandungan.</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
                    <img src="img/19.jpg " width="400" height="250"/>
					<span class="text">
						<p>Pada hari konsultasi yang telah ditentukan, maria meneritakan keluhan yang dialmai pada dokter. 
							Dokter menyarankan maria untuk melakukan tes. Tes tersebut bernama tes toleransi glukosa oral. 
							tujuan dilakukan tes tersebut adalah untuk mengakkan diagnosis dokter terhadap gambaran keluhan 
							faktor risiko yang dialami maria.</p>
					</span>
				</li>
			</ul>

            <ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Hasil Tes maria sebagai berikut:</b></p>
						<label>kadar gula darah setelah 1 jam : 183 mg/dl</label><br>
						<label>kadar gula darah setelah 2 jam : 160 mg/dl</label><br>
						<label>kadar gula darah puasa : 100mg/dl</label></form><br>

				</li>
			</ul>
			<ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Diagnosis</b></p>
						<label>Gestational Diabetes</label><br>
				</li>
			</ul><br><br>
			<a href="PilihanB3.php" class="previous">&laquo; Previous</a>
			<a href="pilihanB5.php" class="next">Next &raquo;</a>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>