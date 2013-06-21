<?php
include_once("../schedule/completeschedule.php");
$schedule = file_get_contents("../schedule/schedule.json");
$performances = completeSchedule($schedule);

include_once("feedcreator.class.php");

$rss = new UniversalFeedCreator();
$rss->useCached();
$rss->title = "Anne and Gilbert Performances";
$rss->description = "Performances of the show Anne and Gilbert in Charlottetown, Prince Edward Island";
$rss->link = "http://anneandgilbert.reinvented.net/nextshow";
$rss->syndicationURL = "http://anneandgilbert.reinvented.net/".$PHP_SELF;

foreach ($performances as $key => $p) {
    $item = new FeedItem();
    $item->title = $p['formatted_start'] . " (" . $p['name'] . ")";
    $item->description = "<h2>" . $p->name . "</h2><ul><li>Starts at: " . $p['formatted_start'] . "</li><li>Ends at: " . $p['formatted_end'] . "</li>";
    $item->date = $data->newsdate;
    
    $rss->addItem($item);
}

$rss->outputFeed("RSS2.0");
