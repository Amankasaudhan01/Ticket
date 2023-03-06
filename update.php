<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="select * from registeration where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$password=$_POST['password'];

	$sql= "update `registeration` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id='$id' ";
	mysqli_query($conn,$sql);

	if($result){
		header('location:display.php');
	}
	else{
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
		
		  <button type="submit" class="btn btn-primary" name="submit">Update</button>
		</form>
	   </div>


	  </body>
</html>