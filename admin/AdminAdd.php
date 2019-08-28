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
		$pass=$_POST['pass'];
		$conpass=$_POST['conpass'];
		
		$errors=array();
		
		
	if(empty($name))
	{
		$errors["name1"]= "name can't be  empty";
	}
	if(strlen(trim($name)) == 0) 
	{
	$errors["name2"]= "Only  white space dont allowed";  
	}
    
	else {
    $name = testInput($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name))
	{
      $errors["name3"] = "Only letters and white space allowed"; 
    }
  }
  
  if(empty($mobile))
	{
		$errors["mobile1"]= "number can't be  empty";
	}
	if(strlen(trim($mobile)) == 0) 
	{
	$errors["mobile2"]= "Only  white space dont allowed";  
	}
	if(strlen(trim($mobile)) != 11) 
	{
	$errors["mobile3"]= "Only 11 digit number valid";  
	}
	
	if(empty($email))
	{
		$errors["email1"]= "email can't be  empty";
	}
	if(strlen(trim($email)) == 0) 
	{
	$errors["email2"]= "Only  white space dont allowed";  
	}
    
	else {
    $email = testInput($_POST["email"]);
    // check if name only contains letters and whitespace
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	{
      $errors["email3"] = "Invalid email format"; 
    }
  }
  
  if(empty($address))
	{
		$errors["address1"]= "Address can't be  empty";
	}
	if(strlen(trim($address)) == 0) 
	{
	$errors["address2"]= "Only  white space dont allowed";  
	}
    
	else {
    $address = testInput($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$address))
	{
      $errors["address3"] = "Only letters and white space allowed"; 
    }
  }
  

  if(empty($username))
	{
		$errors["username1"]= "user name can't be  empty";
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
  
  
  if(empty($pass))
	{
		$errors["pass1"]= "password can't be  empty";
	}
	if((strlen($pass) < 2))
	{
		$errors["pass2"]= "password atleast 2 charecter long";
	}
	
	
	
	if(empty($conpass))
	{
		$errors["conpass1"]= "confirm password can't be  empty";
	}
	if($pass != $conpass)
	{
		$errors["conpass2"]= "password doesn't match";
	}
  
  
if(count($errors) == 0)
	{
		
	
  

$sql = "INSERT INTO admin (category , name , mobile , email , gender , address , username , password) VALUES ('$category','$name','$mobile','$email','$gender','$address','$username','$conpass')";

$run = mysqli_query($con,$sql);
if($run){
	echo"<center><h1>Admin is Successfully Entered,Thanks!.</h1></center>";
}
else
{
	echo' Not Successfull';
}

mysqli_close($con);
}  

}







