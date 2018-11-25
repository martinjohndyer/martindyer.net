<!-- Navbar -->
<div class="w3-top">
	<div class="w3-bar w3-black w3-card">
		<!-- LOGO -->
		<a href="/" class="w3-bar-item w3-container mjd-grey"><img src="images/logo_small.png" style="height:32px"></a>
		<!-- BUTTONS -->
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-small mjd-hover-red" href="/">HOME</a>
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-small mjd-hover-red" href="/research">RESEARCH</a>
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-small mjd-hover-red" href="/aboutme">ABOUT ME</a>
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-small mjd-hover-red" href="/contact">CONTACT</a>
		<!-- example of dropdown menu
		<div class="w3-dropdown-hover w3-hide-small">
			<button class="w3-padding-large w3-button mjd-hover-red">MORE <i class="fa fa-caret-down"></i></button>     
			<div class="w3-dropdown-content w3-bar-block w3-card-4">
				<a class="w3-bar-item w3-button mjd-hover-red" href="#">Merchandise</a>
				<a class="w3-bar-item w3-button mjd-hover-red" href="#">Extras</a>
				<a class="w3-bar-item w3-button mjd-hover-red" href="#">Media</a>
			</div>
		</div>
		-->
		<!-- MENU (only in narrow mode) -->
		<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right mjd-hover-grey" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
	</div>
</div>

<!-- Navbar on small screens  -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<a class="w3-bar-item w3-button w3-padding-large mjd-hover-red" href="/">HOME</a>
	<a class="w3-bar-item w3-button w3-padding-large mjd-hover-red" href="/research">RESEARCH</a>
	<a class="w3-bar-item w3-button w3-padding-large mjd-hover-red" href="/aboutme">ABOUT ME</a>
	<a class="w3-bar-item w3-button w3-padding-large mjd-hover-red" href="/contact">CONTACT</a>
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
