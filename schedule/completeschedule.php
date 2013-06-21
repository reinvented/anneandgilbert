<?php

function completeSchedule($schedule) {
	date_default_timezone_set("America/Halifax");
	$performances = json_decode($schedule);
	$rightnow = mktime();

	$allperformances = array();
	foreach($performances as $key => $performance) {
		$oneperformance = array();
		$oneperformance['formatted_start'] = strftime("%A, %B, %e, %Y at %l:%M %p",$performance->start);
		$oneperformance['formatted_end'] = strftime("%A, %B, %e, %Y at %l:%M %p",$performance->end);
		$oneperformance['raw_start'] = $performance->start;
		$oneperformance['raw_end'] = $performance->end;
		$oneperformance['name'] = $performance->name;
		$allperformances[] = $oneperformance;
	}

	return $allperformances;
}
