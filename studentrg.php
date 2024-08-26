 <html>
 	<head>
 		<title>Student Registered</title>
 		<style>
 			body
 			{
 				background: lightskyblue;
 			}
 			table{
 				background: white;
 			}
 		</style>
 	</head>

 </html>

 <?php include("connection.php"); 
 error_reporting(0);

$query = "SELECT * FROM studentregistered";
$data = mysqli_query($conn,$query);

$total = mysqli_num_rows($data);



//echo $total;

if($total != 0){
	?>

	<h2 align="center"><mark>Student Registered</mark></h2>

	<center><table border="2" cellspacing="7" width="100%">
	    <tr>
	    <th width="7%">SBR NO.</th>
		<th width="4%">Room no.</th>    
		<th width="8%">first name</th>
		<th width="8%">Last name</th>
		<th width="10%">father name</th>
		<th width="5%">gender</th>
		<th width="7%">contact</th>
		<th width="15%">email</th>
		<th width="10%">branch</th>
		<th width="4%">year</th>
		<th width="25%">address</th>
		
	    </tr>
	
    

	<?php

	
	while ($result = mysqli_fetch_assoc($data)) {

		echo "<tr>
		         <td>".$result['SBR NO.']."</td>
		         <td>".$result['Room no.']."</td>        
		         <td>".$result['firstname']."</td>
		         <td>".$result['lastname']."</td>
		         <td>".$result['fathername']."</td>
		         <td>".$result['gender']."</td>
		         <td>".$result['contact']."</td>
		         <td>".$result['email']."</td>
		         <td>".$result['branch']."</td>
		         <td>".$result['year']."</td>
		         <td>".$result['address']."</td>
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

