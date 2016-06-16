<?php include 'header.php';?>

<div class="container">

<div class="panel panel-default">
  <div class="panel-body">

<form class="form-horizontal" action="authenticate.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Login to your account</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uname">Username</label>  
  <div class="col-md-4">
  <input id="uname" name="uname" placeholder="Enter your username" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pass1">Password</label>  
  <div class="col-md-4">
  <input id="pass1" name="pass1" placeholder="Enter your password" class="form-control input-md" required="" type="password">
  </div>
</div>

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