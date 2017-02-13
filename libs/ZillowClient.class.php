<?php

/**
 * Zillow Client API PHP Library
 *
 * @author      Jay Chen
 * @company     Webther Solutions Inc
 * @website     http://www.webther.com
 * @version     v1.0
 * @date        2017-02-01
 */

namespace Webther\Zillow;

class ZillowClient {
    private $data = array(
        'zws_id' => '',
        'endpoint' => 'https://www.zillow.com/webservice',
    );

    public function __construct($zws_id = '') {
        $this->set('zws_id', $zws_id);
    }

    private function xmlToArray($xmlObject, $out = array()) {
        foreach ((array) $xmlObject as $index => $node) {
            $out[$index] = (is_object($node)) ? $this->xmlToArray($node) : $node;
        }
        return $out;
    }

    public function set($property = '', $value = '') {
        $this->data[$property] = $value;
        return $this;
    }

    public function get($property = '', $default_value = '') {
        return isset($this->data[$property]) ? $this->data[$property] : $default_value;
    }

    public function call($method = '', $params = array()) {
        // The Zillow Web Service ID is required.
        $zws_id = $this->get('zws_id');
        if (empty($zws_id)) {
            return array(
                'message' => array(
                    'text' => 'Error: invalid or missing ZWSID parameter',
                    'code' => 2,
                ),
            );
        }

        switch ($method) {
            case 'GetSearchResults':
            case 'GetDeepSearchResults':
                if (!isset($params['citystatezip'])) {
                    $params['citystatezip'] = array();
                    if (isset($params['city'])) {
                        $params['citystatezip'][] = $params['city'];
                    }
                    if (isset($params['state'])) {
                        $params['citystatezip'][] = $params['state'];
                    }
                    if (isset($params['zip'])) {
                        $params['citystatezip'][] = $params['zip'];
                    }
                    $params['citystatezip'] = implode(' ', $params['citystatezip']);
                }
                break;
        }

        $request = $params;
        $request['zws-id'] = $zws_id;
        $url = $this->get('endpoint') . '/' . $method . '.htm?' . http_build_query($request);
        $result = new \SimpleXMLElement($url, 0, true);
        $result = $this->xmlToArray($result);
        return new ZillowResponse($result);
    }
}