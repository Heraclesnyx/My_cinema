<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="my_cinema.css">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title>PHP_my_cinema</title>


</head>

<body>


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
        <!-- <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> -->
      </button>
      <a class="navbar-brand" href="my_cinema.php">My cinema</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" action="cinema.php" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="film" name="titre">
          <input type="text" class="form-control" placeholder="genre" name="genre">
          <input type="text" class="form-control" placeholder="distributeur" name="distrib">
          <input type="text" class="form-control" placeholder="film à l'affiche" name="projection">
        </div>
        <button type="submit" class="btn btn-default">Valider</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Membres <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="abonnement.php">Abonnement</a></li>
            <li><a href="#">Connexion</a></li>            
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<footer>
  <!-- container ends here --> 
</footer>

<section class="socials">
  <ul class="socials fr">
    <li><a href="#"><img src="images/twitter.png" class="poshytip" title="Twitter"  alt="" /></a></li>
    <li><a href="#"><img src="images/facebook.png" class="poshytip" title="Facebook" alt="" /></a></li>
    <li><a href="#"><img src="images/google.png" class="poshytip" title="Google" alt="" /></a></li>
  </ul>
</section>

</html>