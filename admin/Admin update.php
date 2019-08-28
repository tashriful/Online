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
require("fun.php");
loadFromMySQL("select * from admin where id='$id'");


$id=$_REQUEST['id'];
	//echo $uname;
	include("includes/database.php");
	
if(isset($_POST['submit']))
{
	
      include("includes/database.php");


		$category=$_POST['category'];
		//echo $category;
		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$username=$_POST['uname'];
		$conpass=$_POST['conpass'];

//echo "<br>".$uname;

$sql = "UPDATE admin SET category='$category' , name='$name' , mobile='$mobile' , email='$email' , gender='$gender' , address='$address' , username='$username' , password='$conpass'  WHERE id='$id'";
$run = mysqli_query($con,$sql);
if($run){
	echo"<center><h1>Data is Successfully Updated,Thanks!.</h1></center>";
}
else
{
	echo' Not Successfull'.mysql_error();
}

mysqli_close($con);
}
?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin Update</title>
		<link rel="stylesheet" href="Style7.1.css">
    </head>
    <body>
        <div class="signup-form">
            <form action="" method="post">
				<h1><center>Admin Form</center></h1>
				<br>
				<?php
				if($data!=0)
				{
					foreach($data as $v){
				?>
				<label>Category:</label>
				<select name="category">
					<option><?php echo $v['category']; ?></option>
					<option value="Editor">Editor</option>
					<option value="Content Writer">Content Writer</option>
					<option value="Moderator">Moderator</option>
					<option value="Main Admin ">Main Admin</option>
				</select>
				<br><br>
                <label>Name:</label>
				<br> 
                <input type="text" name="name" value="<?php echo $v['name']; ?> ">
				<br>
				<label>Mobile:</label>
				<br>
				<input type="text" placeholder="+8801*********" name="mobile" value="<?php echo $v['mobile']; ?> ">
				
				<br>
				<label>Email:</label>
				<br>
				<input type="email" name="email" value="<?php echo $v['email']; ?> ">
				<br>
				<label>Gender:</label>
				<select name="gender" >
					<option><?php echo $v['gender']; ?></option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</center></select>
				
				
				<br><br>
				<label>Address:</label>
				<br> 
                <input type="text" name="address" value="<?php echo $v['address']; ?> ">
				<br>
				<label>User Name:</label>
				<br> 
                <input type="text" name="uname" value="<?php echo $v['username']; ?> ">
				<br>
				<label>Password:</label>
				<br> 
                <input type="password" name="pass" value="<?php echo $v['password']; ?> ">
				<br>
				<label>Confirm Password:</label>
				<br> 
                <input type="password" name="conpass" value="<?php echo $v['password']; ?> ">
				
				<?php
				}}
				?>
				
				<br>
				
				
				<br>
				<input type="submit" value="Update" name="submit">
				<input type="reset" value="refresh">
				</fieldset>
            </form>
        </div>
    </body>
</html>