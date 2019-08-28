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
loadFromMySQL("select * from news where news_id='$id'");


$id=$_REQUEST['id'];
	//echo $uname;
	include("includes/database.php");
	
if(isset($_POST['submit']))
{
	
      include("includes/database.php");


		$category=$_POST['category'];
		echo $category;
		$title=$_POST['title'];
		$date=date("d.m.y");
		$time=$_POST['time'];
		$repName=$_POST['repName'];
		//echo $repName;
		$desc=$_POST['desc'];
		$tmp=$_FILES['fileToUpload']['tmp_name'];
		$imname=$_FILES['fileToUpload']['name'];
		//$image=$_POST['image'];
		
		$ext=getExt($imname);
		$target="images/".$category.'_'.$imname;
		
		if($ext!="jpg" && $ext!="png"){
		echo "Invalid file type";
		}
		
		else if(file_exists($target)){
			echo "<center><h2 style='color:red;'>File already exists</h2><center>";
		}
		
		else{
		$t= move_uploaded_file($tmp,$target);
		
$sql ="UPDATE news SET category='$category' , title='$title' , date='$date' , time='$time' , rep_name='$repName' , main_news='$desc' , photo='$target' WHERE news_id='$id'";

$run = mysqli_query($con,$sql);
if($run){
	echo "<center><h1 style='color:green;'>News is Successfully Updated!.</h1></center>";
}
else
{
	echo "<center><h1 style='color:red;' >Not Successfull!.</h1></center>";
}

mysqli_close($con);
		}
}
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>FORM</title>
		<link rel="stylesheet" href="Style7.1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
		
	<script>

	function valid(){
		
		var category=document.form.category.value.trim();
		var title=document.form.title.value.trim();
			var time=document.form.time.value.trim();
			var repName=document.form.repName.value.trim();
			//var address=document.form.address.value.trim();
				var desc=document.form.desc.value.trim();
				var img=document.form.fileToUpload.value.trim();
				var msg="";
				
				
				if(category =="Select Category"){
					document.getElementById('catErr').innerHTML="Category required";
					//alert("Please fill in the field");
					return false;
						
				}
				
				
				
				if(title==""){
					document.getElementById('titleErr').innerHTML="Title required";

					//alert("Please fill in the field");
					return false;	
				}
				if(time==""){
					document.getElementById('timeErr').innerHTML="Time required";

					//alert("Please fill in the field");
					return false;	
				}
				if(repName==""){
					document.getElementById('repErr').innerHTML="Reporter name required";

					//alert("Please fill in the field");
					return false;	
				}
				if(desc==""){
					document.getElementById('mainErr').innerHTML="Main news required";

					//alert("Please fill in the field");
					return false;	
				}
				else if(img == ""){
					document.getElementById('imgErr').innerHTML="Image  is required";
					
					//alert("Please fill in the field");
					return false;	
				}
				
					
				
				
				else
				{
					return true;
				}

	}
	
	
	
	function success(){
		var category=document.form.category.value.trim();
		var title=document.form.title.value.trim();
			var time=document.form.time.value.trim();
			var repName=document.form.repName.value.trim();
			//var address=document.form.address.value.trim();
				var desc=document.form.desc.value.trim();
				var img=document.form.fileToUpload.value.trim();
				var msg="";
				
				
				if(category!="Select Category"){
					//alert("ji");
					document.getElementById('catErr').innerHTML="";	
				}
				if(title!=""){
					document.getElementById('titleErr').innerHTML="";	
				}
				if(time!=""){
					document.getElementById('timeErr').innerHTML="";	
				}
				if(repName!=""){
					document.getElementById('repErr').innerHTML="";	
				}
				
				if(desc!=""){
					document.getElementById('mainErr').innerHTML="";	
				}
				
				
				if(img!=""){
					document.getElementById('imgErr').innerHTML="";
				}
				
				
	}


	
	/* function validate(){
	
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
</script>
		
		
		
    </head>
	
	
    <body>
	<?php
	include("includes/header.php");
       include("includes/sidebar.php");?>
		   <div style="background-color: #D8D8D8;margin-top:2%;">
	
        <div class="signup-form">
            <form action="" method="post" name="form" enctype="multipart/form-data">
			<h1><center>Form</center></h1>
			
			Choose Category:
			<?php
				if($data!=0)
				{
					foreach($data as $v){
				?>
				<select name="category" onkeypress="success()" id="cat">
					<option><?php echo $v['category']; ?></option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Economy">Economy</option>
                    <option value="International">International</option>
                    <option value="Sports">Sports</option>
					<option value="Science & Tech">Science & Tech</option>
					<option value="Entertainment">Entertainment</option>
					<option value="Politics">Politics</option>
				</select>
				<br><span style="color:red" id="catErr"></span><br>
				
				
                <label>Title:</label>
				<br> 
                <input type="text" id="tit" onkeypress="success()" name="title" value="<?php echo $v['title']; ?>">
				<br><span style="color:red" id="titleErr"></span><br>
				
				
				
				<label>Time:</label>
				<br>
				<input type="number" onkeypress="success()" id="tim" name="time" value="<?php echo $v['time']; ?>">
				<br><span style="color:red" id="timeErr"></span><br>
				<label>Reporter name:</label>
				<br>
				<input type="text" onkeypress="success()" id="rep" name="repName" value="<?php echo $v['rep_name']; ?>">
				<br><span style="color:red" id="repErr"></span><br>
				
				<label>News Description:</label>
				<br>
				<textarea style='height:200px;width:330px;display: block;margin-bottom: 10px;border:2px solid gray;'  onkeypress="success()" id="text" placeholder="Description" name="desc" value="<?php echo $v['main_news']; ?>" ></textarea>
				<br><span style="color:red" id="mainErr"></span><br>
				
				<label for="avatar">Choose a image file:</label>
				<input type="file" name="fileToUpload" id="fileToUpload" onkeypress="success()" value="<?php echo $v['photo']; ?>"accept="image/png, image/jpeg">
				<?php
				}}
				?>
				<br><span style="color:red" id="imgErr"></span><br>
				
				<input type="submit" name="submit" onclick="return valid()" value="submit">
				<input type="reset" value="refresh">
				</fieldset>
            </form>
        </div>
    </body>
</html>