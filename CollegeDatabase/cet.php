<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Know Your College</title>
	<meta name= viewport content= "width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <style>
    .container{
	
	overflow-y:auto;
	width: 500px;
	height: 550px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
}
 
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}
 
input[type="text"],input[type="number"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}
 
.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	
	font-size: 35px;
	color: #2980b9; 
}
 

 
.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
h2{
    position: absolute;
  left: 100px;
  top: 150px;  
  
}




    </style>
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				

				<ul class="main-nav animated slideInDown" id="check-class"> 
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Log In</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>
		<h2><u>Enter</u> <u>Marks</u> <u>Here</u> :</h2>
		
		<div class="container">
			<form method = "POST" action ="cetcalnolog.php">
			<div class="form-input">
			Enter CET Marks(Out of 180):
			<input type="number" name="cet" placeholder="Enter CET Marks"/>	
			</div>
			<div class="form-input">
			Enter Class 12th Physics Marks(Out of 100):
			<input type="number" name="phy" placeholder="Enter Physics Marks"/>
			</div>	
			<div class="form-input">
			Enter Class 12th Chemistry Marks(Out of 100):
			<input type="number" name="che" placeholder="Enter Chemistry Marks"/>
			</div>
			<div class="form-input">
			Enter Class 12th Maths Marks(Out of 100):
			<input type="number" name="mat" placeholder="Enter Maths Marks"/>
			</div>
			<input type="submit" type="submit" value="Calculate" class="btn-login"/>
			</form>
		</div>
	</header>

	<script type="text/javascript">
		
		function slideshow(){
			 var x = document.getElementById('check-class');
			 if(x.style.display === "none"){
			 	x.style.display="block";
			 }else{
			 	x.style.display="none";
			 }
		}

		function myFunction() {
  		var person = prompt("Please enter your name", "Harry Potter");
  		if (person != null) {
    		alert(person);
  		}
		}	

	</script>

</body>
</html>