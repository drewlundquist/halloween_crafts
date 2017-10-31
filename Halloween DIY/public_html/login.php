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
<title>Login</title>

</head>

		<?php
include 'navigation.php';
?>
<body>
<br>
<br>
<br>
<div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal">
                <fieldset>
                  <legend>Login</legend>
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
                          <input type="checkbox">Remember Me
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-10">
                     
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
          </div>

         <footer class= col-xs-12><div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Warning!</h4>
  <p>If you do not already have an account with us, try us out and learn a lot about Holiday Crafts! <a href="signup.html" class="alert-link">Go to Sign Up</a>.</p>
</div>
</footer>