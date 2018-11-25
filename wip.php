<!DOCTYPE html>
<html>
<title>Martin Dyer's homepage</title>
<link rel="stylesheet" href="w3.css"> 
<link rel="icon" href="images/faviconB.png">

<style>
.mySlides {display:none;}
</style>

<body>

<div class="w3-content w3-section w3-center">
<img class="mySlides" src="images/banner_m31.png" style="height:300px"> 
<img class="mySlides" src="images/banner_prof.png" style="height:300px"> 
<img class="mySlides" src="images/banner_m101.png" style="height:300px"> 
<img class="mySlides" src="images/banner_goto.png" style="height:300px"> 
<img class="mySlides" src="images/banner_gtecs.png" style="height:300px"> 
<img class="mySlides" src="images/banner_ntt.png" style="height:300px"> 
<img class="mySlides" src="images/banner_shefsnow.png" style="height:300px"> 
<img class="mySlides" src="images/banner_durham.png" style="height:300px"> 
</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>



<p class="w3-center">Welcome to <strong><?=$_SERVER['HTTP_HOST']?></strong>, the personal webpage of Martin Dyer.</p>
<p class="w3-center">Currently work in progress, as you can probably tell.
<p class="w3-center"> <a href="https://github.com/martinjohndyer">github.com/martinjohndyer</a> </p>
<p class="w3-center"> <a href="https://twitter.com/martinjohndyer">twitter.com/martinjohndyer</a> </p>

</body>
</html>