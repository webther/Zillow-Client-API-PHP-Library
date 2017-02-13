<?php

/**
 * See http://www.zillow.com/howto/api/GetSearchResults.htm.
 */

use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'address' => '1838 E 23rd St',
    // You can separate the city, state and zip.
    'city' => 'Brooklyn',
    'state' => 'NY',
    'zip' => '11229',
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetDeepSearchResults', $params);

$params = array(
    'address' => '1838 E 23rd St',
    // You can combine the city, state and zip.
    'citystatezip' => 'Brooklyn NY 11229',
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetDeepSearchResults', $params);

// Fetch the entire response array.
print_r($response->fetch());
// Only fetch the message code.
echo $response->fetch('message|code');
// Only fetch the searched results.
foreach ($response->fetch('response|results') as $result) {
    $result = new Zillow\ZillowResponse($result);
    print_r($result->fetch());
    echo $result->fetch('zpid');
    echo $result->fetch('taxAssessmentYear');
    echo $result->fetch('taxAssessment');
    echo $result->fetch('yearBuilt');
    echo $result->fetch('bathrooms');
    echo $result->fetch('bedrooms');
    echo $result->fetch('lastSoldDate');
    echo $result->fetch('lastSoldPrice');
    echo $result->fetch('address|zipcode');
    echo $result->fetch('zestimate|amount');
}

?>




