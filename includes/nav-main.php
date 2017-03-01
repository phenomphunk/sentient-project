<nav id="nav-main" class="navbar navbar-inverse">
	<div class="row centered">
		<div class="navbar-header">
			<hgroup>
				<a href="/sentient/">
					<h1>NeoWs</h1>
					<h2>Near-Earth Objects Web Service</h2>
				</a>
			</hgroup>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMain">
				<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>                        
			</button>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="navMain">
			<ul class="nav navbar-nav">
				<li class="visible-link dropdown <?php echo ($page1 == "About" ? "active" : "")?>"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
              		<ul class="dropdown-menu">
              			<li class="<?php echo ($page2 == "NEO Studies" ? "active" : "")?>"><a href="/sentient/about/neo-studies.php">NEO Studies</a></li>
                		<li class="<?php echo ($page2 == "NEO Basics" ? "active" : "")?>"><a href="/sentient/about/neo-basics.php">NEO Basics</a></li>
						<li class="<?php echo ($page2 == "Search Program" ? "active" : "")?>"><a href="/sentient/about/search-program.php">Search Program</a></li>
              		</ul>
              	</li>
              	<li class="hidden-link dropdown <?php echo ($page1 == "About" ? "active" : "")?>"><a href="#" class="dropdown-toggle">About<b class="caret"></b></a>
              		<ul class="dropdown-menu">
              			<li class="<?php echo ($page2 == "NEO Studies" ? "active" : "")?>"><a href="/sentient/about/neo-studies.php">NEO Studies</a></li>
                		<li class="<?php echo ($page2 == "NEO Basics" ? "active" : "")?>"><a href="/sentient/about/neo-basics.php">NEO Basics</a></li>
						<li class="<?php echo ($page2 == "Search Program" ? "active" : "")?>"><a href="/sentient/about/search-program.php">Search Program</a></li>
              		</ul>
              	</li>
				<li class="visible-link dropdown <?php echo ($page1 == "Orbits" ? "active" : "")?>"><a href="/sentient/orbits/" class="dropdown-toggle" data-toggle="dropdown">Orbits<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="<?php echo ($page2 == "Introduction to NEO Orbits" ? "active" : "")?>"><a href="/sentient/orbits/intro.php">Introduction</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb.cgi" target="_blank">NEO Lookup</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/horizons.cgi" target="_blank">Horizons</a></li>
                		<li class="<?php echo ($page2 == "NEO Orbit Elements" ? "active" : "")?>"><a href="/sentient/orbits/elements.php">Orbit Elements</a></li>
                		<li class="<?php echo ($page2 == "Accessible NEAs" ? "active" : "")?>"><a href="/sentient/orbits/nhats.php">Accessible NEAs</a></li>
					</ul>
				</li>
				<li class="hidden-link dropdown <?php echo ($page1 == "Orbits" ? "active" : "")?>"><a href="/sentient/orbits/" class="dropdown-toggle">Orbits<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="<?php echo ($page2 == "Introduction to NEO Orbits" ? "active" : "")?>"><a href="/sentient/orbits/intro.php">Introduction</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb.cgi" target="_blank">NEO Lookup</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/horizons.cgi" target="_blank">Horizons</a></li>
                		<li class="<?php echo ($page2 == "NEO Orbit Elements" ? "active" : "")?>"><a href="/sentient/orbits/elements.php">Orbit Elements</a></li>
                		<li class="<?php echo ($page2 == "Accessible NEAs" ? "active" : "")?>"><a href="/sentient/orbits/nhats.php">Accessible NEAs</a></li>
					</ul>
				</li>
				<li class="visible-link dropdown <?php echo ($page1 == "Close Approaches" ? "active" : "")?>"><a href="/sentient/ca/intro.php" class="dropdown-toggle" data-toggle="dropdown">Close Approaches<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Close Approaches" ? "active" : "")?>"><a href="/sentient/ca/intro.php">Introduction</a></li>
                		<li class="<?php echo ($page2 == "NEOs" ? "active" : "")?>"><a href="/sentient/ca/">NEOs</a></li>
                		<li class="<?php echo ($page2 == "Fireballs" ? "active" : "")?>"><a href="/sentient/ca/fireballs.php">Fireballs</a></li>
              		</ul>
              	</li>
				<li class="hidden-link dropdown two-line <?php echo ($page1 == "Close Approaches" ? "active" : "")?>"><a href="/sentient/ca/intro.php" class="dropdown-toggle">Close<br>Approaches<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Close Approaches" ? "active" : "")?>"><a href="/sentient/ca/intro.php">Introduction</a></li>
                		<li class="<?php echo ($page2 == "NEOs" ? "active" : "")?>"><a href="/sentient/ca/">NEOs</a></li>
                		<li class="<?php echo ($page2 == "Fireballs" ? "active" : "")?>"><a href="/sentient/ca/fireballs.php">Fireballs</a></li>
              		</ul>
              	</li>
              	<li class="visible-link dropdown <?php echo ($page1 == "Impact Risk" ? "active" : "")?>"><a href="/sentient/risk/" class="dropdown-toggle" data-toggle="dropdown">Impact Risk<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Impact Risk" ? "active" : "")?>"><a href="/sentient/risk/">Introduction</a></li>
                		<li class="<?php echo ($page2 == "Sentry" ? "active" : "")?>"><a href="/sentient/risk/sentry">Sentry</a></li>
                		<li class="<?php echo ($page2 == "Scout" ? "active" : "")?>"><a href="/sentient/risk/scout">Scout</a></li>
              		</ul>
              	</li>
              	<li class="hidden-link dropdown two-line <?php echo ($page1 == "Impact Risk" ? "active" : "")?>"><a href="/sentient/risk/" class="dropdown-toggle">Impact<br>Risk<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Impact Risk" ? "active" : "")?>"><a href="/sentient/risk/">Introduction</a></li>
                		<li class="<?php echo ($page2 == "Sentry" ? "active" : "")?>"><a href="/sentient/risk/sentry">Sentry</a></li>
                		<li class="<?php echo ($page2 == "Scout" ? "active" : "")?>"><a href="/sentient/risk/scout">Scout</a></li>
              		</ul>
              	</li>
				<li class="visible-link dropdown <?php echo ($page1 == "Planetary Defense" ? "active" : "")?>"><a href="/sentient/pd/" class="dropdown-toggle" data-toggle="dropdown">Planetary Defense<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Planetary Defense" ? "active" : "")?>"><a href="/sentient/pd/">Introduction</a></li>
                		<li class="<?php echo ($page2 == "NEO Defelection App" ? "active" : "")?>"><a href="/sentient/pd/nda.php">NEO Defelection App</a></li>
                		<li><a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">NASA Planetary Defense Coordination Office</a></li>
              		</ul>
              	</li>
              	<li class="hidden-link dropdown two-line <?php echo ($page1 == "Planetary Defense" ? "active" : "")?>"><a href="/sentient/pd/" class="dropdown-toggle">Planetary<br>Defense<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page1 == "Planetary Defense" ? "active" : "")?>"><a href="/sentient/pd/">Introduction</a></li>
                		<li class="<?php echo ($page2 == "NEO Defelection App" ? "active" : "")?>"><a href="/sentient/pd/nda.php">NEO Defelection App</a></li>
                		<li><a href="https://www.nasa.gov/planetarydefense/overview" target="_blank">NASA Planetary Defense<br>Coordination Office</a></li>
              		</ul>
              	</li>
              	<li class="visible-link dropdown <?php echo ($page1 == "Tools" ? "active" : "")?>"><a href="/sentient/tools/" class="dropdown-toggle" data-toggle="dropdown">Tools<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page2 == "Asteriod Size Estimator" ? "active" : "")?>"><a href="/sentient/tools/">Asteriod Size Estimator</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbfind.cgi" target="_blank">Sky Search</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbwobs.cgi" target="_blank">What's Observable</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/horizons.cgi" target="_blank">Horizons</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb.cgi" target="_blank">NEO Lookup</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
              		</ul>
              	</li>
              	<li class="hidden-link dropdown <?php echo ($page1 == "Tools" ? "active" : "")?>"><a href="/sentient/tools/" class="dropdown-toggle">Tools<b class="caret"></b></a>
              		<ul class="dropdown-menu">
                		<li class="<?php echo ($page2 == "Asteriod Size Estimator" ? "active" : "")?>"><a href="/sentient/tools/">Asteriod Size<br>Estimator</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbfind.cgi" target="_blank">Sky Search</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbwobs.cgi" target="_blank">What's<br>Observable</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/horizons.cgi" target="_blank">Horizons</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb.cgi" target="_blank">NEO Lookup</a></li>
                		<li><a href="http://ssd.jpl.nasa.gov/sbdb_query.cgi" target="_blank">NEO DB Query</a></li>
              		</ul>
              	</li>
			</ul>
		</div>
	</div>
</nav>