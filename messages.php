
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
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="index.php" class="active">
            <i><img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Home</span>
          </a>
        </li>
        <li>
          <a href="users.php">
            <!-- <i class='bx bx-box' ></i> -->
           <i> <img src="./imgs/mdi_user-multiple-outline.svg" alt="" srcset=""></i>
            <span class="links_name">Users</span>
          </a>
        </li>
        <li>
          <a href="messages.php">
           <i><img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i> <img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Location</span>
          </a>
        </li>
        <li>
          <a href="buses.php">
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
				  <th>ID </th>
				  <th>SUBJECT </th>
				  <th>CONTENT </th>
				  <th>SENDER </th>
				  <th>STATUS </th>
				 
				  <th colspan=3>ACTION </th>
				  </tr>";
			while($r= mysqli_fetch_array($results)){
				echo "<tr><td>".$r['id']."</td><td>".$r['subject']."</td><td>".$r['content']."</td><td>".$r['sender']."</td><td>";
		
				
				if($r['status']==1){
					echo "Unread";
				}else{
				    echo "Read";
				}
				echo "
				      <td><a href='#'> View </a></td>
					  <td><a href='#'> Edit </a></td>
					  <td><a href='#'> Deactivate </a></td>
				</tr>";
			}
			echo "</table>";
			
		   ?>
		</td></tr>


		
       </table>	
       <table border=0 width="100%">	   
      
  </table>
		</div>
	</div>
	<div><p style="text-align:center; background-color:#253B33; color:white">Copyright@allright reserved</p></div>
  </body>
</html> 