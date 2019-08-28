<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category news</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/1st.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php //include("includes/header.php");
	include("includes/menu.php");
	include("includes/datetimebar.php");
	
	?>
	
	<div class="container">
        <div class="row">
            
			<?php// include("includes/allcatcol.php"); ?>
			
			<div class="col-sm-9" style="background-color:#D8D8D8;margin-right:0%;margin-top: -2.4%;">

			<?php
                   include("includes/database.php");
                   $id=$_GET['id'];
                   $sql="SELECT * FROM news where news_id='$id'";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}
					
					

if($data!=0){
	foreach($data as $v){?>
	
	

               
                <h2>
                    <?php echo $v['title'];?>
                </h2>
				
				<h4><?php echo $v['rep_name'];?> &nbsp; &nbsp; &nbsp; &nbsp; Date :<?php echo $v['date'];?> en   &nbsp; &nbsp; ||&nbsp; &nbsp; Time:<?php echo $v['time'];?> </h4>
	<img style="width:750px;height:400px" src="admin/<?php echo $v['photo'];?>">
	 <h4>
                    <br><?php echo $v['main_news'];?>
                </h4><br><br>
				   
	<?php }}?>
				   
				   
				   </div>
				   
				   <?php include("includes/allcatcol.php");
	
	
	?>
				   </div></div>
				   
				   
				   </body>
				   </html>