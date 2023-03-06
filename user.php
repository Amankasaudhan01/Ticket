<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];

	$sql= "insert into registeration (name,email,mobile,password) values('$name','$email','$mobile','password')";

	$result= mysqli_query($conn,$sql);
		if($result)
			{
			echo "Data inserted Successfully";
			}

		else
			{
			die(mysqli_error($conn));
	        }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

    <title>Registration</title>
  </head>

	 <body>
	  <div class="container col mt-3" >
		<form method="post" class="col md-12">
		<div class="form-group">
		<label>Name</label><br>
		<input type="text" name="name" placeholder="Enter Your Name">
		</div>
		
		<div class="form-group">
		<label>Email</label><br>
		<input type="email" name="email" placeholder="Enter Your Mail">
		</div>

		<div class="form-group">
		<label>Mobile</label><br>
		<input type="text" name="mobile" placeholder="Enter Your Phone">
		</div>

		<div class="form-group">
		<label>Password</label><br>
		<input type="text" name="password" placeholder="Enter Your Password">
		</div> 
		
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	   </div>


	  </body>
</html>