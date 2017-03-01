<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="all">
<title>Near Earth Objects Web Service</title>
<meta name="description" content="NASA's Near-Earth Object Web Services (NeoWs). Data related to Earth impact risk, close-approaches, and much more.">
<meta name="keywords" content="near earth space astronomical objects, solar system objects, asteriods, meteor storms, meteors, comets">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/basic.css">
<link rel="stylesheet" href="css/font-awesome.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/jquery.fancybox-buttons.css">
<link rel="stylesheet" href="css/jquery.fancybox-thumbs.css">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/head.php"); ?>
<script>
$(document).ready(function() {
    var stickyNavTop = $('.quick-nav').offset().top;
    var stickyNav = function(){
    var scrollTop = $(window).scrollTop();   
    if (scrollTop > stickyNavTop) { 
    $('.quick-nav').addClass('sticky');
    } else {
    $('.quick-nav').removeClass('sticky'); 
    }
    };
    stickyNav();
    $(window).scroll(function() {
    stickyNav();
    });
});
$(document).ready(function() {
    $.fancybox({
        href: "http://www.petehanna.com/sentient/birthday-form.html",
        type: "iframe",
		width: 500,
    });
})
</script>
<?php $page = "home"; ?>
</head>
<body>
<div id="main">
<div class="parallax-window hero4">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/hero.php"); ?>
</div>
<div class="header-wrapper">
<header class="quick-nav">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/nav-main.php"); ?>
</header><!-- header -->
</div>
<section id="content" class="row centered">
<div id="leftPanel" class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
<!-- Quick Links Panel (begin) -->
	<div id="navSide">
		<h4>Quick Links</h4>
      	<ul>
        	<li><a href="/sentient/about/neo-basics.php">NEO Basics</a></li>
        	<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
        	<li><a href="/sentient/ca/fireballs.php">Fireballs</a></li>
        	<li><a href="/sentient/orbits/nhats.php">Accessible NEAs</a></li>
        	<li><a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">NASA PDCO</a></li>
        	<li><a href="http://www.jpl.nasa.gov/asteroidwatch/" target="_blank">Asteroid Watch</a></li>
      	</ul>
    </div>
<!-- Quick Links Panel (end) -->
    <hr>
<!-- Next Notable Close Approach Panel (begin) -->
    <div id="nextNeoCa">
	<script src="js/next_ca.js"></script>
		<h4>Upcoming NEO</h4>
		<table id="next_ca"></table>
      	<p class="see-more">See our <a href="/ca/">Close Approach Tables</a> for more on this object and other NEOs.</p>
    </div>
<!-- Next Notable Close Approach Panel (end) -->
<!-- NEO Stats Panel (begin) -->
	<div id="neoStats">
	<script src="js/nea_od_stats.js"></script>
		<h4>NEA Stats:<br><span class="no-wrap nea-stats-date" id="nea_stats_date"></span></h4>
      <table id="nea_totals"></table>
      <p class="see-more">
        See our <a href="/stats/">Discovery Statistics</a> page for more information.
      </p>
      <table id="nea_od_stats"></table>
    </div>
<!-- NEO Stats Panel (end) -->
</div>
<div id="mainPanel" class="col-xs-12 col-sm-9 col-md-9 col-lg-10 no-padding">
<!-- Tools Panel (begin) -->
	<div class="spotlight-topics">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 no-padding">
   			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp1-firefalls.jpg" alt="">
        		<div class="overlay">
       			  <h2>Recent Large<br>Meteor Explosions</h2>
           			<a class="info" href="ca/fireball.php">Learn More</a>
        		</div>
    		</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 no-padding">
			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp2-neo-threat.jpg" alt="">
        		<div class="overlay">
       			  <h2>NEO Threat<br>Assessment System</h2>
           			<a class="info" href="risk/sentry.php">Learn More</a>
        		</div>
    		</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 no-padding">
			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp3-neo-deflecting.jpg" alt="">
        		<div class="overlay">
       			  <h2>Deflecting Earth<br>Threatening NEOs</h2>
           			<a class="info" href="pd/nda.php">Learn More</a>
       		  </div>
   		  </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 no-padding">
			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp4-neo-stats.jpg" alt="">
        		<div class="overlay">
       			  <h2>NEO Discovery<br>Statistics</h2>
           			<a class="info" href="#">Learn More</a>
       		  </div>
   		  </div>
        </div>
	</div>
<!-- Tools Panel (end) -->
<!-- Top News Panel (begin) -->
	<div class="top-news-panel">
	<script src="js/top_news.js"></script>
		<h4>Top News Stories</h4>
		<div id="top_news">
		</div>
	</div>
<!-- Top News Panel (end) -->
</div>
</section>
<div class="push"></div>
</div><!-- main -->
<footer>
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/footer.php"); ?>
</footer><!-- footer -->
<script src="js/fancybox/jquery.fancybox.js"></script>
<script src="js/fancybox/jquery.fancybox-buttons.js"></script>
<script src="js/fancybox/jquery.fancybox-thumbs.js"></script>
<script src="js/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
<script>window.jQuery || document.write</script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
</body>
</html>