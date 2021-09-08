<?php 

include dirname(__FILE__) . '/src/autoloader.php';

$googleSearch = new SearchdataGoogleSearch('7ufscF3F4dOyIhupOvIfKtkt0NCW4K77');
$locationsAPI = new SearchdataLocations();

try {
    $locations = $locationsAPI->execute('New York', 1)['body'];

    $googleSearch->set_q('test');
    $googleSearch->set_device('mobile');
    $googleSearch->set_lr('lang_en|lang_ar');
    $googleSearch->set_location($locations[0]['location']);

    $response = $googleSearch->execute();
    echo json_encode($response['body']);
} catch (Exception $e) {
    echo $e->getMessage();
}