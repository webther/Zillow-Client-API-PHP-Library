<?php

/**
 * @author Webther, founder of Webther Solutions Inc.
 * http://www.webther.com
 */

class ZillowClient {
    private $zws_id = '';
    private $endpoint = 'https://www.zillow.com/webservice';

    public function __construct($zws_id = '') {
        if (!empty($zws_id)) {
            $this->zws_id = $zws_id;
        }
    }

    private function xmlToArray($xmlObject, $out = array()) {
        foreach ((array) $xmlObject as $index => $node) {
            $out[$index] = (is_object($node)) ? $this->xmlToArray($node) : $node;
        }
        return $out;
    }

    private function call($method = '', $params = array()) {
        $url = $this->endpoint . '/' . $method . '.htm?' . http_build_query($params);
        $result = new SimpleXMLElement($url, 0, true);
        $result = $this->xmlToArray($result);
        return $result;
    }

    public function getSearchResults($params = array()) {
        if (empty($this->zws_id)) {
            throw new Exception('ZWS_id is required.');
        }

        $myParams = array();
        $myParams['zws-id'] = $this->zws_id;
        $myParams['address'] = $params['address'];
        if (isset($params['citystatezip'])) {
            $myParams['citystatezip'] = $params['citystatezip'];
        }
        else {
            $myParams['citystatezip'] = array();
            if (isset($params['city'])) {
                $myParams['citystatezip'][] = $params['city'];
            }
            if (isset($params['state'])) {
                $myParams['citystatezip'][] = $params['state'];
            }
            if (isset($params['zip'])) {
                $myParams['citystatezip'][] = $params['zip'];
            }
            $myParams['citystatezip'] = implode(' ', $myParams['citystatezip']);
        }
        return $this->call('GetSearchResults', $myParams);
    }
}