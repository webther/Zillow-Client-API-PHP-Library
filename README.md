# Zillow Client API PHP Library

This PHP Library includes the following Zillow API functions:

* GetSearchResults
* GetZestimate
* GetChart
* GetComps
* GetDeepSearchResults

Requirements
-------------------------------------------------------------------------------
PHP >= 5.3.0

You need to create a free Zillow account and get a Zillow Web Services ID to
use this library. See http://www.zillow.com/howto/api/APIOverview.htm.

How to use?
-------------------------------------------------------------------------------

#### GetSearchResults
```
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
$response = $zillow->call('GetSearchResults', $params);

$params = array(
    'address' => '1838 E 23rd St',
    // You can combine the city, state and zip.
    'citystatezip' => 'Brooklyn NY 11229',
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetSearchResults', $params);

// Fetch the entire response array.
print_r($response->fetch());
// Only fetch the message code.
echo $response->fetch('message|code');
// Only fetch the searched results.
foreach ($response->fetch('response|results') as $result) {
    $result = new Zillow\ZillowResponse($result);
    print_r($result->fetch());
    echo $result->fetch('zpid');
    echo $result->fetch('address|zipcode');
    echo $result->fetch('zestimate|amount');
}
```

#### GetZestimate
```
use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'zpid' => 30728555,
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetZestimate', $params);

// Fetch the entire response array.
print_r($response->fetch());
// Only fetch the zestimate amount.
echo $response->fetch('response|zestimate|amount');
// Only fetch the property's address.
print_r($response->fetch('response|address'));
```

#### GetChart
```
use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'zpid' => 30728555,
    'unit-type' => 'dollar',
    'width' => 300,
    'height' => 300,
    'chartDuration' => '1year',
);
$response = $zillow->call('GetChart', $params);

// Fetch the entire response array.
print_r($response->fetch());
// Only fetch the message code.
echo $response->fetch('message|code');
// Only fetch the chart's url.
echo $response->fetch('response|url');
```

#### GetComps
```
use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'zpid' => 30728555,
    'count' => 5,
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetComps', $params);

// Fetch the entire response array.
print_r($response->fetch());
// Only fetch the message code.
echo $response->fetch('message|code');
// Only fetch the principal and comparable properties.
print_r($response->fetch('response|properties'));
```

#### GetSearchResults
```
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
```