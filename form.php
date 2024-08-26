<?php include("connection.php"); 
 error_reporting(0);
?>
<?php
session_start();
     if ($_POST['login']) {
        $gmail_id = $_POST['gmail'];
        $password = $_POST['password'];
        if ($_POST['gmail'] == $gmail_id && $_POST['password'] == $password)
        {
            $_SESSION['login'] = true;
            header("location: profile.php");
            exit;
        }

        }
        else{
            $error = "invalid username or password";
            } 
        

?>

        



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link href="form.css" rel='stylesheet'>
    
  

    <title>HOSTEL</title>
</head>
<body>
     
     <div class="head">
        <h1>HOSTEL MANAGEMENT SYSTEM<h1>


        </div>
        
      
    <form action="#" method="POST">

    <div class="box">
       
        <div class="container">
           
            <div class="top-header">
                
                <header>Student</header>
            </div>
            <div class="input-field">
                <label>Gmail-id:</label>
                <input type="text" class="input"  required name="gmail">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                    <label>Password:</label>
                <input type="password" class="input"  required name="password">
                <i class="bx bx-lock-alt"></i>
            </div>
            

            <div class="input-field"> 
                <input type="submit" class="submit" value="Login"  required name="login">
                <div class="sub">
                  <a href="admin.php">Admin</a>
                </div>            
              
            </div>
            <div class="bottom">
                <div class="left">
                    <a href="sign.php">Sign-Up?</a>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>

            </div>
            

        </div>
        
        
    </div>
</form>
</body>
</html>

<?php
  if ($_POST['login']) {
     $gmail_id = $_POST['gmail'];
     $password = $_POST['password'];

     $q = "INSERT INTO login values('$gmail_id','$password')";
     $data = mysqli_query( $conn, $q);

     if ($data) {
         echo "data inserted into database";
     }
     else{
        echo"failed";
     }
  }

?>

                
