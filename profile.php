<?php
   include('sessions.php');
?>

<html>
  <head>
     <title>Phantom</title>
	 <style> 
		a {
		  color: black;
		  text-decoration: none !important;
		} 
	 </style>
  </head>
  
  <body>
  <table  class="menu" width="100%">
    <tr>
	   <td colspan="5" style="text-align:right; color:green;"> 
	   <a href="profile.php">Profile</a>
	   <br/>
	   <?php echo $login_session; ?></td>
	</tr>
  </table> 
	  <table border=0 height="80%" width="100%">
	    <tr><td><a href="index.php">Dashboard</a></td><td width="80%"rowspan="7" valign="top">
		   <h2><a href="users.php"> <img src="images/arrow.png" width="40" height="40"> </a>  User Profile</h2> 
		   <hr/>  
		   
		<?php  	
            $id = $login_session;			
			 
		    $q = "SELECT * FROM users WHERE email= '$id'"; 
		     
			$results = mysqli_query($conn,$q);   
			if (!$results){
			   die("Something went wrong.".mysqli_error($conn));
			}
            if($row = mysqli_fetch_array($results)){
			 echo "<p style='margin-left:20px;'>";
			 echo "<b>First Name: </b>".$row['names'];
			 echo "<br/>";
			 echo "<b>Email: </b>".$row['email'];
			 echo "<br/>";
             echo "<b>Role: </b>".$row['role'];
			 echo "<br/>";
			 
			echo "</p>";
			}			
		   ?> 
		
		</td></tr>		
	    <tr><td><a href="users.php">Users</a></td></tr>
		<tr><td><a href="messages.php">Manage messages</a></td></tr>
		<tr><td><a href="logout.php">Logout</a></td></tr> 
       </table>	
       <table border=0 width="100%">	   
        <tr>
	      <td colspan="5"><p style="text-align:center; background-color:green; color:white">Copyright@allright reserved</p></td>
	   </tr>
  </table>
  </body>
</html> 