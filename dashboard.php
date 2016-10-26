
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CodeBUZZ - A weekly newsletter about all the programming contests and hackathons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="tables/css/normalize.css">
  <link rel="stylesheet" href="tables/css/style.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
    * { font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
    }
    
    .navbar {margin-bottom:0px;
	         }
	 .well well-lg {margin:0px;
	         }		 
	 .bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}       
	
	.slideanim {visibility:hidden;}
.slide {
    /* The name of the animation */
    animation-name: slide;
    -webkit-animation-name: slide; 
    /* The duration of the animation */
    animation-duration: 1.5s; 
    -webkit-animation-duration: 1.5s;
    /* Make the element visible */
    visibility: visible; 
}

/* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
@keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    } 
}
@-webkit-keyframes slide {
    0% {
        opacity: 0;
        -webkit-transform: translateY(70%);
    } 
    100% {
        opacity: 1;
        -webkit-transform: translateY(0%);
    }
}

    </style>    
    
</head>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    } // End if 
  });
})

$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">CodeBuzz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="index.php">Coding Portals</a></li>
        <li><a href="index.php">About Us</a></li> 
        <li><a href="index.php">Contact</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="dashboard.php">Dashboard</a></li>		
        </ul>
      
    </div>
  </div>
</nav>
    
    
<article>
<div class="well well-lg">
<h2>Contest this Week</h2></div>
<div class="container-fluid">
<table class="rwd-table" style="width:100%">
  <thead>
		<tr>
			<th>Portal</th>
			<th>Contest Name</th>
			<th>Start</th>
			<th>End</th>
			<th>Duration</th>
			<th>Type</th>
			
		</tr>
		</thead>
  <tr>
			<td data-th="Portal">HackerEarth</td>
			<td data-th="Name"><a href="https://www.hackerearth.com/sprints/dreamworks-hackathon/" style ="text-decoration:none;">DreamWorks Animation Challenge</a></td>
			<td data-th="Start">Sep 30 2016, 09:00 AM IST</td>
			<td data-th="End">Oct 07 2016, 09:00 AM IST</td>
			<td data-th="Duration">7 days</td>
			<td data-th="Type">Online Hackathon</td>
			
		</tr>
		
    <tr>
			<td data-th="Portal">CodeChef</td>
			<td data-th="Name"><a href="http://www.codechef.com/OCT16" style ="text-decoration:none;">October Challenge 2016</a></td>
			<td data-th="Start">Oct 07 2016, 03:00 PM IST</td>
			<td data-th="End">Oct 17 2016, 03:00 PM IST</td>
			<td data-th="Duration">10 days</td>
			<td data-th="Type">Prized</td>
			
		</tr>
    
   <tr>
			<td data-th="Portal">HackerEarth</td>
			<td data-th="Name"><a href="https://www.hackerearth.com/october-clash-16/" style ="text-decoration:none;">October Clash '16</a></td>
			<td data-th="Start">Oct 08 2016, 12:00 PM IST</td>
			<td data-th="End">Oct 09 2016, 12:00 PM IST</td>
			<td data-th="Duration">1 day</td>
			<td data-th="Type">Rated</td>
			
		</tr>
    
    
    <tr>
			<td data-th="Portal">HackerRank</td>
			<td data-th="Name"><a href="https://www.hackerrank.com/w24" style ="text-decoration:none;">Week of Code 24</a></td>
			<td data-th="Start">Oct 10 2016, 12:30 PM IST</td>
			<td data-th="End">Oct 16 2016, 12:30 PM IST</td>
			<td data-th="Duration">7 days</td>
			<td data-th="Type">Algorithmic Challenge</td>
			
		</tr>
    


   <tr>
			<td data-th="Portal">HackerEarth</td>
			<td data-th="Name"><a href="https://www.hackerearth.com/october-circuits/" style ="text-decoration:none;">October Circuits</a></td>
			<td data-th="Start">Oct 14 2016, 09:00 PM IST</td>
			<td data-th="End">Oct 22 2016, 09:00 PM IST</td>
			<td data-th="Duration">8 days</td>
			<td data-th="Type">Rated</td>
			
		</tr>		
    
	<tr>
			<td data-th="Portal">HackerRank</td>
			<td data-th="Name"><a href="https://www.hackerrank.com/openbracket" style ="text-decoration:none;">OpenBracket CodeSprint</a></td>
			<td data-th="Start">Oct 15 2016, 06:30 PM IST</td>
			<td data-th="End">Oct 17 2016, 06:30 PM IST</td>
			<td data-th="Duration">2 days</td>
			<td data-th="Type">Prized</td>
			
		</tr>	
		
	<tr>
			<td data-th="Portal">HackerEarth</td>
			<td data-th="Name"><a href="https://www.hackerearth.com/the-great-sqlizer-october/" style ="text-decoration:none;">The Great SQLizer</a></td>
			<td data-th="Start">Oct 15 2016, 07:00 PM IST</td>
			<td data-th="End">Oct 16 2016, 01:00 AM IST</td>
			<td data-th="Duration">6 hours</td>
			<td data-th="Type">Rated</td>
			
		</tr>	
	
	<tr>
			<td data-th="Portal">CodeChef</td>
			<td data-th="Name"><a href="https://www.codechef.com/GMCO2016" style ="text-decoration:none;">Techfest International Coding Challenge - Game of Codes</a></td>
			<td data-th="Start">Oct 16 2016, 10:00 PM IST</td>
			<td data-th="End">Oct 17 2016, 00:00 AM IST</td>
			<td data-th="Duration">14 hours</td>
			<td data-th="Type">Prized</td>
			
		</tr>
		
		<tr>
			<td data-th="Portal">HackerEarth</td>
			<td data-th="Name"><a href="https://www.hackerearth.com/brainwaves/" style ="text-decoration:none;">BrainWaves</a></td>
			<td data-th="Start">Oct 16 2016, 08:00 AM IST</td>
			<td data-th="End">Oct 23 2016, 11:55 PM IST</td>
			<td data-th="Duration">8 days 16 hours</td>
			<td data-th="Type">Prized</td>
			
		</tr>	
</table>
</div>



</article>
<footer class="container-fluid bg-4 text-center">
   <p>For the developers, by the developers.</p>
    
</footer>  
</body>
</html>	
