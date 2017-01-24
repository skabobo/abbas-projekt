<?php 
	include('connect.php');
?>


<div class="content"> <!-- Div för sticky footer -->
		<section class ="main-section">
			<h1 class="about-title">Introduktion</h1>
			<!--<img id="skyline" src="img/skyline.jpg" alt="banner">-->
			<iframe id="youtube-video" src="https://www.youtube.com/embed/coIXMyWzpAU" frameborder="0" allowfullscreen></iframe>
			<?php 
				$query = "SELECT * FROM about_me";
				$pages_result = mysqli_query($conn, $query);

				while($page = mysqli_fetch_assoc($pages_result)){
					echo '
					<p>'.$page['page_content'].'</p>
					';
				}

			?>			
			<h1 class="about-title">CV</h1>
			<div class="work">
				<h2 class="info-title">Utbildning</h2> 
				<div class="info-public"><img class="info-image" alt="info-button" src="img/info.png" id="0"></div> 
				<!--<div class="tap-hidden"><img class="info-image" alt="info-button" src="img/tap.png" id="0"></div>-->  
				<div class="hidden">

					<?php 
						$query = "SELECT * FROM education_table ORDER BY heading_year DESC";
						$pages_result = mysqli_query($conn, $query);

						while($page = mysqli_fetch_assoc($pages_result)){
							echo '
								<h3>'.$page['heading_text'].'</h3>
								<h3 class="cv-year">'.$page['heading_year'].'</h3>
								<p>'.$page['page_content'].'</p>


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

					<?php 
						$query = "SELECT * FROM job_table ORDER BY heading_year DESC";
						$pages_result = mysqli_query($conn, $query);

						while($page = mysqli_fetch_assoc($pages_result)){
							echo '
								<h3>'.$page['heading_text'].'</h3>
								<h3 class="cv-year">'.$page['heading_year'].'</h3>
								<p>'.$page['page_content'].'</p>


							';
						}

					?>
					
			</div><!--######## div work #########-->
		</section>
	</div> <!--######## div content ########-->

	<script src="js/expand.js"></script>
