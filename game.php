<?php include 'header.php';


if ($_GET["gameid"]){


include 'conndb.php';
$retrieve = "SELECT * FROM gametable WHERE gameid='".$_GET["gameid"]."';";
$result = mysqli_query($link, $retrieve);
$row = mysqli_fetch_assoc($result);

echo '
<div class="panel panel-default">
  <div class="panel-body">
    <h3>'.$row["gamename"].' ('.$row["publishyear"].')<br />
    <small>'.$row["publisher"].'</small></h3>
    <ul class="gamestats">
      <li class="genrelabel"><span class="badge">'.$row["genre"].'</span></li>
      <li class="playerslabel"><span class="badge">'.$row["playersmin"].'</span> to <span class="badge">'.$row["playersmax"].'</span> players</li>
      <li class="agelabel">Ages <span class="badge">'.$row["playeragemin"].'+</span></li>';
if ($row["playtimemin"] == $row["playtimemax"]){
      echo'<li class="playtimelabel">Game time: <span class="badge">'.$row["playtimemax"].' minutes</span></li>';
} else {
      echo'<li class="playtimelabel">Game time: <span class="badge">'.$row["playtimemin"].'</span> to <span class="badge">'.$row["playtimemax"].' minutes</span></li>';
}
echo'
    </ul>
    <p class="gamedesc">'.$row["description"].'</p>
    </div>

<form action="editgame.php">
<input type="hidden" name="gameid" value="'.$_GET["gameid"].'">
<button class="btn btn-warning" type="submit">Edit Game</button>

</form>
</div>
';
} else {


	echo ' No game indicated.';
}



include 'footer.php';?>