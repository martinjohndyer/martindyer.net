<!DOCTYPE html>
<html lang="en">
<title>Research | Martin Dyer</title>
<?php require('include/top.inc'); ?>
<?php require('include/navbar.inc'); ?>

<body>
<!-- TOP IMAGE -->
<div class="w3-display-container w3-center w3-black" style="margin-top:46px">
	<img class="w3-image" style="height:500px; object-fit: cover" src="/images/wide_goto.jpg" alt="Banner">
	<div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-8 w3-black">
		<h1><font size="32"><b>Research</b></font></h1>
	</div>
</div>

<!-- PAGE CONTENT -->
<div class="w3-content w3-center" style="max-width:1000px">
	<!-- Welcome section -->
	<div class="w3-container w3-padding-32" id="welcome">
		<h3>GOTO</h3>	
	
		<p class="w3-justify">
		During my PhD I have developed software to control a new robotic telescope, the <a href="http://goto-observatory.org/"><b>Gravitational-wave Optical Transient Observer</b></a> (GOTO). GOTO is a wide-field telescope built by an international consortium with the purpose of observing optical transient counterparts to gravitational wave (GW) signals. The first such signal was detected by LIGO in 2015 exactly 100 years after first being predicted by Einstein.
		</p>
		<p class="w3-justify">
		The first GOTO instrument has been commissioned with 4 prototype unit telescopes. This system currently operates completely autonomously every night using the code I have developed. It is intended that each mount should hold a full array of 8 UTs, for a combined field of view of 40 square degrees. A second 8-UT array on La Palma as well as a southern node in Australia is also planned.
		</p>
		<br>
	
		<h3>G-TeCS</h3>	

		<p class="w3-justify">
		My work on GOTO has involved developing and deploying a complete system to control the telescope hardware, schedule and carry out observations known as <b>G-TeCS</b>. The entire system has been written in Python, aside from a few low-level hardware interfaces. The core elements of the control system are a series of <b>hardware daemons</b> and the master control program called the <b>pilot</b>. The pilot runs every night and manages and directs the telescope operations. Within the pilot the night marshal runs through tasks throughout the night based on the altitude of the sun (start the system, take dark frames, open the dome, take sky flats, focus, observe, take morning flats, shutdown), in addition there are other routines monitoring the hardware, the conditions (i.e. closing the dome in bad weather), and the output of the scheduler.
		</p>
	
		<p class="w3-justify">
		The scheduling system has been a paticular focus of my work. It is built around a MariaDB database which contains a table of target pointings to be observed, and is written to and read by by two additional daemons: the <b>sentinel</b> alert listener, which inserts targets into the database, and the <b>scheduler</b>, which decides what the pilot should observe.
		</p>
			
		<p class="w3-justify">
		You can read more about G-TeCS in my 2018 SPIE paper:
		</p>
		<a class="w3-button w3-round w3-black mjd-hover-red" href='https://dx.doi.org/10.1117/12.2311865'><i class="fa fa-lock"></i>  SPIE Digital Library</a>
		<a class="w3-button w3-round w3-black mjd-hover-red" href='https://arxiv.org/abs/1807.01614'><i class="fa fa-lock-open"></i>ArXiV astro-ph</a>
		<br>
		<br>
	
		<h3>Future directions</h3>	
		<p class="w3-justify">
		My future research plans focus around further developing the code I've already written for GOTO. There are several different projects I am interested in exploring:
		</p>
		<ul class="w3-justify">
		<li>Running more scheduling simulations in order to optimise telescope scheduling algorithms. </li>

		<li>Expanding the system to cover multiple telescopes and sites.</li>

		<li>Generalising the software to make it available for use by projects outside of GOTO.</li>
		</ul>
	</div>

<!-- End Page Content -->
</div>
</body>

<?php require('include/footer.inc'); ?>
</html>