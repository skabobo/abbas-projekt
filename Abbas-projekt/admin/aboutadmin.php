<?php
include('about-textadmin.php');

?>

<div class="content"> <!-- Div för sticky footer -->
		<section class ="main-section">
			<h1 class="about-title">Introduktion</h1>
			<!--<img id="skyline" src="img/skyline.jpg" alt="banner">-->
			<iframe id="youtube-video" src="https://www.youtube.com/embed/coIXMyWzpAU" frameborder="0" allowfullscreen></iframe>
			<?php 
				$query = "SELECT * FROM about_me";
				$pages_result = mysqli_query($db, $query);
				$page = mysqli_fetch_assoc($pages_result);
				echo '
					<form method="POST">
						<textarea id="text-aboutme" name="about_me">'.$page['page_content'].'</textarea>
						<input type="hidden" name="id" value="'.$page['id'].'">
			    		<div class="button-div"><button Id="button-aboutme" type="submit" name="update">Spara</button></div>
					</form>
					';
			?>			
			<h1 class="about-title">CV</h1>
			<div class="work">
				<h2 class="info-title">Utbildning</h2> 
				<div class="info-public"><img class="info-image" alt="info-button" src="img/info.png" id="0"></div> 
				<!--<div class="tap-hidden"><img class="info-image" alt="info-button" src="img/tap.png" id="0"></div>-->  
				<div class="hidden">

					<div class="boxtext-cv">
						<form action="about-textadmin.php" method="POST">
							<h3>Arbete</h3>
							<textarea class="text-textarea" name="insert_db_heading"></textarea>
							<h3>År</h3>
							<textarea class="text-textarea" name="insert_db_year"></textarea>
							<h3>Text</h3>
							<textarea class="text-textarea" name="insert_db_text"></textarea>
			    			<div class="button-div"><button class="button-cv" type="submit">Spara</button></div>
						</form>
					</div>	

					<?php 
						$query = "SELECT * FROM education_table ORDER BY heading_year DESC";
						$pages_result = mysqli_query($db, $query);

						while($page = mysqli_fetch_assoc($pages_result)){
							echo '
							<div class="boxtext-cv">
								<form method="POST">
									<h3>Utbildning</h3>
									<textarea class="text-textarea" name="cv-heading">'.$page['heading_text'].'</textarea>
									<h3>År</h3>
									<textarea class="text-textarea" name="cv-year">'.$page['heading_year'].'</textarea>
									<h3>Text</h3>
									<textarea class="text-textarea" name="cv-text">'.$page['page_content'].'</textarea>
									<input type="hidden" name="id2" value="'.$page['id'].'">
			    					<div class="button-div"><button class="button-cv" type="submit" name="update">Spara</button></div>
			    					<div class="button-div"><button onclick="return deleletconfig()" class="button-cv delete-cv" type="submit">Radera</button></div>
								</form>
							</div>
							';
						}

					?>
    			</div><!--######## div hidden #########-->
    		</div><!--######## div work #########-->
			
			<div class="work">
				<h2 class="info-title">Arbetslivserfarenhet</h2>
				<div class="info-public"><img class="info-image" alt="info-button" src="img/info.png" id="1"></div>
				<!--<div class="tap-hidden"><img class="info-image" alt="info-button" src="img/tap.png" id="1"></div>-->  
				<div class="hidden">

					<div class="boxtext-cv">
						<form action="about-textadmin.php" method="POST">
							<h3>Arbete</h3>
							<textarea class="text-textarea" name="insert_db_heading2"></textarea>
							<h3>År</h3>
							<textarea class="text-textarea" name="insert_db_year2"></textarea>
							<h3>Text</h3>
							<textarea class="text-textarea" name="insert_db_text2"></textarea>
			    			<div class="button-div"><button class="button-cv" type="submit">Spara</button></div>
						</form>
					</div>					

					<?php 
						$query = "SELECT * FROM job_table ORDER BY heading_year DESC";
						$pages_result = mysqli_query($db, $query);

						while($page = mysqli_fetch_assoc($pages_result)){
							echo '
							<div class="boxtext-cv">
								<form method="POST">
									<h3>Arbete</h3>
									<textarea class="text-textarea" name="cv-heading2">'.$page['heading_text'].'</textarea>
									<h3>År</h3>
									<textarea class="text-textarea" name="cv-year2">'.$page['heading_year'].'</textarea>
									<h3>Text</h3>
									<textarea class="text-textarea" name="cv-text2">'.$page['page_content'].'</textarea>
									<input type="hidden" name="id3" value="'.$page['id'].'">
			    					<div class="button-div"><button class="button-cv" type="submit" name="update">Spara</button></div>
			    					<div class="button-div"><button onclick="return deleletconfig()" class="button-cv delete-cv" type="submit">Radera</button></div>
								</form>
							</div>
							';
						}

					?>
					
			</div><!--######## div work #########-->
		</section>
	</div> <!--######## div content ########-->

	<script src="js/expand.js"></script>
	<script type="text/javascript">
		function deleletconfig(){

			var del = confirm("Är du säker på att du vill radera detta?");
			if (del == true){
   			header ("Location: indexadmin.php?page=about")
		}
			return del;
		}
	</script>
