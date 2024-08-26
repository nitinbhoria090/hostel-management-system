<?php include("connection.php"); 


?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: skyblue;
  }
  .container {
    width: 400px;
    margin: 50px auto;
    background-color: skyblue;
    padding: 30px;
    background-size: cover;
    /* Set border style */
    border-style: solid;
    /* Set border color */
    border-color: black;

    /* Set border width */
    border-width: 2px;
    /* Set border radius for rounded corners */
    border-radius: 10px;
    /* Add a shadow */
    box-shadow: 4px 4px 5px rgba(0, 0, 0, 0.3);

  }
  h2 {
    text-align: center;
  }
  input[type="text"], input[type="password"], input[type="email"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  input[type="submit"] {
    width: 100%;
    background-color: #4caf50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  input[type="submit"]:hover {
    background-color: #45a049;
  }
  .head{
    margin-left: 25%;

  }
  header{
    margin-left: 100px;
    font-size: 50px;
    margin-bottom: 10;
  }
</style>
</head>
<body>

<div class="head">
        <h1>HOSTEL MANAGEMENT SYSTEM<h1>
        </div>
        
    <form action="#" method="POST">
    <div class="box">
        <div class="container">
            <div class="top-header">
                
                <header>Sign-Up</header>
            </div>
            <div class="input-field">
                <label>Username:</label>
                <input type="text" class="input"  required name="username">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <label>Gmail-id:</label>
                <input type="text" class="input"  required name="gmail">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <label>Passowrd:</label>
                <input type="password" class="input"  required name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <label>confirm Passowrd:</label>
                <input type="password" class="input"  required name="cpassword">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
              <input type="submit" class="submit" value="Sign" name="Sign">
            </div>


</body>
</html>

<?php
  if ($_POST['Sign']){

     $username = $_POST['username'];
     $gmail_id = $_POST['gmail'];
     $password = $_POST['password'];
     $cnpassword = $_POST['cpassword'];

     $q = "INSERT INTO sign values('$username','$gmail_id','$password','$cnpassword')";

     $data = mysqli_query( $conn, $q);

     if ($data) {
      echo "Successfully sign-up";
     }
     else{
      echo"failed";
     }
  }

?>

