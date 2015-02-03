<?php ?>

<html>
<head>
	<title>Edit User</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>	
<style type="text/css">

textarea {
	width:100%;
	height: 12%;
}

button.btn-success {
	margin-left: 95%;
	margin-top: 1%;
}

.message {
	font-size: 1em;
	border:2px solid black;
	width:90%;
	margin-bottom: 2%;
	padding:20px;
}


</style>
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
      <a class="navbar-brand" href="/">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="/">Dashboard</a></li> 
            <li><a href="/edit/user/">Profile</a></li>
        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> -->
      </ul>
        </li>
      </ul>
      <p class="navbar-text navbar-right"><a href="/login/" class="navbar-link">Sign In</a></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>

	<div class="row">
		<h2>Edit Profile</h2>
	<div class="col-sm-6 col-md-5 col-lg-6">
		<h4>Edit Information</h4>
		<form>
  <div class="form-group">
    <label for="update_email">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="update_first_name">First Name</label>
    <input type="password" class="form-control" id="update_first_name" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="update_last_name">Last Name</label>
    <input type="password" class="form-control" id="update_first_name" placeholder="Last Name">
  </div> 
    <div class="form-group">
    <label for="update_last_name">User Level:</label>
    
    <select>
      <option>Normal</option>
      <option>Admin</option>
    </select>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
</form>
	</div>
	  <div class="col-sm-6 col-md-5 col-lg-6">
	  	<h4>Update Password</h4>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password confirmation</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-default">save</button>
</form>
	  </div>
	</div>
	<div class="row">
		 <div class="col-sm-6 col-md-12  col-lg-12"><form action="/messages/new" method="post">
		 	<p><label for="message">Edit Description</label></p>
		 	<textarea name="message"></textarea>
	 		<button type ="submit" name="message" value="Post" class="btn btn-success">Save</button>
	 		<input type ="hidden" name ="msg" value="msgpost">
	 	</form>
		 </div>
	</div>
	 	
	</div>
</div>
</body>
</html>