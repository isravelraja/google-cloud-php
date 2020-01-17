<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response for the `ListScanConfigs` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ListScanConfigsResponse</code>
 */
class ListScanConfigsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of ScanConfigs returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig scan_configs = 1;</code>
     */
    private $scan_configs;
    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig[]|\Google\Protobuf\Internal\RepeatedField $scan_configs
     *           The list of ScanConfigs returned.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no
     *           more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of ScanConfigs returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig scan_configs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScanConfigs()
    {
        return $this->scan_configs;
    }

    /**
     * The list of ScanConfigs returned.
     *
     * Generated from protobuf field <code>repeated .google.cloud.websecurityscanner.v1beta.ScanConfig scan_configs = 1;</code>
     * @param \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScanConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\WebSecurityScanner\V1beta\ScanConfig::class);
        $this->scan_configs = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

