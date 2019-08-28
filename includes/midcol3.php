<div class="col-sm-4" style="background-color:#E8E8E8;margin-right:0%;margin-top: 1%;">
    <?php
	

include("includes/database.php");
                   $sql="select * from news where category='International' order by news_id  limit 2";
				   $result = mysqli_query($con, $sql)or die(mysqli_error($con));
					$data=array();
					//print_r($result);
					while($row = mysqli_fetch_assoc($result)) {
					$data[]=$row;
			
					}

if($data!=0){?>
    <h3><a href="categorynews.php?category=International&&lim=0">International</a></h3>
    <?php
 foreach($data as $v){
 ?>
    <br><a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                    <img style="width:350px;height:180px" src="admin/<?php echo $v['photo'];?>"></a>
    <br>
    <?php
                $string =$v['title'];
                                         $maxLength =90;
                                         if (strlen($string) > $maxLength) 
                                         {
                                           $stringCut = substr($string, 0, $maxLength);
                                           $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
                                           }
                                          ?>
    <h4>
	<a href="singlenews.php?id=<?php echo $v['news_id'];?>">
                        <?php echo $string;?>...</a>
    </h4><br>

    <?php }}
                else{
                echo"<h3 style='color:red;'>Sorry! No News is Available.</h3>";
                } ?>
</div>
