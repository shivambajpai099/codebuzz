<!DOCTYPE html>
<html lang="en">
<head>
  <title>CodeBUZZ - A weekly newsletter about all the programming contests and hackathons</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
    * { font-family: Century Gothic,CenturyGothic,AppleGothic,sans-serif; 
    }
    
    .navbar {margin-bottom:0px;}
	        
      
    
    header{ 
        margin: 0px;
        color:white;
        background: url("images/BACK.jpg") no-repeat center center;
        background-size:cover;
    }
    
    .jumbotron {;
            background-color: transparent;
            padding: 50px 50px 10px 50px;
            color: white;
    }
    
    .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
}

.item span {
    font-style: normal;
}
    
    .form-group { color:  white;
        padding: 10px 40px 40px 40px;
    }
    
    
    .well .well-lg { 
    }
    .logos { padding: 10% 10% 10% 10%;
    }
	
	
	.slideanim {visibility:hidden;}
.slide {
    
    animation-name: slide;
    -webkit-animation-name: slide; 
    
    animation-duration: 1.5s; 
    -webkit-animation-duration: 1.5s;
    
    visibility: visible; 
}


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

.bg-4 { 
    background-color: #2f2f2f;
    color: #ffffff;
}
    </style>    
    
</head>

<script>
$(document).ready(function(){
  
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

 
  if (this.hash !== "") {

    
    event.preventDefault();

   
    var hash = this.hash;

   
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      
      window.location.hash = hash;
      });
    } 
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
    
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">CodeBuzz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#home">Home</a></li>
        <li><a href="#portals">Coding Portals</a></li>
        <li><a href="#about">About Us</a></li> 
        <li><a href="#contact">Contact</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
        <li><a href="dashboard.php">Dashboard</a></li>		
      </ul>
      
    </div>
  </div>
</nav>
    
    
<header>
<div class="jumbotron text-center">
    <div class="container-fluid" id="home">
        <h1><b>CODE BUZZ</b></h1> 
  <p>One letter. All the info you need.</p>
    
    </div>
    </div>
    
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel" style="color:#D6DAC2">
  

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
      
    
    
    <div class="item active">
      <h4>" The most disastrous thing you can ever learn is your first programming language. "<br><span style="font-style:normal;">Alan Kay</span></h4>
    </div>
        
    <div class="item">
      <h4>" A language that doesn't affect the way you think about programming is not worth knowing. "<br><span style="font-style:normal;">Alan J. Perlis</span></h4>
    </div>   
      
    <div class="item">
      <h4>“ Programs must be written for people to read, and only incidentally for machines to execute. ”<br><span style="font-style:normal;"> Harold Abelson</span></h4>
    </div>
    
  </div>

  
</div>
    
<div class="row container-fluid">
    <div class="col-sm-8">
    <p style="padding:30px 30px 30px 30px"><h2 class="text-center" >Know all that is happening around the competitive coding world.
Choose the right thing without missing anything.</h2><br>
<h1 class="text-center">Know | Code | Grow</h1></p>    
    </div>
    <div class="col-sm-4">
        <form role="form" action="data.php" enctype="text/plain" method="GET">
   <div class="form-group">
       <h2>Subscribe to our newsletter:</h2>
    <label>Name:</label>
    <input type="text" class="form-control" name="name1" placeholder="Enter your name here">
    <br>
      
    <label>Email address:</label>
    <input type="email" class="form-control" name="email1" placeholder="Enter your e-mail address here">
    <br>
  
  
  <button type="submit" class="btn btn-default">Subscribe</button>
            </div>
 </form>
    </div>
</div>
    


    
</header>
    
 

 
<article>
    
    <div class="well well-lg text-center"><h1>CODING PORTALS WE COVER</h1></div>
    <div class="container-fluid" id="portals">
    
    <div class="row">
        <br>
    <div class="col-sm-4">
        <div class="logos slideanim">
            <img src="images/hackerrank.jpg" width=300px >
        </div>
        </div>
    
    <div class="col-sm-4">
        <div class="logos slideanim">
            <img src="images/topcoder.png" width=300px>
        </div>
        </div>
        
    <div class="col-sm-4">
        <div class="logos slideanim">
            <img src="images/hackerearth.png" width=300px>
        </div>
        </div>    
    
    
    
    </div>
        
        <div class="row">
    
    <div class="col-sm-2">
            </div>
        <div class="col-sm-4">
        <div class="logos slideanim">
            <img src="images/codechef.png" width=300px >
        </div>
        </div>
    
        <div class="col-sm-4">
            <br>
        <div class="logos slideanim">
            <img src="images/codeforces.jpg" width=300px>
        </div>
        </div>
        
    <div class="col-sm-2">
        
        </div>    
    
    
    
    </div>
    </div>
    </article>

<!-- ==========ABOUT========== -->
	
	
		<div class="container-fluid text-center" id="about" style="background-color:#f6f6f6">
			<div class="row">
			<br>
				<h2 class="text-center">ABOUT US</h2>
				<br>
				<br>
				<div class="col-lg-2"></div>
				<div class="col-lg-8 slideanim">
				<p><h4>Codebuzz is an effort to put in all the information of the competitive programming world at one place. This weekly newsletter will be a one stop shop of information for all the competitive coding enthusiasts lurking out for a new coding challenge everyday. Here you can view the list of all the live and upcoming programming events happening across so many different platforms, so that you choose the right contest to participate in at the right time. We will mark the calendar for you and the reminders will ensure that you do not miss anything ever again.<br>Subscribe and keep growing!:)</p>
				</h4>
				<br>
				<br>
				</div>
				<div class="col-lg-2"></div>
				</div>
				<div class="row">
                <div class="col-lg-2"></div>
				<div class="col-lg-3 slideanim">
					<img class="img-circle" src="images/team4.jpg" height="200" width="200">
					<h4>Shivam Bajpai</h4>
					<h5><i>Web Designer-Editor</i></h5>
					<br>
					
					
				</div>
                <div class="col-lg-2"></div>
				<div class="col-lg-3 team slideanim">
					<img class="img-circle" src="images/team2.jpg" height="200" width="200">
					<h4>Ayushi Daksh</h4>
					<h5><i>Designer-Editor</i></h5>
					<br>
					
				</div>
				<div class="col-lg-2"></div>
				</div>
			</div>
		</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
<div class="container-fluid" id="contact" style="background-color:">
  <br>
  <h2 class="text-center">REACH US</h2>
  <div class="row">
   <div class="col-sm-1">
   </div>
    <div class="col-sm-4 slideanim">
      <p>Your feedback and suggestions are what we would need to grow. Do share with us.<br>You can also contact us for queries, we'll get back to you within 24hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Lucknow-Mysore, India</p>
      
      <p><span class="glyphicon glyphicon-envelope"></span> reach-us@codebuzz.ind.in</p> 
    </div>
    <div class="col-sm-7 slideanim">
	<form role="form" action="#" enctype="text/plain" method="GET">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" name="namesug" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="emailsug" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control"  name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div></form> 
    </div>
  </div>
  </div>

<footer class="container-fluid bg-4 text-center">
  <p>For the developers, by the developers.</p>
 
</footer>  

</body>
</html>