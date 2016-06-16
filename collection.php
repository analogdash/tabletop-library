<?php include 'header.php';


include 'conndb.php';


echo '
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
	
	
      <form action="collection.php" method="GET">
	  
        <h1>Welcome!</h1>


        <div class="form-group">
          <label for="query">What do you want to play?</label>
          <input type="text" class="form-control" name="query">
        </div>

        
        <div class="form-group">
          <label for="genre">Genre:</label>
          <select class="form-control" name="genre">
          <option></option>
';

# POPULATES THE GENRE SELECTOR BASED ON EXISTING GENRES IN THE DATABASE

$retrieve = "SELECT genre FROM gametable";
$result = mysqli_query($link, $retrieve);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
echo '<option>'.$row["genre"].'</option>';
    }
} else {
    echo "0 results";
}

echo '
          </select>
        </div>
		
		
        <div class="form-group">
          <label for="playtime">Average play time:</label>
          <input type="text" class="form-control" name="playtime">
        </div>
		
		
        <div class="form-group">
          <label for="numplaya">How many players?</label>
          <input type="text" class="form-control" name="numplaya">
        </div>
		
		
<button id="submit" name="submit" class="btn btn-default" type="submit">Search</button>
		
		
      </form>
	  
	  
    </div>
  </div>
</div>
';



# QUERY CREATION WOOOOO


$retrieve = "SELECT * FROM gametable";

if (!empty($_GET)){
	
	if ($_GET["query"] || $_GET["genre"] || $_GET["playtime"] || $_GET["numplaya"]){
	
	$retrieve .= " WHERE ";
	
	$wheres = array();
	if ($_GET["query"]) {
		$wheres[] = "(gamename LIKE '%".$_GET["query"]."%') OR (description LIKE '%".$_GET["query"]."%')";
	}
	if ($_GET["genre"]) {
		$wheres[] = "genre = '".$_GET["genre"]."'";
	}
	if ($_GET["playtime"]) {
		$wheres[] = "(playtimemin <= ".$_GET["playtime"]." AND playtimemax >=".$_GET["playtime"].")";
	}
	if ($_GET["numplaya"]) {
		$wheres[] = "(playersmin <= ".$_GET["numplaya"]." AND playersmax >=".$_GET["numplaya"].")";
	}

	$retrieve .= implode(' AND ', $wheres); # THIS FUNCTION IS A GAME CHANGER, I WAS NECK DEEP IN AN IF-THEN CHAIN BEFORE I FOUND THIS

	}
}

	$retrieve .= ";";

	echo "The query is " . $retrieve;

$result = mysqli_query($link, $retrieve);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {

echo '
<div class="panel panel-default">
  <div class="panel-body">
    <h3><a href="game.php?gameid='.$row["gameid"].'">'.$row["gamename"].'</a> ('.$row["publishyear"].')<br />
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
    </div>
</div>
';


    }
} else {
    echo "0 results";
}

mysqli_close($link); 

?>

<?php include 'footer.php';?>