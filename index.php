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
		<h1><font size="32"><b>Martin Dyer</b></font></h1>
		<!--<h4>Astronomer</h4> -->
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="w3-content w3-center" style="max-width:1000px">
	<!-- Welcome section -->
	<div class="w3-container w3-padding-32" id="welcome">
		<h3>Welcome to my home page!</h3>
		<p class="w3-justify">
		I'm currently a PhD student in the <a href="http://www.astro.group.shef.ac.uk/">Astronomy & Astrophysics Group</a> at the University of Sheffield and member of the <a href="http://goto-observatory.org/">GOTO Collaboration</a>.
		</p>
		<p class="w3-justify">
		<i>This website is work in progress, please let me know if you find something missing or broken!</i>
		</p>
	</div>

	<!-- Research section -->
	<div class="w3-row w3-padding-32" id="research">
		<div class="w3-col m6 w3-padding-large">
			<img class="w3-round w3-image" style="border: 2px solid black" src="/images/square_goto.jpg" title="Working with GOTO on La Palma" alt="Working with GOTO on La Palma">
		</div>
		<div class="w3-col m6 w3-padding-large">
			<h3>My Research</h3>
			<p class="w3-justify">
			I'm an astronomer, and I'm specifically interested in <b>robotic telescopes</b>.  My PhD project involves the development of the first robotic GOTO telescope at the Observatorio del Roque de los Muchachos on La Palma.
			</p>
			<p class="w3-justify">
			The core of the project has been the creation of the <b>GOTO Telescope Control System</b> (G-TeCS), a software package written in Python to control all aspects of the telescope and observatory: hardware interfaces, robotic nightly operation, automatic alert listening, target scheduling and follow-up.
			</p>
			<p class="w3-justify">
			Aside from my work on GOTO I'm also a member of the <b>ULTRACAM/ULTRASPEC/HiPERCAM</b> team, and I've carried out observing runs with all three instruments on the TNT, NTT and GTC.
			</p>
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
			<p class="w3-justify">
			I'm currently in the 4th and final year of my PhD at the University of Sheffield, before that I did an MPhys in Physics and Astronomy at the University of Durham.
			</p>
			<p class="w3-justify">
			I'm mostly a <b>Python</b> programmer and I've worked with all sorts of different challenges, from serial hardware communications to astronomical scheduling. I love coding and I help run the Sheffield Astronomy coding society CRACK. I've also taken part in a few Hackathons now, including winning a prize at HackSheffield 2017 and runner-up at HackSheffield 2018.
			</p>
			<p class="w3-justify">
			In my spare time I like reading, watching TV and playing PC games, as well as running (or volunteering at) my local 5k Parkrun every Saturday morning. I'm also interested in graphic design and history, in particular heraldry which is a fascinating combination of the two.
			</p>
			<a class="w3-button w3-round w3-black mjd-hover-red" href="/MJD_CV.pdf">My CV</a>
			<a class="w3-button w3-round w3-black mjd-hover-red" href="/aboutme">Read more...</a>
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
