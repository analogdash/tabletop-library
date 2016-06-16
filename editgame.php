<?php include 'header.php';




include 'conndb.php';
$retrieve = "SELECT * FROM gametable WHERE gameid='".$_GET["gameid"]."';";
$result = mysqli_query($link, $retrieve);
$row = mysqli_fetch_assoc($result);


echo '
<div class="container">

<div class="panel panel-default">
  <div class="panel-body">

<form class="form-horizontal" action="updategame.php" method="post">
<fieldset>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Edit existing game</legend>

<!-- Hidden input to pass on gameid -->
  <input id="gameid" name="gameid" value="'.$_GET["gameid"].'" type="hidden">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gamename">Title</label>  
  <div class="col-md-4">
  <input id="gamename" name="gamename" value="'.$row["gamename"].'" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Publisher</label>  
  <div class="col-md-4">
  <input id="publisher" name="publisher" value="'.$row["publisher"].'" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Year Published</label>  
  <div class="col-md-4">
  <input id="publisher" name="publishyear" value="'.$row["publishyear"].'" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="genre">Genre</label>  
  <div class="col-md-4">
  <input id="genre" name="genre" value="'.$row["genre"].'" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">'.$row["description"].'"</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playtimemin">Minimum Play time</label>  
  <div class="col-md-4">
  <input id="playtimemin" name="playtimemin" value="'.$row["playtimemin"].'" class="form-control input-md" type="text">
  <span class="help-block">Enter the low end estimate for play time in minutes</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playtimemax">Maximum Play time</label>  
  <div class="col-md-4">
  <input id="playtimemax" name="playtimemax" value="'.$row["playtimemax"].'" class="form-control input-md" type="text">
  <span class="help-block">Enter the high end estimate for play time in minutes</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playersmin">Minimum no. of players</label>  
  <div class="col-md-4">
  <input id="playersmin" name="playersmin" value="'.$row["playersmin"].'" class="form-control input-md" type="text">
  <span class="help-block">Enter the smallest size group that can play</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playersmax">Maximum no. of players</label>  
  <div class="col-md-4">
  <input id="playersmax" name="playersmax" value="'.$row["playersmax"].'" class="form-control input-md" type="text">
  <span class="help-block">Enter the largest size group that can play</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playeragemin">Age Suitability</label>  
  <div class="col-md-4">
  <input id="playeragemin" name="playeragemin" value="'.$row["playeragemin"].'" class="form-control input-md" type="text">
  <span class="help-block">Enter the smallest age for which this game is acceptable</span>  
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default" type="submit">Submit</button>
	</fieldset>
</form>


	<!-- I dont know how this button got to that corner but Im leaving it as it is by design -->
	<!-- Deletes game immediately. -->
	<form action="deletegame.php" method="post">
	<!-- Hidden input to pass on gameid -->
  <input id="gameid" name="gameid" value="'.$_GET["gameid"].'" type="hidden">
	<button id="delgame" name="submit" class="btn btn-danger" type="submit">Delete Game</button>
	</form>
	


  </div>
</div>

</div>
</div>
</div>';

 include 'footer.php';?>