<?php
include "connection.php";
if(isset($_POST['submit'])){
$plateNumber=$_POST['platenumber'];
$seats=$_POST['seats'];
$sql="INSERT INTO `buses` (`platenumber`,`seats`) VALUES ('$plateNumber','$seats')";

$result=$conn->query($sql);
// if($result==TRUE){
//     echo"New bus created sucessfully";
// }else{
//     echo "Error".$sql."<br>".$conn->error;
// }
$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="auth.css">
    <link rel="stylesheet" href="styles.css">
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

   <div class="home-content">

<form action="" method="POST"  style="margin-left:3em;">


<h2>Create Bus:</h2>



plate Number:<br>

<input type="text" name="platenumber" required style="width:60%;">

<br>

Bus Type:<br>

<input type="text" name="type" required style="width:60%;">

<br>
Number of seats:<br>

<input type="text" name="seats" required style="width:60%;"> <br>


<input type="submit" name="submit" id="submitButton" value="submit">


</form>

   </div>

   
  </section>
  
</body>
</html>
















    