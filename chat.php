				<?php 
				  	include 'connection.php';
				  	$sql="SELECT * FROM chat order by chatid desc";
				  	$result=mysqli_query($conn,$sql);
				  	while($row=mysqli_fetch_assoc($result)):
				  	?>
				   <div class="row w3-border-bottom">
				   	<div class="col-4">
				   		<b style="color: green;"><?php echo $row['name'];?></b>
						<h4>Hacktoberfest</h4>
				   	</div>
				   	<div class="col-6">
				   		<p style="color: red;"><?php echo $row['msg'];?></p>
				   	</div>
				   	<div class="col-2">
				   		<b><?php echo date("h:i A",strtotime($row['time']));?></b>
				   	</div>
				   </div>
				<?php endwhile;?>
