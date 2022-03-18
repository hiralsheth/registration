<?php

include 'db.php';

if (isset($_POST['update']))
 {
 	$id = $_POST["id"];
	$f_name = $_POST['first_name'];
 	$l_name = $_POST['last_name'];
 	$mobile = $_POST['mobile'];
 	$email = $_POST['email'];
	
		$edit = "update stdntdtil set namef='$f_name', namel='$l_name', mobile='$mobile', email='$email' where id='$id'";
	
		$result = mysqli_query($conn, $edit);

	if ($result)
	{
		echo "<h1>Record Updated Successfully!</h1>";
	} 
	else
	{
		//echo mysqli_error();
	}
}

?>