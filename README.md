Zillow Client API PHP Library
==========================================================================

How to use?
--------------------------------------------------------------------------

```
use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'address' => '1838 E 23rd St',
    'city' => 'Brooklyn',
    'state' => 'NY',
    'zip' => '11229',
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetSearchResults', $params);

$params = array(
    'address' => '1838 E 23rd St',
    'citystatezip' => 'Brooklyn NY 11229',
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetSearchResults', $params);
```

```
use Webther\Zillow;
require_once '../autoloader.php';
$zillow = new Webther\Zillow\ZillowClient(ZILLOW_ZWSID);

$params = array(
    'zpid' => 30728555,
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetZestimate', $params);
```

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
```

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
```
