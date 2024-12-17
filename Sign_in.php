<?php require ("config.php");
?>

<?php

	//calling from btnSubmit button
	if(isset($_POST["btnSubmit"])){
		
		//variable declaration and initialition
		$User_name = $_POST["username"];
		$E_mail = strtolower($_POST["email"]);
		$Mobile_number = $_POST["Mnumber"];
		$LogInAs = $_POST["accType"];
		$Faculty = $_POST["faculty"];
		$Password = $_POST["pwd"];
		$ConfrmPassword = $_POST["pwd_repeat"];
		
		//selection
	if ( $Password == $ConfrmPassword && $Password != ""){
		
		//creating the query
		$sql = "INSERT INTO registration ( User_name, E_mail, Mobile_number, LogInAs, Faculty, Password ) VALUES ( '$User_name', '$E_mail', '$Mobile_number', '$LogInAs', '$Faculty', '$Password')";
		
		//run query and validation
		if ($conn->query($sql)){
			echo '<script>alert("insert succeful")</script>';	//alert
								}
		else {
			echo "error: ". $conn->error;
			}
		}
		
		else {
			echo '<script>alert("Password mismatched")</script>';
		}
	}
	echo "<script>window.location.replace('Sign_in.html')</script>";  //go back to sign in page
?>
