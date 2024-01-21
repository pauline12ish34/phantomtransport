<html>
  <head>
     <title>Phantom</title>
	 <link rel="stylesheet" href="styles.css">
  </head>
  
  <body>
  <div class="sidebar">
    <div class="logo-details">
      <i>   <img src="./imgs/logo.png" style="width: 50px; height: 50px;"></i>
      <span class="logo_name">Phantom</span>
    </div>
    <!-- sidebar -->
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <!-- <i class='bx bx-box' ></i> -->
           <i> <img src="./imgs/mdi_user-multiple-outline.svg" alt="" srcset=""></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i> <img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Location</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i> <img src="./imgs/mingcute_bus-2-line.svg" alt=""></i>
            <span class="links_name">Buses</span>
          </a>
        </li>
     
        <li>
          <a href="#">
           <i><img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Routes</span>
          </a>
        </li>
       
      
      </ul>
      <!-- sidebar end -->
  </div>

<div class="home-section">
	<div class="recent-sales box">
  <table  class="menu" width="100%">
    <tr>
	   <td colspan="5" style="text-align:right; color:green;"> 
	   <!-- <a href="profile.php">Profile</a> -->
	   <br/>
	   
	</td>
	</tr>
  </table> 
	  <table border=0 height="80%" width="100%">
	    <!-- <tr><td><a href="home.php">Dashboard</a></td><td width="80%"rowspan="7" valign="top"> -->
		   <h2> Commuters Messages </h2> 
		   <hr/>
		   
		   <?php
		    include("connection.php");
			
		    $q = "SELECT * FROM contacttb"; 
			$results = mysqli_query($conn,$q);
			echo "<table border=1 width='100%'>
			      <tr>
				
				  <th>PLATE NUMBER </th>
				  <th>SEATS </th>
				  <th>SENDER </th>
				  <th>STATUS </th>
				 
				  <th colspan=3>ACTION </th>
				  </tr>";
			while($r= mysqli_fetch_array($results)){
				echo "<tr><td>".$r['platenumber']."</td><td>".$r['seats']."</td><td>";
		
				
				
				echo "
				      <td><a href='#'> View </a></td>
					  <td><a href='#'> Edit </a></td>
					  <td><a href='#'> Deactivate </a></td>
				</tr>";
			}
			echo "</table>";
			
		   ?>
		</td></tr>
	    <!-- <tr><td><a href="users.php">Users</a></td></tr>
		<tr><td><a href="lecturers.php">Lecturers</a></td></tr>
		<tr><td><a href="categories.php">Categories</a></td></tr>
		<tr><td><a href="courses.php">Courses</a></td></tr>
		<tr><td><a href="Tests.php">Tests</a></td></tr>
		<tr><td  bgcolor="green"><a href="messages.php"><b style="color:white; margin-left:10px;">Manage messages</b></a></td></tr>		
		<tr><td><a href="logout.php">Logout</a></td></tr>   -->

		
       </table>	
       <table border=0 width="100%">	   
        <!-- <tr>
	      <td colspan="5"><p style="text-align:center; background-color:green; color:white">Copyright@allright reserved</p></td>
	   </tr> -->
  </table>
		</div>
	</div>
	<div><p style="text-align:center; background-color:#253B33; color:white">Copyright@allright reserved</p></div>
  </body>
</html> 