<?php

/**
 * @author Webther, founder of Webther Solutions Inc.
 * http://www.webther.com
 */

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

    private function call($method = '', $params = array()) {
        $url = $this->get('endpoint') . '/' . $method . '.htm?' . http_build_query($params);
        $result = new SimpleXMLElement($url, 0, true);
        $result = $this->xmlToArray($result);
        return $result;
    }

    public function set($property = '', $value = '') {
        $this->data[$property] = $value;
        return $this;
    }

    public function get($property = '', $default_value = '') {
        return isset($this->data[$property]) ? $this->data[$property] : $default_value;
    }

    public function getSearchResults($params = array()) {
        $zws_id = $this->get('zws_id');
        if (empty($zws_id)) {
            return array(
                'message' => array(
                    'text' => 'Error: invalid or missing ZWSID parameter',
                    'code' => 2,
                )
            );
        }

        $request = array();
        $request['zws-id'] = $zws_id;
        $request['address'] = $params['address'];
        if (isset($params['citystatezip'])) {
            $request['citystatezip'] = $params['citystatezip'];
        }
        else {
            $request['citystatezip'] = array();
            if (isset($params['city'])) {
                $request['citystatezip'][] = $params['city'];
            }
            if (isset($params['state'])) {
                $request['citystatezip'][] = $params['state'];
            }
            if (isset($params['zip'])) {
                $request['citystatezip'][] = $params['zip'];
            }
            $request['citystatezip'] = implode(' ', $request['citystatezip']);
        }
        return $this->call('GetSearchResults', $request);
    }
}