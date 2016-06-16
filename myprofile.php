<?php include 'header.php';


if ($_SESSION["loggedinuserid"]){


include 'conndb.php';
$retrieve = "SELECT username, email, fname, lname, address, phone, aboutme FROM users WHERE userid='".$_SESSION["loggedinuserid"]."';";
$result = mysqli_query($link, $retrieve);
$row = mysqli_fetch_assoc($result);

echo '
<div class="panel panel-default">
  <div class="panel-body">
    <h3>'.$row["username"].'<br />
    <h2>'.$row["fname"].' '.$row["lname"].'</h2>
    <small>'.$row["email"].'</small></h3>

    <p class="address">'.$row["address"].'</p>
    <p class="phone">'.$row["phone"].'</p>
    <p class="aboutme">'.$row["aboutme"].'</p>
    </div>
</div>
';
} else {


	echo ' You must be logged in to view your profile.';
}



include 'footer.php';?>