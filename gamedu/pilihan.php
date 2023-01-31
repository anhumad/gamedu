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
						<li>
							<a href="#">Daniel sang suami memiliki kekhawatiran akan konsumsi gula berlebih sang istri, 
								tetapi tetap membelikan makanan manisyang mereka inginkan. Suatu hari maria meminta daniel untuk 
								membelikan kue coklat kesukaanya. Padahal sebelumnya ia telah memakan 
								dua donat dan satu kali makan besar.</a>
						</li>
						
					</ul>
				</div>
			</div>

            <ul class="box-info">
				<li>
                    <img src="img/pilihan.png" width="400" height="250"/>
					<span class="text">
						<p>Daniel mengalami kebingungan untuk menentukan pilihan. </p>
					</span>
				</li>
			</ul>

			<ul class="box-info">
				<li>
                    <form action="/action_page.php">
						<p><b>Apa yang akan kamu sarankan pada daniel terhadap permintaan istrinya tersebut.</b></p><br>
						<p>Pilihlah salah satu dari 2 pilihan dibawah ini :</p><br>
					  <p><a href="pilihanA.php" class="textw">"Aku sarankan sebainya kamu belikan saja. Mau bagaimana lagi? namanya juga ibu lagi ngidam"</a></p><br>
					  <a href="PilihanB.php" class="textw">"Sebaiknya jangan dibelikan. Dia sudah terlalu banyak konsumsi yang manis-manis"</a>
					   
				</li>
			</ul><br><br>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>