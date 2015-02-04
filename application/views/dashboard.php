<?php  ?>

<html>
<head>
	<title>Dashboard</title>
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
		        <li><a href="#">Dashboard</a></li> 
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
		        </li>
		      </ul> -->
		        </li>
		      </ul>
		      <p class="navbar-text navbar-right"><a href="logoff" class="navbar-link">Logoff</a></p>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		<div class="row">
  <div class="col-sm-6 col-md-5 col-lg-6"></div>
  <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-10"></div>
</div>
		<div class="row">
		<div class= ".col-md-4">
			<table class="table table-striped">
				<thead>
					<th>ID</th>
					<th>Name^</th>
					<th>email</th>
					<th>created_at</th>
					<th>user_level</th>
				</thead>
				<tr>
					<td>1</td>
					<td><a href="/users/show/4/">Michael Weitzman</a></td>
					<td>michael.weitzman@wst.com</td>
					<td>Feb. 2nd 2015</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Jimmy Jun</td>
					<td>jimmy.jun@gmail.com</td>
					<td>Feb. 2nd 2015</td>
					<td>normal</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Paul Chun</td>
					<td>paulie@gmail.com</td>
					<td>Feb. 2nd 2015</td>
					<td>admin</td>
				</tr>
				<tr>
					<td>4</td>
					<td>Matt Lastname</td>
					<td>matt@gmail.com</td>
					<td>Feb. 2nd 2015</td>
					<td>normal</td>
				</tr>
			</table>
		</div>
	</div>

	</div>


</body>
</html>