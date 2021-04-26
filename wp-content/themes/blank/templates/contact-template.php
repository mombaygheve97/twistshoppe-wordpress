<?php
	/* Template Name: CONTACT */

get_header();
?>

<div class = "row">
		<div class= "col">
			<div class="container">
	  			<form action="action_page.php">
				<label for="fname">First Name</label>
	    		<input type="text" id="fname" name="firstname" placeholder="Your name..">
	    		<label for="lname">Last Name</label>
	    		<input type="text" id="lname" name="lastname" placeholder="Your last name..">
	    		<label for="email">Email</label>
	    		<input type="text" id="email" name="email" placeholder="Your email..">
				<label for="request">Message/Request</label>
	    		<textarea id="request" name="request" placeholder="Write something.." style="height:200px"></textarea>
	    		<label for="subject">Other Concern</label>
	    		<textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
	    		<input type="submit" value="Submit">
			</form>
		</div>
	</div>
		<div class = "col">
			<div class = "container">
				<h3><center>Social Media to Contact<center></h3>
				<p><h4>Here are the two social media that you can contact me if you have any concern.</h4></p>
				<a href ="#"><img src = "http://localhost/wordpress/wp-content/uploads/2021/04/fb.png" style="width:200px;height:200x;"></a>
				<a href = "#"><img src = "http://localhost/wordpress/wp-content/uploads/2021/04/twitter.png" style="width:200px;height:200x;"></a>
			</div>
		</div>
</div>
<?php get_footer(); ?>
