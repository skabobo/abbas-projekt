<?php
	include('session.php');
	include('home-textadmin.php');

?>


    <div class="content"> <!-- Div för sticky footer -->
        <section class ="main-section">
            <h1 id="main-title">Abbas Hodroj</h1>
            <h2 id="second-title">Front End Developer</h2>
            <img id="mountain" src="img/berg.jpg" alt="banner">
			<?php 
				$query = "SELECT * FROM home";
				$pages_result = mysqli_query($db, $query);
				$page = mysqli_fetch_assoc($pages_result);
				echo '
					<form method="POST">
						<textarea id="text-home" name="home_text">'.$page['page_content'].'</textarea>
						<input type="hidden" name="id" value="'.$page['id'].'">
			    		<div class="button-div"><button Id="button-aboutme" type="submit" name="update">Spara</button></div>
					</form>
					';
			?>	
        </section>
    </div> <!--######## div content ########-->