function testInput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin FORM</title>
    <link rel="stylesheet" href="Style7.1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body{
			background-color:#D8D8D8;
		}
		</style>

    <script>

        function valid(){
		
		var category=form.category.value.trim();
		var name=document.form.name.value.trim();
		var mobile=document.form.mobile.value.trim();
			var email=document.form.email.value.trim();
			var gender=document.form.gender.value.trim();
			var address=document.form.address.value.trim();
				var uname=document.form.uname.value.trim();
				var pass=document.form.pass.value.trim();
				var conpass=document.form.conpass.value.trim();
				var msg="";
				
				
				if(category=="Select Admin"){
					document.getElementById('catErr').innerHTML="Category required";
					//alert("Please fill in the field");
					return false;
						
				}
				
				
				if(name==""){
					document.getElementById('nameErr').innerHTML="Name is required";
					
					//alert("Please fill in the field");
					return false;	
				}
				if(mobile==""){
					document.getElementById('mobErr').innerHTML="Mobile number required";

					//alert("Please fill in the field");
					return false;	
				}
				if(mobile!=""){
				if(isNaN(mobile)){
				  document.getElementById('mobErr2').innerHTML="Input valid Mobile";
					return false;
					}
				}
				
				if(mobile.length!=11){
						document.getElementById('mobErr3').innerHTML="Input 11 digit Mobile";
					
					}
				
				
				
				
				
				if(email==""){
					document.getElementById('emailErr').innerHTML="Email required";

					//alert("Please fill in the field");
					return false;	
				}
				if(email!=""){
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
					{
					
					}
						else{
							document.getElementById('emailErr2').innerHTML="Invalid email";
						return false;}
				}
				
				
				
				if(gender=="Select Gender"){
					gen.className="error";
					document.getElementById('genderErr').innerHTML="Gender required";

					//alert("Please fill in the field");
					return false;	
				}
				if(address == ""){
					document.getElementById('addressErr').innerHTML="Address is required";
					
					//alert("Please fill in the field");
					return false;	
				}
				else if(uname==""){
					document.getElementById('unameErr').innerHTML="User name required";

					//alert("Please fill in the field");
					return false;	
				}
				else if(pass==""){
					document.getElementById('pswErr').innerHTML="Password required";

					//alert("Please fill in the field");
					return false;	
				}
				else if(conpass==""){
					document.getElementById('conpassErr').innerHTML="Confirm password required";

					//alert("Please fill in the field");
					return false;	
				}
				
				
				else{return true;}

	}
	
	
	/*function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(myForm.emailAddr.value))
  {
    return (true)
  }
    alert("You have entered an invalid email address!")
    return (false)
}*/
	
	
	
	function success(){
		var category=document.form.category.value.trim();
		var name=document.form.name.value.trim();
		var mobile=document.form.mobile.value.trim();
			var email=document.form.email.value.trim();
			var gender=document.form.gender.value.trim();
			var address=document.form.address.value.trim();
				var uname=document.form.uname.value.trim();
				var pass=document.form.pass.value.trim();
				var conpass=document.form.conpass.value.trim();
				
				
				if(category!="Select Admin"){
					//alert("ji");
					document.getElementById('catErr').innerHTML="";	
				}
				if(name!=""){
					document.getElementById('nameErr').innerHTML="";	
				}
				if(mobile!=""){
					document.getElementById('mobErr').innerHTML="";	
					
					
				if(isNaN(mobile)!=1){
				  document.getElementById('mobErr2').innerHTML="";
					
					}}
					
					if(mobile.length=11){
						document.getElementById('mobErr3').innerHTML="";
					
					}
				
				
				if(email!=""){
					document.getElementById('emailErr').innerHTML="";	
				}
				
				if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)!=1)
					{
						
						document.getElementById('emailErr2').innerHTML="";
					}
						
				
				
				if(gender!="Select Gender"){
					document.getElementById('genderErr').innerHTML="";	
				}
				
				
				if(address!=""){
					document.getElementById('addressErr').innerHTML="";
				}
				if(uname!=""){
					document.getElementById('unameErr').innerHTML="";	
				}
				if(pass!=""){
					document.getElementById('pswErr').innerHTML="";	
				}
				if(conpass!=""){
					document.getElementById('conpassErr').innerHTML="";	
				}
				
	}


	
	/*function validate(){
	
	v=document.fm.ps.value;
	//v=document.forms[0].elements[1].value;
	//alert(v);
	if(v.length>=8){
		
		alert("valid data");
		return true;
	}
	else{
		document.getElementById("fname").style.color="red";
		document.getElementById("msg").innerHTML="invalid data";
		//alert("invalid data");
		return false;
	}
}*/

xmlhttp = new XMLHttpRequest();
function showHint() {
	str=document.getElementById('un').value;
	//document.getElementById("spinner").style.visibility= "visible";
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			//document.getElementById("spinner").style.visibility= "hidden";
		}
	};
	var url="fetch.php?uname="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

</script>


</head>

