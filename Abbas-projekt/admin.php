<?php
include('admin/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: admin/homeadmin.php");
}

?>



<div class="content"> <!-- Div för sticky footer -->
		<section class ="main-section">
			<div class="login">
				<h1 align="center">Login</h1>
				<form action="" method="post" style="text-align:center;">
					<input type="text" placeholder="Användarnamn" id="user" name="username"><br/><br/>
					<input type="password" placeholder="Lösenord" id="pass" name="password"><br/><br/>
					<input type="submit" value="Login" name="submit">
					<!-- Error Message -->
					<span><?php echo $error; ?></span>
			    </form>
			</div>

		</section>
	</div> <!--######## div content ########-->

	<?php include('footer.php'); ?>

</body>
</html>