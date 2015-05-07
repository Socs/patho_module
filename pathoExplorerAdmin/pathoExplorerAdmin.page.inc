<?php 

/**
 * Get Patients ids and sign up dates from API
 */
function getPatients() {
	$patientArray = array( //TODO replace with API call
		array('id' => '1234', 'date' => 'Aug, 19 2015'),
		array('id' => '3434', 'date' => 'Aug, 20 2015'),
		array('id' => 'Zn3k', 'date' => 'Sept, 20 2015'),
	);

	return $patientArray;
}

/**
 * Get app space remaining from API
 */
function getSpace() {
	$getSpaceApi = array( //TODO replace with API call
		'totalSpace' => 40,
		'spaceUsed'  => 10
	);
	if (is_int($getSpaceApi['spaceUsed']) && is_int($getSpaceApi['totalSpace'])) {
		$percentUsed = ($getSpaceApi['spaceUsed'] / $getSpaceApi['totalSpace']) * 100;
		$spaceLeft = $getSpaceApi['totalSpace'] - $getSpaceApi['spaceUsed'];
	}
	else {
		$percentUsed = 'Error: Space could not be calculated. Please contact an administrator.';
		$spaceLeft = '~~~';
	}

	return array('percentUsed' => $percentUsed, 'spaceLeft' => $spaceLeft);
}

/**
 * Get images paths from api, might come in patients api
 */
function getImages() {
	return $imageArray;
}