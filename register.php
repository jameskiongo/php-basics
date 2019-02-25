<?php
if (isset($_POST["dob"])) {
	# code...
	extract($_POST);
	//echo "$names $dob $scholarship $school_id";
//connect
}
$scholarship = isset($scholarship) ?"yes" : "no";
$conn = mysqli_connect("localhost", "root", "", "shule");
$sql ="INSERT INTO `students`(`id`, `names`, `email`, `dob`, `gender`, `school_id`, `course`, `scholarship`) VALUES (null,'$names','$email','$dob','$gender','$school_id','$course','$scholarship')";

mysqli_query($conn, $sql) or die( mysqli_error($conn));

$message="student $names has been registered successfully";


?>

<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-centre">
			<div class="col-sm-6">
				<h3>Add student</h3>
				<p class="text-success">
					<?php
					if (isset($message)) {
						# code...
						echo $message;
					}

					?>
				</p>
				
 <form action="register.php" method="post">
<!-- names, email, gender, course, dob, scholarship, school_id -->
  <div class="form-group">
      <input type="text" required="" class="form-control" name="names" placeholder="Names">
  </div>
  <div class="form-group">
  	<div class="form-group">
      <input type="text" required="" class="form-control" name="school_id" placeholder="school-id">
  </div>
      <input type="email" required="" class="form-control" name="email" placeholder="email">
  </div>
  <div class="form-group">
    
    <input type="date" required="" class="form-control" name="dob" placeholder="date of birth">
  </div>
  <div class="radio">
  <label><input type="radio" value="male" name="gender"> male</label>
</div>
<div class="radio">
  <label><input type="radio" checked value="female" name="gender"> female</label>
</div>

  <div class="form-group">
  	<select name="course" class="form-control">
  		<option value="Medicine">Medicine</option>
  		<option value="Economics">Economics</option>
  		<option value="computer science">computer science</option>
  		<option value="electrical engineering">electrical engineering</option>
  		<option value="information technology">information technology</option>
  		<option value="pharmacy">pharmacy</option>
  		<option value="biochemistry">biochemistry</option>
  		<option value="psychology">psychology</option>
  	</select>
  </div>

  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" name="scholarship" value="yes" type="checkbox"> scholarship?
    </label>
  </div>
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form> 
			</div>
			
		</div>
	</div>



</body>
</html>