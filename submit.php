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