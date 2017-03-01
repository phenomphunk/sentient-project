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
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    $(function(){
        if (navigator.userAgent.match(/(iPod|iPhone|iPad|Android)/)) {
          $('#ios-notice').removeClass('hidden');
          $('.parallax-window').height( $(window).height() * 0.5 | 0 );
        } else {
          $(window).resize(function(){
            var parallaxHeight = Math.max($(window).height() * 0.7, 200) | 0;
            $('.parallax-window').height(parallaxHeight);
          }).trigger('resize');
        }
      });
</script>
<script src="js/parallax.min.js"></script>-->
<?php $page = "home"; ?>
</head>
<body>
<div id="main">
<!--<div class="parallax-window" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="http://www.petehanna.com/sentient/images/hero3.jpg" data-natural-width="1400" data-natural-height="900"></div>-->
<div class="parallax-window hero4"></div>
<div class="header-wrapper">
<header class="quick-nav">
<?php include($_SERVER['DOCUMENT_ROOT']."/sentient/includes/nav-main.php"); ?>
</header><!-- header -->
</div>
<section id="content" class="row centered">
<!-- Quick Links Panel (begin) -->
<div id="leftPanel" class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
    <div id="navSide">
    <!--<form name="neoLookupForm" novalidate="" class="simple-form ng-pristine ng-valid ng-valid-pattern">
      <div ng-class="{'error' : neoLookupForm.neoLookupStr.$invalid}">
        <input type="text" ng-model="neoLookupStr" name="neoLookupStr" placeholder="Lookup NEO designation" pattern="^[0-9,A-Z,a-z,_ \.\-*?\/]+$|[A-Z,a-z][A-Z,a-z, \.'~\-]+$" ng-keyup="neoLookupForm.$valid &amp;&amp; $event.keyCode == 13 &amp;&amp; neoLookupValidation(neoLookupStr)" class="ng-pristine ng-untouched ng-valid ng-valid-pattern">
        <small ng-show="neoLookupForm.neoLookupStr.$invalid" class="error ng-hide">Invalid character in designation</small>
      </div>
      </form>-->
      <!--<input type="text" id="right-label" placeholder="Lookup NEO designation">-->
      <h4>Quick Links</h4>
      <ul>
        <li><a href="/sentient/about/neos-basics.php">NEO Basics</a></li>
        <li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
        <li><a href="/sentient/ca/fireballs.php">Fireballs</a></li>
        <li><a href="/sentient/orbits/nhats.php">Accessible NEAs</a></li>
        <li><a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">NASA PDCO</a></li>
        <li><a href="http://www.jpl.nasa.gov/asteroidwatch/" target="_blank">Asteroid Watch</a></li>
        <!--<li><a href="/faq.php">FAQ</a></li>-->
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
        See our <a href="/stats/">Discovery Statistics</a> page<br>for more information.
      </p>
      <table id="nea_od_stats"></table>
    </div>
<!-- NEO Stats Panel (end) -->
</div>
<!-- Quick Links Panel (end) -->
<div id="mainPanel" class="col-xs-12 col-sm-8 col-md-8 col-lg-9 no-padding">
<!-- Tools Panel (begin) -->
	<div class="spotlight-topics">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
   			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp1-firefalls.jpg" alt="">
        		<div class="overlay">
       			  <h2>Recent Large<br>Meteor Explosions</h2>
           			<a class="info" href="ca/fireball.php">Learn More</a>
        		</div>
    		</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp2-neo-threat.jpg" alt="">
        		<div class="overlay">
       			  <h2>NEO Threat<br>Assessment System</h2>
           			<a class="info" href="risk/sentry.php">Learn More</a>
        		</div>
    		</div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
			<div class="hovereffect">
        		<img class="img-responsive" src="images/hp3-neo-deflecting.jpg" alt="">
        		<div class="overlay">
       			  <h2>Deflecting Earth<br>Threatening NEOs</h2>
           			<a class="info" href="pd/nda.php">Learn More</a>
       		  </div>
   		  </div>
        </div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 no-padding">
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
			<!--<div class="row top-news top-news-archive">See the <a href="/news/">News Archive</a> for additional stories.</div>-->
		</div>
	</div>
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