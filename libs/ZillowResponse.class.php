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

class ZillowResponse {
    private $data = array();

    public function __construct($data = array()) {
        $this->data = $data;
    }

    private function fetch_by_keys($keys, $array, $separator = '|') {
        $return = '';
        $keys = explode($separator, $keys);

        if (count($keys) > 0) {
            $v = $keys[0];
            if (isset($array[$v])) {
                $return = $array[$v];
                array_shift($keys);
                if (count($keys) > 0) {
                    return $this->fetch_by_keys(implode($separator, $keys), $return);
                }
            }
        }
        return $return;
    }

    public function fetch($name = '', $default_value = '') {
        if (empty($name)) {
            return $this->data;
        }
        $value = $this->fetch_by_keys($name, $this->data);
        return !empty($value) ? $value : $default_value;
    }
}