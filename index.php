<?php Include 'database/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  	<title>Registration system PHP and MySQL</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<style type="text/css">
		.row{
			height: 678px;
			background-image: url(image/light.jpg);
		}
		#img{
			margin-left: 60px;
			padding-top: 5%;
		}
		.img-rounded:hover{
			border-radius: 30px 30px 30px 30px;
		}
		#form{
			display: block;
			border-radius: 20px 20px 10px 20px;
			background: gray;
			width: 500px;
			height: 350px;
			margin-top: 1%;
			border: 1px solid blue;
		}
		button{
			margin-left: 20px; 
			width: 200px;
		}
	</style>
</head>
<body>

  <div class="container-fluid">
  	
  	<div class="row">
  		<div class="slideshow-container">
	  		<div class="col-sm-6 col-md-6" id="img">
	  			<div class="numbertext">
	  				<img src="image/dfPCxKQ.jpg" class="img-rounded" alt="Cinque Terre" width="350" height="400">
	  			</div>	
	  		</div>
	  	</div>
	  	
		<div class="col-sm-6 col-md-4" id="form">
			<div class="heading">
	  			<h2 style="color: blue;">Advance Booking</h2>
	  		</div>

		  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

		  	<div class="input-group">
		  	  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		  	  <input type="text" name="fname" class="form-control" placeholder="Enter Your Full Name" required>
		  	</div><br>

		  	<div class="input-group">
		  	  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		  	  <input type="email" class="form-control" placeholder="Enter Your Email" name="email" pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" spellcheck="false" title="Your Email Adress" id="email" required>
		  	</div><br>

		  	<div class="input-group">
		  	 <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
		  	  <input type="text" name="cno" placeholder="Enter Your Contect Number" class="form-control" value="" maxlength="10" required>
		  	</div><br>

		  	<div class="input-group">
		  	 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		  	  <textarea cols="50" rows="2" placeholder="Enter Your Address" class="form-control" name="add" value="" required></textarea>
		  	</div><br>

		  	  <button type="submit" class="btn btn-success" name="submit">BOOK</button>
		  </form>
		  </div>
	</div>
  </div>
</body>
</html>

