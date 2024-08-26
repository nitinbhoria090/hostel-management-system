<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="studentregist.css">
<title>Student Registration</title>
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Update Student Details
		</div>
		<div class="form">
			<div class="input-field">
		  <label>SBR NO.</label>
		  <input type="text" class="input" required name="sbr">
	     </div>

		 <div class="input-field">
		  <label>Room Number:</label>
		  <input type="text" class="input" required name="room">
	     </div>

		 <div class="input-field">
		  <label>First Name:</label>
		  <input type="text" class="input"  required name="fname">
	     </div>

		 <div class="input-field">
		  <label>Last Name:</label>
		  <input type="text" class="input"   required name="lname">
	     </div>
	     <div class="input-field">
		  <label>Father Name:</label>
		  <input type="text" class="input" required name="fathername">
	     </div>


		 <div class="input-field">
		  <label>Gender:</label>
		  <select class="selectbox" required name="gender">
		  	<option value="not selected">select</option>
		    		  	<option value="male">male</option>
		    		  			  	<option value="female">female</option>
		    		  			  			  	<option>others</option>

		  </select>
	     </div>

		 <div class="input-field">
		  <label>Contact number:</label>
		  <input type="text" class="input" required name="contact">
	     </div>
		 <div class="input-field">
		  <label>Email Address:</label>
		  <input type="text"  class="input" required name="email">
	     </div>

		 <div class="input-field">
		  <label>Branch:</label>
		  <input type="text" class="input" name="branch">
	     </div>

		 <div class="input-field">
		  <label>Year:</label>
		  <input type="text" class="input" required name="year">
	     </div>
	     <div class="input-field">
		  <label>Address:</label>
		  <textarea class="textarea" required name="address"></textarea>
	     </div>
	     <div class="input-field terms">
	    	<label class="check">
	    		<input type="checkbox">
	    		<span class="checkmark"></span>
	    	</label>
	    	<p>Agree to terms and condition</p>
	     </div>

	     <div class="input-field" >
         	<input type="submit" value="Update Details" class="btn" required name="register">
	    	
	    	
	        
	     </div>
	    </div>
	</form>
	</div>
</body>
</html>


<?php
 if ($_POST['register'])
  {
  	$SBR = $_POST['sbr'];
    $room = $_POST['room'];
  	$fname = $_POST['fname'];
  	$lname = $_POST['lname'];
  	$faname = $_POST['fathername'];
  	$gender = $_POST['gender'];
  	$contact = $_POST['contact'];
  	$email = $_POST['email'];
  	$branch = $_POST['branch'];
  	$year = $_POST['year'];
  	$address = $_POST['address'];


  	$q = "INSERT INTO studentregistered  values('$SBR','$room','$fname','$lname','$faname','$gender','$contact','$email','$branch','$year','$address')";

  	$data = mysqli_query($conn , $q);

  	if($data){
  		echo"data inserted";

  	}
  	else{
  		echo"failed";
  	}
  }

?>