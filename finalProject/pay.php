<?php
// Start the session
session_start();

$user = $_SESSION['user'];




?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
  <title>Pay</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="icons/icon5.png" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="homepage.css">
  <link rel="Payment" href="foundation.css"/>
  <script src="login.js"> </script>
  <script src="jump.js"> </script>
</head>
<body>
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
						<a class="dropdown-toggle" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user" id="wuser">Welcome </span>
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


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-8 text-left"> 
         
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <form class="form-horizontal" action="payFinal.php">
			<div class="form-group">
				<label class="control-label col-sm-2" for="username" ><span style="color:red;">*</span> Card Number:</label>
				<div class="col-sm-6">
                    <input type="number" min="1000000000000000" max="9999999999999999" class="form-control" id="card" required onblur="cardnumber(this)" placeholder="16-digit card number" required>
                    
                    
				</div>
				<div class="col-sm-2">
					<input type="button" class="btn btn-danger btn-block" id="cardType" value="Card type">
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd1"><span style="color:red;">*</span> Expriration Date:</label>
				<div class="col-sm-6">
					<input type="text" pattern=".{5,}" maxLength="5" class="form-control" id="pwd1" placeholder="mm/yy" name="pwd1" required>
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="firstname"><span style="color:red;">*</span> CSV</label>
				<div class="col-sm-6">
					<input type="password" maxLength="3" min="100" max="999" class="form-control" id="firstname" placeholder="CSV Number" name="firstname" required>
				</div>
			</div>
        
           
        
			<div class="form-group">
				<label class="control-label col-sm-2" for="middlename"><span style="color:red;">*</span> Name:</label>
				<div class="col-sm-6">
					<input type="middlename" class="form-control" id="middlename" name="middlename" placeholder="Enter Your Name" required>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="lastname"><span style="color:red;">*</span> Email Address</label>
				<div class="col-sm-6">
					<input type="lastname" class="form-control" id="lastname" placeholder="Enter Your Email Id" name="lastname" required>
				</div>
			
			</div>
			
        <div class="form-group">
				<label class="control-label col-sm-2" for="tel"><span style="color:red;">*</span> Phone:</label>
				<div class="col-sm-6">
					<input type="tel" class="form-control" id="tel" placeholder="Enter Your Phone Number" name="tel" required>
				</div>
				
			</div>
			
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-6">
					<button type="submit" class="btn btn-primary btn-block" name="btn-signup" id="signup">Submit</button>
				</div>
			</div>
		</form>      

<?php

//include_once 'dbconnect2.php';
//
// 
//    $sql = mysqli_query($con,"UPDATE book
//            SET paid = '1'
//            WHERE username = '$user'");
//
//
//
//mysqli_close($con);
?>




    </div>
    
  </div>
</div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
      var textInput = document.getElementById('card');

    function cardnumber(inputtxt)
    {
            
	  if(inputtxt.value.match(/^(?:3[47][0-9]{13})$/))
	  {
          
	  	document.getElementById("cardType").value="American Express";
          document.getElementById("img").src="ae.png";
	  }
	  else if(inputtxt.value.match(/^(?:4[0-9]{12}(?:[0-9]{3})?)$/))
      {
        document.getElementById("cardType").value="VISA";
        document.getElementById("img").src="visa.png";
      }
      else if(inputtxt.value.match(/^(?:5[1-5][0-9]{14})$/))
	  {
	    document.getElementById("cardType").value="Mastercard";
        document.getElementById("img").src="mc.png";
	  }
	  else if(inputtxt.value.match(/^(?:6(?:011|5[0-9][0-9])[0-9]{12})$/))
      {
       	document.getElementById("cardType").value="Discover Card";
          document.getElementById("img").src="disc.png";
      }else{
      	document.getElementById("cardType").value="Invalid";
      }
	}
        
    </script>
    


</body>
</html>