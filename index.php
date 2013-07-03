<?php require_once('fbheader.php'); ?>
<html>
	<head>
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
			google.load("jquery", "1.7.1", "compressed");
			google.load("jqueryui", "1.8.17", "compressed");
		</script>
		<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css" />
		
		<script src="page.js"></script>
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
		<script src="inc/dockinterface.js"></script>
		<link rel="stylesheet" type="text/css" href="inc/dockstyle.css" />
	</head>
	<body>
		<div id="browser">Your browser may not fully support some functionality. Recommended browser: Google Chrome.</div>

		<div id="screen"></div>
		<div id="panels"></div>
		
		<a href="http://yalecollege.yale.edu/content/class-2017" target="_blank" id="home"><img src="gfx/home_<?php $l = array("small", "beveled"); echo $l[array_rand($l)]; ?>.png" /></a>
		
		<div class="dock" id="dock"><div class="dockcontainer"></div></div>
		
		<div id="sig">Designed by Qingyang Chen. &copy; 2013.</div>
	</body>
</html>