<?php
if (isset($_POST["email"])) {
	# code...
	extract($_POST);
}
$conn = mysqli_connect("localhost", "root", "", "red");
$sql = "INSERT INTO `test`(`id`, `names`, `email`, `kra_pin`, `salary`, `dob`, `department`, `gender`, `address`) VALUES (null,'names','email','kra_pin','salary','dob','department','gender','address')";
mysqli_query($conn, $sql) or die(mysqli_error($conn));



?>

<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2/css/bootstrap.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			 <form action="test.php" method="post">
  <div class="form-group">
    <label for="names">Names:</label>
    <input type="text" required="" class="form-control" name="names" placeholder="names">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" required="" class="form-control" name="email" placeholder="email">
  </div>
  <div class="form-group">
    <label for="email">address:</label>
    <input type="text" required="" class="form-control" name="address" placeholder="address">
  </div>
  <div class="form-group">
    <label for="kra_pin">Kra-pin:</label>
    <input type="password" required="" class="form-control" name="kra_pin" placeholder="kra_pin">
  </div>
  <div class="form-group">
    <label for="salary">salary:</label>
    <input type="text" required="" class="form-control" name="salary" placeholder="salary">
  </div>
  <div class="form-group">
    <label for="dob">date of birth:</label>
    <input type="date" required="" class="form-control" name="dob" placeholder="Date of birth">
  </div>
  <div class="form-group">
  	<select name="department" required="" class="form-control">
  		<option value="medicine">medicine</option>
  		<option value="engineering">engineering</option>
  		<option value="accounting">accounting</option>
  		<option value="HR">HR</option>
  		<option value="maintenance">maintenance</option>
  		<option value="information-technology">information technology</option>
  		<option value="pharmaceuticals">pharmaceuticals</option>
  		<option value="biochemistry">biochemistry</option>
  	</select>

  </div>
  <div class="radio">
  <label><input type="radio" value="male" name="gender"> male</label>
</div>
<div class="radio">
  <label><input type="radio" checked value="female" name="gender"> female</label>
</div>
 <!--  <div class="form-check">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox"> Remember me
    </label>
  </div> -->
  <button type="submit" class="btn btn-primary btn-block">Submit</button>
</form> 
		</div>

	</div>


</div>





</body>
</html>