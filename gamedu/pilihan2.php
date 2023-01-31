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
				<a href="page/logout.php" class="logout">
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
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
                    <img src="img/Let The Game Delivery (4) (1).jpg " width="400" height="250"/>
					<span class="text">
						<p>Maria menceritakan hal yang ia rasakan tersebut kepadamu ketika sedang berkunjung. 
							Ia merasakan gejala tersebut merupakan gejalan umum yang dirasakan oleh ibu hamil 
							yang sudah memasuki usia kehamilan tua.</p>
					</span>
				</li>
			</ul>

            <ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Apakah yang akan kamu katakan pada maria?</b></p><br>
						<p>Pilihlah salah satu dari 2 pilihan dibawah ini :</p><br>
						<p><a href="pilihanA4.php" class="textw">“Aku rasa kamu perlu pergi ke dokter kandungan untuk mengonsultasikan gejala yang kamu rasakan”</a></p><br>

						<a href="PilihanB3.php" class="textw">“Gejala itu memang umum dirasakan di akhir masa kehamilan. semuanya terlihat normal”</a>
					    
				</li>
			</ul><br><br>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>