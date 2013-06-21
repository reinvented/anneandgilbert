<?php
include_once("../schedule/nextanneandgilbert.php");
$schedule = file_get_contents("../schedule/schedule.json");
$next = nextAnneAndGilbert($schedule);
?>
<head>
	<title>When is the next performance of Anne and Gilbert?</title>
	<link type="text/css" rel="stylesheet" media="all" href="style.css" />
</head>
<body>
	<div id="wrapper">
		<h1>The next performance of <a href="http://anneandgilbert.com">Anne and Gilbert</a> is in</h1>
		<h2><?php print $next['hours_until']; ?></h2>
		<h3><?php print $next['formatted_start']; ?></h3>
		<h3>(<a href="https://secure.ticketpro.ca/defn_7484911.html?lang=en#def_7484911">Buy Tickets Now</a>)</h3>
		<h4>This is unofficial and may be wrong.<br><a href="https://github.com/reinvented/anneandgilbert">Source code here</a>.<br>Made by <a href="http://ruk.ca/">Peter</a>.</h4>
	</div>
</body>
