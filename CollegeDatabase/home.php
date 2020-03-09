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
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				

				<ul class="main-nav animated slideInDown" id="check-class"> 

					<li><a href="studinfo.php">Student Information</a></li>
					<li><a href="logout.php">Sign Out</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>
        

		<div class="main-content-header">
        <?php
        if(isset($_POST['username'])){
            
            $_SESSION['username']=$_POST['username'];
            $_SESSION['password']=$_POST['password'];
            $sql="select Name from login where username='".$_SESSION['username']."'AND password='".$_SESSION['password']."'";
            $result=mysqli_query($conn,$sql);
            $name = mysqli_fetch_row($result);
            if(mysqli_num_rows($result)==1){
                echo "<h2>You Have Successfully Logged in <span class='colorchange'>".$name[0]."</span></h2>";
                
            }
            else{
                echo "<h2> You Have Entered Incorrect Password</h2>";
                exit();
                
            }
                
		}
		else if(isset($_SESSION['username'])){
			$sql="select Name from login where username='".$_SESSION['username']."'AND password='".$_SESSION['password']."'";
            $result=mysqli_query($conn,$sql);
            $name = mysqli_fetch_row($result);
            if(mysqli_num_rows($result)==1){
                echo "<h2>You Have Successfully Logged in <span class='colorchange'>".$name[0]."</span></h2>";
                
            }
            else{
                echo "<h2> You Have Entered Incorrect Password</h2>";
                exit();
                
            }
		}
        ?>
            <br><br>
			<a href="cetlogin.php" class="btn btn-full">Check CET Rank</a>
			<a href="branch.php" class="btn btn-nav">Explore Colleges</a>
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

