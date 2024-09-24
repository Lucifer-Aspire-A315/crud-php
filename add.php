<html>
<head>
	<title>ADD STUDENT DATA</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script>
		function validateForm() {
			var name = document.forms["add"]["name"].value;
			var namePattern = /^[A-Za-z\s]+$/;
			if (name == "" || !namePattern.test(name)) {
				alert("Please enter a valid name (letters and spaces only).");
				return false;
			}

			var age = document.forms["add"]["age"].value;
			if (isNaN(age) || age == "" || age >= 25 || age <= 0) {
				alert("Please enter a valid age (less than 25).");
				return false;
			}

			var email = document.forms["add"]["email"].value;
			var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
			if (email == "" || !emailPattern.test(email)) {
				alert("Please enter a valid email address.");
				return false;
			}

			return true;
		}
	</script>
</head>

<body class="bg-success bg-gradient bg-opacity-75">
	<h2>ADD STUDENT DATA</h2>
	<p>
		<a href="index.php">REGISTRATION LIST</a>
	</p>

	<form action="addAction.php" method="post" name="add" onsubmit="return validateForm()">
		<table class="table">
			<tbody class="table-dark table-sm">
				<tr>
					<div class="input-group mb-3 ">
					<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default" >Name</span></td>
					<td>
  					<input type="text" name="name" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</td>
				</tr>
				<tr>
					<div class="input-group mb-3">
					<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default">Age</span></td>
					<td>
  					<input type="text" name="age" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</td>
				</tr>
				<tr>
					<div class="input-group mb-3">
					<td><span class="input-group-text bg-success bg-gradient" id="inputGroup-sizing-default">E-mail</span></td>
					<td>
  					<input type="text" name="email" class="form-control bg-secondary bg-gradient" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
				</td>
				</tr>
			</tbody>
		</table>
		<div class="d-grid col-6 mx-auto">
			<input class="btn btn-primary bg-gradient" type="submit" name="submit" value="Add">
		</div>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

