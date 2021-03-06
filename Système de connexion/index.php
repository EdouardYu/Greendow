<?php require_once('inc/session.php'); ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Greendow</title>
		<link rel="shortcut icon" href="img/GW.ico" />
		<style type="text/css">
			/* *{
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
				
			} */
			* {
				margin: 0;
				padding: 0;
			}

			.container {
				display: block;
				max-width: 1080px;
				margin: 0 auto;
			}

			body {
				font-size: 14px;
				color: #444;
			}

			.fl {
				float: left;
			}

			.fr {
				float: right;
			}

			.clearf:after,
			.clearf:before {
				content: "";
				display: block;
				clear: both;
			}

			/* 栅格 */
			.col-1,
			.col-2,
			.col-3,
			.col-4,
			.col-5,
			.col-6,
			.col-7,
			.col-8,
			.col-9,
				{
				display: block;
				position: relative;
				min-height: 1px;
				float: left;
			}

			.col-1 {
				width: 10%;
			}

			.col-2 {
				width: 20%;
			}

			.col-3 {
				width: 30%;
			}

			.col-4 {
				width: 40%;
			}

			.col-5 {
				width: 50%;
			}

			.col-6 {
				width: 60%;
			}

			.col-7 {
				width: 70%;
			}

			.col-8 {
				width: 80%;
			}

			.col-9 {
				width: 90%;
			}


			.top-nav a {
				height: 80px;
				line-height: 80px;
				text-decoration: none;
				color: black;
				font-size: 20px;
			}

			.top-nav a:hover {
				color: royalblue;
			}

			.header {
				box-sizing: content-box;
				/* height: 800px;
				width: 1080px; */
				height: 100%;
				width: 100%;
				position: absolute;
				background-image: url(img/index_header.jpg);
				background-repeat: no-repeat;
				background-size: 1900px 800px;

				/* margin-left: 400px; */
			}

			.head {
				position: absolute;
				top: 50%;
				margin-top: -300px;
				left: 50%;
				margin-left: -200px;
				width: 400px;
				height: 400px;
				border-radius: 25px;
				text-align: center;
				color: white;
			}

			.btn {
				background-color: #5eaf4d;
				border-radius: 14px;
				height: 50px;
				width: 200px;
				font-size: 18px;
				margin-top: 70px;
				color: white;
			}

			.btn:hover {
				background-color: forestgreen;
			}

			.pourquoi {
				box-sizing: content-box;
				height: 700px;
				width: 1900px;
				background-color: #5eaf4d;
				position: absolute;
				margin-top: 800px;
			}

			.les3 {
				display: flex;
				margin-top: 50px;
				height: 533px;
				width: 1900px;
				/* background-color: #4169E1; */
				justify-content: space-around;
			}

			.les {

				text-align: center;
				color: white;
			}

			.intro {
				display: grid;
				grid-template-rows: 1fr 1fr;
				grid-template-columns: 1fr 1fr;
				grid-template-areas:
					"choisir foire"
					"support revendeur";
				height: 700px;
				width: 1900px;
				/* background-color: #4169E1; */
				position: absolute;
				margin-top: 1500px;
			}

			.choisir {
				grid-area: choisir;
				/* background-color: red; */
				text-align: left;
				color: #228B22;
			}

			.foire {
				grid-area: foire;
				/* background-color: orange; */
				color: #228B22;
			}

			.support {
				grid-area: support;
				/* background-color: yellow; */
				color: #228B22;
			}

			.revendeur {
				grid-area: revendeur;
				/* background-color: green; */
				color: #228B22;
			}

			.footer {
				display: flex;
				justify-content: space-around;
				height: 250px;
				width: 1900px;
				background-color: #228B22;
				position: absolute;
				margin-top: 2200px;
			}

			.f2 {
				color: white;
				margin-top: 30px;
				font-size: 14px;
			}

			.f3 div {
				font-size: 25px;
				margin-top: 35px;
				margin-left: 80px;

			}

			.footer a {
				text-decoration: none;
				color: white;
			}

			.f4 {
				margin: 100px auto;
				height: 50px;
				width: 100px;
				background-color: #5eaf4d;
				border-radius: 10px;
				font-size: 22px;
				text-align: center;
				line-height: 50px;
			}

			.footer a:hover {
				color: yellow;
			}
		</style>
	</head>

		<?php 
		require('inc/header1.php');
		require_once('inc/functions.php');
		?>


		<div class="header">
			<form action="" method="" class="head">
				<div style="font-size: 75px;">Greendow</div>
				<div style="font-size: 80px;white-space: nowrap;margin-left: -330px;">Votre fenêtre connectée
				</div>
				<input type="submit" class="btn" value="Decouvrez Greendow" />
			</form>
		</div>
		<div class="pourquoi">
			<div style="font-size: 50px;text-align: center;color: white;margin-top: 50px;margin-bottom: 100px;">Pourquoi
				Greendow?</div>
			<div class="les3">
				<div class="col-2 les" ">
					<div><img src=" img/Fonctionnalités.svg"></div>
				<h2 style="margin-top: 80px;font-size: 30px;">fonctionnalité</h2>
				<p style="margin-top: 50px;font-size: 20px;">Avez un contrôle total <br>sur votre fenêtre et sa
					<br>configuration
				</p>
			</div>
			<div class="col-2 les" ">
					<div><img src=" img/Avantages.svg"></div>
			<h2 style="margin-top: 80px;font-size: 30px;">Avantages</h2>
			<p style="margin-top: 50px;font-size: 20px;">Avez un contrôle total <br>sur votre fenêtre et sa
				<br>configuration
			</p>
		</div>
		<div class="col-2 les" ">
					<div><img src=" img/sécurité.svg"></div>
		<h2 style="margin-top: 80px;font-size: 30px;">Sécurité</h2>
		<p style="margin-top: 50px;font-size: 20px; ">Nos fenêtre sont <br> sécurisées afin que vous <br>puissiez avoir
			l'esprit tranquille</p>
		</div>
		</div>
		</div>

		<div class="intro">
			<div class="choisir">
				<h2 style="margin: 165px 0 0 200px;font-size:30px">Pourquoi choisir Greendow</h2>
				<p style="margin: 30px 0 0 200px;font-size:15px">Greendow améliore la quqlité de votre air intérieur,
					limitant ainsi les problèmes
					<br>respiratoires liés à la pollution.
				</p>
				<a href="#" style="margin: 30px 0 0 200px">En savoir plus &gt;</a>
			</div>
			<div class="foire">
				<h2 style="margin: 165px 0 0 200px;font-size:30px">Foire aux questions</h2>
				<p style="margin: 30px 0 0 200px;font-size:15px">Avez-vous une question? Retrouvez nos réponses aux
					question fréquemment
					<br>posées sur le fonctionnement de notre fenêtre Greendow
				</p>
				<a href="#" style="margin: 30px 0 0 200px">FAQ &gt;</a>
			</div>
			<div class="support">
				<h2 style="margin: 50px 0 0 200px;font-size:30px">Support</h2>
				<p style="margin: 30px 0 0 200px;font-size:15px">Vous avez acheté une fenêtre Greendow et vous avez
					besoin d'aide concermant le
					fonctionnement de Greendow ou son installation? Notre support technique se fera
					<br>un plaisir de vous répondre.
				</p>
				<a href="#" style="margin: 50px 0 0 200px">Contacter le support &gt;</a>
			</div>
			<div class="revendeur">
				<h2 style="margin: 50px 0 0 200px;font-size:30px">Trouver un revendeur</h2>
				<p style="margin: 30px 0 0 200px;font-size:15px">Nos fenêtre Greendow sont commercialiées paetout en
					France. Trouvez un
					<br>revendeur proche de chez vous
				</p>
				<a href="#" style="margin: 50px 0 0 200px">Liste des revendeur &gt;</a>
			</div>

		</div>

		<?php include('inc/footer.php'); ?>
		
	</body>
</html>
