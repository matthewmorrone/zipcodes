<?php

$zips = file("us_postal_codes.csv");
foreach($zips as &$zip) {
	$zip = explode(",", $zip);
}
print_r($zips);