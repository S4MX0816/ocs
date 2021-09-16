<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>About - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li class="current"><a>About</a></li>
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
		<div id="about">
			<div class="aside">
				<div>
					<h2>We focus on:-</h2>
					<p>
						<span>Managing charity procedures for various orphanages, NGO's and other welfare societies through the simplest and easiest routes available i.e. via on-line websites.</span>
					</p>
					<p>
						<span>Developing a centralized, full poof website, providing various social activities, promising the secure network of organizations.</span>
					</p>
					<p>
						<span>Acting as a fair genuine means of communication between the public and the welfare organizations or orphanages. Building a sense of faith, humanity and creating links between these societies and the interested donors.</span>
					</p>
					<p>
						<span>Bringing the actual requirements of the organizations to the right of the donors in order to have  rightful fulfillments of their needs.</span>
					</p>
					<p>
						<span>Producing least legal complications by providing validations through a simple sequence of well design forms, ensuring consistency and reliability.</span>
					</p>
					<p>
						<span>Focusing on the correct data and sieving out the genuine users of the site and forming links to genuine donors as well as genuine organizations. Ensuring that the donations do not fall into untrustworthy hands.</span>
					</p>
					<p>
						<span>Providing options to register for new orphanages, adding and updating the required items and updating details about the orphanage or NGO's.</span>
					</p>
					<p>
						<span>It tries to provide maximum number of facilities available or not available normally on other websites it tends to be authorized.</span>
					</p>
					<p>
						<span>People can apply for various programs, volunteer and contribute to the societies.</span>
					</p>
					<p>
						<span>Expand the awareness regarding the needs of the poor and orphans on a global level and arousing a sense of humanity.</span>
					</p>
					<p>
						<span>It provides a one click search facility to the users and easy access to the nearby organizations and orphanages.</span>
					</p>
					
				</div>
			</div>
			<div class="sidebar">
				<h2>Our targets are:-</h2>
				<p></p>
				<p>Orphanages</p>
				<p>NGO's</p>
				<p>Welfare Societies</p>
				<p>Any community involved in social work</p>
				<p>Children development programs</p>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>