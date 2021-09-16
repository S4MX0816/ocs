<?php	session_start();
include("./includes/connection.php");	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo_icon.png" />
	<title>Gallery - Helping Hands</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.imgs
		{
			height: 20px;
			width: 20px;
		}
	</style>
</head>
<body>
	<div id="header">
		<div>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="logo"></a>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li class="current"><a>gallery</a></li>
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
	<?php
		$sql = "SELECT * FROM media_gallery ORDER BY media_id DESC";
		$result = mysqli_query($con,$sql);
		$img_location = array("Volvo", "BMW", "Toyota","dvdvs","sdfefew");
		$count=0;

		while($rs = mysqli_fetch_array($result)){
			$img_location[$count]=$rs['image'];		
			$count++;
		}
	?>
		<div id="gallery">
			<div class="header">
				<div>
					<h2></h2>
				</div>
				<img src="<?php echo $img_location[0]; ?>" height="250px" width="400px" style="position: relative; right: 480px;">
				<img src="<?php echo $img_location[1]; ?>" height="250px" width="400px" style="position: relative; bottom: 25px; left: 385px;">
			</div>
			<div class="body">
				<div>
					<h2></h2>
					<img src="<?php echo $img_location[2]; ?>" style="height: 308px; width: 256px;">
				</div>
				<div>
					<h2></h2>
					<img src="<?php echo $img_location[3]; ?>" style="height: 308px; width: 256px;">
				</div>
				<div>
					<h2></h2>
					<img src="<?php echo $img_location[4]; ?>" style="height: 308px; width: 256px;">
				</div>
			</div>
			<div class="footer">
				<p>
					stay connected with us, we know the needs of pepole who are poor, disabled. get invloved with us and start helping pepole with your abilities
				</p>
				<a href="login.php">Get Involved</a>
			</div>
		</div>
	</div>
	<?php	include("./includes/footer.html");	?>
</body>
</html>