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
<?php $page2 = "NEO Basics"; ?>
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
	<h1>NEO Basics</h1>
	<div class="specs">
		<ul class="nav nav-tabs">
    		<li class="active"><a data-toggle="tab" href="#intro">Introduction</a></li>
    		<li><a data-toggle="tab" href="#tab-1">NEO Groups</a></li>
    		<li><a data-toggle="tab" href="#tab-2">Life on Earth</a></li>
    		<li><a data-toggle="tab" href="#tab-3">Target Earth</a></li>
   			<li><a data-toggle="tab" href="#tab-4">NEAs as Resources</a></li>
 		</ul>
        <div class="tab-content">
    		<div id="intro" class="tab-pane fade in active">
      			<h2>Introduction</h2>
				<p>Near-Earth Objects (NEOs) are comets and asteroids that have been nudged by the gravitational attraction of nearby planets into orbits that allow them to enter the Earth’s neighborhood. Composed mostly of water ice with embedded dust particles, comets originally formed in the cold outer planetary system while most of the rocky asteroids formed in the warmer inner solar system between the orbits of Mars and Jupiter. The scientific interest in comets and asteroids is due largely to their status as the relatively unchanged remnant debris from the solar system formation process some 4.6 billion years ago. The giant outer planets (Jupiter, Saturn, Uranus, and Neptune) formed from an agglomeration of billions of comets and the left over bits and pieces from this formation process are the comets we see today. Likewise, today’s asteroids are the bits and pieces left over from the initial agglomeration of the inner planets that include Mercury, Venus, Earth, and Mars.</p>
				<p>As the primitive, leftover building blocks of the solar system formation process, comets and asteroids offer clues to the chemical mixture from which the planets formed some 4.6 billion years ago. If we wish to know the composition of the primordial mixture from which the planets formed, then we must determine the chemical constituents of the leftover debris from this formation process - the comets and asteroids.</p>				
			</div>
    		<div id="tab-1" class="tab-pane fade">
    			<h2>NEO Groups</h2>
				<div class="col-sm-12 col-md-12 col-lg-5 copy right">
					<p>In terms of orbital elements, NEOs are asteroids and comets with perihelion distance q less than 1.3 au . Near-Earth Comets (NECs) are further restricted to include only short-period comets (i.e., orbital period P less than 200 years). The vast majority of NEOs are asteroids, referred to as Near-Earth Asteroids (NEAs). NEAs are divided into groups (Atira, Aten, Apollo and Amor) according to their perihelion distance (q), aphelion distance (Q) and their semi-major axes (a).                
					<p>Potentially Hazardous Asteroids (PHAs) are currently defined based on parameters that measure the asteroid's potential to make threatening close approaches to the Earth. Specifically, all asteroids with an Earth Minimum Orbit Intersection Distance (MOID) of 0.05 au or less and an absolute magnitude (H) of 22.0 or less are considered PHAs. In other words, asteroids that can't get any closer to the Earth (i.e., MOID) than 0.05 au (roughly 7,480,000 km or 4,650,000 mi) or are smaller than about 140 m (~500 ft) in diameter (i.e., H = 22.0 with assumed albedo of 14%) are not considered PHAs.</p>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-7 no-padding">
				<table>
				  <thead>
					<tr>
					  <th>Group</th>
					  <th>Definition</th>
					  <th>Description</th>
					</tr>
				  </thead>
				  <tbody>
					<tr valign="top">
					  <td>NECs</td>
					  <td nowrap=""><var>q</var>&lt;1.3
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy94" aria-describedby="tooltip-izqssgy94" title="">au</span>
			<br><var>P</var>&lt;200&nbsp;years</td>
					  <td>Near-Earth Comets</td>
					</tr>
					<tr valign="top">
					  <td>NEAs</td>
					  <td nowrap=""><var>q</var>&lt;1.3
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy95" aria-describedby="tooltip-izqssgy95" title="">au</span>
			</td>
					  <td>Near-Earth Asteroids</td>
					</tr>
					<tr valign="top">
					  <td>Atiras</td>
					  <td nowrap=""><var>a</var>&lt;1.0
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy96" aria-describedby="tooltip-izqssgy96" title="">au</span>
			<br><var>Q</var>&lt;0.983
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy97" aria-describedby="tooltip-izqssgy97" title="">au</span>
			</td>
					  <td>NEAs whose orbits are contained entirely with the orbit of the Earth (named after asteroid 163693 Atira).</td>
					</tr>
					<tr valign="top">
					  <td>Atens</td>
					  <td nowrap=""><var>a</var>&lt;1.0
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy98" aria-describedby="tooltip-izqssgy98" title="">au</span>
			<br><var>Q</var>&gt;0.983
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy99" aria-describedby="tooltip-izqssgy99" title="">au</span>
			</td>
					  <td>Earth-crossing NEAs with semi-major axes smaller than Earth's (named after asteroid 2062 Aten).</td>
					</tr>
					<tr valign="top">
					  <td>Apollos</td>
					  <td nowrap=""><var>a</var>&gt;1.0
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9a" aria-describedby="tooltip-izqssgy9a" title="">au</span>
			<br><var>q</var>&lt;1.017
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9b" aria-describedby="tooltip-izqssgy9b" title="">au</span>
			</td>
					  <td>Earth-crossing NEAs with semi-major axes larger than Earth's (named after asteroid 1862 Apollo).</td>
					</tr>
					<tr valign="top">
					  <td>Amors</td>
					  <td nowrap=""><var>a</var>&gt;1.0
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9c" aria-describedby="tooltip-izqssgy9c" title="">au</span>
			<br>1.017&lt;<var>q</var>&lt;1.3
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9d" aria-describedby="tooltip-izqssgy9d" title="">au</span>
			</td>
					  <td>Earth-approaching NEAs with orbits exterior to Earth's but interior to Mars' (named after asteroid 1221 Amor).</td>
					</tr>
					<tr valign="top">
					  <td>PHAs</td>
					  <td nowrap=""><var>MOID</var>&lt;=0.05
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9e" aria-describedby="tooltip-izqssgy9e" title="">au</span>
			<br><var>H</var>&lt;=22.0</td>
					  <td>Potentially Hazardous Asteriods: NEAs whose Minimum Orbit Intersection Distance (MOID) with the Earth is 0.05
			<span data-tooltip="" aria-haspopup="true" class="has-tip" data-selector="tooltip-izqssgy9f" aria-describedby="tooltip-izqssgy9f" title="">au</span>
			 or less and whose absolute magnitude (H) &gt; is 22.0 or brighter.</td>
					</tr>
				  </tbody>
				</table>
			</div>
   			<div class="col-xs-12 col-md-10 col-md-offset-1 no-padding">
    			<img src="http://cneos.jpl.nasa.gov/images/neo_orbit_types.jpg" class="img-responsive" alt="NEA Orbit Types">
  			</div>
    	</div>		
        <div id="tab-2" class="tab-pane fade">
			<h2>Life on Earth</h2>
			<p>Although the exact process by which life formed on Earth is not well understood, the origin of life requires the presence of carbon-based molecules, liquid water and an energy source. Because some Near-Earth Objects contain carbon-based molecules and water ice, collisions of these object with Earth have significant agents of biologic as well as geologic change.</p>
			<p>For the first billion years of Earth’s existence, the formation of life was prevented by a fusillade of comet and asteroid impacts that rendered the Earth’s surface too hot to allow the existence of sufficient quantities of water and carbon-based molecules. Life on Earth began at the end of this period called the late heavy bombardment, some 3.8 billion years ago. The earliest known fossils on Earth date from 3.5 billion years ago and there is evidence that biological activity took place even earlier - just at the end of the period of late heavy bombardment. So the window when life began was very short. As soon as life could have formed on our planet, it did. But if life formed so quickly on Earth and there was little in the way of water and carbon-based molecules on the Earth’s surface, then how were these building blocks of life delivered to the Earth’s surface so quickly? The answer may involve the collision of comets and asteroids with the Earth, since these objects contain abundant supplies of both water and carbon-based molecules.</p>
			<p>Once the early rain of comets and asteroids upon the Earth subsided somewhat, subsequent impacts may well have delivered the water and carbon-based molecules to the Earth’s surface - thus providing the building blocks of life itself. It seems possible that the origin of life on the Earth’s surface could have been first prevented by an enormous flux of impacting comets and asteroids, then a much less intense rain of comets may have deposited the very materials that allowed life to form some 3.5 - 3.8 billion years ago.</p>
			<p>Comets have this peculiar duality whereby they first brought the building blocks of life to Earth some 3.8 billion years ago and subsequent cometary collisions may have wiped out many of the developing life forms, allowing only the most adaptable species to evolve further. It now seems likely that a comet or asteroid struck near the Yucatan peninsula in Mexico some 65 million years ago and caused a massive extinction of more than 75% of the Earth’s living organisms, including the dinosaurs. At the time, the mammals were small burrowing creatures that seemed to survive the catastrophic impact without too much difficulty. Because many of their larger competitors were destroyed, these mammals flourished. Since we humans evolved from these primitive mammals, we may owe our current preeminence atop Earth’s food chain to collisions of comets and asteroids with the Earth.</p>				
    	</div>
       	<div id="tab-3" class="tab-pane fade">
			<h2>Target Earth</h2>
			<p>On a daily basis, about one hundred tons of interplanetary material drifts down to the Earth’s surface. Most of the smallest interplanetary particles that reach the Earth’s surface are the tiny dust particles that are released by comets as their ices vaporize in the solar neighborhood. The vast majority of the larger interplanetary material that reaches the Earth’s surface originates as the collision fragments of asteroids that have run into one another some eons ago.</p>
			<p>With an average interval of about 10,000 years, rocky or iron asteroids larger than about 100 meters would be expected to reach the Earth’s surface and cause local disasters or produce the tidal waves that can inundate low lying coastal areas. On an average of every several hundred thousand years or so, asteroids larger than a kilometer could cause global disasters. In this case, the impact debris would spread throughout the Earth’s atmosphere so that plant life would suffer from acid rain, partial blocking of sunlight, and from the firestorms resulting from heated impact debris raining back down upon the Earth’s surface. Since their orbital paths often cross that of the Earth, collisions with near-Earth objects have occurred in the past and we should remain alert to the possibility of future close Earth approaches. It seems prudent to mount efforts to discover and study these objects, to characterize their sizes, compositions and structures and to keep an eye upon their future trajectories.</p>
			<p>Because of the ongoing search efforts to find nearly all the large NEOs, objects will occasionally be found to be on very close Earth approaching trajectories. Great care must then be taken to verify any Earth collision predictions that are made. Given the extremely unlikely nature of such a collision, almost all of these predictions will turn out to be false alarms. However, if an object is verified to be on an Earth colliding trajectory, it seems likely that this collision possibility will be known several years prior to the actual event. Given several years warning time, existing technology could be used to deflect the threatening object away from Earth. The key point in this mitigation process is to find the threatening object years ahead of time so that an orderly international campaign can be mounted to send spacecraft to the threatening object. One of the techniques suggested for deflecting an asteroid includes nuclear fusion weapons set off above the surface to slightly change the asteroid’s velocity without fracturing it. High speed neutrons from the explosion would irradiate a shell of material on the surface of the asteroid facing the explosion. The material in this surface shell would then expand and blow off, thus producing a recoil upon the asteroid itself. A very modest velocity change in the asteroid’s motion (only a few millimeters per second), acting over several years, can cause the asteroid to miss the Earth entirely. However, the trick is to gently nudge the asteroid out of harm’s way and not to blow it up. This latter option, though popular in the movies, only creates a bigger problem when all the pieces encounter the Earth. Another option that has been discussed includes the establishment of large solar sails on a small threatening object so that the pressure of sunlight could eventually redirect the object away from its predicted Earth collision.</p>
			<p>No one should be overly concerned about an Earth impact of an asteroid or comet. The threat to any one person from auto accidents, disease, other natural disasters and a variety of other problems is much higher than the threat from NEOs. Over long periods of time, however, the chances of the Earth being impacted are not negligible so that some form of NEO insurance is warranted. At the moment, our best insurance rests with the NEO scientists and their efforts to first find these objects and then track their motions into the future. We need to first find them, then keep an eye on them.</p>
    	</div>
      	<div id="tab-4" class="tab-pane fade">
			<h2>NEAs as Resources</h2>
			<p>On a daily basis, about one hundred tons of interplanetary material drifts down to the Earth’s surface. Most of the smallest interplanetary particles that reach the Earth’s surface are the tiny dust particles that are released by comets as their ices vaporize in the solar neighborhood. The vast majority of the larger interplanetary material that reaches the Earth’s surface originates as the collision fragments of asteroids that have run into one another some eons ago.</p>
			<p>With an average interval of about 10,000 years, rocky or iron asteroids larger than about 100 meters would be expected to reach the Earth’s surface and cause local disasters or produce the tidal waves that can inundate low lying coastal areas. On an average of every several hundred thousand years or so, asteroids larger than a kilometer could cause global disasters. In this case, the impact debris would spread throughout the Earth’s atmosphere so that plant life would suffer from acid rain, partial blocking of sunlight, and from the firestorms resulting from heated impact debris raining back down upon the Earth’s surface. Since their orbital paths often cross that of the Earth, collisions with near-Earth objects have occurred in the past and we should remain alert to the possibility of future close Earth approaches. It seems prudent to mount efforts to discover and study these objects, to characterize their sizes, compositions and structures and to keep an eye upon their future trajectories.</p>
			<p>Because of the ongoing search efforts to find nearly all the large NEOs, objects will occasionally be found to be on very close Earth approaching trajectories. Great care must then be taken to verify any Earth collision predictions that are made. Given the extremely unlikely nature of such a collision, almost all of these predictions will turn out to be false alarms. However, if an object is verified to be on an Earth colliding trajectory, it seems likely that this collision possibility will be known several years prior to the actual event. Given several years warning time, existing technology could be used to deflect the threatening object away from Earth. The key point in this mitigation process is to find the threatening object years ahead of time so that an orderly international campaign can be mounted to send spacecraft to the threatening object. One of the techniques suggested for deflecting an asteroid includes nuclear fusion weapons set off above the surface to slightly change the asteroid’s velocity without fracturing it. High speed neutrons from the explosion would irradiate a shell of material on the surface of the asteroid facing the explosion. The material in this surface shell would then expand and blow off, thus producing a recoil upon the asteroid itself. A very modest velocity change in the asteroid’s motion (only a few millimeters per second), acting over several years, can cause the asteroid to miss the Earth entirely. However, the trick is to gently nudge the asteroid out of harm’s way and not to blow it up. This latter option, though popular in the movies, only creates a bigger problem when all the pieces encounter the Earth. Another option that has been discussed includes the establishment of large solar sails on a small threatening object so that the pressure of sunlight could eventually redirect the object away from its predicted Earth collision.</p>
			<p>No one should be overly concerned about an Earth impact of an asteroid or comet. The threat to any one person from auto accidents, disease, other natural disasters and a variety of other problems is much higher than the threat from NEOs. Over long periods of time, however, the chances of the Earth being impacted are not negligible so that some form of NEO insurance is warranted. At the moment, our best insurance rests with the NEO scientists and their efforts to first find these objects and then track their motions into the future. We need to first find them, then keep an eye on them.</p>
    	</div>
		</div>
	</div>
<!-- Main Content (end) -->
</div>
<div id="leftPanel" class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
<!-- Quick Links Panel (begin) -->
	<div id="navSide">
		<h4>Quick Links</h4>
      	<ul>
        	<li><a href="/sentient/about/neo-studies.php">NEO Studies</a></li>
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