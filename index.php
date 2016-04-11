<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Landing page</title>

	<link rel="stylesheet" href="pure-release-0.6.0/pure-min.css">
	<link rel="stylesheet" href="pure-release-0.6.0/grids-responsive-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/nav-bar.css">
	<link rel="stylesheet" href="css/connections.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head>
<body>
	<?php 
		include_once "nav-bar.php";
		current_page("Home");
	?>

	<section class="splash-container">	
	<div class="splash-filter"></div>
		<div class="splash">			
			<h1 class="splash-title">A L L G O R H Y T H M</h1>

			<!-- <div class="splash-subtitle">
				<span>STUDIOS</span>
			</div>  -->
		</div>
		<canvas class="disable-select"></canvas>
	</section>

	<section class="main-content">
		<div class="pure-g">

			<!-- Colonna NEWS -->
			<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-2-5">

				<!-- Titolo Colonna -->
				<div class="pure-g">
					<div class="pure-u-1">						
						<h2 class="column-title">NEWS</h2>
					</div>

					<div class="pure-u-1 article">	
						<img src="https://pbs.twimg.com/media/CeWB6C_VAAEui5V.jpg" class="article-image">

						<h3 class="article-title">New Release</h3>
						<!-- Data -->						
						<ul class="pub-info">
							<li>Posted On: </li>
							<li class="month">Feb</li>
							<li class="num-day">4</li>
							<li class="year">2016</li>
							<li class="pub-author">by Gordorn Freeman</li>
						</ul>
						
						<div class="tags">
							<a href="#">Pathfinder</a> | <a href="#">Turin</a>
						</div>
						<p>Lorem Khaled Ipsum is a major key to success. The other day the grass was brown, now it’s green because I ain’t give up. Never surrender. Cloth talk. Eliptical talk. Wraith talk. We don’t see them, we will never see them. Surround yourself with angels. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. The first of the month is coming, we have to get money, we have no choice. It cost money to eat and they don’t want you to eat.
						</p>
					</div>
					<div class="pure-u-1 article">							
						
							<img src="http://www.extremetech.com/wp-content/uploads/2016/01/oculus_rift_UE4.jpg" class="article-image">	
					
						<h3 class="article-title">New Release</h3>

						<!-- Data -->						
						<ul class="pub-info">
							<li>Posted On: </li>
							<li class="month">Feb</li>
							<li class="num-day">4</li>
							<li class="year">2016</li>
							<li class="pub-author">by Gordorn Freeman</li>
						</ul>
						
						<div class="tags">
							<a href="#">Pathfinder</a> | <a href="#">Turin</a>
						</div>
						<p>Lorem Khaled Ipsum is a major key to success. The other day the grass was brown, now it’s green because I ain’t give up. Never surrender. Cloth talk. Eliptical talk. Wraith talk. We don’t see them, we will never see them. Surround yourself with angels. It’s on you how you want to live your life. Everyone has a choice. I pick my choice, squeaky clean. The first of the month is coming, we have to get money, we have no choice. It cost money to eat and they don’t want you to eat.
						</p>
					</div>

				</div>
			</div>


			<!-- Colonna LAVORI - JOBS -->
			<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-2-5">
				<h2 class="column-title">JOBS</h2>
				<div class="article">
					<h3 class="article-title">Animatore</h3>
					<div class="tags">
						<a href="#">Work</a> | <a href="#">Turin</a>
					</div>
					<p>Cloth talk. Congratulations, you played yourself. Surround yourself with angels. Let me be clear, you have to make it through the jungle to make it to paradise, that’s the key, Lion! Another one. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise. </p>
				</div>
				<div class="article">
					<h3 class="article-title">Sound designer</h3>
					<div class="tags">
						<a href="#">Work</a> | <a href="#">Turin</a>
					</div>
					<p>
					Give thanks to the most high. Hammock talk come soon. Life is what you make it, so let’s make it. Celebrate success right, the only way, apple. They don’t want us to win. Give thanks to the most high. 
					</p>
				</div>
			</div>
			<!-- Colonna SOCIAL -->
			<div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-5">
				<h2 class="column-title">SOCIAL</h2>
				<div class="column-social article">
					<a href="#" class="pure-menu-link">		
						<i class="fa fa-twitter"></i>
						Twitter
					</a>
					<a href="#" class="pure-menu-link">
						<i class="fa fa-facebook"></i>
						Facebook
					</a>	
					<a href="#" class="pure-menu-link">	
						<i class="fa fa-google"></i>
						Google+
					</a>
					<a href="#" class="pure-menu-link">	
						<i class="fa fa-youtube"></i>
						YouTube
					</a>
				</div>
			</div>		
		</div>
	</section>
	<footer>		
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script type="text/javascript" src="scripts/nav-bar.js"></script>
	<script type="text/javascript" src="scripts/connections.js"></script>	
</body>
</html>