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
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/basic.css">
<link rel="stylesheet" href="../css/font-awesome.css">
<link rel="stylesheet" href="../css/jquery.fancybox.css">
<link rel="stylesheet" href="../css/jquery.fancybox-buttons.css">
<link rel="stylesheet" href="../css/jquery.fancybox-thumbs.css">
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
</script>
<?php $page1 = "About"; ?>
<?php $page2 = "NEO Studies"; ?>
</head>
<body>
<div id="main">
<div class="parallax-window hero5">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/hero.php"); ?>
</div>
<div class="header-wrapper quick-nav expanded">
<header class="quick-nav">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/nav-main.php"); ?>
<div id="breadCrumb">
	<div class="row centered">
		<ul class="breadcrumb">
    		<li><a href="/sentient/">Home</a></li>
    		<li><a href="index.php"><?php echo ($page1); ?></a></li>
    		<li class="active"><?php echo ($page2); ?></li>
		</ul>
	</div>
</div>
</header><!-- header -->
</div>
<section id="content" class="row centered">
<div id="mainPanel" class="pull-right col-xs-12 col-sm-9 col-md-9 col-lg-10">
<!-- Main Content (begin) -->
	<h1>Center for NEO Studies (CNEOS)</h1>
	<p>The JPL Center for NEO Studies (CNEOS) computes high-precision orbits
	for Near-Earth Objects (NEOs) in support of
	NASA’s <a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">Planetary Defense Coordination Office</a>.
	These orbit solutions are used to predict NEO close approaches to Earth,
	and produce comprehensive assessments of NEO impact probabilities over the next century.
	Continually updated calculations of orbital parameters, close approaches, impact risks,
	discovery statistics, and mission designs to possibly
	<a href="/nhats/">human-accessible asteroids</a> are made available on this website and to user scripts
	through an <a href="https://ssd-api.jpl.nasa.gov/" target="_blank">Application Program Interface</a> (API).
	CNEOS supports observers through the <a href="http://ssd.jpl.nasa.gov/?horizons" target="_blank">JPL Horizons</a>
	high precision ephemeris computation capability.</p>
	<p>CNEOS is the home of JPL’s <a href="/sentient/risk/sentry">Sentry</a> impact monitoring system,
	which performs long-term analyses of possible future orbits of hazardous asteroids,
	searching for impact possibilities over the next century.
	Similarly, the CNEOS <a href="/sentient/risk/scout">Scout</a> system monitors the MPC webpages of new potential asteroid
	discoveries and computes the possible range of future motions even before these objects have been
	confirmed as discoveries.</p>
	<p>In the event of a predicted impact such as for 2008 TC3, CNEOS predicts the impact time,
	location and geometry.
	Hypothetical impact scenarios are developed for use at the Planetary Defense Conferences
	and similar exercises at other meetings.
	In collaboration with the Aerospace Corp., CNEOS provides the
	<a href="/nda/">NEO Deflection App</a>, which computes how far a hypothetical asteroid would move
	if deflected by a known amount at an earlier time.</p>
	<p>CNEOS provides a data page for every NEO, giving its orbital parameters, a close approach summary,
	an interactive orbit viewer and other ancillary data such as discovery circumstances.
	Parameters are archived in the JPL Small-Body DataBase (SBDB),
	which can be searched using a highly configurable
	<a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">filtering tool</a>.</p>
<!-- Main Content (end) -->
</div>
<div id="leftPanel" class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
<!-- Quick Links Panel (begin) -->
	<div id="navSide">
		<h4>Quick Links</h4>
      	<ul>
        	<li><a href="/sentient/about/neo-basics.php">NEO Basics</a></li>
        	<li><a href="/sentient/about/search-program.php">Search Program</a></li>
        	<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
        	<li><a href="/sentient/ca/fireballs.php">Fireballs</a></li>
        	<li><a href="/sentient/orbits/nhats.php">Accessible NEAs</a></li>
        	<li><a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">NASA PDCO</a></li>
        	<li><a href="http://www.jpl.nasa.gov/asteroidwatch/" target="_blank">Asteroid Watch</a></li>
      	</ul>
    </div>
<!-- Quick Links Panel (end) -->
</div>
</section>
<div class="push"></div>
</div><!-- main -->
<footer>
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/footer.php"); ?>
</footer><!-- footer -->
</body>
</html>