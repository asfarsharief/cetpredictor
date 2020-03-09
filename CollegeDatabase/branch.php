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
	width: 70%;
	height: 200px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 200px;
}
 
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}
 
input[type="text"],input[type="password"],select{
	margin-top: 30px;
	height: 45px;
	width: 60%;
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
	position: absolute;
	font-size: 35px;
	color: #2980b9; 
}
 
.form-input:nth-child(2)::before{
	content: "\f023";
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
					<li><a href="home.php">Home</a></li>
					<li><a href="logout.php">Sign Out</a></li>
					
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>
        <h2> Select the Branch you would like to find colleges for: </h2>
		<div class="container">
		<form method = "POST" action ="explore.php">
		<div class="form-input">
         <select name = "branch">
               <option value = "CSE">Computer Science and Engineering</option>
               <option value = "ISE">Information Science and Engineering</option>
               <option value = "ECE">Electronics and Communication Engineering</option>
               <option value = "EEE">Electrical Engineering</option>
               <option value = "ME">Mechanical Engineering</option>
               <option value = "CE">Civil Engineering</option>
         </select>
        </div>
		<input type="submit" type="submit" value="Check out colleges" class="btn-login"/>
		</form>
    </div>
    
    <div class ="change_btn">
			<a href="home.php" class="btn btn-nav">Home</a>
			
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