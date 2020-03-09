
<?php 
 
 $servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'collegedatabase';

$conn = mysqli_connect($servername, $username, $password, $dbname);


?>
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
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}
 
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}
 
input[type="text"],input[type="password"]{
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

    </style>
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				

				<ul class="main-nav animated slideInDown" id="check-class"> 
				
					<li><a href="index.html">Home</a></li>
					<li><a href="register.php">Sign Up</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

		
        <?php
        if(isset($_POST['username'])){
            
            $name=$_POST['name'];
            $age=$_POST['age'];
            $board=$_POST['board'];
			$phy=$_POST['phy'];
			$che=$_POST['che'];
			$mat=$_POST['mat'];
            $username=$_POST['username'];
            $password=$_POST['password'];
            $marks = $phy+$che+$mat;
            $sql="INSERT INTO login (Name, Age, Board, Phy, Che, Maths, Username, Password) VALUES ('".$name."','".$age."','".$board."','".$phy."','".$che."','".$mat."','".$username."','".$password." ')";
            if(mysqli_query($conn,$sql)==1)
            {
                echo "<h2>Registration Successful.</h2>";
            }
            else{
                echo "<h2>Registration Failed. Try Again.</h2>";
                exit();
            }
            
                
            }
        ?>
    
    
        <h2> Enter details here: </h2>
        <div class="container">
        <form method = "POST" action ="home.php">
        <div class="form-input">
        <input type="text" name="username" placeholder="Enter the User Name"/>	
        </div>
        <div class="form-input">
        <input type="password" name="password" placeholder="Enter Password"/>
        </div>
        <input type="submit" type="submit" value="Log In" class="btn-login"/>
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

			

	</script>

</body>
</html>