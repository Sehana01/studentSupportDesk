<?php require ("config.php");
?>

<?php

	//calling from editbtn button
	if(isset($_POST["editbtn"])){
	
	//variables declaration and initializing
    $Crntemail = strtolower($_POST['crntMail']);
    $Newemail = strtolower($_POST['nwMail']);
	$mobilenum = $_POST['nwNum'];
	$nwName = $_POST['nwName'];
	
		//creating sql query
		$sql = "UPDATE registration SET E_mail='$Newemail', Mobile_number='$mobilenum', User_name='$nwName' WHERE E_mail='$Crntemail'";

	//run query and check connection
	if ($conn->query($sql) == TRUE) 
	{
		echo "<script>alert'Record updated successfully'</script>";
		echo "<script>window.location.replace('Log_in.html')</script>"; 	//go to login page
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
		echo "<script>alert('invalid current email')</script>";		//alert
		echo "<script>window.location.replace('Updatepro.html')</script>"; 	//go back to updatepro
	}

}

//close connection
$conn->close();
?>
