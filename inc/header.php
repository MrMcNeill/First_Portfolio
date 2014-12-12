<!DOCTYPE html>
 <html>
 	<head>
 	<link href='http://fonts.googleapis.com/css?family=Changa+One:400,400italic|Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
 	<meta charset="utf-8">
 	<title> <?php echo $pageTitle; ?> </title>
 	<link rel="stylesheet" href="css/normalize.css">
 	<link rel="stylesheet" href="css/main.css">
 	<link rel="stylesheet" href="css/responsive.css"> 
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	</head>
 	<body>
 		<header>
 			<a href="index.php" id="logo">
				<h1> Mr.McNeill </h1>
				<h2> Designer </h2>
			</a>
			<nav>
				<ul>
					<li> <a href="index.php" <?php if($section == "index") {echo "class='selected'";} ?> > Portfolio </a></li>
					<li> <a href="about.php" <?php if($section == "about") {echo "class='selected'";} ?> >  About </a> </li>
					<li> <a href="contact.php" <?php if($section == "contact") {echo "class='selected'";} ?> > Contact </a> </li>
				</ul>	
            </nav>
		</header>

		
