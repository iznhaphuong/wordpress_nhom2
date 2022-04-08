<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/keyword_plan_campaign.proto

namespace Google\Ads\GoogleAds\V9\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan campaign.
 * Max number of keyword plan campaigns per plan allowed: 1.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.resources.KeywordPlanCampaign</code>
 */
class KeywordPlanCampaign extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Keyword Plan campaign.
     * KeywordPlanCampaign resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The keyword plan this campaign belongs to.
     *
     * Generated from protobuf field <code>optional string keyword_plan = 9 [(.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan = null;
    /**
     * Output only. The ID of the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * The name of the Keyword Plan campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional string name = 11;</code>
     */
    protected $name = null;
    /**
     * The languages targeted for the Keyword Plan campaign.
     * Max allowed: 1.
     *
     * Generated from protobuf field <code>repeated string language_constants = 12 [(.google.api.resource_reference) = {</code>
     */
    private $language_constants;
    /**
     * Targeting network.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 6;</code>
     */
    protected $keyword_plan_network = 0;
    /**
     * A default max cpc bid in micros, and in the account currency, for all ad
     * groups under the campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 13;</code>
     */
    protected $cpc_bid_micros = null;
    /**
     * The geo targets.
     * Max number allowed: 20.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.resources.KeywordPlanGeoTarget geo_targets = 8;</code>
     */
    private $geo_targets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the Keyword Plan campaign.
     *           KeywordPlanCampaign resource names have the form:
     *           `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
     *     @type string $keyword_plan
     *           The keyword plan this campaign belongs to.
     *     @type int|string $id
     *           Output only. The ID of the Keyword Plan campaign.
     *     @type string $name
     *           The name of the Keyword Plan campaign.
     *           This field is required and should not be empty when creating Keyword Plan
     *           campaigns.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $language_constants
     *           The languages targeted for the Keyword Plan campaign.
     *           Max allowed: 1.
     *     @type int $keyword_plan_network
     *           Targeting network.
     *           This field is required and should not be empty when creating Keyword Plan
     *           campaigns.
     *     @type int|string $cpc_bid_micros
     *           A default max cpc bid in micros, and in the account currency, for all ad
     *           groups under the campaign.
     *           This field is required and should not be empty when creating Keyword Plan
     *           campaigns.
     *     @type \Google\Ads\GoogleAds\V9\Resources\KeywordPlanGeoTarget[]|\Google\Protobuf\Internal\RepeatedField $geo_targets
     *           The geo targets.
     *           Max number allowed: 20.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Resources\KeywordPlanCampaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the Keyword Plan campaign.
     * KeywordPlanCampaign resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the Keyword Plan campaign.
     * KeywordPlanCampaign resource names have the form:
     * `customers/{customer_id}/keywordPlanCampaigns/{kp_campaign_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * The keyword plan this campaign belongs to.
     *
     * Generated from protobuf field <code>optional string keyword_plan = 9 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKeywordPlan()
    {
        return isset($this->keyword_plan) ? $this->keyword_plan : '';
    }

    public function hasKeywordPlan()
    {
        return isset($this->keyword_plan);
    }

    public function clearKeywordPlan()
    {
        unset($this->keyword_plan);
    }

    /**
     * The keyword plan this campaign belongs to.
     *
     * Generated from protobuf field <code>optional string keyword_plan = 9 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan = $var;

        return $this;
    }

    /**
     * Output only. The ID of the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the Keyword Plan campaign.
     *
     * Generated from protobuf field <code>optional int64 id = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The name of the Keyword Plan campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional string name = 11;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * The name of the Keyword Plan campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional string name = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The languages targeted for the Keyword Plan campaign.
     * Max allowed: 1.
     *
     * Generated from protobuf field <code>repeated string language_constants = 12 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguageConstants()
    {
        return $this->language_constants;
    }

    /**
     * The languages targeted for the Keyword Plan campaign.
     * Max allowed: 1.
     *
     * Generated from protobuf field <code>repeated string language_constants = 12 [(.google.api.resource_reference) = {</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguageConstants($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->language_constants = $arr;

        return $this;
    }

    /**
     * Targeting network.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 6;</code>
     * @return int
     */
    public function getKeywordPlanNetwork()
    {
        return $this->keyword_plan_network;
    }

    /**
     * Targeting network.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork keyword_plan_network = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setKeywordPlanNetwork($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\KeywordPlanNetworkEnum\KeywordPlanNetwork::class);
        $this->keyword_plan_network = $var;

        return $this;
    }

    /**
     * A default max cpc bid in micros, and in the account currency, for all ad
     * groups under the campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 13;</code>
     * @return int|string
     */
    public function getCpcBidMicros()
    {
        return isset($this->cpc_bid_micros) ? $this->cpc_bid_micros : 0;
    }

    public function hasCpcBidMicros()
    {
        return isset($this->cpc_bid_micros);
    }

    public function clearCpcBidMicros()
    {
        unset($this->cpc_bid_micros);
    }

    /**
     * A default max cpc bid in micros, and in the account currency, for all ad
     * groups under the campaign.
     * This field is required and should not be empty when creating Keyword Plan
     * campaigns.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_micros = $var;

        return $this;
    }

    /**
     * The geo targets.
     * Max number allowed: 20.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.resources.KeywordPlanGeoTarget geo_targets = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargets()
    {
        return $this->geo_targets;
    }

    /**
     * The geo targets.
     * Max number allowed: 20.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.resources.KeywordPlanGeoTarget geo_targets = 8;</code>
     * @param \Google\Ads\GoogleAds\V9\Resources\KeywordPlanGeoTarget[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Resources\KeywordPlanGeoTarget::class);
        $this->geo_targets = $arr;

        return $this;
    }

}

