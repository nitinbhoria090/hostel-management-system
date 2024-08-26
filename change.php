
 <html>
    <head>
        <title>Student Registered</title>
        <style>
            body
            {
                background-image: url("image/h.jpg");
            }
            table{
                background: white;
            }
        </style>
    </head>

 </html>

 <?php include("connection.php"); 
 error_reporting(0);

$query = "SELECT * FROM chnageroom";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



//echo $total;

if($total != 0){
    ?>

    <h2 align="center"><mark>Student Requested</mark></h2>

    <center><table border="2" cellspacing="7" width="23%">
        <tr>
        <th width="7%">student name</th>
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

