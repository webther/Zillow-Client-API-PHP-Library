<?php

/**
 * See http://www.zillow.com/howto/api/GetChart.htm.
 */

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

print_r($response->fetch());
//echo $response->fetch('response|url');

?>

<pre>
Array
(
    [request] => Array
        (
            [zpid] => 30728555
            [unit-type] => dollar
            [width] => 300
            [height] => 300
        )

    [message] => Array
        (
            [text] => Request successfully processed
            [code] => 0
        )

    [response] => Array
        (
            [url] => https://www.zillow.com:443/app?chartDuration=1year&chartType=partner&height=300&page=webservice%2FGetChart&service=chart&width=300&zpid=30728555
            [graphsanddata] => http://www.zillow.com/homedetails/1838-E-23rd-St-Brooklyn-NY-11229/30728555_zpid/#charts-and-data
        )

)
</pre>