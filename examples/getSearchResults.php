<?php

/**
 * See http://www.zillow.com/howto/api/GetSearchResults.htm.
 */

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

print_r($response->fetch());
//print_r($response->fetch('response|results|result'));

?>

<pre>
Array
(
    [request] => Array
        (
            [address] => 1838 E 23rd St
            [citystatezip] => Brooklyn NY 11229
        )

    [message] => Array
        (
            [text] => Request successfully processed
            [code] => 0
        )

    [response] => Array
        (
            [results] => Array
                (
                    [result] => Array
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

                                    [percentile] => 0
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

                        )

                )

        )

)
</pre>



