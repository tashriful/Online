<?php

//include("fun.php");
////global $cred;
//$cred=array();
//loadFromxml();
//loadFromfile();


//echo "<pre>";print_r($cred);echo "</pre>";






       

if(isset($_POST['submit']))
{
      include("includes/database.php");
		$username=$_POST['uname'];
		$password=$_POST['pass'];
		
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
$u=$_REQUEST['uname'];
$p=$_REQUEST['pass'];
$t=0;
session_start();
foreach($data as $a){
	//echo $a["uname"]."<br/>";
	if($u==$a["username"] && $p==$a["password"]){
		echo "valid";
		$t=1;
		$_SESSION["flag"]="success";
		header("Location:index.php");
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




/*$_SESSION["flag"]="";
	
foreach($cred as $st)
{
	$emailFound="";
	//echo $st->name." is from ".$st->major;
	if($st["uname"] == $uname)
	{
	if($st["pass"] == $pass)
	{
        $_SESSION["flag"]="loginSuccess";
	    header("location:index.php");
        
		
	}
	else{
		echo "password wrong";
                header("location:login.html?error=password wrong");

	}
	$emailFound = TRUE;
        break;
	}
}
	if ($emailFound == FALSE) {
   
        header("location:login.html?error=wrong user name");
		exit();
	
}


}*/


?>
