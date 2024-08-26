<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
            background-image: url("image/h.jpg");

        }

        .sidebar {
            Margin-Top: 80px;
            width: 15%;
            
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

        }

        .sidebar button {
            width: 90%;
            margin: 20px;
            padding: 20px;
            background-color: skyblue;
            border-style: solid;
    /* Set border color */
            border-color: white;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);

    /* Set border width */
            
            cursor: pointer;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .sidebar a{
            text-decoration: none;
        }
        .mid{
            margin: 20px;
            margin-left: 30%;

        }
        .mid button {
            width: 100%;
            margin-top: 150px;
            background-color: skyblue;
            border-style: solid;
    /* Set border color */
            border-color: white;
            box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);

            margin-left: 1%;
            padding: 20px;
            background-color: skyblue;
        
            color: white;
            cursor: pointer;
        }
        .mid a{
            text-decoration: none;
        }



        .sidebar button:hover {
            background-color: antiquewhite;
        }

        .main-content {
            width: 60%;
            background-color: #f4f4f4;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .profile-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-info img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .profile-info h1 {
            margin: 5;
        }

        .middle-buttons {
            display: flex;
            gap: 20px;
        }

        .middle-buttons button {
            padding: 10px 20px;
            background-color: #007bff;
            border: none;
            color: rgb(222, 22, 22);
            cursor: pointer;
        }

        .middle-buttons button:hover {
            background-color: #0056b3;
        }

        .header {
            width: 100%;
            background-color: skyblue;
            color: white;
            padding: 20px 0;
            text-align: center;
            position: fixed;
            /* Keep the header fixed at the top */
            top: 0;
            left: 0;
        }
        



    </style>
</head>

<body>
    <div class="sidebar">
        
        <div class="header">

         <h1>Student Profile</h1>
        </div>
        
        <button><a href="index.php"><h4>Rooms</h4></a></button>
        <button><h4><a href="studentregist.php">Student Registration</a></h4></button>
        <button><h4><a href="payment.php"> Mess Fees</h4></a></button>
        <button><a href="logot.php"><h4>Log Out</h4></a></button>
    </div>

    <div class="mid">
        <button><h2>Details</h2></button>
        <button><a href="changeroom.php"><h2>Issues</h2></a></button>
    </div>