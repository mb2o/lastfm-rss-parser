<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

// get data from last.fm
$lastfm_raw = file_get_contents( 'http://ws.audioscrobbler.com/2.0/user/treeass/lovedtracks.rss' );
$lastfm_xml = new SimpleXMLElement( $lastfm_raw );

// loop through returned data
$count = 0;
$lastfm_data = array();
foreach( $lastfm_xml->channel->item as $item ) 
{
    if( $count == 5 ) break;
   
	$lastfm_item = array(
        'title' => $item->title,
		'link' => $item->link,
		'date' => strtotime($item->pubDate),
		'type' => 'lastfm'
	);		
	array_push( $lastfm_data, $lastfm_item );
    				
    $count++;
}

// show results
include( 'index.tmpl.php' );