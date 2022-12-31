<html>
<head>
	<title>Add</title>
</head>

<body>
	<a href="user.php">view</a>
	<br/><br/>
	<h1>機器狀況add</h1>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>機器名稱</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>原因</td>
				<td><input type="text" name="reason"></td>
			</tr>
			<tr>
				<td>狀況</td>
				<td><input type="text" name="state"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$reason = $_POST['reason'];
		$state = $_POST['state'];

		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO user(name,reason,state) VALUES('$name','$reason','$state')");

		// Show message when user added
		echo " added successfully. <a href='user.php'>View </a>";
	}
	?>
</body>
</html>