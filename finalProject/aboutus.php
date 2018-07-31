<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Grad Airlines</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="shortcut icon" type="image/x-icon" href="icons/icon5.png" /> 
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="homepage.css">
	<script src="login.js"> </script>
	<script src="jump.js"> </script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="homepage.css">
	<link rel="stylesheet" href="about.css">
	<script src="login.js"> </script>
	<script src="jump.js"> </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body id="headerAirline">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="homepage.html"><span class="glyphicon glyphicon-home"></span> Home</a>	
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="aboutus.php"><span class="glyphicon glyphicon-info-sign"></span> About us</a>	
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					
					<li id = "cart">
						<a class="navbar-brand" href="cartshow.php"><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</a>
					</li>
					<li class="dropdown" id = "new">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
							<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							  <li><a href="Adminpage.html">Admin</a></li>
							  <li><a href="customersignin.html">Member</a></li>
							</ul>	
					</li id = "new">
					<li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					  <li class="dropdown" id = "old">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome!</span>
						<span class="caret"></span>
						</a>
						<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
							<li><a href="showhistory.php">History</a></li>							
							<li><a href="logout.php" id="logout">Sign out</a></li>
						</ul>
						</li>
				</ul>
			</div>
		</div>
		<div class="jumbotron text-center" id="headerAirline">
		<h1>Grad Airlines</h1> 
		<p>It's time to fly!</p> 
	  </div>
	</nav>
<div class="main">
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="flight5.jpeg" alt="interior" width="600" height="400">
        <div class="carousel-caption">
          <h3>Overview</h3>
          <p>Together with regional partner American Eagle, we offer an average of nearly 6,700 flights daily to 350 destinations in 50 countries. We’re a founding member of the oneworld® alliance, whose members and members-elect offer nearly 14,250 flights daily to 1,000 destinations in 150 countries. In 2016, American Airlines Group Inc. topped Fortune magazine’s list of best business turnarounds and its stock (NASDAQ: AAL) joined the S&P 500 index. Connect with American on Twitter AmericanAir and at Facebook.com/AmericanAirlines.</p>
        </div>
      </div>

      <div class="item">
        <img src="flight1.jpeg" alt="BlueBliss Crew" width="600" height="400">
        <div class="carousel-caption">
          <h3>History</h3>
          <p>Founded in 1930, we’re now one of the largest airlines in the world. Throughout the years, American has created more than 900,000 jobs worldwide and supported close to 1,400 nonprofit organizations.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="flight3.jpeg" alt="Service" width="600" height="400">
        <div class="carousel-caption">
          <h3>Here To serve</h3>
          <p>The passenger needs are taken care of immediately with our high quality service.</p>
        </div>
      </div>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<!-- header -->
<div class="container">
<!-- content -->
	<section id="content">
		
		<article class="col2 pad_left1">
			<h2>Comfort</h2>
	<div class="wrapper" id="centerText">
				
				<p><strong>Grad Airlines is designed such that passenger's comfort is given high priority.</strong> With movable bases to provide further degree of recline to slimmer seats that are made with mesh fibre rather than traditinal foam padding, every nook and cranny of our flights are designed with the intention that our passengers will have a pleasant experience. </p>
<p> The newly redesigned flight cabins in planes charted for longer flight durations have encorporated curving overheard bins, large ceiling panels lit with color LEDs, and LED sidewall lighting that makes the aircraft look larger and puts the claustrophobic passengers on the flight at ease.</p>
			</div>
			<p>We at Grad Airlines understand that sometimes its not about the destination, but the journey that takes you there.</p>
			
			<h2>Customer Service</h2>
			<div class="wrapper">
				
				<p><strong>It is our job everyday to make all aspects of the passenger's experience better.</strong> Flying is a daunting task during your first flight. We keep these first timers in mind and ensure that the passenger is comfortable and is meet with all his/her needs. </p>
				<p>With around the clock service by the highly professional handpicked employees at your beck and call, we leave our costumers satiated and coming back for more.</p>
		</div>

			<h2>Our Crew</h2>
			<div class="wrapper">
				
				<p><strong>We want good costumers and better employees to take care of them</strong> Each and every employee that msakes up the Grad Airlines crew are picked meticulously. </p>
				<p>Incentives and salary hikes are multiple in number because we treat our employees the way we want out best costumers to be treated by them. Grad Airlines is not an organization, it is a family.</p>
		</div>
		</article>

	</section>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>