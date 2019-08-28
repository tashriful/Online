<?php
if(isset($_POST['submit']))
{
      include("includes/database.php");
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
		$errors=array();
		
		if(empty($username))
	{
		$errors["username1"]= "name can't be  empty";
	}
	if(strlen(trim($username)) == 0) 
	{
	$errors["username2"]= "Only  white space dont allowed";  
	}
    
	else {
    $username = testInput($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username))
	{
      $errors["username3"] = "Only letters and white space allowed"; 
    }
  }		
  
  
  if(empty($password))
	{
		$errors["password1"]= "password can't be  empty";
	}
	if((strlen($password) < 2))
	{
		$errors["password2"]= "password atleast 2 charecter long";
	}

if(count($errors) == 0)
{

$_SESSION["flag"]="";
require("lib.php");
$data=array();

loadFromMySQL("select * from admin");
//loadFromText();
//loadFromXML();
$u=$username;
$p=$password;
$admin="Main Admin";
$m="Moderator";
$r="Reporter";
$t=0;
session_start();
foreach($data as $a){
	//echo $a["uname"]."<br/>";
	if($u==$a["username"] && $p==$a["password"] && $admin==$a["category"] ){
		echo "valid";
		$t=1;
		$_SESSION["flag"]="success";
		header("Location:index.php");
		break;
	}
    if($u==$a["username"] && $p==$a["password"] && $m==$a["category"]){
		echo "valid";
		$t=1;
		$_SESSION["flag"]="success";
		header("Location:../Moderator/index.php");
		break;
	}
    
    if($u==$a["username"] && $p==$a["password"] && $r==$a["category"]){
		echo "valid";
		$t=1;
		$_SESSION["flag"]="success";
		header("Location:../Reporter/index.php");
		break;
	}
}
if($t==0){
	echo "Invalid user name or password";
}




}
}
 
function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}






?>


<!Doctype html>
<html>

<head>
    <title>Login Form</title>
    <style>
        body{
                background-color: burlywood;
            }
        </style>

    <script>

        function valid(){
		
		var username=document.form.uname.value.trim();
		var password=document.form.pass.value.trim();
		
		if(username==""){
					document.getElementById('unameErr').innerHTML="Username required";
					//alert("Please fill in the field");
					return false;
						
				}
				
		if(password==""){
					document.getElementById('passErr').innerHTML="Password required";
					//alert("Please fill in the field");
					return false;
						
				}
				
				else
					
	{return true;}
	}
			
			
			function success(){
				var username=document.form.uname.value.trim();
		var password=document.form.pass.value.trim();
		
		if(username!=""){
					document.getElementById('unameErr').innerHTML="";	
				}
				
		if(password!=""){
					document.getElementById('passErr').innerHTML="";	
				}
				
			}
				
				
		</script>

</head>

<body>
    <center>
        <div style="width:30%;height: 50%;background-color: bisque;margin-top: 15%;">
            <br>
            <a href="../index.php">Go to Home</a>
            <h1>Admin Login Form</h1><br><br>
            <form action="" name="form" method="post">
                User name:
                <input type="text" onkeypress="success()" name="uname"><br>
                <span style="color:red" id="unameErr"></span><br>
                <p style="color:red;">
                    <?php if(isset($errors["username1"]))
{
	echo $errors["username1"]."<br>";
}
if(isset($errors["username2"]))
{
	echo $errors["username2"]."<br>";
}
if(isset($errors["username3"]))
{
	echo $errors["username3"]."<br>";
}
?>
                </p>
                <br>

                Password:
                <input type="password" onkeypress="success()" name="pass"><br><br>
                <span style="color:red" id="passErr"></span>
                <br>
                <p style="color:red;">
                    <?php if(isset($errors["password1"]))
{
	echo $errors["password1"]."<br>";
}
if(isset($errors["password2"]))
{
	echo $errors["password2"]."<br>";
}
?>
                </p><br>
                <input type="submit" value="submit" onclick="return valid()" name="submit">
                <br>
                <br><br>
            </form>
        </div>
    </center>
</body>

</html>
