<!DOCTYPE html>
<html>
<head>
	<title>User's Data</title>
	<style>
		table
		{
			border-collapse: separate;
			width: 100%;
			color: black;
			font-size: 20px;
			text-align: left;
		}
		th
		{
			background-color: black;
			color: white;
		}
		
	</style>
</head>
<body>
<table>
	<tr>
		<th>Id</th>
		<th>FirstName</th>
		<th>LastName</th>
		<th>Mobile No.</th>
		<th>Email</th>
	</tr>
	<?php
include 'db.php';

if (isset($_POST['show'])) {
	if (!$conn) {
		die("connection failed:" . mysqli_connect_error());
	}

	$sql = "SELECT id, namef, namel, mobile, email from reg";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
?>
				<tr>
					<td><?php echo $row["id"]; ?></td>
					<td><?php echo $row["namef"]; ?></td>
					<td><?php echo $row["namel"]; ?></td>
					<td><?php echo $row["mobile"]; ?></td>
					<td><?php echo $row["email"]; ?></td></tr>
				<?php
		}
		echo "</table>";
	}
	else {
		echo "<b>No users are recorded !<b>";
	}

	mysqli_close($conn);
}
?>
</body>
</html>