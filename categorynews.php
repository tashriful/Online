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
            
			<?php include("includes/allcatcol.php"); ?>
			 <div class="col-sm-9" style="background-color:#D8D8D8;margin-right:0%;margin-top: -2.4%;border:1px solid grey">
			 <?php
			 include("includes/database.php");
			$category=$_GET['category'];
           if(isset($_GET['lim'])){
            $sl=$_GET['lim'];            
           }else{
            $sl=0;            
           }   
		   $sql="select * from news where category='$category' order by news_id desc limit $sl,4";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){
 foreach($data as $v){
 ?>
 <div>
 <div style="float:left; margin-top:3%;margin-left:1%;height:10%;" class="cnews-left">
<img style="width:120px;height:100px" src="admin/<?php echo $v['photo'];?>">
 
 </div>
 
 <div style="float:left;margin-top:2%;height:10%;margin-left:1%;"  class="cnews-right">
<?php
                $string =$v['title'];
                                         $maxLength =50;
                                         if (strlen($string) > $maxLength) 
                                         {
                                           $stringCut = substr($string, 0, $maxLength);
                                           $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
                <h4>
				
				<a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                        <?php echo $string;?>...</a>
                    
                </h4>
				</div>
				<div style="float:left;margin-top:0%;height:10%;"  class="cnews-right2">
				<?php
                $string1 =$v['main_news'];
                                         $maxLength =200;
                                         if (strlen($string1) > $maxLength) 
                                         {
                                           $stringCut = substr($string1, 0, $maxLength);
                                           $string1 = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
										 
                <span>
                    <?php echo $string1;?>...<br><br>
					</span>
					<button><a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                        Details.....</button></a>
				<?php }}?>
				

				</div>
				</div>
				
				
				
				


				
 </div>
 
			 
			 </div>
			
			
		</div>
	
	
	
	
	
	

</body>
