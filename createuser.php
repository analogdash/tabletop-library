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
if ($_POST["uname"] && $_POST["pass1"] && $_POST["email"]){

	if($_POST["pass1"] == $_POST["pass2"]){
		# Connect to database
		include 'conndb.php';

		$randid = generateRandomString();

		# Check if random id is free
		$freerandfound = 0;
		while (!$freerandfound) {
			$retrieve = "SELECT userid FROM authen WHERE userid='".$randid."';";
			$result = mysqli_query($link, $retrieve);
			if (mysqli_num_rows($result) > 0) {
			#echo 'Randome ID already exists';
			$randid = generateRandomString();
		} else {
			#echo "0 results";
			$freerandfound = 1;


			# CREATE PASSWORD HASH
			$salt = '$2y$05$' . substr(md5(uniqid(rand(), true)), 0, 22);
			$hashedpass = crypt($_POST['pass1'], $salt);

			$query = "INSERT INTO users (userid, username, email, fname, lname, address, phone) VALUES ('".$randid."', '".$_POST["uname"]."', '".$_POST["email"]."', '".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["address"]."', '".$_POST["phone"]."')";
			$query2 = "INSERT INTO authen (userid, passwdhash) VALUES ('".$randid."', '".$hashedpass."')";

			if (mysqli_query($link, $query)) {
  				echo "New user record created successfully<br>";
			} else {
 				echo "Error: " . $query . "<br>" . mysqli_error($link);
 			}

			if (mysqli_query($link, $query2)) {
  				echo "New password record created successfully<br>";
			} else {
 				echo "Error: " . $query . "<br>" . mysqli_error($link);
 			}

 			mysqli_close($link); 
		}
	}

 	} else {
 		echo "Your passwords do not match!";
 	}
} else {
	echo "You must enter a username, password, and email!";
}


?>

<?php include 'footer.php';?>