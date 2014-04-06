<!--
Design by Nisha Dhanwani

File Name: show.php
Author's Name: Nisha Dhanwani
File Description: This php page fetches the
business contacts from the database and details 
of those contacts too.  

-->
<html>

	<head>

		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css">
		
		<script>
		$(function(){
			$('#desc').hide('hidden');
		$('.show').click(function() {
			$('#desc').show("slow");
		});
		});
		</script>
		<script>
		$(function(){
			$('#desc').hide('hidden');
		$('.hide').click(function() {
			$('#desc').hide("slow");
		});
		});
		</script>


		<!-- Second Contact property  -->
		<script>
		$(function(){
			$('#desc1').hide('hidden1');
		$('.show1').click(function() {
			$('#desc1').show("slow");
		});
		});
		</script>
		<script>
		$(function(){
			$('#desc1').hide('hidden1');
		$('.hide1').click(function() {
			$('#desc1').hide("slow");
		});
		});
		</script>
		
		<script>
		$(function(){
			$('#desc2').hide('hidden2');
		$('.show3').click(function() {
			$('#desc2').show("slow");
		});
		});
		</script>
		<script>
		$(function(){
			$('#desc2').hide('hidden2');
		$('.hide3').click(function() {
			$('#desc2').hide("slow");
		});
		});
		</script>
        
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
				   
				   
				   <div id="content">
							<a href="business.php?login=false"><input type="button" value="Logout" id="logout" style="margin-top:20px; font-size:20px;"></a><br>
							<center>
							<div id="contact1">
									
												<h1>CONTACTS</h1>
												<h1 id="text">  1. Nisha Dhanwani </h1>
													<form method="post" action=""> 
														<input type="submit" value="Show Details" id="show1" class="show1" name="show1">
														<input type="submit" value="Hide Details" id="hide1" class="hide1" >
														<?php
															if(isset($_SESSION['err_msg']))
															{
																echo $_SESSION['err_msg'];
																unset($_SESSION['err_msg']);
															}				
														?>
													</form>						
							
						

						                            <br/><h1 id="text">
														<?php
															
															
															include 'connect.php';
														
																					 
																if(isset($_POST['show1']))
																	{
                            
																			$query="select * from login where id='1'";
																			$result=$db->query($query);
																			$row = $result->fetch();
																			$image=$row["image"];
																			$path = "";
							
																			$imageurl = $path.$image;
                           
																			 
																			echo $row["contact"];  echo("\n<br/>"); 
																			echo $row["address"]; echo("\n<br/>"); 
														?>
															<img src="<?php echo $imageurl?>">
															<?php
																	}
			 
															?></h1>
							</div>		

							
						<div id="contact2">
									<h1 id="text"> 2. Navdeep Gill </h1>
												<form method="post" action=""> 
														<input type="submit" value="Show Details" id="show2" class="show2" name="show2">
														<input type="submit" value="Hide Details" id="hide2" class="hide2" >
															<?php
																	if(isset($_SESSION['err_msg']))
																		{
																				echo $_SESSION['err_msg'];
																				unset($_SESSION['err_msg']);
																		}				
															?>
												</form>						
									
													<h1 id="text">
															<?php
																	
																
																include 'connect.php';
																
																
																	if(isset($_POST['show2']))
																		{
                            
																			$query="select * from login where id='2'";
																			$result=$db->query($query);
																			$row = $result->fetch();
																			$image=$row["image"];
																			$path = "";
							
																			$imageurl = $path.$image;
                           
																				
																				echo $row["contact"];  echo("\n<br/>"); 
																				echo $row["address"]; echo("\n<br/>"); 
															?>
																<img src="<?php echo $imageurl?>">
																<?php
							}
			 
																?></h1>
				
						</div>
						<br>
						<div id="contact3">
									<h1 id="text"> 3. Kawal Bhullar </h1>
												<form method="post" action=""> 
														<input type="submit" value="Show Details" id="show3" class="show3" name="show3">
														<input type="submit" value="Hide Details" id="hide3" class="hide3" >
															<?php
																	if(isset($_SESSION['err_msg']))
																		{
																				echo $_SESSION['err_msg'];
																				unset($_SESSION['err_msg']);
																		}				
															?>
												</form>						
									
													<h1 id="text">
															<?php
																	
																
																include 'connect.php';
																
																
																	if(isset($_POST['show3']))
																		{
                            
																			$query="select * from login where id='3'";
																			$result=$db->query($query);
																			$row = $result->fetch();
																			$image=$row["image"];
																			$path = "";
							
																			$imageurl = $path.$image;
                           
																				
																				echo $row["contact"];  echo("\n<br/>"); 
																				echo $row["address"]; echo("\n<br/>"); 
															?>
																<img src="<?php echo $imageurl?>">
																<?php
							}
			 
																?></h1>
				
						</div>

					</center>
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