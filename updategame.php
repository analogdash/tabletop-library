<?php include 'header.php';?>

<?php

# Store data
if ($_POST["gamename"] && $_POST["publisher"]){

		# Connect to database
		include 'conndb.php';

		$query = 
		"UPDATE gametable
		SET gamename='".$_POST["gamename"]."',
		publisher='".$_POST["publisher"]."',
		publishyear='".$_POST["publishyear"]."',
		genre='".$_POST["genre"]."',
		description='".addslashes ($_POST["description"])."',
		playtimemin='".$_POST["playtimemin"]."',
		playtimemax='".$_POST["playtimemax"]."',
		playersmin='".$_POST["playersmin"]."',
		playersmax='".$_POST["playersmax"]."',
		playeragemin='".$_POST["playeragemin"]."'
		WHERE gameid='".$_POST["gameid"]."';";
		
			if (mysqli_query($link, $query)) {
  				echo "Game record edited!<br>";
			} else {
 				echo "Error: " . $query . "<br>" . mysqli_error($link);
 			}

 			mysqli_close($link); 

} else {
	echo "You must enter a game name and publisher!";
}


?>

<?php include 'footer.php';?>