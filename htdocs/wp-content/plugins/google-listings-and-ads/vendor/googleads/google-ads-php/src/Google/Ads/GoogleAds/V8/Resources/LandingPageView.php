<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/landing_page_view.proto

namespace Google\Ads\GoogleAds\V8\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A landing page view with metrics aggregated at the unexpanded final URL
 * level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.resources.LandingPageView</code>
 */
class LandingPageView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>string unexpanded_final_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $unexpanded_final_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the landing page view.
     *           Landing page view resource names have the form:
     *           `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *     @type string $unexpanded_final_url
     *           Output only. The advertiser-specified final URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Resources\LandingPageView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the landing page view.
     * Landing page view resource names have the form:
     * `customers/{customer_id}/landingPageViews/{unexpanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>string unexpanded_final_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUnexpandedFinalUrl()
    {
        return isset($this->unexpanded_final_url) ? $this->unexpanded_final_url : '';
    }

    public function hasUnexpandedFinalUrl()
    {
        return isset($this->unexpanded_final_url);
    }

    public function clearUnexpandedFinalUrl()
    {
        unset($this->unexpanded_final_url);
    }

    /**
     * Output only. The advertiser-specified final URL.
     *
     * Generated from protobuf field <code>string unexpanded_final_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUnexpandedFinalUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->unexpanded_final_url = $var;

        return $this;
    }

}

