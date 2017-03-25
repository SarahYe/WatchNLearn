
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
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Level <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class="active"><a href="beginner.php"> Beginner </a></li>
                <li><a href="intermediate.php"> Intermediate </a></li>
                <li><a href="advanced.php"> Advanced </a></li>
              </ul>
            </li>
            <li><a href="about.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  
  <section id="works"></section>
  <div class="container">
    <div class="row centered mt mb">

      <div class="page-header">
        <h2>Theme. Time - What time is it?</h2>
      </div>

      <div class="row">
        <div class="col-lg-9">
            <iframe width="600" height="400" src="https://www.youtube.com/embed/cs81UdOc9TU" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="col-lg-3">
         <form method="post" action='vb1.php'>
          <p>
            Question 1: <br/>
            <div class="radio">
            <label><input type="radio" name="q1vb1" value="r1q1vb1"/>Option 1</label> <!--q1vb1: question 1 of video 1 of beginner ; r1q1vb1: option 1 of q1vb1-->
            </div>
            <div class="radio">
              <label><input type="radio" name="q1vb1" value="r2q1vb1"/>Option 2</label>
            </div>
            <div class="radio">
            <label><input type="radio" name="q1vb1" value="r3q1vb1"/>Option 3</label>
            </div>
            <br/>

            Question 2: <br/>
            <div class="radio">
            <label><input type="radio" name="q2vb1" value="r1q2vb1"/>Option 1</label>
            </div>
            <div class="radio">
            <label><input type="radio" name="q2vb1" value="r2q2vb1"/>Option 2</label>
            </div>
            <div class="radio">
               <label><input type="radio" name="q2vb1" value="r3q2vb1"/>Option 3</label>
            </div>
            <br/>

            Question 3: <br/>
            <div class="radio">
              <label><input type="radio" name="q3vb1" value="r1q3vb1"/>Option 1</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="q3vb1" value="r2q3vb1"/>Option 2</label>
            </div>
            <div class="radio">
            <label><input type="radio" name="q3vb1" value="r3q3vb1"/>Option 3</label>
            </div>
          </p>
          <input type="submit" value="Check your answers"/>
         </form>
        </div>
      </div> <!--/fin row-->

      <div class="row">
      <link href="resultat.css" rel="stylesheet">
        <div class="col-lg-12 centered">
          <h3> Results </h3>
<?php

//On assigne la valeur 0 a $note
$note=0;

//Si la variable $_POST['q1vb1'] cheval existe
if (isset($_POST['q1vb1']))
 {
  //On securise les variables
  $q1vb1=htmlentities($_POST['q1vb1']);

  if ($q1vb1=='r1q1vb1')
   { 
     $note=$note+1;
     echo 'Question 1: <a class="Correct"> Correct </a>';
     echo "<br />";
   }
   else
   {
    echo 'Question 1:<a class="Incorrect">Incorrect </a>';
    echo "<br />";
    echo "<p> The right answer is ... </p>";
   }
}

if (isset($_POST['q2vb1']))
 {
  $q2vb1=htmlentities($_POST['q2vb1']);

  if ($q2vb1=='r2q2vb1')
   { 
     $note=$note+1;
     echo 'Question 2:<a class="Correct"> Correct </a>';
     echo "<br />";
   }
   else
   {
    echo 'Question 2:<a class="Incorrect"> Incorrect </a>';
    echo "<br />";
    echo "<p> The right answer is ... </p>";
   }
}

if (isset($_POST['q3vb1']))
 {
  $q3vb1=htmlentities($_POST['q3vb1']);

  if ($q3vb1=='r3q3vb1')
   { 
     $note=$note+1;
     echo 'Question 3:<a class="Correct"> Correct </a>';
     echo "<br />";
   }
   else
   {
    echo 'Question 3:<a class="Incorrect"> Incorrect </a>';
    echo "<br />";
    echo "<p> The right answer is ... </p>";
   }
}

switch ($note) {
    case 3: 
    echo "Result: 3/3";
    echo "<br />";
    // if (isset($_SESSION['nom']))
    // {
    //   // $nom=htmlentities($_SESSION['nom']);
    echo 'GREAT !';
    //echo $_POST['nom'];
    // } else {
    //   echo "GREAT !";
    // }
    echo "<br/>";
    break;

    case 2:
    echo "Result: 2/3";
    echo "<br />";
    echo "Well done !";
    echo "<br />";
    break;

    case 1:
    echo "Result: 1/3";
    echo "<br />";
    echo "Only one right answer. Watch again the video !";
    echo "<br />";
    break;

    case 0:
    echo "Result : 0/3";
    echo "<br />";
    echo "All the answers are wrong. Watch again the video !";
    echo "<br />";
    break;

// default:
// echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

?>
      </div>
    </div>
    <ul class="pager">
        <li class="previous"><a href="vb11.php">Previous</a></li>
        <li class="next"><a href="vb33.php">Next</a></li>
    </ul>
    </div>
  </div>

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
  </div><!--/footerwrap -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>