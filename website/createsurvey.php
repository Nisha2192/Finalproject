<!----File name:createsurvey.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->

<!----File Description: create survey page--->



<!----start of php--->
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
<!---end of php--->


<html><!-- start of html-->

	<head><!-- start of head-->

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css"><!-- stylesheet-->
        <link rel="stylesheet" type="text/css" href="css/style1.css"><!-- stylesheet-->
		
        
	</head>
    
    <body>
      
    		<div id="container">
    		<div id="header">  
            	<img id="logo" src="namelogo.jpg">
                
        		<div id="name">
               
                	<h2>WELCOME TO SURVEY ZONE</h2>
                   
               </div><br><br>    
                   <ul id="topnav"><!--navigation bar-->
                        
						
                        <li><a href="https://github.com/Nisha2192/Finalproject/tree/master/website">GitHuB</a></li>
                        <li><a href="show.php">Sign Up</a></li>
                        <li><a href="responsesurvey.php">Response Survey</a></li>
                        <li><a href="business.php">Home</a></li></b>
                	</ul>
                   
				   </div>  

					<a href="business.php?login=false"><input type="button" value="Logout" id="logout" style="margin-top:20px; font-size:20px; float:right;"></a><br><!--Logout button--->
					<form id="f3" method="post" action="surveyresult.php" name="resultform">
					<h1> Create your Survey here..</h1>
						
						<h7>Enter the Question:1 </h7><br>
						<textarea name="txt6" rows="3" cols="40" id="r1"> </textarea><!--text box--->
						<br>
						<h7>Enter the answer:</h7><br>
						<textarea name="txt3" rows="2" cols="40" id="r1"> </textarea><!--text box-->
						
						<br><br>
						<h7>Enter the Question:2 </h7><br>
						<textarea name="txt4" rows="3" cols="40" id="r1"> </textarea><!--text box--->
						<br>
						<h7>Enter the answer:</h7><br>
						<textarea name="txt5" rows="2" cols="40" id="r1"> </textarea><!--text box--->
						
						<br><br>
						<input type="submit" name="submit" value="SUBMIT" id="r1" style="width:10%; height:4%;"/>
						
					</form>		
               </div> 
			   
			   <div id="footer1"><!-- footer-->
			   
			  
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani, Navdeep Kaur Gill and Kawaljeet Kaur.</p>
                </div>		     
                 
              </div>  
    
    </body><!-- end of body-->

</html><!-- end of html-->