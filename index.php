<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<?php 
 require $_SERVER["DOCUMENT_ROOT"].'/vendor/autoload.php';	
?>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Atum Animations</title><!-- Latest compiled and minified CSS -->
    
    <!-- Bootstrap Core CSS -->
<link href="css/full-slider.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    
    <!-- Own style custom page-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <!-- All css style forms and animations -->
    <link rel="stylesheet" type="text/css" href="css/forms/square.css">
    <link rel="stylesheet" type="text/css" href="css/forms/egg.css">
    <link rel="stylesheet" type="text/css" href="css/forms/diamond.css">
 </head>

<body>
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
      <a class="navbar-brand" href="#"><strong>AtumAnimations</strong></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav navbar-right">
          <li><a class="GitHubLink" href="https://github.com/jbuisine/AtumAnimations/"><img src="imgs/github.png" alt="GitHub Logo"/><strong> View on GitHub</strong></a></li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    
    <div id="Carousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="Carousel" data-slide-to="0" class="active"></li>
            <li data-target="Carousel" data-slide-to="1"></li>
            <li data-target="Carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item item1 active">
	            <div id="separator"></div>
				<div class="container container-custom">
					<h2>Square animation</h2>
						<hr />

						<div class="div1">
							<div class="square"></div>
        				</div>
    			</div>
	        </div>
           <div class="item item2">
	           	<div id="separator"></div>
				<div class="container container-custom">
					<h2>Diamond animation</h2>
						<hr />

						<div class="div1">
							<div class="diamond"></div>
        				</div>
    			</div>
           
           </div>
           <div class="item item3">
             	<div id="separator"></div>
				<div class="container container-custom">
					<h2>Egg animation</h2>
						<hr />

						<div class="div1">
							<div class="egg"></div>
        				</div>
    			</div>
           </div>
        </div>

        <a class="left carousel-control" href="#Carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#Carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>
      
		 
    
        <!-- jQuery -->
    <script src="js/jquery.js" type="text/javascript">
</script><!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js" type="text/javascript">
</script><!-- Script to Activate the Carousel -->
</body>
</html>
