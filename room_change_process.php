<?php include("connection.php"); ?>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $student_name = $_POST["student_name"];
    $current_room = $_POST["current_room"];
    $new_room = $_POST["new_room"];
    
    // You can perform further validation and processing here
    // For simplicity, we'll just print the data for now
    echo "Student Name: " . $student_name . "<br>";
    echo "Current Room: " . $current_room . "<br>";
    echo "New Room: " . $new_room . "<br>";
    $q = "INSERT INTO chnageroom  values('$student_name','$current_room','$new_room')";

    $data = mysqli_query($conn , $q);

    if($data){
        echo"data inserted";

    }
    else{
        echo"failed";
    }
  }
  


$query = "SELECT * FROM chngesroom";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



//echo $total;

if($total != 0){
    ?>

    <h2 align="center"><mark>Student Registered</mark></h2>

    <center><table border="2" cellspacing="7" width="23%">
        <tr>
        <th width="7%">Student room</th>
        <th width="4%">current room</th>
        <th width="12%">new room</th>
        
        
        </tr>
    
    

    <?php

    
    while ($result = mysqli_fetch_assoc($data)) {

        echo "<tr>
                 <td>".$result['student name']."</td>
                 <td>".$result['current']."</td>
                 <td>".$result['new']."</td>
                 
               </tr>
               ";
        
    }

}
else{
    echo "no record";
}

?>

</table>
</center>




    // You can add code here to save the request to a database or send it via email
 else {
    // Redirect back to the form if accessed directly
    header("Location: room_change_request.php");
    exit();
}
?>
