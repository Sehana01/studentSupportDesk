<?php require ("config.php");
?>

<?php
//calling from dltbtn button
if(isset($_POST["dltBtn"])){
	
	//varible declartion and initializing
    $email = strtolower($_POST['Lemail']);
    $pwd = $_POST['Lpwd'];
	$cpwd = $_POST['cpwd'];
	
	//selection
	if( $pwd === $cpwd ){
		
		//creating the query
		$sql = "DELETE FROM registration WHERE E_mail='$email' AND Password='$pwd'";
		
		//run query and validation
		if ($conn->query($sql) === TRUE) {
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script>window.location.replace('Log_in.html')</script>";
		} 
			else {
					echo "Error deleting record" . $conn->error;
			}
	}
	else
	{
		echo "<script>alert('pasword miss matched')</script>";
		echo "<script>window.location.replace('Act_dlt.html')</script>";	//go back to act dlt page
	}
	
	
	//close the connection
	$conn->close();
}
?>

