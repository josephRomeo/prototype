<!DOCTYPE html>
<html>
<head>
	<title>My Final Prototype</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="top">
		<label class="label">My Final Prototype</label>
		<label class="label1">Romeo, Joseph Stephen</label>
	</div>

	<div class="sidebar">

	<img class="image" src="icon/logo1.png" width="120px" height="120px">

		<ul>
			<li class="web"><img class="image1" src="icon/netscape.png" width="20px" height="20px"><a href="index.php?keyType=web">Web Server</a></li>
			<li><img class="image1" src="icon/mobile-applications-development.png" width="20px" height="20px"><a href="index.php?keyType=mobile">Mobile</a></li>
		</ul>

	</div>
	<div class="center">
		<?php include 'components/controller.php'; ?>
	</div>
</html>