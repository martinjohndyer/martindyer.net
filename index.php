<!DOCTYPE html>
<html lang="en">
<title>Home | Martin Dyer</title>
<?php require('include/top.inc'); ?>
<?php require('include/navbar.inc'); ?>

<body>
<!-- TOP IMAGE -->
<div class="w3-display-container w3-center w3-black" style="margin-top:46px">
	<img class="w3-image" style="height:500px; object-fit: cover" src="/images/wide_m31.jpg" alt="Banner">
	<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-8 w3-black">
		<h1><font size="32"><b>Martin J Dyer</b></font></h1>
		<h4>Astronomer</h4>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="w3-content w3-center" style="max-width:1000px">
	<!-- Welcome section -->
	<div class="w3-container w3-padding-32" id="welcome">
		<h3>Welcome!</h3>
		<p class="w3-justify">I'm currently a PhD student in the <a href="http://www.astro.group.shef.ac.uk/">Astronomy & Astrophysics Group</a> at the University of Sheffield and member of the <a href="http://goto-observatory.org/">GOTO Collaboration</a>.</p>
		
		<p class="w3-justify">This website is work in progress, please let me know if you find something missing or broken!</p>
	</div>

	<!-- Research section -->
	<div class="w3-row w3-padding-32" id="research">
		<div class="w3-col m6 w3-padding-large">
			<img class="w3-round w3-image" style="border: 2px solid black" src="/images/square_goto.jpg" title="Working with GOTO on La Palma" alt="Working with GOTO on La Palma">
		</div>
		<div class="w3-col m6 w3-padding-large">
			<h3>My Research</h3>
			<p class="w3-justify">lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><a class="w3-button w3-round w3-black mjd-hover-red" href="/research">Read more...</a></p>
		</div>
	</div>

	<!-- About Me section -->
	<div class="w3-row w3-padding-32" id="about">
		<div class="w3-col m6 w3-padding-large w3-hide-medium w3-hide-large">
			<img class="w3-round w3-image" style="border: 2px solid black" src="/images/square_profile.jpg" title="Me standing next to GOTO" alt="Me standing next to GOTO">
		</div>
		<div class="w3-col m6 w3-padding-large">
			<h3>About Me</h3>
			<p class="w3-justify">lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
			<p><a class="w3-button w3-round w3-black mjd-hover-red" href="/aboutme">Read more...</a></p>
		</div>
		<div class="w3-col m6 w3-padding-large w3-hide-small">
			<img class="w3-round w3-image" style="border: 2px solid black" src="/images/square_profile.jpg" title="Me standing next to GOTO" alt="Me standing next to GOTO">
		</div>
	</div>

	<!-- Contact section -->
	<div class="w3-container w3-padding-32" id="contact">
		<h3>Contact</h3>
		<p><a class="w3-button w3-round w3-black mjd-hover-red" href="/contact">Get in touch!</a></p>
	</div>
<!-- End Page Content -->
</div>
</body>

<?php require('include/footer.inc'); ?>
</html>