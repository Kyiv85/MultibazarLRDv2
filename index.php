<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>MultibazarLRD</title>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">MultibazarLRD</a>
        </div>
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Repositorio de pruebas</h1>
            <p>Este es un repositorio de proyectos personales de Daniel Delgado para ser reutilizados, y/o compartidos. 
      Esto no es una página oficial, solo experimental con fines académicos. Las distintas pruebas están desarrolladas
      básicamente con PHP/MySQL, orientados a sistemas Unix/Linux que son los que más he trabajado.
      En otros proyectos personales también he manejado Oracle, PostgreSQL y Python</p>
          </div>
          <div class="col-md-12">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="row">
            <div class="col-md-12">
            <h1>Mis tecnologías favoritas:</h1>
            </div>
            <div class="col-md-6">
              <h2>PHP</h2>
            <img src="img/php.jpg" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6">
              <h2>Python</h2>
            <img src="img/python.png" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6">
              <h2>Linux</h2>
            <img src="img/linux.jpg" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6">
              <h2>MySQL</h2>
            <img src="img/mysql.png" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6">
              <h2>PostgreSQL</h2>
            <img src="img/postgres.jpg" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-md-6">
              <h2>Oracle</h2>
            <img src="img/oracle.jpg" width="400" height="200" />
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group"> 
            <a href="#" class="list-group-item active">Home</a>
            <?php
            $array = array('/Banesco/index.php', '/Comunitaria/home.html', '/ControlAsistencia/index.html', '/EventosInfantiles/index.php', '/Mensajeria/index.html', '/MusicBox/index.html', '/PruebaFact/index.php', '/Restaurant/index.html');
            foreach ($array as $i => $value) {
              echo '<a href="'.$value.'" class="list-group-item">Proyecto '.($i+1).'</a>';
            } 
            ?>
          </div>
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <a class="twitter-timeline" href="https://twitter.com/Kyiv85" data-widget-id="565351024136032256">Tweets por el @Kyiv85.</a>
          <script>
            !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
            if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
          </script>
        </div><!--/.sidebar-offcanvas-->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <h4>Sígueme</h4>
          <div class="col-sm-3">
          <a href="https://www.facebook.com/daniel.e.delgadodiaz">
          <img src="img/face.png" width="40" height="40">
          </a>
          </div>
          <div class="col-sm-3">
          <a href="https://plus.google.com/u/0/100568112230376254089/posts">
          <img src="img/google.png" width="40" height="40">
          </a>
          </div>
          <div class="col-sm-3">
          <a href="https://www.linkedin.com/profile/view?id=376593831&trk=nav_responsive_tab_profile_pic">
          <img src="img/linkedin.png" width="40" height="40">
          </a>
          </div>
          <div class="col-sm-3">
          <a href="https://github.com/Kyiv85">
          <img src="img/github.png" width="40" height="40">
          </a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->
      <hr>

      <footer>
        <a href="http://www.000webhost.com/" target="_blank"><img src="img/120x60_powered.gif" alt="Web Hosting" border="0" height="60" width="120"></a></center>
        <p>© MultibazarLRD C.A.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script src="js/offcanvas.js"></script>
  

</body></html>