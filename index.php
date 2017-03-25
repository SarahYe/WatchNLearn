<?php session_start();
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/portfolio/eye4.ico">

    <title>WatchNLearn</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Static navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">WatchNLearn</a>
          <a href="index.php"><img src="assets/img/portfolio/eye4.png" class="img-responsive" width="50" height="50"></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Level <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="beginner.php"> Beginner </a></li>
                <li><a href="intermediate.php"> Intermediate </a></li>
                <li><a href="advanced.php"> Advanced </a></li>
              </ul>
            </li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3">
					<h4>WELCOME TO</h4>
					<h1> <span id="WatchNLearn">WatchNLearn</span></h1>
					<h4>blablaaaaaaaaaaaaa</h4>
           <br>
          <form class="col-lg-9" method="post" action="index.php#level">
              <div class="input-group input-group-lg col-sm-offset-4 col-sm-4">
              <input type="text" class="center-block input-lg" name="nom2" title="Enter your name." placeholder="Enter your name"> <br/>
              <a href="index.php#level"><span class="input-group-btn"><button class="btn btn-lg btn-primary" type="submit"> Enter </button></span></a>
              </div>
          </form>
				</div>
			</div><! --/row -->
	    </div> <!-- /container -->
	</div><! --/headerwrap -->
	
	<section id="level"></section>
	<div class="container">
		<div class="row centered mt mb">

      <div class="page-header">
        <h1>Levels</h1>
      </div>
			
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="beginner.php"><img src="assets/img/portfolio/beginner2.jpg" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="intermediate.php"><img src="assets/img/portfolio/intermediate2.png" class="img-responsive"></a>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 gallery">
				<a href="advanced.php"><img src="assets/img/portfolio/advanced1.jpg" class="img-responsive" class = "img-circle"></a>
			</div>
		</div>
	</div><! --/container -->
	

	<div id="footerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-6">
					<p><b>Sarah YESUFU & Rym BELGHITH</b></p>
				</div>

				<div class="col-lg-1">
					 <a href="index.php"><img src="assets/img/portfolio/eye4.png" class="img-responsive" alt="WatchNLearn" width="50" height="50"></a>
				</div>
				<div class="col-lg-5">
					<p>TELECOM Nancy</p>
				</div>
			</div>
		</div>
	</div><! --/footerwrap -->
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
