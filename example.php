<?php 

require_once __DIR__ . '/vendor/autoload.php';

use SearchdataSDK\SearchdataGoogleSearch;
use SearchdataSDK\SearchdataLocations;

$googleSearch = new SearchdataGoogleSearch('YOUR_API_KEY');
$locationsAPI = new SearchdataLocations();

try {
    $locations = $locationsAPI->execute('New York', 1)['body'];

    $googleSearch->set_q('test');
    $googleSearch->set_device('desktop');
    $googleSearch->set_lr('lang_en|lang_ar');
    $googleSearch->set_location($locations[0]['location']);

    $response = $googleSearch->execute();
    echo json_encode($response['body']);
} catch (Exception $e) {
    echo $e->getMessage();
}