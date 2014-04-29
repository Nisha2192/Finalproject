<!----start of php---><!----File name:responsesurvey.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->
<!----File Description: this response to survey--->


<!---start of php--->
<?php
session_start();
    include 'connect.php';
$_SESSION["error"]= "";


 if(isset($_POST['submit']))
    {
        
       $username = $_POST["username"];
    $password1 = $_POST["password"];
       
      

   
$query = "SELECT * FROM `login` WHERE `username` = '".$username."'";


$records = $db->query($query);
$userfound = false;
foreach($records as $row)
{
	

	$password = $row['password']; 
	$userfound = true;

}





if($userfound){
	if($password1 == $password)
	{
		$_SESSION["isloggedin"] = true;
		$_SESSION["username"] = $username;
                header('location:createsurvey.php');
	}
	else{
		$_SESSION["isloggedin"] = false;
		$_SESSION["username"] = "guest";
		$_SESSION["error"]= "Incorrect Password";
                 
	}
}
else{
	
	
        $_SESSION["error"]= "Username not recognized";
}
}
else{
    
}



   ?>

<!--end of php--->

<html><!--start of html--->

	<head><!--start of head--->

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css"><!--stylesheet--->
        <link rel="stylesheet" type="text/css" href="css/style1.css"><!--stylesheet--->
        
	</head>
    
    <body><!--start of body--->
      
    		<div id="container"><!--start of container--->
    		<div id="header">  <!--start of header--->
            	<img id="logo" src="namelogo.jpg">
                
        		<div id="name">
               
                	<h2>WELCOME TO SURVEY ZONE</h2><!--heading--->
                   
               </div><br><br>    
                   <ul id="topnav"><!--start of navigation bar--->
                        
						
                        <li><a href="https://github.com/Nisha2192/Finalproject/tree/master/website">GitHuB</a></li>
                        <li><a href="show.php">Sign Up</a></li>
                        <li><a class="live" href="responsesurvey.php">Response Survey</a></li>
                        <li><a href="business.php">Home</a></li></b>
                	</ul>
                   
				   </div>  

				<form id="f2" method="post" action="responseresult.php" name="responseform">
					<h1>Survey Questions:</h1><!--start of survey questions--->
					<h7>Q:1 What is your age?<br><!--first question--->
					<input type="radio" name="radChoice" value="0-10" id="r1"/>0-10 <br><!--radio button options--->
					<input type="radio" name="radChoice" value="10-20" id="r1"/>10-20 <br>
					<input type="radio" name="radChoice" value="20-30" id="r1"/>20-30 <br>
					<input type="radio" name="radChoice" value="30-40" id="r1"/>30-40 <br>
					<input type="radio" name="radChoice" value="40 and >" id="r1"/>40 and > </h7><br>
					<br><br>
					
					
					<h7>Q:2 What type of vehicle do you own?<br><!--second question--->
					<input type="radio" name="radChoice1" value="Van" id="r1"/>Van <br<!--radio button options--->
					<input type="radio" name="radChoice1" value="SUV" id="r1"/>SUV <br>
					<input type="radio" name="radChoice1" value="Sedan" id="r1"/>Sedan <br>
					<input type="radio" name="radChoice1" value="Mercedez" id="r1"/>Mercedez <br>
					<input type="radio" name="radChoice1" value="BMW" id="r1"/>BMW </h7><br>
					<br><br>

					<h7>Q:3 What do you like to do for fun?<br><!--third question--->
					<input type="radio" name="radChoice2" value="Movies" id="r1"/>Movies <br><!--radio button options--->
					<input type="radio" name="radChoice2" value="Music" id="r1"/>Music <br>
					<input type="radio" name="radChoice2" value="Sports" id="r1"/>Sports <br>
					<input type="radio" name="radChoice2" value="Adventure" id="r1"/>Adventure <br>
					<input type="radio" name="radChoice2" value="Cooking" id="r1"/>Cooking </h7><br>
					<br><br>
					
					<h7>Q:4 Did you vote in the last election?<br><!--fouth question--->
					<input type="radio" name="radChoice3" value="Yes" id="r1"/>Yes <br><!--radio button option--->
					<input type="radio" name="radChoice3" value="No" id="r1"/>No <br>
					<br><br>
					
					<h7>Q:5 What are your religious beliefs?<br><br><!--fifth question--->
					<textarea name="txt1" rows="3" cols="50" id="r1"> </textarea><!--text box--->
					<br><br>
					<input type="submit" name="submit" value="SUBMIT" id="r1" style="width:10%; height:4%;"/>
				</form>	
               </div> 
			   
				
			   <div id="footer1"><!--start footer--->
			   
			  
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani, Navdeep Kaur Gill and Kawaljeet Kaur.</p>
                </div>		     
                 
              </div>  
    
    </body><!--end of body--->

</html><!--end of html--->