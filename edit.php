
<?php
require_once("dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
	<title>Edit Student Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

	<script>
		function validateForm() {
			var name = document.forms["edit"]["name"].value;
			var namePattern = /^[A-Za-z\s]+$/;
			if (name == "" || !namePattern.test(name)) {
				alert("Please enter a valid name (letters and spaces only).");
				return false;
			}

			var age = document.forms["edit"]["age"].value;
			if (isNaN(age) || age == "" || age >= 25 || age <= 0) {
				alert("Please enter a valid age (less than 25).");
				return false;
			}

			var email = document.forms["edit"]["email"].value;
			var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			if (email == "" || !emailPattern.test(email)) {
				alert("Please enter a valid email address.");
				return false;
			}

			return true;
		}
	</script>
</head>

<body class="bg-success bg-gradient bg-opacity-75" >
    <h2>Edit Student Data</h2>
    <p>
	    <a href="index.php">STUDENT REGISTRATION LIST</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php" onsubmit="return validateForm()">
		<tab class="table">
			<tbody class="table-dark table-sm">
			<tr> 
				<div class="input-group mb-3 ">
				<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default" >Name</span></td>
				<td><input type="text" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name" value="<?php echo $name; ?>"></td>
				</div>
			</tr>
			<tr> 
				<div class="input-group mb-3 ">
				<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default" >Age</span></td>
				<td><input type="text" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="age" value="<?php echo $age; ?>"></td>
				</div>
			</tr>
			<tr> 
				<div class="input-group mb-3 ">
				<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default" >E-mail</span></td>
				<td><input type="text" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="email" value="<?php echo $email; ?>"></td>
				</div>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
				<div class="d-grid col-6 mx-auto">
				<td><input type="submit" class="btn btn-primary bg-gradient" name="update" value="Update"></td>
			</div>
		</tr>
			</tbody>
		</table>
	</form>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
