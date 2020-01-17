<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/websecurityscanner/v1beta/web_security_scanner.proto

namespace Google\Cloud\WebSecurityScanner\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `ListScanConfigs` method.
 *
 * Generated from protobuf message <code>google.cloud.websecurityscanner.v1beta.ListScanConfigsRequest</code>
 */
class ListScanConfigsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource name, which should be a project resource name in the
     * format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';
    /**
     * The maximum number of ScanConfigs to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource name, which should be a project resource name in the
     *           format 'projects/{projectId}'.
     *     @type string $page_token
     *           A token identifying a page of results to be returned. This should be a
     *           `next_page_token` value returned from a previous List request.
     *           If unspecified, the first page of results is returned.
     *     @type int $page_size
     *           The maximum number of ScanConfigs to return, can be limited by server.
     *           If not specified or not positive, the implementation will select a
     *           reasonable value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Websecurityscanner\V1Beta\WebSecurityScanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource name, which should be a project resource name in the
     * format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource name, which should be a project resource name in the
     * format 'projects/{projectId}'.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results to be returned. This should be a
     * `next_page_token` value returned from a previous List request.
     * If unspecified, the first page of results is returned.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The maximum number of ScanConfigs to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of ScanConfigs to return, can be limited by server.
     * If not specified or not positive, the implementation will select a
     * reasonable value.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

