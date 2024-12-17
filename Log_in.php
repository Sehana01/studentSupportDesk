<?php require ("config.php");
?>

<?php
	
	//calling from Esubmt button
	if(isset($_POST["logInBtn"])){
	
	//varible declartion and initializing
    $email = strtolower($_POST['Lemail']);
    $pwd = $_POST['Lpwd'];
    $accType = $_POST['accType'];
	
	//creating the query
    $sql = "SELECT * FROM registration WHERE E_mail='$email' AND Password='$pwd' AND LogInAs='$accType'";

	//run query
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
	
	//selection
    if($result->num_rows>0){

        echo "<script>alert('Login Successfull!')</script>";

        if($row['LogInAs'] == 'std'){
			echo "<script>window.location.replace('MainPage_student.html')</script>";	//go back to MainPage of student page
		}
		else if($row['LogInAs'] == 'stf'){
			echo "<script>window.location.replace('MainPage_Staff.html')</script>";		//go back to MainPage of staff page
		}
        else{
            echo "<script>alert('Please choose login type')</script>";   
			echo "<script>window.location.replace('Log_in.html')</script>";				//go back to login page
		}
    }
    else{
        echo "<script> alert('Invalid email/password!')</script>";
		echo "<script>window.location.replace('Log_in.html')</script>";					//go back to login page
    }
	
	//close the connection
	$conn->close();
}
?>
