<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Register User </title>
    <link rel="stylesheet" href="auth.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<main id="login-page">
      <form method="post" action="">
        <h3 style="text-align: center;">
          Welcome To Phatom, <span style="color: #FFA500">Register</span>
        </h3>
        <label for="names">Full Name</label>
        <input style="width: 100%" type="text" name="names" required />
        <label for="email">Email</label>
        <input style="width: 100%" type="email" name="email" required />
        <input type="hidden" name="role" value="client">
        <label for="password">Password</label>
        <input style="width: 100%" type="password" name="password" required />
       
        <p id="not-member">
          Already a member?
          <a style="color: #2b2ecf" href="./login.php">Login</a>
        </p>
        <button
         name="submitbutton" id="submitButton"
          style="width: 105%; height: 43px; margin-top: 10px"

        >
          Register
        </button>
      </form>
    </main>
</body>
</html>




<?php
include('connection.php');

if (isset($_REQUEST['submitbutton'])) {
    $fullName = $_POST['names'];
    $email = $_POST['email'];
    $role= $_POST['role'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $todate = date("Y-m-d H:i:s");
    $checkUser = "SELECT * FROM users WHERE email = '$email'";
    $user = mysqli_query($conn, $checkUser);

    if (mysqli_num_rows($user) > 0) {
        echo "<script>alert('Email is already registered. Please use a different email.'); location.href='signUp.php'</script>";
    } else {
        $addUser = "INSERT INTO users (names, email, password,role, createdAt) VALUES ('$fullName', '$email', '$password','$role', '$todate')";
        if (mysqli_query($conn, $addUser)) {
            echo "<script>alert('Registration successful!'); location.href='login.php'</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
mysqli_close($conn);
?>