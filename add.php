<?php

include 'db.php';	

 if(isset($_POST['submit']))
 {	
 	
 	$f_name = $_POST['first_name'];
 	$l_name = $_POST['last_name'];
 	$mobile = $_POST['mobile'];
 	$email = $_POST['email'];
 	


	$sql = "INSERT INTO reg (namef, namel, mobile, email) VALUES ('$f_name','$l_name', '$mobile', '$email')";
	$result = mysqli_query($conn, $sql);
 	
 	if($result) 
 	{
 	 	echo "Data recorded successfully !!!";
 	} 
 	else 
 	{
 		echo "Error :" . $sql . "<br>" . mysqli_error($conn);
 	}
 	mysqli_close($conn);
 }
?>