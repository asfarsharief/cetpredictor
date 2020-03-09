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
	width: 750px;
	height: 200px;
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
	padding-top: 30px;
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
					<li><a href="login.php">Sign In</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

		<div class="container">
        <?php
        if(isset($_POST['cet'])){
            
            $_SESSION['cet']=$_POST['cet'];
                      
            $sql="SELECT Total_Marks from stud_marks where Username = '".$_SESSION['username']."'";
            $result = mysqli_query($conn,$sql);
            $marks = mysqli_fetch_row($result);
            if(mysqli_num_rows($result)>0)
            {
                $cetper = (intval($_SESSION['cet'])/180)*100;
                $boardper = (intval($marks[0])/300)*100;
                $rank = ((($cetper +  $boardper)/200)*100);
                
                $newsql = "SELECT Rank_Upper, Rank_Lower from cet_ranks where Percentage < '".$rank."'";
                $newresult = mysqli_query($conn,$newsql);
                $newmarks = mysqli_fetch_row($newresult);
                $_SESSION['low'] = $newmarks[0];
                $_SESSION['high'] = $newmarks[1];
                echo "<h2><br> Your predicted rank in CET is between<br>"."$_SESSION[low]"."and"."$_SESSION[high]"."</h2>";
            }            
            
        }
        ?>
		</div>

		<div class ="change_btn">
			<a href="college.php" class="btn btn-nav">Find the best college for you</a>
			
		</div>


		</
		

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