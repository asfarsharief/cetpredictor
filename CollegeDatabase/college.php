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
	width: 100%;
	height: 500px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 75px;
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
}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
th, td {
  text-align: left;
  padding: 8px;
}
#myInput {
  background-image: ('/images/searchicon.jpg');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 50%;
  font-size: 16px;
  
}



    </style>
</head>
<body>

	<header>
		<nav>
			<div class="row clearfix">
				

				<ul class="main-nav animated slideInDown" id="check-class"> 
					
					<li><a href="home.php">Home</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
				<a href="#" class="mobile-icon"  onclick="slideshow()"> <i class="fa fa-bars"></i> </a>
			</div>
		</nav>

        <div style="overflow-x:auto;" class="container">
        <?php
            
            
            $sql="SELECT cc.CollegeName,cr.Branch,cr.Rank from college as cc, college_ranks as cr where cc.CollegeID = cr.CollegeID and cr.Rank > '".$_SESSION['low']."' group by cr.Rank";
            $sql1 = "SELECT cc.CollegeName,cr.Branch,cr.Rank from college as cc, college_ranks as cr where cc.CollegeID = cr.CollegeID";           
           $result = mysqli_query($conn,$sql);
                      
            if(mysqli_num_rows($result)>0)
            {
                echo "<h2>The College and Respective Branches:";
                echo "<table id='myTable'>";
                 echo "<tr>";
                echo "<th>College Name</th>";
                echo "<th >Branch</th>";
                echo "<th >Rank</th>";
				echo "</tr>";
				echo "<br><input type='text' id='myInput' onkeyup='myFunction()' placeholder='Search for College'>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['CollegeName'] . "</td>";
                    echo "<td>" . $row['Branch'] . "</td>";
                    echo "<td>" . $row['Rank'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
    
                
            }  
            else
            {
                echo"<h2>Try again next year</h2>";
            }
        
             
            
        
        ?>
		</div>

		<div class ="change_btn">
			<a href="branch.php" class="btn btn-nav">Explore Colleges</a>
			
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
		var input, filter, table, tr, td, i, txtValue;
		input = document.getElementById("myInput");
		filter = input.value.toUpperCase();
		table = document.getElementById("myTable");
		tr = table.getElementsByTagName("tr");
		for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[0];
			if (td) {
			txtValue = td.textContent || td.innerText;
			if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			} else {
				tr[i].style.display = "none";
			}
    }       
  }
}
	


	</script>

</body>
</html>