<?php require ("config.php");
?>

<?php
		//calling from Esubmt button
		if(isset($_POST["Esubmt"])){
			
		//varible declartion and initializing
		$Ename = $_POST["Ename"];
		$EStudent_id = strtolower($_POST["Eidnum"]);
		$Eemail = strtolower($_POST["Eemail"]);
		$Emobile = $_POST["Ephone"];
		$Erequest_type = $_POST["Erequest_type"];
		$ESubject = $_POST["Esubject"];
		$Emessage = $_POST["Emessage"];
		$EFaculty = "Engineering" ;
		
		//creating the query
		$sql = "INSERT INTO tickets_responses ( Name, Student_ID, E_mail, mobile, request_type, Subject, Message, Faculty ) 
				VALUES ( '$Ename', '$EStudent_id', '$Eemail', '$Emobile', '$Erequest_type', '$ESubject', '$Emessage', '$EFaculty' )";
		
		//run query and validation		
		if ($conn->query($sql)){
			echo '<script>alert("insert succeful")</script>';
								}
		else {
			echo "error: ". $conn->error;
			}
		}
			
		echo "<script>window.location.replace('engineering ticket.html')</script>";		//go back to engineering ticket page
	
	//close the connection
	$conn->close();
		
?>