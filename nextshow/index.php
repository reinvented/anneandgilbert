<?php
include_once("../schedule/nextanneandgilbert.php");
$next = nextAnneAndGilbert();
?>
<head>
	<title>When is the next performance of Anne and Gilbert?</title>
	<link type="text/css" rel="stylesheet" media="all" href="style.css" />
</head>
<body>
	<h1>The next performance of Anne and Gilbert is in</h1>
	<h2><?php print $next->hours_until; ?></h2>
	<h3>(<a href="https://secure.ticketpro.ca/defn_7484911.html?lang=en#def_7484911">Buy Tickets Now</a>)</h3>
	<h4>This is unofficial and may be wrong. <a href="https://github.com/reinvented/anneandgilbert">Source code here</a>.</h4>
</body>
