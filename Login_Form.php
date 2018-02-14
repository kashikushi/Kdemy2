<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<!--header-->
<?php 

include("header.html");

?>
		<!--//header-->
<!--Login_Form-->

<div class="container">
  <h2>Kdemy</h2>
  <form>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Login</button>
  </form>
</div>



<!--//Login_form-->

<!-- footer -->
<?php 

include("footer.html");

?>
			<!-- //footer -->
</body>
</html>
