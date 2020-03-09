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
	width: 50%;
	height: 560px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 100px;
	overflow-y:auto;
}
 
.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}
 
input[type="text"],input[type="password"],input[type="number"]{
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
 
.form-input:nth-child(8 )::before{
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
        <?php

            $sql="SELECT * from login where Username = '".$_SESSION['username']."'";           
            $result = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($result);
        if(mysqli_num_rows($result)>0)     
        {   
            echo "</nav>";
            echo "<h2>Update Values:</h2>";
            echo "<div class='container'>";
            echo "<form method = 'POST' action ='upt_sus.php'>";
            echo "<div class='form-input'>";
            echo " Name:<br> ";
            echo "<input type='text' name='name' value =".$row['Name'].">";	
            echo "</div>";
            echo "<div class='form-input'>";
            echo " Age:<br>";
            echo "<input type='text' name='age' value =".$row['Age'].">";	
            echo "</div>";
            echo "<div class='form-input'>";
            echo " Board:<br>";
            echo "<input type='text' name='board' value =".$row['Board'].">";	
            echo "</div>";
            echo "<div class='form-input'>";
            echo " Phyics Marks:<br> ";
            echo "<input type='text' name='phy' value =".$row['Phy'].">";	
            echo "</div>";
            echo "<div class='form-input'>";
            echo " Chemistry Marks: <br>";
            echo "<input type='text' name='che' value =".$row['Che'].">";
            echo "</div>";
            echo "<div class='form-input'>";
            echo " Maths Marks:<br> ";
            echo "<input type='text' name='mat' value =".$row['Maths'].">";	
            echo "</div>";
            echo "<input type='submit' type='submit' value='Submit' class='btn-login'/>";
            echo "</form>";
        }
        ?>
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