<?php include 'header.php';?>

<?php

if ($_POST['uname'] && $_POST['pass1']){
	# Connect to database
	include 'conndb.php';
	$retrieve = "SELECT userid FROM users WHERE username='".$_POST['uname']."';";
	$result = mysqli_query($link, $retrieve);
	if (mysqli_num_rows($result) > 0) {
		// output data of each row
		$row = mysqli_fetch_assoc($result);
		$userid = $row["userid"];
		echo 'Your userid is '.$userid.'<br>';
		$retrieve2 = "SELECT passwdhash FROM authen WHERE userid='".$userid."';";
		$result2 = mysqli_query($link, $retrieve2);
		$row2 = mysqli_fetch_assoc($result2);
		$hashed = $row2['passwdhash'];
		echo 'Your hashed password is '.$hashed.'<br>';
		echo 'The entered password is '.$_POST['pass1'].'<br>';
		$hashed2 = crypt($_POST['pass1'], $hashed);
		echo 'The new hash is '.$hashed2.'<br>';
		if($hashed2 == $hashed){
			$_SESSION["loggedinuserid"] = $userid;
			echo 'Successfully logged in as user '.$_POST['uname'].'<br>';
		} else {
			echo 'Password incorrect!<br>';
		}
	} else {
    echo "User does not exist.<br>";
	}
	mysqli_close($link); 
} else {
	echo "You must enter a username and password!<br>";
}


?>



<?php include 'footer.php';?>