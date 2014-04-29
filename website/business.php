
<!----File name:business.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->
<!----File Description: this is a login page . first page of website--->


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
<!----end of php--->

<!----start of html--->
<html>

	<head>

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css"> <!----stylesheet--->
        <link rel="stylesheet" type="text/css" href="css/style1.css"> <!---stylesheet-->
        
	</head>
    
    <body>
      
    		<div id="container"><!----start of container--->
    		<div id="header">  <!----header--->
            	<img id="logo" src="namelogo.jpg">
                
        		<div id="name">
               
                	<h2>WELCOME TO SURVEY ZONE</h2>
                   
               </div><br><br>    
                   <ul id="topnav"><!----start of navigation bar--->
                        
						
                        <li><a href="https://github.com/Nisha2192/Finalproject/tree/master/website">GitHuB</a></li>
                        <li><a href="show.php">Sign Up</a></li>
                        <li><a href="responsesurvey.php">Response Survey</a></li>
                        <li><a class="live"href="business.php">Home</a></li></b>
                	</ul>
                   
				   </div>  

					<div id="message" style="margin-left: 26%; margin-top: 11%;" >
						 <h4>   <?php
							if(isset($_SESSION["error"]))
							{echo $_SESSION["error"];
							}
							?></h4>
					</div>
					
					<h7>Already a Member?</h7><!----start of login form--->
					<form id="f1" method="post" action="" name="loginform1" style="margin-left: 14%; margin-top: 4%;">
						<h1>
						
							<h1>USERNAME:&nbsp;<input type="text" name="username" id="username" style="width:15%; height:4%;"/><br><br>
								
							PASSWORD:&nbsp;<input type="password" name="password" id="password" style="width:15%; height:4%;"/><br/><br>
								
							<input type="submit" name="submit" value="LOGIN" id="submit"/></h1>
						    
						
						   <a href="show.php"><img src="btn.png" style="margin-left: 50%; margin-top: -13%;"></a> 
							
					</form>
					
					<!----end of login form--->
							
               </div> 
			   
			   <div id="footer1">
			     
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani, Navdeep Kaur Gill and Kawaljeet Kaur.</p>
                </div>		     
                 
              </div>  
    </body><!----end of body--->

</html> <!----end of html--->