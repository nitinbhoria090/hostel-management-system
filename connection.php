<?php
  $servername = "localhost";
  $username   = "root";
  $password   = "";
  $dbname     = "form1";

  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if ($conn) {
  	echo "connection ok";
  }
  else{
  	echo "conn failed";
  }

?>