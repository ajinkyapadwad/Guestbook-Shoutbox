<?php include 'database.php'; ?>
<?php
	$sql = "SELECT * FROM shouts ";
	$shouts = mysqli_query($connection,$sql);
?>
<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8" />
  		<title>Guestbook</title>
		<link rel="stylesheet" href="css/style.css" type="text/css" />
	</head>

	<body background="img/back.jpg">
		<div id="container">
			<header>
				<h1 align="center">Guestbook Shoutbox</h1>
			</header>
			<div id="shouts">
				<ul>
				<?php while($row = mysqli_fetch_assoc($shouts)) : ?>
					<li class="shout">
						<span><?php echo $row['time'];?></span>
						<strong><?php echo $row['user'];?> : </strong>
						<?php echo $row['message'];?>
					</li>

				<?php endwhile; ?>
				</ul>
			</div>


			<div id="input">
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="First Name" />
					<input type="text" name="userLast" placeholder="Last Name" />
					<input type="text" name="email" placeholder="Email" />
					<input type="text" name="message" placeholder="Message" />
					<br />
					<input class="shout-btn" type="submit" name="submit" value="submit" />
				</form>
			</div>
		</div>
	</body>
</html>