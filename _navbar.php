<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SquareOne</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#">About Us</a></li>
      </ul>
      <ul class="nav navbar-nav pull-right">
      	<?php
          if(!isset($uid)){
            ?>
              <li><a data-toggle="modal" data-target="#signinModal">Sign In</a></li>
            <?php
          }
          else {
            ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$username?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Account Details</a></li>
                  <li><a href="index.php" onclick="signOut()">Sign Out</a></li>
              </li>
            <?php
          }
        ?>
      </ul>
      <!-- navbar-search -->
      <!-- <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" id="home-search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php include("_signinmodal.php"); ?>