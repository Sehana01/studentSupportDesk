<?php require ("config.php");
?>

<?php
	
	//calling from btnSubmit button
	if(isset($_POST["btnSubmit"])){
	
	//variables declaration and initializing
    $QusId = $_POST['QuesNo'];
    
	//creating sql query
    $sql = "DELETE FROM tickets_responses WHERE ID='$QusId' ";
	
	//run and check the connection
	if ($conn->query($sql) == TRUE) {
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script>window.location.replace('TicketShowingStd.html')</script>";
	} 
	else {
		echo "Error deleting record" . $conn->error;
	}

	//close the connection
	$conn->close();
}
?>

