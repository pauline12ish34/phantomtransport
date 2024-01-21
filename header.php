
<?php
session_start();
?>
<header>         
          <?php
          if (isset($_SESSION['user_id'])) {
              echo '<h1> you are logged in</h1>';
              if (isset($_SESSION['role'])&&($_SESSION['role']=='admin'||$_SESSION['role']=='client')) {
                echo '<a href="./dashboard" class="secondary-btn" style="width:90px;padding:8px">Dashboard</a>';
            }
              echo '<a href="./logout.php" id="btn" style="width:70px;padding:8px">Logout</a>';
          } else {
              echo '<a href="./login.html">Login</a>';
              echo '<a href="./register.html" class="secondary-btn">Signup</a>';
          }
          ?>
    