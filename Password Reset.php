<?php require ("config.php");
?>

<?php

	//calling from smtbtn button
	if(isset($_POST["smtbtn"])){
	
	//variables declaration and initializing
    $email = strtolower($_POST['email']);
    $newpwd = $_POST['NewPwd'];
	$conpwd = $_POST['conPwd'];
	
		//creating sql query
		$sql = "UPDATE registration SET Password='$newpwd' WHERE E_mail='$email'";
	
		//selection
	if($newpwd === $conpwd)
	{
		if ($conn->query($sql) == TRUE) 
		{
			echo "<script>alert'Record updated successfully'</script>";
			echo "<script>window.location.replace('Log_in.html')</script>";		//goto log in page
		} 
		else 
		{
			echo "Error updating record: " . $conn->error;
		}
	}
	else
	{
		echo "<script>window.location.replace('Password Reset.html')</script>";		//go back to pwd reset page
	}
}
	//close connection
	$conn->close();
?>
