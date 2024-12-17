<?php
include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <style>
   table,th,td{
    border:1px solid;
    } 

    table { 
    width :100%;
    height: 80%;
    border-collapse: collapse;
    padding: 8px;
    text-align: left;

     }   
     th {
      background-color: Lightgray;
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;

     }

     </style>     
  
	<title>My tickets</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="StyleSheets/signup.css"/>
	<link rel="stylesheet" href="StyleSheets/StyleMain.css"/>

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
					<li><a class="nav" href="MainPage_Staff.html"> Help Service </a></li>
					<li><a href="About_us.html"> About </a></li>
					<li><a href="Contact_us.html"> Contact us </a></li>
					<li><a href="ViewDetails.html"><button><image src="logo/profile.png" width="40" height="30"/></button></a></li>
				</ul>
		</header><br><br>
		

		
	<div class="container1"> 
    <table class="table">
      <thead>
        <tr>
          <th scope="col" >ID</th>          
          <th scope="col"style="margin-left:30px">Student Name</th>
          <th scope="col"style="margin-left:30px">Student ID</th>
          <th scope="col"style="margin-left:30px">Email</th>
          <th scope="col"style="margin-left:30px">mobile</th>
          <th scope="col"style="margin-left:30px">Request Type</th>
          <th scope="col"style="margin-left:30px">Subject</th>
          <th scope="col"style="margin-left:30px">Message</th>
          <th scope="col"style="margin-left:30px">Response</th>
          <th scope="col"style="margin-left:30px">Faculty</th>
          <th scope="col"style="margin-left:30px">Action</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from `tickets_responses`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['ID'];
            $Name = $row['Name'];
            $Student_ID = $row['Student_ID'];
            $E_mail = $row['E_mail'];
            $mobile = $row['mobile'];
            $request_type = $row['request_type'];
            $Subject = $row['Subject'];
            $Messsage = $row['Message'];
            $Response = $row['Response'];
            $Faculty = $row['Faculty'];
            echo '<tr>
        <th scope="row">' . $id . '</th>
        <td style="margin-left:30px">' . $Name . '</td>
        <td style="margin-left:30px">' . $Student_ID . '</td>
        <td style="margin-left:30px">' . $E_mail . '</td>
        <td style="margin-left:30px">' . $mobile . '</td>
        <td style="margin-left:30px">' . $request_type . '</td>
        <td style="margin-left:30px">' . $Subject . '</td>
        <td style="margin-left:30px">' . $Messsage . '</td>
        <td style="margin-left:30px">' . $Response . '</td>
        <td style="margin-left:30px">' . $Faculty . '</td>
        <td style="margin-left:30px">
            <button style="width:100px;background-color:lightblue;"><a href="ticket_responding_page.php? updateid=' . $id . ' " class="text-light">Respond</a> </button>
        </td>
      </tr>';
          }
        }

        ?>

      </tbody>
    </table>
	 </div>	 
	
	
	
		<div class="vl">
		<div class = "intro2">
			<div class="month">
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <span style="font-size:25px; color:white;">October</span><br><span style="font-size:18px; color:white;">2022</span></li>
    </ul>
  </div>
  
  <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
  </ul>
  
  <ul class="days">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li>10</li>
    <li>11</li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li>14</li>
    <li>15</li>
    <li>16</li>
    <li>17</li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li><span class="active">22</span></li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    <li>31</li>
  </ul><br><br>
		<p style = "font-family: cursive;">CAPELLA UNIVERSITY...</p>
		<div class="adres">
			<div id="adress">Support desk :<br>Welivita,<br>Malabe,<br>Sri Lanka,<br>10115.</div>
			<div>Main office : <br>2nd floor,<br>Malabe,<br>Sri Lanka,<br>10115.</div>
		</div><br>
		
		</div>
		</div>
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
		
	</body>
	
</html>