<?php session_start();?>
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
.change_btn{
	margin-left: 40%;
	padding-top: 20px;
    margin-top:360px;
}
h2{
    position: absolute;
  left: 40%;
  top: 350px;  
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

		
        <?php
        if(isset($_POST['name'])){
            
            $name=$_POST['name'];
            $age=$_POST['age'];
            $board=$_POST['board'];
			$phy=$_POST['phy'];
			$che=$_POST['che'];
			$mat=$_POST['mat'];
            $marks = $phy+$che+$mat;
            $sql="Update login set Name = '".$name."', Age = '".$age."',Board= '".$board."', Phy = '".$phy."', Che= '".$che."', Maths= '".$mat."' where username = '".$_SESSION['username']."'";
            if(mysqli_query($conn,$sql)==1)
            {
                echo "<h2>Update Successful.</h2>";
            }
            else{
                echo "<h2>Update Unsuccessful. Try again.</h2>";
                exit();
            }
            
                
            }
        ?>

        <div class ="change_btn">
            <a href="home.php" class="btn btn-nav">Home</a>
            <a href="branch.php" class="btn btn-full">Explore Colleges</a>
			
		</div>
    
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