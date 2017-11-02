<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<style>
header {color:red;}
</style>
<title>Sign Up</title>

</head>

		<?php
include 'navigation.php';
?>
    <br>
    <br>
    <br>
    <form class="col-xs-12" class="form-horizontal">
  <fieldset>
    <legend>Sign Up</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
        <div class="checkbox">
          <label>
            <input type="checkbox"> This is my password
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Any Ideas on Projects?</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
        <span class="help-block">Anything you might have craft ideas for can go here, not limited to Halloween!</span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Recieve Newsletters?</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
            Yes!
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            No
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Favorite Holiday!</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>Christmas</option>
          <option>Thanksgiving</option>
          <option>Halloween</option>
          <option>Fourth of July</option>
          <option>Saint Patrick's Day</option>
        </select>
        <br>
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
<?php
include 'footer.php';
?>

</html>