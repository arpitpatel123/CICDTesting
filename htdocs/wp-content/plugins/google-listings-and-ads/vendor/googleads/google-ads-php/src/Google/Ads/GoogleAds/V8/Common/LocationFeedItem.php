<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/common/extensions.proto

namespace Google\Ads\GoogleAds\V8\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a location extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.common.LocationFeedItem</code>
 */
class LocationFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>string business_name = 9;</code>
     */
    protected $business_name = null;
    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>string address_line_1 = 10;</code>
     */
    protected $address_line_1 = null;
    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>string address_line_2 = 11;</code>
     */
    protected $address_line_2 = null;
    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>string city = 12;</code>
     */
    protected $city = null;
    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>string province = 13;</code>
     */
    protected $province = null;
    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>string postal_code = 14;</code>
     */
    protected $postal_code = null;
    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>string country_code = 15;</code>
     */
    protected $country_code = null;
    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>string phone_number = 16;</code>
     */
    protected $phone_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $business_name
     *           The name of the business.
     *     @type string $address_line_1
     *           Line 1 of the business address.
     *     @type string $address_line_2
     *           Line 2 of the business address.
     *     @type string $city
     *           City of the business address.
     *     @type string $province
     *           Province of the business address.
     *     @type string $postal_code
     *           Postal code of the business address.
     *     @type string $country_code
     *           Country code of the business address.
     *     @type string $phone_number
     *           Phone number of the business.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>string business_name = 9;</code>
     * @return string
     */
    public function getBusinessName()
    {
        return isset($this->business_name) ? $this->business_name : '';
    }

    public function hasBusinessName()
    {
        return isset($this->business_name);
    }

    public function clearBusinessName()
    {
        unset($this->business_name);
    }

    /**
     * The name of the business.
     *
     * Generated from protobuf field <code>string business_name = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>string address_line_1 = 10;</code>
     * @return string
     */
    public function getAddressLine1()
    {
        return isset($this->address_line_1) ? $this->address_line_1 : '';
    }

    public function hasAddressLine1()
    {
        return isset($this->address_line_1);
    }

    public function clearAddressLine1()
    {
        unset($this->address_line_1);
    }

    /**
     * Line 1 of the business address.
     *
     * Generated from protobuf field <code>string address_line_1 = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine1($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_line_1 = $var;

        return $this;
    }

    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>string address_line_2 = 11;</code>
     * @return string
     */
    public function getAddressLine2()
    {
        return isset($this->address_line_2) ? $this->address_line_2 : '';
    }

    public function hasAddressLine2()
    {
        return isset($this->address_line_2);
    }

    public function clearAddressLine2()
    {
        unset($this->address_line_2);
    }

    /**
     * Line 2 of the business address.
     *
     * Generated from protobuf field <code>string address_line_2 = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setAddressLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->address_line_2 = $var;

        return $this;
    }

    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>string city = 12;</code>
     * @return string
     */
    public function getCity()
    {
        return isset($this->city) ? $this->city : '';
    }

    public function hasCity()
    {
        return isset($this->city);
    }

    public function clearCity()
    {
        unset($this->city);
    }

    /**
     * City of the business address.
     *
     * Generated from protobuf field <code>string city = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>string province = 13;</code>
     * @return string
     */
    public function getProvince()
    {
        return isset($this->province) ? $this->province : '';
    }

    public function hasProvince()
    {
        return isset($this->province);
    }

    public function clearProvince()
    {
        unset($this->province);
    }

    /**
     * Province of the business address.
     *
     * Generated from protobuf field <code>string province = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setProvince($var)
    {
        GPBUtil::checkString($var, True);
        $this->province = $var;

        return $this;
    }

    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>string postal_code = 14;</code>
     * @return string
     */
    public function getPostalCode()
    {
        return isset($this->postal_code) ? $this->postal_code : '';
    }

    public function hasPostalCode()
    {
        return isset($this->postal_code);
    }

    public function clearPostalCode()
    {
        unset($this->postal_code);
    }

    /**
     * Postal code of the business address.
     *
     * Generated from protobuf field <code>string postal_code = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>string country_code = 15;</code>
     * @return string
     */
    public function getCountryCode()
    {
        return isset($this->country_code) ? $this->country_code : '';
    }

    public function hasCountryCode()
    {
        return isset($this->country_code);
    }

    public function clearCountryCode()
    {
        unset($this->country_code);
    }

    /**
     * Country code of the business address.
     *
     * Generated from protobuf field <code>string country_code = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>string phone_number = 16;</code>
     * @return string
     */
    public function getPhoneNumber()
    {
        return isset($this->phone_number) ? $this->phone_number : '';
    }

    public function hasPhoneNumber()
    {
        return isset($this->phone_number);
    }

    public function clearPhoneNumber()
    {
        unset($this->phone_number);
    }

    /**
     * Phone number of the business.
     *
     * Generated from protobuf field <code>string phone_number = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_number = $var;

        return $this;
    }

}

