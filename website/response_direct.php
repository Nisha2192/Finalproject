<!----File name:response_direct.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->



<!----File Description: this is response redirect page--->



<!--start of php--->

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
               
                	<h2>WELCOME TO SURVEY ZONE</h2>
                   
               </div><br><br>    
                   <ul id="topnav"><!--start of navigation bar--->
                        
						
                        <li><a href="https://github.com/Nisha2192/Finalproject/tree/master/website">GitHuB</a></li>
                        <li><a href="show.php">Sign Up</a></li>
                        <li><a href="responsesurvey.php">Response Survey</a></li>
                        <li><a href="business.php">Home</a></li></b>
                	</ul>
                   
				   </div>  
					
					<h1>Thank you for taking the Survey!!</h1>
				
               </div> 
			   
				
			   <div id="footer1"><!--start of footer--->
			   
			  
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani, Navdeep Kaur Gill and Kawaljeet Kaur.</p>
                </div>		     
                 
              </div>  
    
    </body><!--end of body--->

</html><!--end of html--->