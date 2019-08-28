<?php
//echo "<pre>";print_r($GLOBALS);echo "</pre>";
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	
}
else{
	
	header("Location:login.php?error=invalid user");
}
?>




<?php
$id=$_REQUEST['id'];
//echo $uname;
include("includes/database.php");
$sql="DELETE FROM admin where id='$id'";
$run = mysqli_query($con,$sql);
if($run){
	echo"<center><h1>Data is Successfully Deleted,Thanks!</h1></center>";
}
else
{
	echo' Not Successfull'.mysql_error();
}

mysqli_close($con);
?>

<?php
require("fun.php");

include("includes/database.php");
loadFromMySQL("select * from admin");
if($data!=0)
{

	echo"<table style='width:70%;' align='center' border='2'>
	<tr>
         <th style='text-align:center;'>Name</th>
		 <th style='text-align:center;'>email</th>
		 <th style='text-align:center;'>Mobile</th>
		 <th style='text-align:center;'>Gender</th>
		 <th style='text-align:center;'>Address</th>
		 <th colspan='5' style='text-align:center;'>Action</th>

	</tr>";
	foreach($data as $v){
		?>
		<tr style="background:#EBECE4">
                       <td style='width:100px;' align='center'><?php echo $v['name'];?></td>
                       <td align='center'><?php echo $v['email'];?></td>
                       <td align='center'><?php echo $v['mobile'];?></td>
                       <td align='center'><?php echo $v['gender'];?></td>
					   <td align='center'><?php echo $v['address'];?></td>
					   <td style='width:50px;'align='center'><a title="Edit" onclick="return confirm('Are you want to edit?');" 
					   href="Admin update.php?id=<?php echo $v['id'];?>"><button 
					   style="font-size:14px">Edit <i class="fa fa-edit"></i></button></a></td>
					   
					   <td style='width:50px;'align='center'><a title="Delete" onclick="return confirm('Are you sure to delete?');" 
					   href="Admin delete.php?id=<?php echo $v['id'];?>"><button 
					   style="font-size:14px">Delete <i class="fa fa-trash-o"></i></button></a></td>

					   </tr>
					   <?php
					   
	}

	



		}



?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Show</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>