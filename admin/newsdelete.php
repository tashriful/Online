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
$sql="DELETE FROM news where news_id='$id'";
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
loadFromMySQL("select * from news");
if($data!=0)
{
	?>
<div>
        <?php include("includes/header.php");?>
        <?php include("includes/sidebar.php");?>
        <div style="background-color: #D8D8D8;height: 1000px;width: 70%;float: left;">
		
		<!--<div style="background-color: white;height: 1000px;width: 97%;float: left;margin-left:2%; margin-top:2%;">
            <div class="news" style="background-color: red;height: 400px;width: 20%;float: left;margin-top:2%;margin-left:2%" >
			<span>haewtr yyggggggggggggggggggggddfdfdjs</span>
			</div>
			<div style="background-color: blue;height: 400px;width: 77%;float: left; margin-top:2%;margin-left:1%">
			<h2 style="margin-right:100%;">haewtr yyggggggggggggggggggggddfdfdjs</h2>
						<h2 style="margin-right:100%;">haewtr yyggggggggggggggggggggddfdfdjs</h2>

			</div>
			</div>-->
			
			<div style="background-color: #E8E8E8;height: 1000px;width: 97%;float: left;margin-left:2%; margin-top:2%;">

<?php
			foreach($data as $v){
		?>
		
		
		<div style="margin-top:2%;margin-left:2%;margin-right:2%">
			<div style="background-color: #F5F5F5;height: 300px;width: 20%;float: left;">
			<img style="width:100%;height:35%;" src="<?php echo $v['photo'];?>">
			</div>
			<div style="background-color: #F5F5F5;height: 300px;width: 78%;float: left;margin-left:1%;">
			<b><span style="font-size:25px;"><?php echo $v['title'];?></span></b><br>
			<span style="font-size:15px">Publish Date: <?php echo $v['date'];?> &nbsp   | &nbsp Publish time: <?php echo $v['time'];?> &nbsp | Category:<?php echo $v['category'];?></span><br><br>
			<span style="font-size:18px"><?php echo $v['main_news'];?></span></b><br>
			<h3><a title="Edit" onclick="return confirm('Are you want to edit?');" 
					   href="newsedit.php?id=<?php echo $v['news_id'];?>">
					   Edit<i class="fa fa-edit"></i></button></a></h3>
			<h3><a  onclick="return confirm('Are you sure to Delete?');" href="newsdelete.php?id=<?php $v['news_id'];?>">Delete<i class="fa fa-trash-o"></i></a> </h3>
			
			
			</div>
			</div><br><br>
			<?php } ?>
			
			</div>
			
        </div>

    </div>

			
<?php } ?>
		

	

<!DOCTYPE html>
<html>
<head>
<title>News Delete</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

</body>
</html>