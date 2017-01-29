<?php session_start(); // Startar SESSION så vi kan jobba med den ?>

<?php
# Om lösenordet skickats kollar vi det och är det rätt sätts vår SESSION till true
	if(isset($_POST['password']) && $_POST['password'] == "barcelona"){
		$_SESSION['admin'] = true;
	}

# Om vi inte har en SESSION som är true får man formuläret för att skriva in lösenord
	if(!isset($_SESSION['admin']) || !$_SESSION['admin']){
		echo "
		<form action='' method='post' id='admin-login'>
			<input id='input-login' type='password' name='password'>
			<input id='admin-submit' type='submit' value='Logga in'>
		</form>
		";

# Annars, om vi har en SESSION som är true, kör vi funktionen rum_admin() som skriver ut vårt admin
	} else {
		header("location: admin/indexadmin.php?page=home");
	}

?>