<?php
	/* Template Name: HOME */

get_header();
?>
<div class="container">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/Welcome.png" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="http://localhost/wordpress/wp-content/uploads/2021/04/welcome-3.jpg" alt="Second slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</div>
<?php get_footer(); ?>