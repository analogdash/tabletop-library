<?php include 'header.php';?>

<div class="container">

<div class="panel panel-default">
  <div class="panel-body">

<form class="form-horizontal" action="creategame.php" method="post">
<fieldset>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Create new game</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="gamename">Title</label>  
  <div class="col-md-4">
  <input id="gamename" name="gamename" placeholder="Enter the title of the game" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Publisher</label>  
  <div class="col-md-4">
  <input id="publisher" name="publisher" placeholder="Enter the publisher or creator of the game" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="publisher">Year Published</label>  
  <div class="col-md-4">
  <input id="publisher" name="publishyear" placeholder="Enter the year the game was published" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="genre">Genre</label>  
  <div class="col-md-4">
  <input id="genre" name="genre" placeholder="Enter the game's genre" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description">Enter a short description of the game</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playtimemin">Minimum Play time</label>  
  <div class="col-md-4">
  <input id="playtimemin" name="playtimemin" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">Enter the low end estimate for play time in minutes</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playtimemax">Maximum Play time</label>  
  <div class="col-md-4">
  <input id="playtimemax" name="playtimemax" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">Enter the high end estimate for play time in minutes</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playersmin">Minimum no. of players</label>  
  <div class="col-md-4">
  <input id="playersmin" name="playersmin" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">Enter the smallest size group that can play</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playersmax">Maximum no. of players</label>  
  <div class="col-md-4">
  <input id="playersmax" name="playersmax" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">Enter the largest size group that can play</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="playeragemin">Age Suitability</label>  
  <div class="col-md-4">
  <input id="playeragemin" name="playeragemin" placeholder="" class="form-control input-md" type="text">
  <span class="help-block">Enter the smallest age for which this game is acceptable</span>  
  </div>
</div>

</fieldset>
</form>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-default" type="submit">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>
</div>
</div>

<?php include 'footer.php';?>