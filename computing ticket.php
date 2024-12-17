<?php require ("config.php");
?>

<?php
		//calling from submt button
		if(isset($_POST["submt"])){
			
		//varible declartion and initializing
		$name = $_POST["name"];
		$Student_id = strtolower($_POST["idnum"]);
		$Email = strtolower($_POST["email"]);
		$mobile = $_POST["phone"];
		$request_type = $_POST["request_type"];
		$Subject = $_POST["subject"];
		$message = $_POST["message"];
		$Faculty = "Computing" ;
		
		//creating the query
		$sql = "INSERT INTO tickets_responses ( Name, Student_ID, E_mail, mobile, request_type, Subject, Message, Faculty ) 
				VALUES ( '$name', '$Student_id', '$Email', '$mobile', '$request_type', '$Subject', '$message', '$Faculty' )";
		
		//selection
		if(strlen($mobile) == 10)
		{		
			//run query and validation
			if ($conn->query($sql))
			{
				echo '<script>alert("insert succeful")</script>';
			}
			else
			{
				echo '<script>alert("insert fail")</script>';
				echo "error: ". $conn->error;
			}	
		}
		}
			
		echo "<script>window.location.replace('computing ticket.html')</script>";		//go back to computing ticket page
	
	//close the connection
	$conn->close();
		
?>