<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	  <!-- <title>Bootstrap 4 Website Example</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
  /*.*/
  </style>
  	<script>
function ajax(){
  var xhttp;
  // if (str.length == 0) { 
  //   document.getElementById("txtHint").innerHTML = "enter somthing";
  //   return;
  // }
  if(window.XMLHttpRequest){
    xhttp=new XMLHttpRequest();
  }else{
    xhttp=new ActiveXObjext("Micosoft.XMLHTTP");
  }
  xhttp.onreadystatechange=function(){
    if(this.readyState==4 && this.status==200){
      document.getElementById("chat").innerHTML=this.responseText; 
    }
  }
  xhttp.open('GET',"chat.php",true);
  xhttp.send();
}
setInterval(function(){ ajax()},1000);
</script>
</head>
<body onload="ajax()">
	<div class="container">
		<div class="row">
			<!-- <div class="col-2 w3-hide-medium"></div> -->
			<div class="col-12">
				<div class="card">
				  <div class="card-header">
				    chat
				  </div>
				  <div class="card-body">
					  <div id="chat">
					  	
					  </div>
				   
				  </div>
				  <div class="card-footer text-muted">
				  	<form action="index.php" method="post">
				   <div class="row">
				   		<div class="col-3">
				   			<input type="text" name="name" class="w3-input">
				   		</div>
				   		<div class="col-7">
				   			<textarea name="msg" style="width: 100%;"></textarea>
				   		</div>
				   		<div class="col-2">
				   			<input type="submit" name="submit" value="send">
				   		</div>
				   </div>
				</form>
				  </div>
				</div>
			</div>
			<!-- <div class="col-2 w3-hide-medium"></div> -->
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$msg=$_POST['msg'];
			include 'connection.php';
			$sql="INSERT into chat (name, msg) values('$name','$msg');";
			
			if (mysqli_query($conn, $sql)) {
	         // echo "<embed loop='false' src='chat.mp3' hidden='true' autoplay='true'>";
      } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

		}



	?>

</body>
</html>