<?php
include 'config.php';
$ID=$_GET['updateid'];
$sql="SELECT * FROM `tickets_responses` WHERE ID='$ID' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
        $ID = $row['ID'];
        $Name=$row['Name'];
        $Student_ID=$row['Student_ID'];
        $E_mail=$row['E_mail'];
        $mobile=$row['mobile'];
        $request_type=$row['request_type'];
        $Subject=$row['Subject'];
        $Message=$row['Message'];
        $Response="";
        $Faculty=$row['Faculty'];

if(isset($_POST['submit'])){
    $ID = $_POST['ID'];
    $Name= $_POST['Name'];
    $Student_ID=$_POST['Student_ID'];
    $E_mail=$_POST['E_mail'];
    $mobile=$_POST['mobile'];
    $request_type=$_POST['request_type'];
    $Subject=$_POST['Subject'];
    $Message=$_POST['Message'];
    $Response=$_POST['Response'];
    $Faculty=$_POST['Faculty'];

    $sqlUpdate="UPDATE tickets_responses 
          SET ID=$ID, Name='$Name', Student_ID='$Student_ID', E_mail='$E_mail', mobile='$mobile', request_type='$request_type', Subject='$Subject', Message='$Message', Response='$Response', Faculty='$Faculty'
          WHERE ID=$ID";
    $result=mysqli_query($conn,$sqlUpdate);
    if($result){
        echo "data Updated successfully";
        header('location:ticket_showing_page.php');

    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="StyleSheets/signup.css"/>
    <link rel="stylesheet" href="StyleSheets/StyleMain.css"/>
<!--     <link rel="stylesheet" href="StyleSheets/styleticketRes.css"/> -->

    <title>Submit Response</title>
  </head>
  <body>
    <header> 
      <input type = "checkbox"  name=""  id = "chk1">
        <div class = "logo"><h2>Student Support Desk</h2></div>
          <div class = "search-box">
            <form action = "GET">
              <input type = "text" name = "search" id = "srch" placeholder = "search">
              <button type = "submit"><image src="logo/searchlogo.webp" width="30" height="30"/></button>
            </form>
          </div>
        <ul>
          <li><a href="index.html"> Home </a></li>
          <li><a class="nav" href="ticket_showing_page.php"> Help Service </a></li>
          <li><a href="About_us.html"> About </a></li>
          <li><a href="Contact_us.html"> Contact us </a></li>
          <li><a href="ViewDetails.html"><button><image src="logo/profile.png" width="40" height="30"/></button></a></li>
        </ul>
    </header>
 

    <br/><br/>

<center>
<div class ="container1" style="height:120%;" >
    <style>
       div.form{
            margin-top: 130px; background-color: white; width: 70%; padding: 10px 20px; margin:0.2cm; 
            font-weight:bold;border-radius: 12px;
      } 
      label{
           width:140px;
           display:inline-block;
           margin:0.2cm;
           font-size: 16px;
           font-weight: :bold;
        }
    </style>

  <form method="POST"  >

  <div class="ticketRes">

    <label>ID</label>
    <input type="text" 
    placeholder="Enter Your ID" name ="ID" autocomplete="off" readonly="true" value=<?php echo $ID;?>>
 </div>

  <div >

    <label>Name</label>
    <input type="text" 
    placeholder="Enter Your Name" name ="Name" autocomplete="off" readonly="true"value=<?php echo $Name;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Student ID</label>
    <input type="text" 
    placeholder="Enter Your Student ID" name ="Student_ID" autocomplete="off" readonly="true" value=<?php echo $Student_ID;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Email</label>
    <input type="text" 
    placeholder="Enter Your email" name ="E_mail" autocomplete="off" readonly="true" value=<?php echo $E_mail;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Mobile</label>
    <input type="text" 
    placeholder="Enter Your Mobile Number" name ="mobile" autocomplete="off" readonly="true" value=<?php echo $mobile;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Request Type</label>
    <input type="text" 
    placeholder="Enter Your Request Type" name ="request_type" autocomplete="off" readonly="true" value=<?php echo $request_type;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Subject</label>
    <input type="text" 
    placeholder="Enter Your Subject" name ="Subject" autocomplete="off" readonly="true" value=<?php echo $Subject;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Message</label>
    <input type="text" 
    placeholder="Enter Your Message" name ="Message" autocomplete="off" readonly="true" value=<?php echo $Message;?>>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Response</label>
    <textarea rows="8" cols="55" placeholder="Enter Your Response" name ="Response" autocomplete="off" value=<?php echo $Response;?>>
     </textarea>
 </div>

 <div >
 <form method="post">
 <div >

    <label>Faculty</label>
    <input type="text" 
    placeholder="Enter Your Faculty" name ="Faculty" autocomplete="off" readonly="true" value=<?php echo $Faculty;?>>
 </div>
  
  <button type="submit" style="background-color: lightblue;width: 80px;height: 30px;" name="submit">Submit</button>
</form>
    </div>
</center>
    <footer id = "foter">
			<hr>
			<p style="color:white; background-color:maroon">© 2022<br>All Rights Reserved</p>
				<div class = "socialfoter">
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiK5qaCsPf6AhWmcGwGHRfMCpQQFnoECBIQAQ&url=https%3A%2F%2Fwww.instagram.com%2Fcapellau%2F%3Fhl%3Den&usg=AOvVaw3LIQPdrRdi-My3NXlgUxIC"><image src="logo/insta.jpeg" width="20" height="20"/>'</a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiOlrumsPf6AhXUTmwGHbSRBNgQFnoECBAQAQ&url=https%3A%2F%2Fwww.facebook.com%2FCapellaUniversity%2F&usg=AOvVaw3V_WhKWLHszJmygSkbcH16"><image src="logo/fb.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwikrLDRsPf6AhVJSmwGHSpEC84QFnoECA0QAQ&url=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Fcapella-university%2F&usg=AOvVaw1LmyiQN0XU8i4ujXKIJmcG"><image src="logo/LinkedIn.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwj3iYzQw4P7AhW3SmwGHSJUAz0QFnoECBYQAQ&url=https%3A%2F%2Ftwitter.com%2Fcapellau&usg=AOvVaw1EYA48gsgmCHIb9sdwLNaF"><image src="logo/Twiter.jpeg" width="20" height="20"/></a>
					<a href = "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjR5ayAxIP7AhX9R2wGHbSAAJoQFnoECAkQAQ&url=https%3A%2F%2Fwww.youtube.com%2Fchannel%2FUCzICfNoGvU6qRQjl9xwZT7Q&usg=AOvVaw3Q4gOQMIob9DvFBrVNwpIk"><image src="logo/youtube.jpeg" width="20" height="20"/></a>
				</div>
			<hr>
		</footer>
  </body>
</html>
