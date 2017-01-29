<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Abbas Hodroj</title>
	<link href="https://fonts.googleapis.com/css?family=Leckerli+One|Rock+Salt|Alex+Brush|Sue+Ellen+Francisco|Krona+One|Raleway:400,700,700i" rel="stylesheet"> 
	<link rel="stylesheet" href="css/styles.css">
    <script src="jquery/jquery-3.1.1.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--############### HEADER ##############-->
    <header>
        <a href="index.php?page=home"><img src="img/abbas.logo.png" id="logo"></a>
		<nav>
            <a href="#" id="menu-icon"></a>
            <ul>
                <li><a href="index.php?page=home">Hem</a></li>
				<li><a href="index.php?page=about">Om Mig</a></li>
				<li><a href="index.php?page=portfolio">Portfolio</a></li>
				<li><a href="index.php?page=contact">Kontakt</a></li>
				<li><a href="index.php?page=admin">Admin</a></li>
			</ul>
        </nav>
    </header>
<!--############### HEADER SLUT ##############-->

<script type="text/javascript">
	//Dynamisknavigation
	$(document).ready(function($){
		var path = window.location.search;

		if (path == '') {
   			path = '?page=home';
 		}  

 		var target = $('nav a[href="index.php'+path+'"]');

 		target.addClass('current');
	});
</script>