<body>
    <?php
	include("includes/header.php");
       include("includes/sidebar.php");?>


    <div class="signup-form">
        <form action="" method="post" name="form">
            <h1>
                <center>Admin Form</center>
            </h1>
            <br>
            <label>Chatagory:</label>
            <select name="category" onkeypress="success()" id="cat">
                <option>
                    <?php if(isset($_POST["category"])) echo $_POST["category"]; ?>
                </option>
                <option value="Main Admin">Main Admin</option>
                <option value="Moderator">Moderator</option>
                <option value="Reporter">Reporter</option>
            </select>
            <br><br><span style="color:red" id="catErr"></span><br>
            <label>Name:</label>
            <br>
            <input type="text" id="nm" onkeypress="success() " name="name" value="<?php if(isset($_POST[" name"])) echo $_POST["name"]; ?>">
            <br><span style="color:red" id="nameErr"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["name1"]))
{
	echo $errors["name1"]."<br>";
}
if(isset($errors["name2"]))
{
	echo $errors["name2"]."<br>";
}
if(isset($errors["name3"]))
{
	echo $errors["name3"]."<br>";
}
?>
            </p>


            <label>Mobile:</label>
            <br>


            <input type="text" placeholder="+8801*********" onkeypress="success()" id="mob" name="mobile" value="<?php if(isset($_POST[" mobile"])) echo $_POST["mobile"]; ?>">
            <br><span style="color:red" id="mobErr"></span><span style="color:red" id="mobErr2"></span><span style="color:red" id="mobErr3"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["mobile1"]))
{
	echo $errors["mobile1"]."<br>";
}
if(isset($errors["mobile2"]))
{
	echo $errors["mobile2"]."<br>";
}
if(isset($errors["mobile3"]))
{
	echo $errors["mobile3"]."<br>";
}
?>
            </p>

            <label>Email:</label>
            <br>
            <input type="email" id="em" onkeypress="success()" onkeyup="validemail()" name="email" value="<?php if(isset($_POST[" email"])) echo $_POST["email"]; ?>">
            <br><span style="color:red" id="emailErr"></span>
            <span style="color:red" id="emailErr2"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["email1"]))
{
	echo $errors["email1"]."<br>";
}
if(isset($errors["email2"]))
{
	echo $errors["email2"]."<br>";
}
if(isset($errors["email3"]))
{
	echo $errors["email3"]."<br>";
}
?>
            </p>



            <label>Gender:</label>
            <select name="gender" onkeypress="success()" id="gen">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                </center>
            </select>
            <br><span style="color:red" id="genderErr"></span><br>


            <label>Address:</label>
            <br>
            <input type="text" id="add" name="address" value="<?php if(isset($_POST[" address"])) echo $_POST["address"]; ?>" onkeypress="success()" >
            <br><span style="color:red" id="addressErr"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["address1"]))
{
	echo $errors["address1"]."<br>";
}
if(isset($errors["address2"]))
{
	echo $errors["address2"]."<br>";
}
if(isset($errors["address3"]))
{
	echo $errors["address3"]."<br>";
}
?>
            </p>



            <label>User Name:</label>
            <br>
            <input type="text" onkeypress="success()" onkeyup="showHint()" id="un" name="uname" value="<?php if(isset($_POST[" uname"])) echo $_POST["uname"]; ?>">
            <br>
            <h3 style="color:red" id="txtHint"></h3>
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



            <label>Password:</label>
            <br>
            <input type="password" onkeypress="success()" id="pa" name="pass" value="<?php if(isset($_POST[" pass"])) echo $_POST["pass"]; ?>">
            <br><span style="color:red" id="pswErr"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["pass1"]))
{
	echo $errors["pass1"]."<br>";
}
if(isset($errors["pass2"]))
{
	echo $errors["pass2"]."<br>";
}
?>
            </p>

            <label>Confirm Password:</label>
            <br>
            <input type="password" onkeypress="success()" id="cpa" name="conpass" value="<?php if(isset($_POST[" conpass"])) echo $_POST["conpass"]; ?>">

            <br><span style="color:red" id="conpassErr"></span><br>
            <p style="color:red;">
                <?php if(isset($errors["conpass1"]))
{
	echo $errors["conpass1"]."<br>";
}
if(isset($errors["conpass2"]))
{
	echo $errors["conpass2"]."<br>";
}
?>
            </p>


            <br>
            <input type="submit" value="submit" onclick="return valid()" name="submit">
            <input type="reset" value="refresh">
            </fieldset>
        </form>
    </div>
    </center>
</body>

</html>
