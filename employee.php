<?php
if (isset($_POST["dob"])) {
	# code...
	extract($_POST);
	//echo "$names $dob $scholarship $school_id";
//connect
}
/*$scholarship = isset($scholarship) ?"yes" : "no";*/
$conn = mysqli_connect("localhost", "root", "", "shule");
$sql ="INSERT INTO `employees`(`id`, `names`, `email`, `address`, `dob`, `department`, `gender`, `kra_pin`, `salary`) VALUES  (NULL,'names','email','address','dob','department','gender','kra_pin','salary')";

mysqli_query($conn, $sql) or die( mysqli_error($conn));

$message="employee $names has been registered successfully";


?>




<!DOCTYPE html>
<html>
<head>
	<title>employee</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2/css/bootstrap.css">
</head>


<body>
  <?php
require 'navbar.php';


?>
	<div class="container">
		<div class="row justify-content-centre">
			<div class="col-sm-6">
				<h3>Add employee</h3>
				<p class="text-success">
					<?php
					if (isset($message)) {
						# code...
						echo $message;
					}

					?>
				</p>
				
 <form action="employee.php" method="post">
<!-- names, email, gender, course, dob, scholarship, school_id -->
  <div class="form-group">
      <input type="text" required="" class="form-control" name="names" placeholder="Names">
  </div>
  <div class="form-group">
  	<div class="form-group">
      <input type="text" required="" class="form-control" name="kra_pin" placeholder="kra-pin">
  </div>
  <div class="form-group">
    
    <input type="text" required="" class="form-control" name="salary" placeholder="salary">
  </div>
      <input type="email" required="" class="form-control" name="email" placeholder="email">
  </div>
  <div class="form-group">
    
    <input type="date" required="" class="form-control" name="dob" placeholder="date of birth">
  </div>
  <div class="form-group">
    
    <input type="text" required="" class="form-control" name="address" placeholder="address">
  </div>


  <div class="radio">
  <label><input type="radio" value="male" name="gender"> male</label>
</div>
<div class="radio">
  <label><input type="radio" checked value="female" name="gender"> female</label>
</div>

  <div class="form-group">
  	<select name="department" class="form-control">
  		<option value="Medicine">Medicine</option>
  		<option value="accounting">Accounting</option>
  		<option value="maintenance">maintenance</option>
  		<option value="engineering">engineering</option>
  		<option value="information technology">information technology</option>
  		<option value="pharmaceuticals">pharmaceuticals</option>
  		<option value="biochemistry">biochemistry</option>
  		<option value="human-resources">human-resources</option>
  	</select>
  </div>

  <!-- <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" name="scholarship" value="yes" type="checkbox"> scholarship?
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form> 
			</div>
			
		</div>
	</div>



</body>












</html>