<?php

declare(strict_types=1);

/*
 * PayQuickerSDK
 *
 * This file was automatically generated for PayQuicker by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace PayQuickerSDKLib\Models;

use PayQuickerSDKLib\ApiHelper;
use stdClass;

class ListMetadata implements \JsonSerializable
{
    /**
     * @var string
     */
    private $pageNo;

    /**
     * @var string
     */
    private $pageSize;

    /**
     * @var string
     */
    private $pageCount;

    /**
     * @var string
     */
    private $recordCount;

    /**
     * @var string
     */
    private $timezone;

    /**
     * @var string
     */
    private $requestRef;

    /**
     * @param string $pageNo
     * @param string $pageSize
     * @param string $pageCount
     * @param string $recordCount
     * @param string $timezone
     * @param string $requestRef
     */
    public function __construct(
        string $pageNo,
        string $pageSize,
        string $pageCount,
        string $recordCount,
        string $timezone,
        string $requestRef
    ) {
        $this->pageNo = $pageNo;
        $this->pageSize = $pageSize;
        $this->pageCount = $pageCount;
        $this->recordCount = $recordCount;
        $this->timezone = $timezone;
        $this->requestRef = $requestRef;
    }

    /**
     * Returns Page No.
     */
    public function getPageNo(): string
    {
        return $this->pageNo;
    }

    /**
     * Sets Page No.
     *
     * @required
     * @maps pageNo
     */
    public function setPageNo(string $pageNo): void
    {
        $this->pageNo = $pageNo;
    }

    /**
     * Returns Page Size.
     */
    public function getPageSize(): string
    {
        return $this->pageSize;
    }

    /**
     * Sets Page Size.
     *
     * @required
     * @maps pageSize
     */
    public function setPageSize(string $pageSize): void
    {
        $this->pageSize = $pageSize;
    }

    /**
     * Returns Page Count.
     */
    public function getPageCount(): string
    {
        return $this->pageCount;
    }

    /**
     * Sets Page Count.
     *
     * @required
     * @maps pageCount
     */
    public function setPageCount(string $pageCount): void
    {
        $this->pageCount = $pageCount;
    }

    /**
     * Returns Record Count.
     */
    public function getRecordCount(): string
    {
        return $this->recordCount;
    }

    /**
     * Sets Record Count.
     *
     * @required
     * @maps recordCount
     */
    public function setRecordCount(string $recordCount): void
    {
        $this->recordCount = $recordCount;
    }

    /**
     * Returns Timezone.
     * Timezone of the datetime objects in the response
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * Sets Timezone.
     * Timezone of the datetime objects in the response
     *
     * @required
     * @maps timezone
     */
    public function setTimezone(string $timezone): void
    {
        $this->timezone = $timezone;
    }

    /**
     * Returns Request Ref.
     */
    public function getRequestRef(): string
    {
        return $this->requestRef;
    }

    /**
     * Sets Request Ref.
     *
     * @required
     * @maps requestRef
     */
    public function setRequestRef(string $requestRef): void
    {
        $this->requestRef = $requestRef;
    }

    /**
     * Converts the ListMetadata object to a human-readable string representation.
     *
     * @return string The string representation of the ListMetadata object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ListMetadata',
            [
                'pageNo' => $this->pageNo,
                'pageSize' => $this->pageSize,
                'pageCount' => $this->pageCount,
                'recordCount' => $this->recordCount,
                'timezone' => $this->timezone,
                'requestRef' => $this->requestRef,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['pageNo']      = $this->pageNo;
        $json['pageSize']    = $this->pageSize;
        $json['pageCount']   = $this->pageCount;
        $json['recordCount'] = $this->recordCount;
        $json['timezone']    = $this->timezone;
        $json['requestRef']  = $this->requestRef;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
