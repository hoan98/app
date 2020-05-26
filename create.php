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