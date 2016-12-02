<?php include("header.php"); ?>

<?php include("construction-nav.php"); ?>

			<div id="gray_header">
				<h3>VOBECKY ENTERPRISES INC</h3>
			</div>

			<div id="content2">
				<div id="left_img">
					<img class="img-rounded" src="img/office-glendora.jpg" style="width:480px;">
				</div>
				
				<div id="right_content">
					<h1>Contact Us<h1>
					
					<h2>Send us a message:</h2>

	            <p class="lead">For any questions, please feel free to contact us.</p>

	           		
	            	<form method="post" action="contactSubmit1.php">
	           		<p><label for="first_name">First Name:</label>

						<input type="text" name="first_name"> 

						<label for="last_name">Last Name:</label>
						<input type="text" name="last_name"></p>


						<p><label for="email">Email:</label>
						<input type="email" name="email"> 

						<label for="phone">Phone Number:</label>
						<input type="tel" name="phone"> </p>

						<p><label for="message">Message:</label></p>
						<textarea rows="4" cols="50" name="message" placeholder="Your Message"></textarea>

						<p><input type="submit" value="Submit"> </p>
						</form>
	         </div>
			</div>


<?php include("footer.php"); ?>