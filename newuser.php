<?php include 'header.php';?>

<div class="container">

<div class="panel panel-default">
  <div class="panel-body">

<form class="form-horizontal" action="createuser.php" method="post">
<fieldset>

<!-- Form Name -->
<legend>Create new account</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">First Name</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" placeholder="Enter your first name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="lname">Last Name</label>  
  <div class="col-md-4">
  <input id="lname" name="lname" placeholder="Enter your last name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Phone</label>  
  <div class="col-md-4">
  <input id="phone" name="phone" placeholder="Enter your phone number" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="address" name="address" placeholder="Enter your address"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" placeholder="Enter your email address" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="uname">Username</label>  
  <div class="col-md-4">
  <input id="uname" name="uname" placeholder="Enter your username" class="form-control input-md" required="" type="text">
  <span class="help-block">Your username is how you will be identified in comments and ratings.</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pass1">Password</label>  
  <div class="col-md-4">
  <input id="pass1" name="pass1" placeholder="Enter your desired password" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pass2">Confirm Password</label>
  <div class="col-md-4">
    <input id="pass2" name="pass2" placeholder="Reenter your desired password" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- This does nothing -->
<div class="form-group">
  <label class="col-md-4 control-label" for="turingtest">Verification</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="turingtest-0">
      <input name="turingtest" id="turingtest-0" value="1" checked="checked" type="radio">
      I am a human
    </label>
	</div>
  <div class="radio">
    <label for="turingtest-1">
      <input name="turingtest" id="turingtest-1" value="2" type="radio">
      I am a robot
    </label>
	</div>
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