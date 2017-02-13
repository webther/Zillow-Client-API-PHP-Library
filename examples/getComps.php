<?php

/**
 * See http://www.zillow.com/howto/api/GetChart.htm.
 */

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

?>

<pre>
Array
(
    [request] => Array
        (
            [zpid] => 30728555
            [count] => 5
        )

    [message] => Array
        (
            [text] => Request successfully processed
            [code] => 0
        )

    [response] => Array
        (
            [properties] => Array
                (
                    [principal] => Array
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

                        )

                    [comparables] => Array
                        (
                            [comp] => Array
                                (
                                    [0] => SimpleXMLElement Object
                                        (
                                            [@attributes] => Array
                                                (
                                                    [score] => 8.0
                                                )

                                            [zpid] => 30742628
                                            [links] => SimpleXMLElement Object
                                                (
                                                    [homedetails] => https://www.zillow.com/homedetails/1925-E-29th-St-Brooklyn-NY-11229/30742628_zpid/
                                                    [graphsanddata] => http://www.zillow.com/homedetails/1925-E-29th-St-Brooklyn-NY-11229/30742628_zpid/#charts-and-data
                                                    [mapthishome] => http://www.zillow.com/homes/30742628_zpid/
                                                    [comparables] => http://www.zillow.com/homes/comps/30742628_zpid/
                                                )

                                            [address] => SimpleXMLElement Object
                                                (
                                                    [street] => 1925 E 29th St
                                                    [zipcode] => 11229
                                                    [city] => Brooklyn
                                                    [state] => NY
                                                    [latitude] => 40.604325
                                                    [longitude] => -73.94334
                                                )

                                            [zestimate] => SimpleXMLElement Object
                                                (
                                                    [amount] => 705809
                                                    [last-updated] => 02/06/2017
                                                    [oneWeekChange] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [deprecated] => true
                                                                )

                                                        )

                                                    [valueChange] => 7820
                                                    [valuationRange] => SimpleXMLElement Object
                                                        (
                                                            [low] => 642286
                                                            [high] => 762274
                                                        )

                                                    [percentile] => 71
                                                )

                                            [localRealEstate] => SimpleXMLElement Object
                                                (
                                                    [region] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [name] => Sheepshead Bay
                                                                    [id] => 403131
                                                                    [type] => neighborhood
                                                                )

                                                            [zindexValue] => 532,000
                                                            [links] => SimpleXMLElement Object
                                                                (
                                                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Sheepshead-Bay/r_403131/
                                                                    [forSaleByOwner] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/fsbo/
                                                                    [forSale] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/
                                                                )

                                                        )

                                                )

                                        )

                                    [1] => SimpleXMLElement Object
                                        (
                                            [@attributes] => Array
                                                (
                                                    [score] => 5.0
                                                )

                                            [zpid] => 30742557
                                            [links] => SimpleXMLElement Object
                                                (
                                                    [homedetails] => https://www.zillow.com/homedetails/1979-E-28th-St-Brooklyn-NY-11229/30742557_zpid/
                                                    [graphsanddata] => http://www.zillow.com/homedetails/1979-E-28th-St-Brooklyn-NY-11229/30742557_zpid/#charts-and-data
                                                    [mapthishome] => http://www.zillow.com/homes/30742557_zpid/
                                                    [comparables] => http://www.zillow.com/homes/comps/30742557_zpid/
                                                )

                                            [address] => SimpleXMLElement Object
                                                (
                                                    [street] => 1979 E 28th St
                                                    [zipcode] => 11229
                                                    [city] => Brooklyn
                                                    [state] => NY
                                                    [latitude] => 40.602975
                                                    [longitude] => -73.94403
                                                )

                                            [zestimate] => SimpleXMLElement Object
                                                (
                                                    [amount] => 691831
                                                    [last-updated] => 02/06/2017
                                                    [oneWeekChange] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [deprecated] => true
                                                                )

                                                        )

                                                    [valueChange] => 6243
                                                    [valuationRange] => SimpleXMLElement Object
                                                        (
                                                            [low] => 636485
                                                            [high] => 733341
                                                        )

                                                    [percentile] => 69
                                                )

                                            [localRealEstate] => SimpleXMLElement Object
                                                (
                                                    [region] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [name] => Sheepshead Bay
                                                                    [id] => 403131
                                                                    [type] => neighborhood
                                                                )

                                                            [zindexValue] => 532,000
                                                            [links] => SimpleXMLElement Object
                                                                (
                                                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Sheepshead-Bay/r_403131/
                                                                    [forSaleByOwner] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/fsbo/
                                                                    [forSale] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/
                                                                )

                                                        )

                                                )

                                        )

                                    [2] => SimpleXMLElement Object
                                        (
                                            [@attributes] => Array
                                                (
                                                    [score] => 4.0
                                                )

                                            [zpid] => 2096489830
                                            [links] => SimpleXMLElement Object
                                                (
                                                    [homedetails] => https://www.zillow.com/homedetails/2271-Ocean-Ave-Brooklyn-NY-11229/2096489830_zpid/
                                                    [mapthishome] => http://www.zillow.com/homes/2096489830_zpid/
                                                    [comparables] => http://www.zillow.com/homes/comps/2096489830_zpid/
                                                )

                                            [address] => SimpleXMLElement Object
                                                (
                                                    [street] => 2271 Ocean Ave
                                                    [zipcode] => 11229
                                                    [city] => Brooklyn
                                                    [state] => NY
                                                    [latitude] => 40.60521
                                                    [longitude] => -73.95241
                                                )

                                            [zestimate] => SimpleXMLElement Object
                                                (
                                                    [amount] => 920681
                                                    [last-updated] => 02/06/2017
                                                    [oneWeekChange] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [deprecated] => true
                                                                )

                                                        )

                                                    [valueChange] => -16102
                                                    [valuationRange] => SimpleXMLElement Object
                                                        (
                                                            [low] => 874647
                                                            [high] => 966715
                                                        )

                                                    [percentile] => 0
                                                )

                                            [localRealEstate] => SimpleXMLElement Object
                                                (
                                                    [region] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [name] => Sheepshead Bay
                                                                    [id] => 403131
                                                                    [type] => neighborhood
                                                                )

                                                            [zindexValue] => 532,000
                                                            [links] => SimpleXMLElement Object
                                                                (
                                                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Sheepshead-Bay/r_403131/
                                                                    [forSaleByOwner] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/fsbo/
                                                                    [forSale] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/
                                                                )

                                                        )

                                                )

                                        )

                                    [3] => SimpleXMLElement Object
                                        (
                                            [@attributes] => Array
                                                (
                                                    [score] => 5.0
                                                )

                                            [zpid] => 30727605
                                            [links] => SimpleXMLElement Object
                                                (
                                                    [homedetails] => https://www.zillow.com/homedetails/1744-E-23rd-St-Brooklyn-NY-11229/30727605_zpid/
                                                    [graphsanddata] => http://www.zillow.com/homedetails/1744-E-23rd-St-Brooklyn-NY-11229/30727605_zpid/#charts-and-data
                                                    [mapthishome] => http://www.zillow.com/homes/30727605_zpid/
                                                    [comparables] => http://www.zillow.com/homes/comps/30727605_zpid/
                                                )

                                            [address] => SimpleXMLElement Object
                                                (
                                                    [street] => 1744 E 23rd St
                                                    [zipcode] => 11229
                                                    [city] => Brooklyn
                                                    [state] => NY
                                                    [latitude] => 40.608035
                                                    [longitude] => -73.950385
                                                )

                                            [zestimate] => SimpleXMLElement Object
                                                (
                                                    [amount] => 985688
                                                    [last-updated] => 02/06/2017
                                                    [oneWeekChange] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [deprecated] => true
                                                                )

                                                        )

                                                    [valueChange] => -35
                                                    [valuationRange] => SimpleXMLElement Object
                                                        (
                                                            [low] => 916690
                                                            [high] => 1064543
                                                        )

                                                    [percentile] => 91
                                                )

                                            [localRealEstate] => SimpleXMLElement Object
                                                (
                                                    [region] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [name] => Sheepshead Bay
                                                                    [id] => 403131
                                                                    [type] => neighborhood
                                                                )

                                                            [zindexValue] => 532,000
                                                            [links] => SimpleXMLElement Object
                                                                (
                                                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Sheepshead-Bay/r_403131/
                                                                    [forSaleByOwner] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/fsbo/
                                                                    [forSale] => http://www.zillow.com/sheepshead-bay-brooklyn-new-york-ny/
                                                                )

                                                        )

                                                )

                                        )

                                    [4] => SimpleXMLElement Object
                                        (
                                            [@attributes] => Array
                                                (
                                                    [score] => 6.0
                                                )

                                            [zpid] => 30723605
                                            [links] => SimpleXMLElement Object
                                                (
                                                    [homedetails] => https://www.zillow.com/homedetails/943-1st-Ct-Brooklyn-NY-11223/30723605_zpid/
                                                    [graphsanddata] => http://www.zillow.com/homedetails/943-1st-Ct-Brooklyn-NY-11223/30723605_zpid/#charts-and-data
                                                    [mapthishome] => http://www.zillow.com/homes/30723605_zpid/
                                                    [comparables] => http://www.zillow.com/homes/comps/30723605_zpid/
                                                )

                                            [address] => SimpleXMLElement Object
                                                (
                                                    [street] => 943 1st Ct
                                                    [zipcode] => 11223
                                                    [city] => Brooklyn
                                                    [state] => NY
                                                    [latitude] => 40.60485
                                                    [longitude] => -73.961919
                                                )

                                            [zestimate] => SimpleXMLElement Object
                                                (
                                                    [amount] => 1006900
                                                    [last-updated] => 02/06/2017
                                                    [oneWeekChange] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [deprecated] => true
                                                                )

                                                        )

                                                    [valueChange] => 8145
                                                    [valuationRange] => SimpleXMLElement Object
                                                        (
                                                            [low] => 936417
                                                            [high] => 1097521
                                                        )

                                                    [percentile] => 74
                                                )

                                            [localRealEstate] => SimpleXMLElement Object
                                                (
                                                    [region] => SimpleXMLElement Object
                                                        (
                                                            [@attributes] => Array
                                                                (
                                                                    [name] => Gravesend
                                                                    [id] => 403215
                                                                    [type] => neighborhood
                                                                )

                                                            [links] => SimpleXMLElement Object
                                                                (
                                                                    [overview] => http://www.zillow.com/local-info/NY-New-York/Gravesend/r_403215/
                                                                    [forSaleByOwner] => http://www.zillow.com/gravesend-brooklyn-new-york-ny/fsbo/
                                                                    [forSale] => http://www.zillow.com/gravesend-brooklyn-new-york-ny/
                                                                )

                                                        )

                                                )

                                        )

                                )

                        )

                )

        )

)
</pre>