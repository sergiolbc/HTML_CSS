<html>
	<head>
		<title>Form receipt</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body>
			<h1>Welcome <?php echo $_POST["fname"]; ?>!</h1> <br />
			
		<fieldset>	
		</p>	
			Your password is <?php echo $_POST["password"]; ?> <br />
			
			Your email address is <?php echo $_POST["email"]; ?> <br />
			
			Is this a complaint? <?php echo $_POST["yes_no"]; ?> <br />
			
			You enjoy: <?php echo $_POST["films"]; ?> <?php echo $_POST["music"]; ?> <?php echo $_POST["memes"]; ?> <br />
			
			Did you enjoy the page? <?php echo $_POST["drop-down"]; ?> <br />
			
			Your comments: <?php echo $_POST["para"]; ?><br />
			
		</p>
		</fieldset>
		
		
	</body>
</html>