<?php include 'header.php';?>

<?php

# Store data


		# Connect to database
		include 'conndb.php';

		$query = 
		"DELETE FROM gametable WHERE gameid='".$_POST["gameid"]."';";
		
			if (mysqli_query($link, $query)) {
  				echo "Game record deleted!<br>";
			} else {
 				echo "Error: " . $query . "<br>" . mysqli_error($link);
 			}

 			mysqli_close($link); 


?>

<?php include 'footer.php';?>