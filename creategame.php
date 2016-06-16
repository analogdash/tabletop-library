<?php include 'header.php';?>

<?php

# Generate random id function
function generateRandomString($length = 16) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

#echo $_POST[uname].$_POST[passwd] . $_POST[email];


# Store data
if ($_POST["gamename"] && $_POST["publisher"]){

		# Connect to database
		include 'conndb.php';

		$randid = generateRandomString();

		# Check if random id is free
		$freerandfound = 0;
		while (!$freerandfound) {
			$retrieve = "SELECT gameid FROM gametable WHERE gameid='".$randid."';";
			$result = mysqli_query($link, $retrieve);
			if (mysqli_num_rows($result) > 0) {
			#echo 'Randome ID already exists';
			$randid = generateRandomString();
		} else {
			#echo "0 results";
			$freerandfound = 1;
		

			$query = "INSERT INTO gametable (gameid, gamename, publisher, publishyear, genre, description, playtimemin, playtimemax, playersmin, playersmax, playeragemin) VALUES ('".$randid."', '".$_POST["gamename"]."', '".$_POST["publisher"]."', '".$_POST["publishyear"]."', '".$_POST["genre"]."', '".addslashes ($_POST["description"])."', '".$_POST["playtimemin"]."', '".$_POST["playtimemax"]."', '".$_POST["playersmin"]."', '".$_POST["playersmax"]."', '".$_POST["playeragemin"]."')";
			if (mysqli_query($link, $query)) {
  				echo "New game record created successfully<br>";
			} else {
 				echo "Error: " . $query . "<br>" . mysqli_error($link);
 			}

 			mysqli_close($link); 
		}
	}


} else {
	echo "You must enter a game name and publisher!";
}


?>

<?php include 'footer.php';?>