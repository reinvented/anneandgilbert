<?php

function nextAnneAndGilbert($schedule) {
	date_default_timezone_set("America/Halifax");
	$performances = json_decode($schedule);
	$rightnow = mktime();

	foreach($performances as $key => $performance) {
		if ($performance->start >= $rightnow) {
			$next['formatted_start'] = strftime("%A, %B, %e, %Y at %l:%M %p",$performance->start);
			$next['formatted_end'] = strftime("%A, %B, %e, %Y at %l:%M %p",$performance->end);
			$next['raw_start'] = $performance->start;
			$next['raw_end'] = $performance->end;
			$next['seconds_until'] = $performance->start - $rightnow;
			$next['hours_until'] = time_until($next['seconds_until']);
			$next['name'] = $performance->name;
			break;
		}
	}
	return $next;
}

function time_until($secs) {
	$bit = array(
		' year'        => $secs / 31556926 % 12,
		' week'        => $secs / 604800 % 52,
		' day'        => $secs / 86400 % 7,
		' hour'        => $secs / 3600 % 24,
		' minute'    => $secs / 60 % 60,
		);
   
	foreach($bit as $k => $v){
		if($v > 1)$ret[] = $v . $k . 's';
		if($v == 1)$ret[] = $v . $k;
		}
	array_splice($ret, count($ret)-1, 0, 'and');

	return join(' ', $ret);
}