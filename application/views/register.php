<?php ?>
<html>
<head>
	<title>WodRover user dashboard</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	
</head>
<body>
	<div class= "container">
		<nav class="navbar navbar-default">
  			<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
       <!--  <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul> -->
        </li>
      </ul>
        </li>
      </ul>
      <p class="navbar-text navbar-right"><a href="/login/" class="navbar-link">Sign In</a></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>
 <div class="col-md-4">
  <h3>Register</h3>
	<form action="/users/register/" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>  
  <div class="form-group">
    <label for="registerFirstName">First Name</label>
    <input type="text" class="form-control" id="registerName" placeholder="Enter name">
  </div><div class="form-group">
    <label for="registerLastName">Last Name</label>
    <input type="text" class="form-control" id="RegisterLastName" placeholder="Enter email">
  <div class="form-group">
    <label for="registerPassword">Password</label>
    <input type="password" class="form-control" id="registerPassword" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="registerConfirmPassword">Confirm Password</label>
    <input type="password" class="form-control" id="registerConfirmPassword" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
  <input type ="hidden" name ="action_reg" value="register">
</form>
</div>
</div>

</div>

</body>
</html>