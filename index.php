<?php
	session_start();
	include("./includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Online Charity System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li class="current"><a>Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="gallery.php">gallery</a></li>
				<li><a href="news.php">News</a></li>
				<li><a href="donate.php">Donate</a></li>
				<?php 
					if(isset($_SESSION["user_id"])){
				?>
					<li><a href="faq.php">FAQ</a></li>
					<li class="log_btn"><a href="logout.php">Logout</a></li>
				<?php 
					}
					else{
				?>
					<li class="log_btn"><a href="login.php">Login</a></li>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div id="body">
		<div class="header">
			<div>
				<img src="images/people.jpg" alt="Image">
				<div id="tagline">
					<h1>Help Children</h1>
					<h3>We are working here always for helping Children.</h3>
				</div>
				<div class="section">
					<h2>This website is created to establish a transparent, fast and secure link between the Donors and the NGOs. </h2>
					<p>
						Many people want to help the needy ones but they are simply not aware of how to start. Our website will be giving them a feel of easiness and hence eventually many children will get benefited out of it.
					</p> 
					<a href="about.php" class="first">Learn More About Us</a>
					<a href="login.php">Register Yourself</a>
				</div>
			</div>
		</div>
		<div class="body">
			<div>
				<div class="figure">
					<a href="gallery.php"><img src="images/kids.jpg" alt="Image"></a>
					<h2><a href="gallery.php">gallery</a></h2>
				</div>
				<div class="news">
					<h2>News</h2>
					<ul>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">New JOin of Children Foundetions</a></h3>
							<p>
								more and more foundetions are now joining with us "Hope" is a new foundetion which is now going to connect with us.
							</p>
						</li>
						<li>
							<span class="date">Sep 12, 2016</span>
							<h3><a href="news.php">Saved elders</a></h3>
							<p>
								some others<a href="news.php">(read..)</a>
							</p>
						</li>
					</ul>
					<span class="link"><a href="news.php">Go To News</a></span>
				</div>
				<div class="help">
					<h2>How To Help</h2>
					<a href="login.php"><img src="images/finger.jpg" alt="Image"></a>
					<h3><a href="login.php">on your single step</a></h3>
					<p>
						stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
					</p>
					<span class="link"><a href="login.php">Get Involved</a></span>
				</div>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>