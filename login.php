<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="auth.css">
</head>
<body>
    <main id="login-page">
        <form method="post" action="">
          <h3 style="text-align: center;">
            Welcome back, <span style="color: #e89a3c">Login</span>
          </h3>
          <label for="email">Email</label>
          <input style="width: 100%" type="email" name="email"  required/>
          <label for="password">Password</label>
          <input style="width: 100%" type="password" name="password" required />
          <p id="not-member">
            Not a member?
            <a style="color: #2b2ecf" href="./signUp.php">Register</a>
          </p>
          <button
            id="submitButton" type="submit"
            style="width: 105%; height: 43px; margin-top: 10px"
          >
            Login
          </button>
        </form>
      </main>
</body>
</html>

<?php
include('connection.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $checkUserQuery = "SELECT * FROM users WHERE email = '$email'";
    $userResult = mysqli_query($conn, $checkUserQuery);
    if ($userResult) {
        $userData = mysqli_fetch_assoc($userResult);
        // $role=$userData['role'];
        if ($userData) {
            $hashedPassword = $userData['password'];
            if (password_verify($password, $hashedPassword)) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['user_names']=$userData['names'];
            $_SESSION['user_email'] = $userData['email'];
            $_SESSION['role'] = $userData['role'];
            if(  $_SESSION['role']=='admin'){
              header('Location: ./dashboard.php');
            exit();
            }else{
              header('Location: ./clientdashboard.php');
              exit();
            }
          
            
            } else {
                echo "<script>alert('Incorrect password');</script>";
                header("Location:login.php");
            }
        } else {
            echo "<script>alert('User not registered, create an account');'</script>";
            header("Location:signUp.php");
        }
        mysqli_free_result($userResult);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
