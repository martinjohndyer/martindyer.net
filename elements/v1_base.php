<!-- Sidebar/menu -->
<nav class="w3-sidebar mjd-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft mjd-hover-gold" style="width:100%;font-size:18px">Close Menu</a>
  
  <!-- Logo -->
  <div class="w3-container mjd-grey">
	<a href="/"><img src="images/logo_clear.png" style="height:140px"></a>
  </div>
  
  <!-- Menu -->
  <div class="w3-bar-block">
    <a href="/" onclick="w3_close()" class="w3-bar-item w3-button mjd-hover-gold">Home</a> 
    <a href="/aboutme" onclick="w3_close()" class="w3-bar-item w3-button mjd-hover-gold">About me</a>
    <a href="/research" onclick="w3_close()" class="w3-bar-item w3-button mjd-hover-gold">My work</a>
    <a href="/contact" onclick="w3_close()" class="w3-bar-item w3-button mjd-hover-gold">Contact</a>
  </div>
  
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large mjd-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button mjd-red mjd-hover-gold w3-margin-right" onclick="w3_open()">☰</a>
  <img src="images/logo_blank.png" style="height:40px">
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>


<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
