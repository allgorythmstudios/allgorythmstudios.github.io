<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>

	<link rel="stylesheet" href="pure-release-0.6.0/pure-min.css">
	<link rel="stylesheet" href="pure-release-0.6.0/grids-responsive-min.css">

	<link rel="stylesheet" 	href="css/style.css">
	<link rel="stylesheet" href="css/blog.css">
	<link rel="stylesheet" 	href="css/nav-bar.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head>
<body>
	<?php
		include_once("nav-bar.php");
		current_page("News");
	?>	
	<section class="blog-splash">
		
	</section>
	<section>
		<div class="pure-g article-container">
			<div class="pure-u-2-5 pure-u-sm-6-24 pure-u-md-4-24 date-column">
				<ul class="date-container">
					<li class="month">Feb</li>
					<li class="num-day">4</li>
					<li class="year">2016</li>
				</ul>	
				<div class="green-line"></div>
			</div>
			<div class="pure-u-3-5 pure-u-sm-18-24 pure-u-md-20-24  article-column">
				<h1 class="blog-article-title">Title of the post</h1>
				<ul class="author-info">
					<li class="author-circle">			
						<img src="img/test-portrait.jpg" class="author-image">
					</li>
					<li class="author-name">by Arkantos Oculus</li>
				</ul>
				<p class="article-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, corporis ut vitae, nesciunt eius officiis officia incidunt quidem amet. Fugit libero atque rerum quam consequuntur totam numquam cupiditate facere odit nostrum sunt debitis veritatis inventore eligendi vel, doloremque esse culpa ipsum assumenda obcaecati tenetur. Rem nihil, laborum porro ut culpa cumque aliquid veniam impedit a quod deleniti officiis quasi eum cum repellendus itaque tempora vero optio neque incidunt velit laudantium, voluptatem cupiditate dolorem consequatur. Dignissimos hic deleniti voluptates amet repellat necessitatibus expedita eligendi eum mollitia delectus doloribus rem, magni suscipit ab commodi ipsam? Quaerat sequi officiis illum maxime assumenda voluptatem.
				</p>
			</div>
		</div>
		<div class="pure-g article-container">
			<div class="pure-u-2-5 pure-u-sm-6-24 pure-u-md-4-24 date-column">
				<ul class="date-container">
					<li class="month">Dic</li>
					<li class="num-day">20</li>
					<li class="year">2016</li>
				</ul>	
				<div class="green-line"></div>
			</div>
			<div class="pure-u-3-5 pure-u-sm-18-24 pure-u-md-20-24  article-column">
				<h1 class="blog-article-title">Title of the post</h1>
				<ul class="author-info">
					<li class="author-circle">			
						<img src="img/test-portrait.jpg" class="author-image">
					</li>
					<li class="author-name">by Arkantos Oculus</li>
				</ul>
				<p class="article-content">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, corporis ut vitae, nesciunt eius officiis officia incidunt quidem amet. Fugit libero atque rerum quam consequuntur totam numquam cupiditate facere odit nostrum sunt debitis veritatis inventore eligendi vel, doloremque esse culpa ipsum assumenda obcaecati tenetur. Rem nihil, laborum porro ut culpa cumque aliquid veniam impedit a quod deleniti officiis quasi eum cum repellendus itaque tempora vero optio neque incidunt velit laudantium, voluptatem cupiditate dolorem consequatur. Dignissimos hic deleniti voluptates amet repellat necessitatibus expedita eligendi eum mollitia delectus doloribus rem, magni suscipit ab commodi ipsam? Quaerat sequi officiis illum maxime assumenda voluptatem.
				</p>
			</div>
		</div>		
	</section>
	<footer>		
	</footer>	
	<script type="text/javascript" src="scripts/nav-bar.js"></script>	
</body>
</html>