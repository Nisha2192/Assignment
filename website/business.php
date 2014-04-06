<!--
Design by Nisha Dhanwani

File Name: business.php
Author's Name: Nisha Dhanwani
File Description: This php page displays the login form 
and validates the user. 

-->

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
                header('location:show.php');
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



<html>

	<head>

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
        
	</head>
    
    <body>
      
    		<div id="container">
    		<div id="header">  
            	<img id="logo" src="namelogo.jpg">
                
        		<div id="name">
               
                	<h2>NISHA DHANWANI</h2>
                   
               </div><br><br>    
                   
                   <ul id="topnav">
                        <b><li><a class="live" href="business.php">Business</a></li>
						<li><a href="contact.html">Contact</a></li>
                        <li><a href="https://github.com/Nisha2192/Assignment/tree/master/website">GitHuB</a></li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="project.html">Projects</a></li>
                        <li><a href="aboutme.html">About Me</a></li>
                        <li><a href="home.html">Home</a></li></b>
                	</ul>
				   </div>  

					<div id="message" style="margin-left: 26%; margin-top: 11%;" >
						 <h4>   <?php
							if(isset($_SESSION["error"]))
							{echo $_SESSION["error"];
							}
							?></h4>
					</div>
					
					<h7>PLEASE LOGIN HERE</h7>
					<form id="f1" method="post" action="" name="loginform1" style="margin-left: 14%; margin-top: 4%;">
						<h1>
						
							<h1>USERNAME:&nbsp;<input type="text" name="username" id="username" /><br><br>
								
							PASSWORD:&nbsp;<input type="password" name="password" id="password" /><br/><br>
								
							<input type="submit" name="submit" value="LOGIN" id="submit"/></h1>
						   
							
					</form>
							
               </div> 
			   
			   <div id="footer1">
			   
			   <div id="social">
					<h3>Keep Connected:</h3>
                        
					
                      <a href="https://www.facebook.com/nisha.dhanwani.92"><img src="logo1.jpg" alt="Follow  on Facebook"/></a>
                      <a href="https://twitter.com/NISHA_0201"><img src="logo2.jpg" alt="Follow  on Twitter"/></a>
                      <a href="https://plus.google.com/?partnerid=gplp0"><img src="logo3.jpg" alt="Follow on Google+"/></a>
   					  <a href="http://www.linkedin.com/profile/view?id=206743202&trk=nav_responsive_tab_profile"><img src="logo4.jpg" alt="Follow on LinkedIn"/></a>
                    </div>    
                	 
                    <p>&copy;2014 All Rights Reserved. &nbsp;&bull;&nbsp; Designed by Nisha Dhanwani.</p>
                </div>		     
                 
              </div>  
    
    </body>

</html>