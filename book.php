<!DOCTYPE html>
<html>
<head>
	<title>book now</title>
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
		        <a class="nav-link" href="about.php" target="_blank">About</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="service.php" target="_blank">Our services</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="blog.php"  target="_blank">Blog</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="contact.php" target="_blank">Contact</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="book.php"  target="_blank">Book now</a>
		      </li>
		     
		    </ul>
		  </div>
		</nav>
		
	</div>
	<!--start-->
	<div class="container">
		

		<div class="row">

			<div class=" col-lg-4">
					
			</div>
			
			<div class="ourservice col-lg-4">
				<h1>Make an Appointment</h1>
				<hr>
				
					
			</div>
			
			<div class=" col-lg-4">
					
			</div>
			
		</div>
	</div>
	<!--end-->
	<div class="container">
	<form action="bookaction.php" method="POST">
		<label>Your Name:</label>
		<input type="text" name="name" placeholder="Full Name" required>
		<p></p>
		<label>Your E-mail:</label>
		<input type="email" name="email" placeholder="E-mail" required>
		<p></p>
		<label>Your Mobile Number:</label>
		<input type="text" name="mobile" placeholder="Mobile" required>
		<p></p>
      	<label for="choose">Services:</label>
      	<select id="choose" class="form-control" name="service" required>
        <option selected>choose your service</option>
        <option>Hair cut</option>
        <option>Hair Spa</option>
        <option>Spa and Massage</option>
      	</select>
      	<p></p>
      	<label for="bday">Booking date:
	    <input type="date" name="bdate" required pattern="\d{4}-\d{2}-\d{2}" required>
	    <span class="validity"></span>
  		</label>
		<p></p>
		<!--s-->
		<label for="choose">Time:</label>
      	<select id="choose" class="form-control" name="btime" required>
        <option selected>choose your Time-slot</option>
        <option>10:00AM to 12PM</option>
        <option>12:00PM to 2PM</option>
        <option>2:00PM to 4PM</option>
        <option>4:00PM to 6PM</option>
        <option>6:00PM to 8PM</option>
        
      	</select>
		<!--e-->
		
		<p></p>
		<label for="exampleFormControlTextarea1">Your Message:</label>
    	<textarea class="form-control" name="message" required ></textarea>
    	<p></p>
		<button type="submit"  name="submit">Submit</button>
	</form>	
	
	
</div>

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