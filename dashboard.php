<!DOCTYPE html>
<!-- Coding by CodingNepal | www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Phantom travel easily </title>
    <link rel="stylesheet" href="styles.css">
    <!-- Boxicons CDN Link -->
    <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
          <a href="#" class="active">
          <i> <img src="./imgs/vectordashboard.svg" style="color:white;" alt="" srcset=""> </i>
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
          <a href="buses.php">
            <i> <img src="./imgs/mingcute_bus-2-line.svg" alt=""></i>
            <span class="links_name">Buses</span>
          </a>
        </li>
     
        <li>
          <a href="routes.php">
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
      <div>
        <a href="book.php">Book bus</a>
      </div>
      <div class="profile-details">
        <!-- <img src="images/profile.jpg" alt=""> -->
        <span class="admin_name">Prem Shahi</span>
        <img src="./imgs/profile.jpg" alt="" srcset="">
      </div>
    </nav>

    <div class="home-content" >
    <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Buses</div>
            <div class="number">
              
            <?php 
            include("connection.php");
     
$result = mysqli_query($conn,"select count(*) FROM buses");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo  $total;

             ?>

            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>



        <!-- new box -->
<div class="box">
          <div class="right-side">
            <div class="box-topic"> Messages</div>
            <div class="number">
              
            <?php 
            
     
$result = mysqli_query($conn,"select count(*) FROM contacttb");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo  $total;

             ?>

            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Now</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>

        <!-- new box -->
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total users</div>
            <div class="number">
              
            <?php 
            include("connection.php");
     
$result = mysqli_query($conn,"select count(*) FROM users");
$row = mysqli_fetch_array($result);

$total = $row[0];
echo  $total;

             ?>

            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">from now</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>


    </div>
</div>
</div>
<h2>Recent travels</h2>
<table border=1 style="width:100%;">
  <th>Date</th>
  <th>passenger name</th>
  <th>price</th>
  <tr>
    <td>02 Jan 2024</td>
    <td>pauline Ishimwe</td>
    <td>300</td>
  </tr>
  <tr>
    <td>04 Jan 2024</td>
    <td>Butera</td>
    <td>500</td>
  </tr>
  <tr>
    <td>06 Jan 2024</td>
    <td>Kabalisa</td>
    <td>200</td>
  </tr>
  <tr>
    <td>06 Jan 2024</td>
    <td>Diane</td>
    <td>300</td>
  </tr>
  <tr>
    <td>06 Jan 2024</td>
    <td>Landrada</td>
    <td>600</td>
  </tr>
  <tr>
    <td>06 Jan 2024</td>
    <td>Mary ella</td>
    <td>300</td>
  </tr>
</table>
   
  </section>
  
</body>
</html>



