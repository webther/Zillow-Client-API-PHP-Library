<?php

/**
 * See http://www.zillow.com/howto/api/GetZestimate.htm.
 */

use Webther\Zillow;
require_once '../autoloader.php';

$zillow = new Webther\Zillow\ZillowClient('X1-ZWz19dnmfur9xn_a3t9y');

$params = array(
    'zpid' => 30728555,
    'rentzestimate' => FALSE,
);
$response = $zillow->call('GetZestimate', $params);

print_r($response->fetch());
//echo $response->fetch('response|zestimate|amount');
//print_r($response->fetch('response|address'));

?>

<pre>
Array
(
    [request] => Array
        (
            [zpid] => 30728555
        )

    [message] => Array
        (
            [text] => Request successfully processed
            [code] => 0
        )

    [response] => Array
        (
            [zpid] => 30728555
            [links] => Array
                (
                    [homedetails] => https://www.zillow.com/homedetails/1838-E-23rd-St-Brooklyn-NY-11229/30728555_zpid/
                    [graphsanddata] => http://www.zillow.com/homedetails/1838-E-23rd-St-Brooklyn-NY-11229/30728555_zpid/#charts-and-data
                    [mapthishome] => http://www.zillow.com/homes/30728555_zpid/
                    [comparables] => http://www.zillow.com/homes/comps/30728555_zpid/
                )

            [address] => Array
                (
                    [street] => 1838 E 23rd St
                    [zipcode] => 11229
                    [city] => Brooklyn
                    [state] => NY
                    [latitude] => 40.605675
                    [longitude] => -73.94994
                )

            [zestimate] => Array
                (
                    [amount] => 770660
                    [last-updated] => 02/06/2017
                    [oneWeekChange] => Array
                        (
                            [@attributes] => Array
                                (
                                    [deprecated] => true
                                )

                        )

                    [valueChange] => 21444
                    [valuationRange] => Array
                        (
                            [low] => 685887
                            [high] => 847726
                        )

                    [percentile] => 77
                )

            [localRealEstate] => Array
                (
                    [region] => Array
                        (
                            [@attributes] => Array
                                (
                                    [name] => Sheepshead Bay
                                    [id] => 403131
                                    [type] => neighborhood
                                )

                            [zindexValue] => 532,000
                            [links] => Array
                                (
                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Sheepshead-Bay/r_403131/
                                    [forSaleByOwner] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/fsbo/
                                    [forSale] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/
                                )

                        )

                )

            [regions] => Array
                (
                    [zipcode-id] => 62039
                    [city-id] => 6181
                    [county-id] => 581
                    [state-id] => 43
                )

        )

)
</pre>