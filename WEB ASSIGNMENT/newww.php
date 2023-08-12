<!DOCTYPE html>
<html>
<head>
   <title> Projects </title>

<style>

body{
 background-image: url('view.png');
 background-repeat:no-repeat;
 background-size:99% 99%;
 background-attachment: fixed;
}
</style>
 </head>
 <body>
 	<h1><b><u> PROJECT DETAILS</b></u> </h1>
 <table>
	<tr>
		<th>Project_ID</th>
		<th>Title</th>
		<th>Description</th>
		<th>Image_or_URL</th>
	</tr>
<?php
$conn = mysqli_connect("localhost","root","root","Works");
if($conn-> connect_error){
	die("connection failed:". $conn-> connect_error);
}

$sql = "SELECT Project_ID,Title,Description,Image or URL from project";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
	while($row = $result-> fetch_assoc()){
		echo "<tr><td>" . $row["PROJECT_ID"] . "</td><td>" . $row["Title"] . "</td><td>" . $row["Description"] . "</td><td>" . $row["Image_or_URL"] . "</td></tr>";

	}
}
	echo "</table>"










?>
</table>
 </body>
 </html>