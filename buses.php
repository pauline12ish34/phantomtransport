<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Phantom travel easily </title>
    <link rel="stylesheet" href="styles.css">
   
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i>   <img src="./imgs/logodarkmode.png" style="width: 50px; height: 50px;"></i>
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
            <i ><img src="./imgs/material-symbols_my-location.svg" alt=""></i>
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
        <li>
          <a href="logout.php">
           <i><img src="./imgs/material-symbols_my-location.svg" alt=""></i>
            <span class="links_name">Logout</span>
          </a>
        </li>
      
      </ul>
      <!-- sidebar end -->
  </div>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
      
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
      
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Prem Shahi</span>
        <img src="./imgs/profile.jpg" alt="" srcset="">
      </div>
    </nav>

    <div class="home-content" >
    <div class="overview-boxes">
 <div id="addnew">
      <a href="createBus.php">Add new Bus</a>
    </div>
    <table border=0 height="80%" width="100%">
	 
		   <h2> Available Buses </h2> 

		   <hr/>
		   
		   <?php
		    include("connection.php");
			
		    $q = "SELECT * FROM buses"; 
			$results = mysqli_query($conn,$q);
			echo "<table border=1 width='100%'>
			      <tr>
				  <th>ID </th>
				  <th>plate number </th>
          <th>type</th>
				  <th>Available seats </th>
				  <th colspan=3>ACTION </th>
				  </tr>";
			while($r= mysqli_fetch_array($results)){
				echo "<tr><td>".$r['id']."</td><td>".$r['platenumber']."</td><td>".$r['bus type']."</td><td>".$r['seats']."</td><td>";
		
				
				
				echo "
				      
				      <td><a href='#'> View </a></td>
					  <td><a href='#'> Edit </a></td>
            <td><a href='#'> Delete </a></td>

				</tr>";
					 
				
			}
			echo "</table>";
			
		   ?>
		</td></tr>
       </table>	
       


    </div>
</div>
   
  </section>
  
</body>
</html>



