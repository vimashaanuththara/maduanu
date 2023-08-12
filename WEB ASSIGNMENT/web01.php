<?php session_start() ?>



<!DOCTYPE html>
<html>
<head>
	<title>designs</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
	@media screen and (max-width:900px)
	{
		background-image:url(home1.jpg);
	}
	@media screen and (max-width:600px)
	{
		background-image:url(home1.jpg);
	}
	@media screen and (max-width:700px){
	menu-bar a{
		padding:10px 10px;
	}
	
	@media screen and (max-width:400px){
	menu-bar a{
		padding:10px 3px;
	}
	

</style>

</head>
<body>
  
  <div class="menu-bar">
  	<img src="logo.png" width="50px" height="50px" class="logo">

  	

  
<ul>

<li class="active"><a href="web01.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
<li><a href="web02.php"><i class="fa fa-user" aria-hidden="true"></i>About Us</a>
 <li><a href="web03.php"><i class="fa fa-building" aria-hidden="true"></i>Samples</a></li>
<li><a href="web04.php"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a></li>
</ul>


</div>


<br><br><br><br>

<div style="position:absolute; right:80px;font-size:30px;"><b>Hello!</b><br><p style="color:green;font-size:75px"><b>I'm Anuththara</b><br></p><b><p style="font-family:cursive;">Short Poem Writter</b><br><br>
<b>I have never started a poem whose end I knew.<br>
Writing a poem is discovering.</b></p></div>

 

<script >
	function smoothScroll(target,duration){
	var target=documet.querySelector(target);
	var targetPosition=target.getBoundingClientReact();
	var startPosition=window.pageYOffset;
    var distance=targetPosition - startPosition;
    var startTime = null;

    function animation(currentTime){
	if(startTime === null) startTime = currentTime;
	var timeElapsed = currentTime - startTime;
	var run=ease(timeElapsed,startPosition,distance,duration);
	window.scrollTo(0,run);
	if(timeElapsed<duration)requestAnimationFrame(animation);
    }

    function ease(t,b,c,d){
    	t/= d/2;
    	if (t<1) return c / 2 * t + b;
    	t--;
    	return -c / 2 * (t * (t -2)-1) +b;

    }
    requestAnimationFrame(animation);

}
</script>

</body>
</html>