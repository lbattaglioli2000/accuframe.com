<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/index.php">AccuFrame<sup><small>&reg;</small></sup> Energy Seal</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
         <li
            <?php
                if($_SESSION['currentPage'] === "home"){
                    echo "class='active'";
                }
            ?>
         >
              <a href="/index.php">Home</a>
        </li>
        <li
            <?php
                if($_SESSION['currentPage'] === "about"){
                    echo "class='active'";
                }
            ?>
        >
            <a href="/coming-soon/index.php">About</a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Contact us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li 
                <?php
                if($_SESSION['currentPage'] === "contact"){
                    echo "class='active'";
                }
            ?>
                ><a href="/contact/form/index.php">Contact form</a></li>
            <li <?php
                if($_SESSION['currentPage'] === "survey"){
                    echo "class='active'";
                }
            ?>
                ><a href="/coming-soon/index.php">10 second survey</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>