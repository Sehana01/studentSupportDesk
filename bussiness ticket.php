<?php require ("config.php");
?>

<?php
		//calling from Bsubmt button
		if(isset($_POST["Bsubmt"])){
			
		//varible declartion and initializing	
		$Bname = $_POST["Bname"];
		$BStudent_id = strtolower($_POST["Bidnum"]);
		$Bemail = strtolower($_POST["Bemail"]);
		$Bmobile = $_POST["Bphone"];
		$Brequest_type = $_POST["Brequest_type"];
		$BSubject = $_POST["Bsubject"];
		$Bmessage = $_POST["Bmessage"];
		$BFaculty = "Bussiness" ;
		
		//creating the query
		$sql = "INSERT INTO tickets_responses ( Name, Student_ID, E_mail, mobile, request_type, Subject, Message, Faculty ) 
				VALUES ( '$Bname', '$BStudent_id', '$Bemail', '$Bmobile', '$Brequest_type', '$BSubject', '$Bmessage', '$BFaculty' )";
		
		//run query and validation		
		if ($conn->query($sql)){
			echo '<script>alert("insert succeful")</script>';
								}
		else {
			echo "error: ". $conn->error;
			}
		}
			
		echo "<script>window.location.replace('bussiness ticket.html')</script>";	//go back to bussiness ticket page
	
	//close the connection
	$conn->close();
		
?>