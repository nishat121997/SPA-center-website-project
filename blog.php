<!DOCTYPE html>
<html>
<head>
	<title>Bloge</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
	<div class="navcontainer container-fluid">
		<nav class="navbar navbar-expand-lg ">
		  <a class="navbar-brand" href="#"><img src="./image/logo.png" height="100" width="100" style="border-radius: 100%;"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class=" collapse navbar-collapse mynav" id="navbarNavDropdown">
		    <ul class="navbar-nav">
		      <li class="nav-item active">
		         <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="about.php" >About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="service.php" >Our services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="blog.php" >Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php" >Contact</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="book.php"  >Book now</a>
		      </li>
		     
		    </ul>
		  </div>
		</nav>
		
	</div>
	






<div class="container">

	

<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "admin";

	$conn = mysqli_connect($host,$user,$pass,$database);


	if($conn){
		
	}else{
		die("Got Error : ". mysqli_connect_error());
	}	

	$sql = "SELECT * FROM blog";
	$result = mysqli_query($conn,$sql);
?>	
	
<div class="container-fluid">
  <?php	
   while($row = mysqli_fetch_array($result)){
	echo "<div class='row divborder'>
		<div class='col-lg-4'>";
			echo "<img class='blogImage' src='image/".$row['blogimage']."' height='200' width='200'>";
			
		echo "</div>
		<div class='col-lg-8'>";
						echo "<h3>".$row['blogheader']."</h3>";
					
				echo "<p>".$row['blogdesc']."</p>";

					echo"</div>";
				
						
		echo"</div>";
		}
	?>
		
		
	</div>

	
	
</div> <!-- Blog container end-->





















<footer>
		<div class=" row">
			<div class="col-lg-2">
				
			</div>
			<div class="col-lg-8">
			

				<p>Design & Developed by : Fatema Jannat</p>
				
			</div>
			<div class="col-lg-2">
				
			</div>
			
		</div>
	</footer>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>