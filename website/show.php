

<!----File name:show.php--->
<!----Author's name: Nisha Dhanwani,kawaljeet kaur,navdeep kaur--->
<!----File Description: Includes registration form--->


<!--start of html--->
<html>

	<head><!--start of head--->

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css"><!--stylesheet--->
        <link rel="stylesheet" type="text/css" href="css/style1.css"><!--stylesheet--->
		
		
	</head>
    
    <body>
      
    		<div id="container">
			
    		<div id="header">  
            	<img id="logo" src="namelogo.jpg">
                
        		<div id="name">
               
                	<h2>WELCOME TO SURVEY ZONE</h2>
                   
               </div><br><br>    
					
					<ul id="topnav"><!--start of navigation bar--->
                        
                        <li><a href="https://github.com/Nisha2192/Assignment/tree/master/website">GitHuB</a></li>
                        <li><a class="live" href="show.php">Sign Up</a></li>
                        <li><a href="responsesurvey.php">Response Survey</a></li>
                        <li><a href="business.php">Home</a></li></b>
                	</ul>
                   
                   
                   
				   </div>  
				   
				   
				   <div id="content"><!--start of container--->
							
							<a href="business.php?login=false"><input type="button" value="Back" id="logout" style="margin-top:20px; font-size:20px; float:right;"></a><br><!--back button--->

							<b><h7>REGISTRATION FORM</h7></b><!--start of registration form--->
							<form id="f1" method="post" action="create.php" name="loginform1" style="margin-left: 14%; margin-top: 4%;">
						
						<h1>
							Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="Name1" id="Name1" style="width:15%; height:4%;" /></br></br>
							Birthdate:&nbsp;&nbsp;&nbsp;
							<input type="text" name="birthday" id="birthday" value="YYYY-MM-DD" style="width:15%; height:4%;"/>
							</br></br>
							
							Username:&nbsp;&nbsp;<input type="text" name="username" id="username" style="width:15%; height:4%;"/><br><br>
								
							Password:&nbsp;&nbsp;&nbsp;<input type="password" name="password" id="password" style="width:15%; height:4%;"/><br/><br>
							Email ID:&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" id="email" style="width:15%; height:4%;"/><br/><br>
							Phone No:&nbsp;&nbsp;&nbsp;<input type="text" name="phoneno" id="phoneno" style="width:15%; height:4%;"/></br></br>
							Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" id="address" style="width:15%; height:4%;"/></br></br>
							Zip Code:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="zipcode" id="zipcode" style="width:15%; height:4%;"/>	</br></br>
								
								
							<input type="submit" name="submit" value="LOGIN" id="submit"/></h1>
						   
							
					</form>

					
               </div> 
			   
			   <div id="footer1"><!--start of footer--->
			   
			    
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani, Navdeep Kaur Gill and Kawaljeet Kaur.</p>
                </div>		     
                 
              </div>  
    
    </body><!--end of body--->

</html><!--end of html--->