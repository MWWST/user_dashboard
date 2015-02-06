<?php ?>

<html>
<head>
	<title>User Information</title>
</head>
<body>
<head>
	<title>WodRover user dashboard</title>

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

.comment {
	font-size: 1em;
	width:70%;
	margin-bottom: 2%;
	margin-left: 20%;
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
      <a class="navbar-brand" href="#">Dashboard</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li><a href="#">Dashboard</a></li> 
		 <li><a href="/edit/user/">Profile</a></li>
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
          </ul> 
        </li>
      </ul>
        </li>
      </ul>
      <p class="navbar-text navbar-right"><a href="/login/" class="navbar-link">Sign In</a></p>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->

</nav>

	<div class="row">
	<div class="col-sm-6 col-md-5 col-lg-6"><h2><?php foreach ($userinfo as $key => $value) {var_dump($value);}

			echo $value['first_name']." ".$value['last_name']?>
	</h2>
		<p>Registerd at: February 2nd 2015</p>
		<p>User ID: #1</p>
		<p>Email address: <?=$value['email'];?></p>
		<p>I love it here</p>
	</div>
	  <div class="col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-10"></div>
	</div>
	<div class="row">
		 <div class="col-sm-6 col-md-12  col-lg-12"><form action="/messages/new" method="post">
		 	<p><label for="message">Leave a Message for Michael</label></p>
		 	<textarea name="message">Post your message here...</textarea>
	 		<button type ="submit" name="message" value="Post" class="btn btn-success">Post</button>
	 		<input type ="hidden" name ="msg" value="msgpost">
	 	</form>
		 </div>
	</div>
	 	<div class="row">
	 		
	 		<?php foreach ($userinfo as $key => $value) {

	 			echo "<div class='col-sm-6 col-md-12  col-lg-1 col-lg-offset-1 message'>".$value['message']."Left by:".$value['message_sender_first'].$value['message_sender_last']."</div>";}?>
	 		</div>
	 	</div>
		 <div class="col-sm-6 col-md-12  col-lg-10 col-lg-offset-2"><form action="/messages/new" method="post">
		 </div>

		 <?php foreach ($userinfo as $key => $value) {
	 			echo "<div class='col-sm-6 col-md-12  col-lg-10 col-lg-offset-2'>".$value['comment']."Commented by: ".$value['comment_sender_first'].$value['comment_sender_last']."</div>
		 	";}?>
		 	<div class='col-sm-6 col-md-12  col-lg-10 col-lg-offset-1 comment'>
		 	<p><label for="message">Leave a comment</label></p>
		 	<form action='/messages/new' method='post'>
		 	<textarea name="message">Post your message here...</textarea>
	 		<button type ="submit" name="message" value="Post" class="btn btn-success">Post</button>
	 		<input type ="hidden" name ="msg" value="msgpost">
	 	</form>
	 	</div>
		 </div>	
	</div>
</div>
</body>
</html>