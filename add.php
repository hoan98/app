<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
	<!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<?php
	require 'connect.php';
	if (isset($_POST['add'])) {
		// if (empty($_POST['task']) && empty($_POST['implementer'])) {
			$implementer = $_POST['implementer'];
			$task = $_POST['task'];
			$sql="INSERT INTO task(task,implementer) VALUES ('$task','$implementer')";
			$conn->query($sql);
			header('location:index.php');
		// }
	}
?>

<style type="text/css">
	form{
		width: 400px;
		background-color: #d9d9d9;
		height: 250px;
		margin-top: 30px;
		border-radius: 15px;
	}
	input, input:active, input:focus { outline: 0; outline-style: none; outline-width: 0; }
	button,label{
		margin-top: 10px;
	}
</style>

<body>
	<center >
	<form method="post" action="add.php">
		<label>Task</label>
		<input type="text" class="form-control" name="task" style="width: 300px;">
		<label>Implementer</label>
		<input type="text" class="form-control" name="implementer" style="width: 300px;">
		<button type="submit" class="btn btn-primary form-control" name="add" style="width: 300px;">Add</button>
	</form>
	</center>
</body>
</html>