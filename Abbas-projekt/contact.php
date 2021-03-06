<?php 
	include('connect.php');
	include('form.php');
?>

<div class="content"> <!-- Div för sticky footer -->
		<section class ="main-section">
			<h1 class="contact-title">KONTAKTA MIG</h1>
			<div class="contact-div">
				<a href="https://www.google.se/maps/place/Kvarnbergsplan+14,+141+45+Huddinge/@59.2411703,17.9939938,17z/data=!3m1!4b1!4m5!3m4!1s0x465f70b5367c3989:0xa4551928c3ea8053!8m2!3d59.2411676!4d17.9961825" target="_blank"><img class="contact-image" src="img/location.png" alt="Location"></a>
				<h2>ADRESS</h2>
				<p>Kvarnbergsplan 14</br>141 45 Huddinge</br>Stockholm</br>Sweden</p>
			</div> <!--######## div contact-div ######-->
			<div class="contact-div">
				<a href="tel:0704748533"><img class="contact-image" src="img/phone.png" alt="Phone"></a>
				<h2>TELEFON</h2>
				<p>+(46)70-474 85 33</p>
			</div> <!--######## div contact-div ######-->
			<div class="contact-div">
				<a href="mailto:abbas.hodroj@student.kyh.se"><img class="contact-image" src="img/email.png" alt="EMAIL"></a>
				<h2>EMAIL</h2>
				<p>abbas.hodroj@student.kyh.se</p> 
			</div> <!--######## div contact-div ######-->
		</section>
	</div> <!-- div content -->

<div id="form-main">
	<h1 class="contact-title">SKICKA MEDDELANDE</h1>
  	<div id="form-div">
    	<form action="" method="post" class="form" id="form1">
      		
        	<input type="text" name="form_name" type="text" class="feedback-input" placeholder="Namn" id="name" required />
      		
        	<input type="number" name="form_phone" type="text" class="feedback-input" placeholder="Telefonnummer" id="phone" required />
      		
        	<input type="email" name="form_email" type="text" class="feedback-input" id="email" placeholder="Email" required />

        	<textarea name="form_message" class="feedback-input" id="comment" placeholder="Meddelande" required /></textarea>
      
			<input type="submit" value="SKICKA" id="button-green"/>
		
		</form>
  	</div>
</div>

