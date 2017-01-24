<!DOCTYPE html>
<html lang="en">
<head>
<link rel="apple-touch-icon" sizes="57x57" href="image/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="image/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="image/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="image/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="image/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="image/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="image/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="image/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="image/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="image/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="image/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="image/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="image/favicon/favicon-16x16.png">
<link rel="manifest" href="image/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Automation | Web Design</title>

<!--CSS File -->	
	<link href="bootstrap-3.3.6-dist/css/bootstrap-theme.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.css" rel="stylesheet">
    <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/leaflet.css" rel="stylesheet">
    
   <!--CSS JQuery -->
        
	
    <!--AngularJS -->
	
    <script src="angular-1.5.5/angular.js"></script>
    <script src="angular-1.5.5/angular.min.js"></script>
    <script src="angular-1.5.5/angular-animate.js"></script>
    <script src="angular-1.5.5/angular-animate.min.js"></script>
    <script src="angular-1.5.5/angular-touch.min.js"></script>
    <script src="angular-1.5.5/angular-touch.min.js"></script>
    <script src="angular-1.5.5/angular-resource.min.js"></script>
    <script src="angular-1.5.5/angular-resource.js"></script>
	<!--AngularJS Route -->
	<script src="js/vendor/angular-route.min.js"></script>
    <script src="js/vendor/angular-route.js"></script>
    <!--JQuery -->
    <script src="js/jquery-1.11.3.min.js"></script> 
    <script src="js/vendor/ui-bootstrap-1.3.3.min.js"></script> 
    <script src="js/vendor/ui-bootstrap-tpls-1.3.3.min.js"></script>
   	    
    <!-- Bootstrap -->
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.js"></script>
          

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body ng-app="lfelippe">
<!-- Google analytics -->
<?php include_once("analyticstracking.php") ?>

<div id="dropdown-scrollable-container" style="height: auto; overflow: auto;">

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div><wbr><wbr>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
   		<li>
        	<h4>lfelippe</h4>
        </li>
        <li><img src="image/favicon/favicon-32x32.png" >
        </li>
        <li>
        
            <div id="dropdown-long-content">
            	<div id="dropdown-hidden-container">
              		<div class="btn-group" uib-dropdown dropdown-append-to-body>
                		<button id="btn-append-to-to-body" type="button" class="btn btn-primary" uib-dropdown-toggle>
                  Options <span class="caret"></span>
                		</button>
                		<ul class="dropdown-menu" uib-dropdown-menu role="menu" aria-labelledby="btn-append-to-to-body">
                  			<li role="menuitem"><a href="#/">Home</a></li>
                            <li role="menuitem"><a href="#/resume">Resume</a></li>
                  			<li role="menuitem"><a href="#/more">Learm More</a></li>
                  			<li class="divider"></li>
                            <li role="menuitem"><a href="#/solicitacao">PIM</a></li>
                		</ul>
              		</div>
            	</div>
          </div>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <script type="text/ng-template" id="dropdown.html">
        <ul class="dropdown-menu" uib-dropdown-menu role="menu" aria-labelledby="button-template-url">
          <li role="menuitem"><a href="#">Action in Template</a></li>
          <li role="menuitem"><a href="#">Another action in Template</a></li>
          <li role="menuitem"><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li role="menuitem"><a href="#">Separated link in Template</a></li>
        </ul>
    </script>




<div ng-view></div>
<hr>
<div class="section well">
	<div class="container">
   	 	<div class="row">
			<div class="col-lg-4 col-md-4">
            	
        	</div>
			<div class="col-lg-4 col-md-4">
				<h3 class="text-center">GET IN TOUCH</h3>
          		<address class="text-center">
  					<strong>contato@lfelippe.com.br</strong>
                    <h5>Automation engineer with experience in industrial processes and software development for test and process control, commited to provide suitable solutions focused on cost reduction at a low investiment. For more information about my experience, check <a href="#/resume"> my resume</a></h5>
				</address>
			</div>
            <div class="col-lg-4 col-md-4">
            	
        	</div>
		</div>
	</div>
</div>
  <footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © lfelippe. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!--<script src="js/jquery-1.11.3.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!--<script src="js/bootstrap.js"></script> -->

<!-- Modules -->
<script type="text/javascript" src="js/app.js"></script>
 
<!-- Controllers -->

<!-- Services -->
 
 <!-- Directives -->
 
<!-- Google Analytics --> 
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83301506-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>