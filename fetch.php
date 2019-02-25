<!DOCTYPE html>
<html>
<head>
	<title>fetch</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.2/css/bootstrap.css">
</head>

<body>
	<?php
require 'navbar.php';


?>
	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>NAMES</th>
				<th>DOB</th>
				<th>GENDER</th>
				<th>DEPARTMENT</th>
				<th>SALARY</th>
				<th>ADDRESS</th>
				<th>KRA-PIN</th>
				

			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>JOHN</td>
				<td>john@gmail.com</td>
				<td>12/12/2000</td>
				<td>male</td>
				<td>medicine</td>
				<td>500000</td>
				<td>kikuyu</td>
				<td>2510510</td>
			</tr>
			<?php
			$conn = mysqli_connect("localhost", "root", "", "shule");
			$sql = "select * from employees";
			$results = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($results)) {
				# code...
				extract($row);
				/*echo "
				<tr>
				<td>$ID</td>
				<td>$names</td>
				<td>$email</td>
				<td>$dob</td>
				<td>$gender</td>
				<td>$department</td>
				<td>$salary</td>
				<td>$address</td>
				<td>$kra_pin</td>
				</tr>

				";*/


			}





			?>
		</tbody>
		
	</table>

</body>
</html>