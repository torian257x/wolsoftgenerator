<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DevicePlatform;

    use AdCP\MediaBuy\Enums\DeviceType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\AccountStatus;

    use AdCP\MediaBuy\Enums\BillingParty;

    use AdCP\MediaBuy\Enums\PaymentTerms;

    use AdCP\MediaBuy\Enums\AccountScope;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ItemOfArrayContacts68bbcda7e3595439f5fe2c3176810b51Role;

    use AdCP\MediaBuy\Enums\CloudStorageProtocol;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Format;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Reporting_Bucket637c6849430a3f89084a3d42202a1d68Compression;

    use AdCP\MediaBuy\Enums\NotificationType;

    use AdCP\MediaBuy\Enums\AuthenticationScheme;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use AdCP\MediaBuy\Enums\CanceledBy;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\DayOfWeek;

    use AdCP\MediaBuy\Enums\ReachUnit;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_DurationUnit;

    use AdCP\MediaBuy\Enums\AgeVerificationMethod;

    use AdCP\MediaBuy\Enums\TransportMode;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Geometryd672d0526b0b5b3b9be11e6e707345f0Type;

    use AdCP\MediaBuy\Enums\MatchType;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Deprecated;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_TargetingOverlay
 * @package AdCP\MediaBuy 
 *
 * Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay')]

class GetMediaBuysResponse_TargetingOverlay implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_countries')]
        
            #[SchemaName('geo_countries')]
        
        /** @var string[]|null Restrict delivery to specific countries. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE'). */
        protected $geoCountries;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_countries_exclude')]
        
            #[SchemaName('geo_countries_exclude')]
        
        /** @var string[]|null Exclude specific countries from delivery. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE'). */
        protected $geoCountriesExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_regions')]
        
            #[SchemaName('geo_regions')]
        
        /** @var string[]|null Restrict delivery to specific regions/states. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT'). */
        protected $geoRegions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_regions_exclude')]
        
            #[SchemaName('geo_regions_exclude')]
        
        /** @var string[]|null Exclude specific regions/states from delivery. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT'). */
        protected $geoRegionsExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_metros')]
        
            #[SchemaName('geo_metros')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e[]|null Restrict delivery to specific metro areas. Each entry specifies the classification system and target values. Seller must declare supported systems in get_adcp_capabilities. */
        protected $geoMetros;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_metros_exclude')]
        
            #[SchemaName('geo_metros_exclude')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f[]|null Exclude specific metro areas from delivery. Each entry specifies the classification system and excluded values. Seller must declare supported systems in get_adcp_capabilities. */
        protected $geoMetrosExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_postal_areas')]
        
            #[SchemaName('geo_postal_areas')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b[]|null Restrict delivery to specific postal areas. Each entry specifies the postal system and target values. Seller must declare supported systems in get_adcp_capabilities. */
        protected $geoPostalAreas;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_postal_areas_exclude')]
        
            #[SchemaName('geo_postal_areas_exclude')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e[]|null Exclude specific postal areas from delivery. Each entry specifies the postal system and excluded values. Seller must declare supported systems in get_adcp_capabilities. */
        protected $geoPostalAreasExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/daypart_targets')]
        
            #[SchemaName('daypart_targets')]
        
        /** @var GetMediaBuysResponse_DaypartTarget[]|null Restrict delivery to specific time windows. Each entry specifies days of week and an hour range. */
        protected $daypartTargets;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/axe_include_segment')]
        
            #[SchemaName('axe_include_segment')]
        
            #[Deprecated]
        
        /** @var string|null Deprecated: Use TMP provider fields instead. AXE segment ID to include for targeting. */
        protected $axeIncludeSegment;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/axe_exclude_segment')]
        
            #[SchemaName('axe_exclude_segment')]
        
            #[Deprecated]
        
        /** @var string|null Deprecated: Use TMP provider fields instead. AXE segment ID to exclude from targeting. */
        protected $axeExcludeSegment;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/audience_include')]
        
            #[SchemaName('audience_include')]
        
        /** @var string[]|null Restrict delivery to members of these first-party CRM audiences. Only users present in the uploaded lists are eligible. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Not for lookalike expansion — express that intent in the campaign brief. Seller must declare support in get_adcp_capabilities. */
        protected $audienceInclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/audience_exclude')]
        
            #[SchemaName('audience_exclude')]
        
        /** @var string[]|null Suppress delivery to members of these first-party CRM audiences. Matched users are excluded regardless of other targeting. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Seller must declare support in get_adcp_capabilities. */
        protected $audienceExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/frequency_cap')]
        
            #[SchemaName('frequency_cap')]
        
        /** @var GetMediaBuysResponse_FrequencyCap|null Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set. */
        protected $frequencyCap;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/property_list')]
        
            #[SchemaName('property_list')]
        
        /** @var GetMediaBuysResponse_PropertyListReference|null Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false. */
        protected $propertyList;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/collection_list')]
        
            #[SchemaName('collection_list')]
        
        /** @var GetMediaBuysResponse_CollectionListReference|null Reference to a collection list for including specific collections (programs, shows) within this product. The package runs on the intersection of matched collections and this list. Use for inclusion-based collection targeting. Seller must declare support in get_adcp_capabilities. */
        protected $collectionList;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/collection_list_exclude')]
        
            #[SchemaName('collection_list_exclude')]
        
        /** @var GetMediaBuysResponse_CollectionListReference|null Reference to a collection list for excluding specific collections (programs, shows) from this product. Matched collections must not carry the buyer's ads. Use for brand safety do-not-air lists. Seller must declare support in get_adcp_capabilities. */
        protected $collectionListExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/age_restriction')]
        
            #[SchemaName('age_restriction')]
        
        /** @var GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b|null Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting. */
        protected $ageRestriction;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/device_platform')]
        
            #[SchemaName('device_platform')]
        
        /** @var DevicePlatform[]|null Restrict to specific platforms. Use for technical compatibility (app only works on iOS). Values from Sec-CH-UA-Platform standard, extended for CTV. */
        protected $devicePlatform;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/device_type')]
        
            #[SchemaName('device_type')]
        
        /** @var DeviceType[]|null Restrict to specific device form factors. Use for campaigns targeting hardware categories rather than operating systems (e.g., mobile-only promotions, CTV campaigns). */
        protected $deviceType;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/device_type_exclude')]
        
            #[SchemaName('device_type_exclude')]
        
        /** @var DeviceType[]|null Exclude specific device form factors from delivery (e.g., exclude CTV for app-install campaigns). */
        protected $deviceTypeExclude;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/store_catchments')]
        
            #[SchemaName('store_catchments')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e[]|null Target users within store catchment areas from a synced store catalog. Each entry references a store-type catalog and optionally narrows to specific stores or catchment zones. */
        protected $storeCatchments;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity')]
        
            #[SchemaName('geo_proximity')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f[]|null Target users within travel time, distance, or a custom boundary around arbitrary geographic points. Multiple entries use OR semantics — a user within range of any listed point is eligible. For campaigns targeting 10+ locations, consider using store_catchments with a location catalog instead. Seller must declare support in get_adcp_capabilities. */
        protected $geoProximity;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/language')]
        
            #[SchemaName('language')]
        
        /** @var string[]|null Restrict to users with specific language preferences. ISO 639-1 codes (e.g., 'en', 'es', 'fr'). */
        protected $language;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/keyword_targets')]
        
            #[SchemaName('keyword_targets')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9[]|null Keyword targeting for search and retail media platforms. Restricts delivery to queries matching the specified keywords. Each keyword is identified by the tuple (keyword, match_type) — the same keyword string with different match types are distinct targets. Sellers SHOULD reject duplicate (keyword, match_type) pairs within a single request. Seller must declare support in get_adcp_capabilities. */
        protected $keywordTargets;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/negative_keywords')]
        
            #[SchemaName('negative_keywords')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b[]|null Keywords to exclude from delivery. Queries matching these keywords will not trigger the ad. Each negative keyword is identified by the tuple (keyword, match_type). Seller must declare support in get_adcp_capabilities. */
        protected $negativeKeywords;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'geo_countries',
  1 => 'geo_countries_exclude',
  2 => 'geo_regions',
  3 => 'geo_regions_exclude',
  4 => 'geo_metros',
  5 => 'geo_metros_exclude',
  6 => 'geo_postal_areas',
  7 => 'geo_postal_areas_exclude',
  8 => 'daypart_targets',
  9 => 'axe_include_segment',
  10 => 'axe_exclude_segment',
  11 => 'audience_include',
  12 => 'audience_exclude',
  13 => 'frequency_cap',
  14 => 'property_list',
  15 => 'collection_list',
  16 => 'collection_list_exclude',
  17 => 'age_restriction',
  18 => 'device_platform',
  19 => 'device_type',
  20 => 'device_type_exclude',
  21 => 'store_catchments',
  22 => 'geo_proximity',
  23 => 'language',
  24 => 'keyword_targets',
  25 => 'negative_keywords',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_TargetingOverlay constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processGeoCountries($rawModelDataInput);
            
        
            
                $this->processGeoCountriesExclude($rawModelDataInput);
            
        
            
                $this->processGeoRegions($rawModelDataInput);
            
        
            
                $this->processGeoRegionsExclude($rawModelDataInput);
            
        
            
                $this->processGeoMetros($rawModelDataInput);
            
        
            
                $this->processGeoMetrosExclude($rawModelDataInput);
            
        
            
                $this->processGeoPostalAreas($rawModelDataInput);
            
        
            
                $this->processGeoPostalAreasExclude($rawModelDataInput);
            
        
            
                $this->processDaypartTargets($rawModelDataInput);
            
        
            
                $this->processAxeIncludeSegment($rawModelDataInput);
            
        
            
                $this->processAxeExcludeSegment($rawModelDataInput);
            
        
            
                $this->processAudienceInclude($rawModelDataInput);
            
        
            
                $this->processAudienceExclude($rawModelDataInput);
            
        
            
                $this->processFrequencyCap($rawModelDataInput);
            
        
            
                $this->processPropertyList($rawModelDataInput);
            
        
            
                $this->processCollectionList($rawModelDataInput);
            
        
            
                $this->processCollectionListExclude($rawModelDataInput);
            
        
            
                $this->processAgeRestriction($rawModelDataInput);
            
        
            
                $this->processDevicePlatform($rawModelDataInput);
            
        
            
                $this->processDeviceType($rawModelDataInput);
            
        
            
                $this->processDeviceTypeExclude($rawModelDataInput);
            
        
            
                $this->processStoreCatchments($rawModelDataInput);
            
        
            
                $this->processGeoProximity($rawModelDataInput);
            
        
            
                $this->processLanguage($rawModelDataInput);
            
        
            
                $this->processKeywordTargets($rawModelDataInput);
            
        
            
                $this->processNegativeKeywords($rawModelDataInput);
            
        
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ((function () use ($value) {
    foreach (array_diff(array_keys($value), array (
   'geo_countries',
   'geo_countries_exclude',
   'geo_regions',
   'geo_regions_exclude',
   'geo_metros',
   'geo_metros_exclude',
   'geo_postal_areas',
   'geo_postal_areas_exclude',
   'daypart_targets',
   'axe_include_segment',
   'axe_exclude_segment',
   'audience_include',
   'audience_exclude',
   'frequency_cap',
   'property_list',
   'collection_list',
   'collection_list_exclude',
   'age_restriction',
   'device_platform',
   'device_type',
   'device_type_exclude',
   'store_catchments',
   'geo_proximity',
   'language',
   'keyword_targets',
   'negative_keywords',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_TargetingOverlay',
)));
}

            

            
        }
    

    /**
     * Get the raw input used to set up the model
     *
     * @return array
     */
    public function getRawModelDataInput(): array
    {
        return $this->_rawModelDataInput;
    }

    
        
            
                /**
                 * Get the value of geo_countries.
                 *
                 * Restrict delivery to specific countries. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
                 *
                 * @return string[]|null
                 */
                public function getGeoCountries(): ?array
                {
                    

                    return $this->geoCountries;
                }
            

            
                /**
                 * Set the value of geo_countries.
                 *
                 * @param string[] $geoCountries Restrict delivery to specific countries. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoCountries(
                    array $geoCountries
                ): static {
                    if ($this->geoCountries === $geoCountries) {
                        return $this;
                    }

                    $value = $modelData['geo_countries'] = $geoCountries;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoCountries($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoCountries = $value;
                    $this->_rawModelDataInput['geo_countries'] = $geoCountries;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoCountries
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoCountries(array $modelData): void
            {
                
                    if (!array_key_exists('geo_countries', $modelData) && $this->geoCountries === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_countries', $modelData) ? $modelData['geo_countries'] : $this->geoCountries;

                

                $this->geoCountries = $this->validateGeoCountries($value, $modelData);
            }

            /**
             * Execute all validators for the property geoCountries
             */
            protected function validateGeoCountries($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_countries',
  1 => 'array',
)));
}

                
                    $this->validateGeoCountries_ArrayItem_0138ace54b5ccc7984b3bee461f3137e($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_countries',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_countries_exclude.
                 *
                 * Exclude specific countries from delivery. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
                 *
                 * @return string[]|null
                 */
                public function getGeoCountriesExclude(): ?array
                {
                    

                    return $this->geoCountriesExclude;
                }
            

            
                /**
                 * Set the value of geo_countries_exclude.
                 *
                 * @param string[] $geoCountriesExclude Exclude specific countries from delivery. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoCountriesExclude(
                    array $geoCountriesExclude
                ): static {
                    if ($this->geoCountriesExclude === $geoCountriesExclude) {
                        return $this;
                    }

                    $value = $modelData['geo_countries_exclude'] = $geoCountriesExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoCountriesExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoCountriesExclude = $value;
                    $this->_rawModelDataInput['geo_countries_exclude'] = $geoCountriesExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoCountriesExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoCountriesExclude(array $modelData): void
            {
                
                    if (!array_key_exists('geo_countries_exclude', $modelData) && $this->geoCountriesExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_countries_exclude', $modelData) ? $modelData['geo_countries_exclude'] : $this->geoCountriesExclude;

                

                $this->geoCountriesExclude = $this->validateGeoCountriesExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property geoCountriesExclude
             */
            protected function validateGeoCountriesExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_countries_exclude',
  1 => 'array',
)));
}

                
                    $this->validateGeoCountriesExclude_ArrayItem_8b18114d700f792d48d41ecbe46bd7d8($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_countries_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_regions.
                 *
                 * Restrict delivery to specific regions/states. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
                 *
                 * @return string[]|null
                 */
                public function getGeoRegions(): ?array
                {
                    

                    return $this->geoRegions;
                }
            

            
                /**
                 * Set the value of geo_regions.
                 *
                 * @param string[] $geoRegions Restrict delivery to specific regions/states. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoRegions(
                    array $geoRegions
                ): static {
                    if ($this->geoRegions === $geoRegions) {
                        return $this;
                    }

                    $value = $modelData['geo_regions'] = $geoRegions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoRegions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoRegions = $value;
                    $this->_rawModelDataInput['geo_regions'] = $geoRegions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoRegions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoRegions(array $modelData): void
            {
                
                    if (!array_key_exists('geo_regions', $modelData) && $this->geoRegions === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_regions', $modelData) ? $modelData['geo_regions'] : $this->geoRegions;

                

                $this->geoRegions = $this->validateGeoRegions($value, $modelData);
            }

            /**
             * Execute all validators for the property geoRegions
             */
            protected function validateGeoRegions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_regions',
  1 => 'array',
)));
}

                
                    $this->validateGeoRegions_ArrayItem_915731c83177371ef0c4290afcd97052($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_regions',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_regions_exclude.
                 *
                 * Exclude specific regions/states from delivery. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
                 *
                 * @return string[]|null
                 */
                public function getGeoRegionsExclude(): ?array
                {
                    

                    return $this->geoRegionsExclude;
                }
            

            
                /**
                 * Set the value of geo_regions_exclude.
                 *
                 * @param string[] $geoRegionsExclude Exclude specific regions/states from delivery. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoRegionsExclude(
                    array $geoRegionsExclude
                ): static {
                    if ($this->geoRegionsExclude === $geoRegionsExclude) {
                        return $this;
                    }

                    $value = $modelData['geo_regions_exclude'] = $geoRegionsExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoRegionsExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoRegionsExclude = $value;
                    $this->_rawModelDataInput['geo_regions_exclude'] = $geoRegionsExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoRegionsExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoRegionsExclude(array $modelData): void
            {
                
                    if (!array_key_exists('geo_regions_exclude', $modelData) && $this->geoRegionsExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_regions_exclude', $modelData) ? $modelData['geo_regions_exclude'] : $this->geoRegionsExclude;

                

                $this->geoRegionsExclude = $this->validateGeoRegionsExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property geoRegionsExclude
             */
            protected function validateGeoRegionsExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_regions_exclude',
  1 => 'array',
)));
}

                
                    $this->validateGeoRegionsExclude_ArrayItem_865b0472afff7decaf458f9e1d4d1313($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_regions_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_metros.
                 *
                 * Restrict delivery to specific metro areas. Each entry specifies the classification system and target values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e[]|null
                 */
                public function getGeoMetros(): ?array
                {
                    

                    return $this->geoMetros;
                }
            

            
                /**
                 * Set the value of geo_metros.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e[] $geoMetros Restrict delivery to specific metro areas. Each entry specifies the classification system and target values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoMetros(
                    array $geoMetros
                ): static {
                    if ($this->geoMetros === $geoMetros) {
                        return $this;
                    }

                    $value = $modelData['geo_metros'] = $geoMetros;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoMetros($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoMetros = $value;
                    $this->_rawModelDataInput['geo_metros'] = $geoMetros;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoMetros
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoMetros(array $modelData): void
            {
                
                    if (!array_key_exists('geo_metros', $modelData) && $this->geoMetros === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_metros', $modelData) ? $modelData['geo_metros'] : $this->geoMetros;

                

                $this->geoMetros = $this->validateGeoMetros($value, $modelData);
            }

            /**
             * Execute all validators for the property geoMetros
             */
            protected function validateGeoMetros($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_metros',
  1 => 'array',
)));
}

                
                    $this->validateGeoMetros_ArrayItem_0564475275a7d50090c03b36adf32d16($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_metros',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_metros_exclude.
                 *
                 * Exclude specific metro areas from delivery. Each entry specifies the classification system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f[]|null
                 */
                public function getGeoMetrosExclude(): ?array
                {
                    

                    return $this->geoMetrosExclude;
                }
            

            
                /**
                 * Set the value of geo_metros_exclude.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f[] $geoMetrosExclude Exclude specific metro areas from delivery. Each entry specifies the classification system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoMetrosExclude(
                    array $geoMetrosExclude
                ): static {
                    if ($this->geoMetrosExclude === $geoMetrosExclude) {
                        return $this;
                    }

                    $value = $modelData['geo_metros_exclude'] = $geoMetrosExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoMetrosExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoMetrosExclude = $value;
                    $this->_rawModelDataInput['geo_metros_exclude'] = $geoMetrosExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoMetrosExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoMetrosExclude(array $modelData): void
            {
                
                    if (!array_key_exists('geo_metros_exclude', $modelData) && $this->geoMetrosExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_metros_exclude', $modelData) ? $modelData['geo_metros_exclude'] : $this->geoMetrosExclude;

                

                $this->geoMetrosExclude = $this->validateGeoMetrosExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property geoMetrosExclude
             */
            protected function validateGeoMetrosExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_metros_exclude',
  1 => 'array',
)));
}

                
                    $this->validateGeoMetrosExclude_ArrayItem_2fb441cc904fa9f4cb791638fd5bab04($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_metros_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_postal_areas.
                 *
                 * Restrict delivery to specific postal areas. Each entry specifies the postal system and target values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b[]|null
                 */
                public function getGeoPostalAreas(): ?array
                {
                    

                    return $this->geoPostalAreas;
                }
            

            
                /**
                 * Set the value of geo_postal_areas.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b[] $geoPostalAreas Restrict delivery to specific postal areas. Each entry specifies the postal system and target values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoPostalAreas(
                    array $geoPostalAreas
                ): static {
                    if ($this->geoPostalAreas === $geoPostalAreas) {
                        return $this;
                    }

                    $value = $modelData['geo_postal_areas'] = $geoPostalAreas;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoPostalAreas($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoPostalAreas = $value;
                    $this->_rawModelDataInput['geo_postal_areas'] = $geoPostalAreas;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoPostalAreas
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoPostalAreas(array $modelData): void
            {
                
                    if (!array_key_exists('geo_postal_areas', $modelData) && $this->geoPostalAreas === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_postal_areas', $modelData) ? $modelData['geo_postal_areas'] : $this->geoPostalAreas;

                

                $this->geoPostalAreas = $this->validateGeoPostalAreas($value, $modelData);
            }

            /**
             * Execute all validators for the property geoPostalAreas
             */
            protected function validateGeoPostalAreas($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_postal_areas',
  1 => 'array',
)));
}

                
                    $this->validateGeoPostalAreas_ArrayItem_e8d34cccd2287ad30675139d5a02491d($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_postal_areas',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_postal_areas_exclude.
                 *
                 * Exclude specific postal areas from delivery. Each entry specifies the postal system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e[]|null
                 */
                public function getGeoPostalAreasExclude(): ?array
                {
                    

                    return $this->geoPostalAreasExclude;
                }
            

            
                /**
                 * Set the value of geo_postal_areas_exclude.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e[] $geoPostalAreasExclude Exclude specific postal areas from delivery. Each entry specifies the postal system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoPostalAreasExclude(
                    array $geoPostalAreasExclude
                ): static {
                    if ($this->geoPostalAreasExclude === $geoPostalAreasExclude) {
                        return $this;
                    }

                    $value = $modelData['geo_postal_areas_exclude'] = $geoPostalAreasExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoPostalAreasExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoPostalAreasExclude = $value;
                    $this->_rawModelDataInput['geo_postal_areas_exclude'] = $geoPostalAreasExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoPostalAreasExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoPostalAreasExclude(array $modelData): void
            {
                
                    if (!array_key_exists('geo_postal_areas_exclude', $modelData) && $this->geoPostalAreasExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_postal_areas_exclude', $modelData) ? $modelData['geo_postal_areas_exclude'] : $this->geoPostalAreasExclude;

                

                $this->geoPostalAreasExclude = $this->validateGeoPostalAreasExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property geoPostalAreasExclude
             */
            protected function validateGeoPostalAreasExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_postal_areas_exclude',
  1 => 'array',
)));
}

                
                    $this->validateGeoPostalAreasExclude_ArrayItem_b8f668eac79c5d0a1c208de9561e29ab($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_postal_areas_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of daypart_targets.
                 *
                 * Restrict delivery to specific time windows. Each entry specifies days of week and an hour range.
                 *
                 * @return GetMediaBuysResponse_DaypartTarget[]|null
                 */
                public function getDaypartTargets(): ?array
                {
                    

                    return $this->daypartTargets;
                }
            

            
                /**
                 * Set the value of daypart_targets.
                 *
                 * @param GetMediaBuysResponse_DaypartTarget[] $daypartTargets Restrict delivery to specific time windows. Each entry specifies days of week and an hour range.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDaypartTargets(
                    array $daypartTargets
                ): static {
                    if ($this->daypartTargets === $daypartTargets) {
                        return $this;
                    }

                    $value = $modelData['daypart_targets'] = $daypartTargets;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDaypartTargets($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->daypartTargets = $value;
                    $this->_rawModelDataInput['daypart_targets'] = $daypartTargets;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property daypartTargets
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDaypartTargets(array $modelData): void
            {
                
                    if (!array_key_exists('daypart_targets', $modelData) && $this->daypartTargets === null) {
                        return;
                    }
                

                $value = array_key_exists('daypart_targets', $modelData) ? $modelData['daypart_targets'] : $this->daypartTargets;

                

                $this->daypartTargets = $this->validateDaypartTargets($value, $modelData);
            }

            /**
             * Execute all validators for the property daypartTargets
             */
            protected function validateDaypartTargets($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'daypart_targets',
  1 => 'array',
)));
}

                
                    $this->validateDaypartTargets_ArrayItem_b2e6e4a8fbb6958c6dd0a3fc98165f4b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'daypart_targets',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of axe_include_segment.
                 *
                 * Deprecated: Use TMP provider fields instead. AXE segment ID to include for targeting.
                 *
                 * @return string|null
                 */
                public function getAxeIncludeSegment(): ?string
                {
                    

                    return $this->axeIncludeSegment;
                }
            

            
                /**
                 * Set the value of axe_include_segment.
                 *
                 * @param string $axeIncludeSegment Deprecated: Use TMP provider fields instead. AXE segment ID to include for targeting.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAxeIncludeSegment(
                    string $axeIncludeSegment
                ): static {
                    if ($this->axeIncludeSegment === $axeIncludeSegment) {
                        return $this;
                    }

                    $value = $modelData['axe_include_segment'] = $axeIncludeSegment;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAxeIncludeSegment($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->axeIncludeSegment = $value;
                    $this->_rawModelDataInput['axe_include_segment'] = $axeIncludeSegment;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property axeIncludeSegment
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAxeIncludeSegment(array $modelData): void
            {
                
                    if (!array_key_exists('axe_include_segment', $modelData) && $this->axeIncludeSegment === null) {
                        return;
                    }
                

                $value = array_key_exists('axe_include_segment', $modelData) ? $modelData['axe_include_segment'] : $this->axeIncludeSegment;

                

                $this->axeIncludeSegment = $this->validateAxeIncludeSegment($value, $modelData);
            }

            /**
             * Execute all validators for the property axeIncludeSegment
             */
            protected function validateAxeIncludeSegment($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'axe_include_segment',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of axe_exclude_segment.
                 *
                 * Deprecated: Use TMP provider fields instead. AXE segment ID to exclude from targeting.
                 *
                 * @return string|null
                 */
                public function getAxeExcludeSegment(): ?string
                {
                    

                    return $this->axeExcludeSegment;
                }
            

            
                /**
                 * Set the value of axe_exclude_segment.
                 *
                 * @param string $axeExcludeSegment Deprecated: Use TMP provider fields instead. AXE segment ID to exclude from targeting.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAxeExcludeSegment(
                    string $axeExcludeSegment
                ): static {
                    if ($this->axeExcludeSegment === $axeExcludeSegment) {
                        return $this;
                    }

                    $value = $modelData['axe_exclude_segment'] = $axeExcludeSegment;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAxeExcludeSegment($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->axeExcludeSegment = $value;
                    $this->_rawModelDataInput['axe_exclude_segment'] = $axeExcludeSegment;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property axeExcludeSegment
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAxeExcludeSegment(array $modelData): void
            {
                
                    if (!array_key_exists('axe_exclude_segment', $modelData) && $this->axeExcludeSegment === null) {
                        return;
                    }
                

                $value = array_key_exists('axe_exclude_segment', $modelData) ? $modelData['axe_exclude_segment'] : $this->axeExcludeSegment;

                

                $this->axeExcludeSegment = $this->validateAxeExcludeSegment($value, $modelData);
            }

            /**
             * Execute all validators for the property axeExcludeSegment
             */
            protected function validateAxeExcludeSegment($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'axe_exclude_segment',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of audience_include.
                 *
                 * Restrict delivery to members of these first-party CRM audiences. Only users present in the uploaded lists are eligible. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Not for lookalike expansion — express that intent in the campaign brief. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return string[]|null
                 */
                public function getAudienceInclude(): ?array
                {
                    

                    return $this->audienceInclude;
                }
            

            
                /**
                 * Set the value of audience_include.
                 *
                 * @param string[] $audienceInclude Restrict delivery to members of these first-party CRM audiences. Only users present in the uploaded lists are eligible. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Not for lookalike expansion — express that intent in the campaign brief. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAudienceInclude(
                    array $audienceInclude
                ): static {
                    if ($this->audienceInclude === $audienceInclude) {
                        return $this;
                    }

                    $value = $modelData['audience_include'] = $audienceInclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAudienceInclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->audienceInclude = $value;
                    $this->_rawModelDataInput['audience_include'] = $audienceInclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property audienceInclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAudienceInclude(array $modelData): void
            {
                
                    if (!array_key_exists('audience_include', $modelData) && $this->audienceInclude === null) {
                        return;
                    }
                

                $value = array_key_exists('audience_include', $modelData) ? $modelData['audience_include'] : $this->audienceInclude;

                

                $this->audienceInclude = $this->validateAudienceInclude($value, $modelData);
            }

            /**
             * Execute all validators for the property audienceInclude
             */
            protected function validateAudienceInclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'audience_include',
  1 => 'array',
)));
}

                
                    $this->validateAudienceInclude_ArrayItem_d2b9828cbab7604269dfc0256a7b5a80($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'audience_include',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of audience_exclude.
                 *
                 * Suppress delivery to members of these first-party CRM audiences. Matched users are excluded regardless of other targeting. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return string[]|null
                 */
                public function getAudienceExclude(): ?array
                {
                    

                    return $this->audienceExclude;
                }
            

            
                /**
                 * Set the value of audience_exclude.
                 *
                 * @param string[] $audienceExclude Suppress delivery to members of these first-party CRM audiences. Matched users are excluded regardless of other targeting. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAudienceExclude(
                    array $audienceExclude
                ): static {
                    if ($this->audienceExclude === $audienceExclude) {
                        return $this;
                    }

                    $value = $modelData['audience_exclude'] = $audienceExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAudienceExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->audienceExclude = $value;
                    $this->_rawModelDataInput['audience_exclude'] = $audienceExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property audienceExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAudienceExclude(array $modelData): void
            {
                
                    if (!array_key_exists('audience_exclude', $modelData) && $this->audienceExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('audience_exclude', $modelData) ? $modelData['audience_exclude'] : $this->audienceExclude;

                

                $this->audienceExclude = $this->validateAudienceExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property audienceExclude
             */
            protected function validateAudienceExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'audience_exclude',
  1 => 'array',
)));
}

                
                    $this->validateAudienceExclude_ArrayItem_5485a1d621ac19bc3857f4c7ab6b937f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'audience_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of frequency_cap.
                 *
                 * Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set.
                 *
                 * @return GetMediaBuysResponse_FrequencyCap|null
                 */
                public function getFrequencyCap(): ?GetMediaBuysResponse_FrequencyCap
                {
                    

                    return $this->frequencyCap;
                }
            

            
                /**
                 * Set the value of frequency_cap.
                 *
                 * @param GetMediaBuysResponse_FrequencyCap $frequencyCap Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFrequencyCap(
                    GetMediaBuysResponse_FrequencyCap $frequencyCap
                ): static {
                    if ($this->frequencyCap === $frequencyCap) {
                        return $this;
                    }

                    $value = $modelData['frequency_cap'] = $frequencyCap;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFrequencyCap($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->frequencyCap = $value;
                    $this->_rawModelDataInput['frequency_cap'] = $frequencyCap;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property frequencyCap
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFrequencyCap(array $modelData): void
            {
                
                    if (!array_key_exists('frequency_cap', $modelData) && $this->frequencyCap === null) {
                        return;
                    }
                

                $value = array_key_exists('frequency_cap', $modelData) ? $modelData['frequency_cap'] : $this->frequencyCap;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_FrequencyCap($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'frequency_cap',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->frequencyCap = $this->validateFrequencyCap($value, $modelData);
            }

            /**
             * Execute all validators for the property frequencyCap
             */
            protected function validateFrequencyCap($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'frequency_cap',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_FrequencyCap)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'frequency_cap',
  1 => 'GetMediaBuysResponse_FrequencyCap',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of property_list.
                 *
                 * Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false.
                 *
                 * @return GetMediaBuysResponse_PropertyListReference|null
                 */
                public function getPropertyList(): ?GetMediaBuysResponse_PropertyListReference
                {
                    

                    return $this->propertyList;
                }
            

            
                /**
                 * Set the value of property_list.
                 *
                 * @param GetMediaBuysResponse_PropertyListReference $propertyList Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPropertyList(
                    GetMediaBuysResponse_PropertyListReference $propertyList
                ): static {
                    if ($this->propertyList === $propertyList) {
                        return $this;
                    }

                    $value = $modelData['property_list'] = $propertyList;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePropertyList($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->propertyList = $value;
                    $this->_rawModelDataInput['property_list'] = $propertyList;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property propertyList
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPropertyList(array $modelData): void
            {
                
                    if (!array_key_exists('property_list', $modelData) && $this->propertyList === null) {
                        return;
                    }
                

                $value = array_key_exists('property_list', $modelData) ? $modelData['property_list'] : $this->propertyList;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_PropertyListReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'property_list',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->propertyList = $this->validatePropertyList($value, $modelData);
            }

            /**
             * Execute all validators for the property propertyList
             */
            protected function validatePropertyList($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'property_list',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_PropertyListReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'property_list',
  1 => 'GetMediaBuysResponse_PropertyListReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of collection_list.
                 *
                 * Reference to a collection list for including specific collections (programs, shows) within this product. The package runs on the intersection of matched collections and this list. Use for inclusion-based collection targeting. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_CollectionListReference|null
                 */
                public function getCollectionList(): ?GetMediaBuysResponse_CollectionListReference
                {
                    

                    return $this->collectionList;
                }
            

            
                /**
                 * Set the value of collection_list.
                 *
                 * @param GetMediaBuysResponse_CollectionListReference $collectionList Reference to a collection list for including specific collections (programs, shows) within this product. The package runs on the intersection of matched collections and this list. Use for inclusion-based collection targeting. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCollectionList(
                    GetMediaBuysResponse_CollectionListReference $collectionList
                ): static {
                    if ($this->collectionList === $collectionList) {
                        return $this;
                    }

                    $value = $modelData['collection_list'] = $collectionList;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCollectionList($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->collectionList = $value;
                    $this->_rawModelDataInput['collection_list'] = $collectionList;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property collectionList
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCollectionList(array $modelData): void
            {
                
                    if (!array_key_exists('collection_list', $modelData) && $this->collectionList === null) {
                        return;
                    }
                

                $value = array_key_exists('collection_list', $modelData) ? $modelData['collection_list'] : $this->collectionList;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_CollectionListReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'collection_list',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->collectionList = $this->validateCollectionList($value, $modelData);
            }

            /**
             * Execute all validators for the property collectionList
             */
            protected function validateCollectionList($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'collection_list',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_CollectionListReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'collection_list',
  1 => 'GetMediaBuysResponse_CollectionListReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of collection_list_exclude.
                 *
                 * Reference to a collection list for excluding specific collections (programs, shows) from this product. Matched collections must not carry the buyer's ads. Use for brand safety do-not-air lists. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_CollectionListReference|null
                 */
                public function getCollectionListExclude(): ?GetMediaBuysResponse_CollectionListReference
                {
                    

                    return $this->collectionListExclude;
                }
            

            
                /**
                 * Set the value of collection_list_exclude.
                 *
                 * @param GetMediaBuysResponse_CollectionListReference $collectionListExclude Reference to a collection list for excluding specific collections (programs, shows) from this product. Matched collections must not carry the buyer's ads. Use for brand safety do-not-air lists. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCollectionListExclude(
                    GetMediaBuysResponse_CollectionListReference $collectionListExclude
                ): static {
                    if ($this->collectionListExclude === $collectionListExclude) {
                        return $this;
                    }

                    $value = $modelData['collection_list_exclude'] = $collectionListExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCollectionListExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->collectionListExclude = $value;
                    $this->_rawModelDataInput['collection_list_exclude'] = $collectionListExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property collectionListExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCollectionListExclude(array $modelData): void
            {
                
                    if (!array_key_exists('collection_list_exclude', $modelData) && $this->collectionListExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('collection_list_exclude', $modelData) ? $modelData['collection_list_exclude'] : $this->collectionListExclude;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_CollectionListReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'collection_list_exclude',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->collectionListExclude = $this->validateCollectionListExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property collectionListExclude
             */
            protected function validateCollectionListExclude($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'collection_list_exclude',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_CollectionListReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'collection_list_exclude',
  1 => 'GetMediaBuysResponse_CollectionListReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of age_restriction.
                 *
                 * Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting.
                 *
                 * @return GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b|null
                 */
                public function getAgeRestriction(): ?GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b
                {
                    

                    return $this->ageRestriction;
                }
            

            
                /**
                 * Set the value of age_restriction.
                 *
                 * @param GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b $ageRestriction Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAgeRestriction(
                    GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b $ageRestriction
                ): static {
                    if ($this->ageRestriction === $ageRestriction) {
                        return $this;
                    }

                    $value = $modelData['age_restriction'] = $ageRestriction;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAgeRestriction($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ageRestriction = $value;
                    $this->_rawModelDataInput['age_restriction'] = $ageRestriction;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ageRestriction
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAgeRestriction(array $modelData): void
            {
                
                    if (!array_key_exists('age_restriction', $modelData) && $this->ageRestriction === null) {
                        return;
                    }
                

                $value = array_key_exists('age_restriction', $modelData) ? $modelData['age_restriction'] : $this->ageRestriction;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'age_restriction',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ageRestriction = $this->validateAgeRestriction($value, $modelData);
            }

            /**
             * Execute all validators for the property ageRestriction
             */
            protected function validateAgeRestriction($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'age_restriction',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'age_restriction',
  1 => 'GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of device_platform.
                 *
                 * Restrict to specific platforms. Use for technical compatibility (app only works on iOS). Values from Sec-CH-UA-Platform standard, extended for CTV.
                 *
                 * @return DevicePlatform[]|null
                 */
                public function getDevicePlatform(): array | DevicePlatform | null
                {
                    

                    return $this->devicePlatform;
                }
            

            
                /**
                 * Set the value of device_platform.
                 *
                 * @param string[]|DevicePlatform[]|null $devicePlatform Restrict to specific platforms. Use for technical compatibility (app only works on iOS). Values from Sec-CH-UA-Platform standard, extended for CTV.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDevicePlatform(
                    array | DevicePlatform | null $devicePlatform
                ): static {
                    if ($this->devicePlatform === $devicePlatform) {
                        return $this;
                    }

                    $value = $modelData['device_platform'] = $devicePlatform;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDevicePlatform($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->devicePlatform = $value;
                    $this->_rawModelDataInput['device_platform'] = $devicePlatform;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property devicePlatform
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDevicePlatform(array $modelData): void
            {
                
                    if (!array_key_exists('device_platform', $modelData) && $this->devicePlatform === null) {
                        return;
                    }
                

                $value = array_key_exists('device_platform', $modelData) ? $modelData['device_platform'] : $this->devicePlatform;

                

                $this->devicePlatform = $this->validateDevicePlatform($value, $modelData);
            }

            /**
             * Execute all validators for the property devicePlatform
             */
            protected function validateDevicePlatform($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'device_platform',
  1 => 'array',
)));
}

                
                    $this->validateDevicePlatform_ArrayItem_1a722f3e068c4222f7196a7b57e3e62d($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'device_platform',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of device_type.
                 *
                 * Restrict to specific device form factors. Use for campaigns targeting hardware categories rather than operating systems (e.g., mobile-only promotions, CTV campaigns).
                 *
                 * @return DeviceType[]|null
                 */
                public function getDeviceType(): array | DeviceType | null
                {
                    

                    return $this->deviceType;
                }
            

            
                /**
                 * Set the value of device_type.
                 *
                 * @param string[]|DeviceType[]|null $deviceType Restrict to specific device form factors. Use for campaigns targeting hardware categories rather than operating systems (e.g., mobile-only promotions, CTV campaigns).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeviceType(
                    array | DeviceType | null $deviceType
                ): static {
                    if ($this->deviceType === $deviceType) {
                        return $this;
                    }

                    $value = $modelData['device_type'] = $deviceType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeviceType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->deviceType = $value;
                    $this->_rawModelDataInput['device_type'] = $deviceType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property deviceType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeviceType(array $modelData): void
            {
                
                    if (!array_key_exists('device_type', $modelData) && $this->deviceType === null) {
                        return;
                    }
                

                $value = array_key_exists('device_type', $modelData) ? $modelData['device_type'] : $this->deviceType;

                

                $this->deviceType = $this->validateDeviceType($value, $modelData);
            }

            /**
             * Execute all validators for the property deviceType
             */
            protected function validateDeviceType($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'device_type',
  1 => 'array',
)));
}

                
                    $this->validateDeviceType_ArrayItem_7b31f7ca7c9afb627838fb1f4a23d7ae($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'device_type',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of device_type_exclude.
                 *
                 * Exclude specific device form factors from delivery (e.g., exclude CTV for app-install campaigns).
                 *
                 * @return DeviceType[]|null
                 */
                public function getDeviceTypeExclude(): array | DeviceType | null
                {
                    

                    return $this->deviceTypeExclude;
                }
            

            
                /**
                 * Set the value of device_type_exclude.
                 *
                 * @param string[]|DeviceType[]|null $deviceTypeExclude Exclude specific device form factors from delivery (e.g., exclude CTV for app-install campaigns).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeviceTypeExclude(
                    array | DeviceType | null $deviceTypeExclude
                ): static {
                    if ($this->deviceTypeExclude === $deviceTypeExclude) {
                        return $this;
                    }

                    $value = $modelData['device_type_exclude'] = $deviceTypeExclude;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeviceTypeExclude($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->deviceTypeExclude = $value;
                    $this->_rawModelDataInput['device_type_exclude'] = $deviceTypeExclude;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property deviceTypeExclude
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeviceTypeExclude(array $modelData): void
            {
                
                    if (!array_key_exists('device_type_exclude', $modelData) && $this->deviceTypeExclude === null) {
                        return;
                    }
                

                $value = array_key_exists('device_type_exclude', $modelData) ? $modelData['device_type_exclude'] : $this->deviceTypeExclude;

                

                $this->deviceTypeExclude = $this->validateDeviceTypeExclude($value, $modelData);
            }

            /**
             * Execute all validators for the property deviceTypeExclude
             */
            protected function validateDeviceTypeExclude($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'device_type_exclude',
  1 => 'array',
)));
}

                
                    $this->validateDeviceTypeExclude_ArrayItem_a41563359c2f9458a78d0c16746b4fc2($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'device_type_exclude',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of store_catchments.
                 *
                 * Target users within store catchment areas from a synced store catalog. Each entry references a store-type catalog and optionally narrows to specific stores or catchment zones.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e[]|null
                 */
                public function getStoreCatchments(): ?array
                {
                    

                    return $this->storeCatchments;
                }
            

            
                /**
                 * Set the value of store_catchments.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e[] $storeCatchments Target users within store catchment areas from a synced store catalog. Each entry references a store-type catalog and optionally narrows to specific stores or catchment zones.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStoreCatchments(
                    array $storeCatchments
                ): static {
                    if ($this->storeCatchments === $storeCatchments) {
                        return $this;
                    }

                    $value = $modelData['store_catchments'] = $storeCatchments;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStoreCatchments($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->storeCatchments = $value;
                    $this->_rawModelDataInput['store_catchments'] = $storeCatchments;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property storeCatchments
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStoreCatchments(array $modelData): void
            {
                
                    if (!array_key_exists('store_catchments', $modelData) && $this->storeCatchments === null) {
                        return;
                    }
                

                $value = array_key_exists('store_catchments', $modelData) ? $modelData['store_catchments'] : $this->storeCatchments;

                

                $this->storeCatchments = $this->validateStoreCatchments($value, $modelData);
            }

            /**
             * Execute all validators for the property storeCatchments
             */
            protected function validateStoreCatchments($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'store_catchments',
  1 => 'array',
)));
}

                
                    $this->validateStoreCatchments_ArrayItem_62edf85c78098c372087b2be56caeebb($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'store_catchments',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_proximity.
                 *
                 * Target users within travel time, distance, or a custom boundary around arbitrary geographic points. Multiple entries use OR semantics — a user within range of any listed point is eligible. For campaigns targeting 10+ locations, consider using store_catchments with a location catalog instead. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f[]|null
                 */
                public function getGeoProximity(): ?array
                {
                    

                    return $this->geoProximity;
                }
            

            
                /**
                 * Set the value of geo_proximity.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f[] $geoProximity Target users within travel time, distance, or a custom boundary around arbitrary geographic points. Multiple entries use OR semantics — a user within range of any listed point is eligible. For campaigns targeting 10+ locations, consider using store_catchments with a location catalog instead. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setGeoProximity(
                    array $geoProximity
                ): static {
                    if ($this->geoProximity === $geoProximity) {
                        return $this;
                    }

                    $value = $modelData['geo_proximity'] = $geoProximity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateGeoProximity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geoProximity = $value;
                    $this->_rawModelDataInput['geo_proximity'] = $geoProximity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geoProximity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processGeoProximity(array $modelData): void
            {
                
                    if (!array_key_exists('geo_proximity', $modelData) && $this->geoProximity === null) {
                        return;
                    }
                

                $value = array_key_exists('geo_proximity', $modelData) ? $modelData['geo_proximity'] : $this->geoProximity;

                

                $this->geoProximity = $this->validateGeoProximity($value, $modelData);
            }

            /**
             * Execute all validators for the property geoProximity
             */
            protected function validateGeoProximity($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'geo_proximity',
  1 => 'array',
)));
}

                
                    $this->validateGeoProximity_ArrayItem_227a9816c058cc3f7de6327ba01eb056($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_proximity',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of language.
                 *
                 * Restrict to users with specific language preferences. ISO 639-1 codes (e.g., 'en', 'es', 'fr').
                 *
                 * @return string[]|null
                 */
                public function getLanguage(): ?array
                {
                    

                    return $this->language;
                }
            

            
                /**
                 * Set the value of language.
                 *
                 * @param string[] $language Restrict to users with specific language preferences. ISO 639-1 codes (e.g., 'en', 'es', 'fr').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLanguage(
                    array $language
                ): static {
                    if ($this->language === $language) {
                        return $this;
                    }

                    $value = $modelData['language'] = $language;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLanguage($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->language = $value;
                    $this->_rawModelDataInput['language'] = $language;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property language
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLanguage(array $modelData): void
            {
                
                    if (!array_key_exists('language', $modelData) && $this->language === null) {
                        return;
                    }
                

                $value = array_key_exists('language', $modelData) ? $modelData['language'] : $this->language;

                

                $this->language = $this->validateLanguage($value, $modelData);
            }

            /**
             * Execute all validators for the property language
             */
            protected function validateLanguage($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'language',
  1 => 'array',
)));
}

                
                    $this->validateLanguage_ArrayItem_2779a29e74a79760012ebacc3fa2254c($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'language',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of keyword_targets.
                 *
                 * Keyword targeting for search and retail media platforms. Restricts delivery to queries matching the specified keywords. Each keyword is identified by the tuple (keyword, match_type) — the same keyword string with different match types are distinct targets. Sellers SHOULD reject duplicate (keyword, match_type) pairs within a single request. Seller must declare support in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9[]|null
                 */
                public function getKeywordTargets(): ?array
                {
                    

                    return $this->keywordTargets;
                }
            

            
                /**
                 * Set the value of keyword_targets.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9[] $keywordTargets Keyword targeting for search and retail media platforms. Restricts delivery to queries matching the specified keywords. Each keyword is identified by the tuple (keyword, match_type) — the same keyword string with different match types are distinct targets. Sellers SHOULD reject duplicate (keyword, match_type) pairs within a single request. Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setKeywordTargets(
                    array $keywordTargets
                ): static {
                    if ($this->keywordTargets === $keywordTargets) {
                        return $this;
                    }

                    $value = $modelData['keyword_targets'] = $keywordTargets;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateKeywordTargets($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->keywordTargets = $value;
                    $this->_rawModelDataInput['keyword_targets'] = $keywordTargets;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property keywordTargets
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processKeywordTargets(array $modelData): void
            {
                
                    if (!array_key_exists('keyword_targets', $modelData) && $this->keywordTargets === null) {
                        return;
                    }
                

                $value = array_key_exists('keyword_targets', $modelData) ? $modelData['keyword_targets'] : $this->keywordTargets;

                

                $this->keywordTargets = $this->validateKeywordTargets($value, $modelData);
            }

            /**
             * Execute all validators for the property keywordTargets
             */
            protected function validateKeywordTargets($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'keyword_targets',
  1 => 'array',
)));
}

                
                    $this->validateKeywordTargets_ArrayItem_9843bb86dde603d9db8f235b87a018ba($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'keyword_targets',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of negative_keywords.
                 *
                 * Keywords to exclude from delivery. Queries matching these keywords will not trigger the ad. Each negative keyword is identified by the tuple (keyword, match_type). Seller must declare support in get_adcp_capabilities.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b[]|null
                 */
                public function getNegativeKeywords(): ?array
                {
                    

                    return $this->negativeKeywords;
                }
            

            
                /**
                 * Set the value of negative_keywords.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b[] $negativeKeywords Keywords to exclude from delivery. Queries matching these keywords will not trigger the ad. Each negative keyword is identified by the tuple (keyword, match_type). Seller must declare support in get_adcp_capabilities.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setNegativeKeywords(
                    array $negativeKeywords
                ): static {
                    if ($this->negativeKeywords === $negativeKeywords) {
                        return $this;
                    }

                    $value = $modelData['negative_keywords'] = $negativeKeywords;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateNegativeKeywords($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->negativeKeywords = $value;
                    $this->_rawModelDataInput['negative_keywords'] = $negativeKeywords;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property negativeKeywords
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processNegativeKeywords(array $modelData): void
            {
                
                    if (!array_key_exists('negative_keywords', $modelData) && $this->negativeKeywords === null) {
                        return;
                    }
                

                $value = array_key_exists('negative_keywords', $modelData) ? $modelData['negative_keywords'] : $this->negativeKeywords;

                

                $this->negativeKeywords = $this->validateNegativeKeywords($value, $modelData);
            }

            /**
             * Execute all validators for the property negativeKeywords
             */
            protected function validateNegativeKeywords($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'negative_keywords',
  1 => 'array',
)));
}

                
                    $this->validateNegativeKeywords_ArrayItem_bf3c58537e5bc783dadd4d4ebfdad140($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'negative_keywords',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
    
        
    

    /**
 * Update the model with the provided data. If the update fails due to any violations an exception will be thrown and
 * no properties of the model will be updated.
 *
 * @param array $modelData May contain any subset of the models properties
 *
 * @return self
 *
 * @throws ErrorRegistryException
 */
public function populate(array $modelData): self
{
    $rollbackValues = [];

    
        $this->_errorRegistry = new ErrorRegistryException();
    

    foreach (['_additionalProperties', '_patternProperties'] as $property) {
        if (isset($this->{$property})) {
            $rollbackValues[$property] = $this->{$property};
        }
    }

    
        $this->executeBaseValidators($modelData);
    

    
        
            if (array_key_exists('geo_countries', $modelData) &&
                $modelData['geo_countries'] !== $this->geoCountries
            ) {
                

                $rollbackValues['geoCountries'] = $this->geoCountries;
                $this->processGeoCountries($modelData);
            }
        
    
        
            if (array_key_exists('geo_countries_exclude', $modelData) &&
                $modelData['geo_countries_exclude'] !== $this->geoCountriesExclude
            ) {
                

                $rollbackValues['geoCountriesExclude'] = $this->geoCountriesExclude;
                $this->processGeoCountriesExclude($modelData);
            }
        
    
        
            if (array_key_exists('geo_regions', $modelData) &&
                $modelData['geo_regions'] !== $this->geoRegions
            ) {
                

                $rollbackValues['geoRegions'] = $this->geoRegions;
                $this->processGeoRegions($modelData);
            }
        
    
        
            if (array_key_exists('geo_regions_exclude', $modelData) &&
                $modelData['geo_regions_exclude'] !== $this->geoRegionsExclude
            ) {
                

                $rollbackValues['geoRegionsExclude'] = $this->geoRegionsExclude;
                $this->processGeoRegionsExclude($modelData);
            }
        
    
        
            if (array_key_exists('geo_metros', $modelData) &&
                $modelData['geo_metros'] !== $this->geoMetros
            ) {
                

                $rollbackValues['geoMetros'] = $this->geoMetros;
                $this->processGeoMetros($modelData);
            }
        
    
        
            if (array_key_exists('geo_metros_exclude', $modelData) &&
                $modelData['geo_metros_exclude'] !== $this->geoMetrosExclude
            ) {
                

                $rollbackValues['geoMetrosExclude'] = $this->geoMetrosExclude;
                $this->processGeoMetrosExclude($modelData);
            }
        
    
        
            if (array_key_exists('geo_postal_areas', $modelData) &&
                $modelData['geo_postal_areas'] !== $this->geoPostalAreas
            ) {
                

                $rollbackValues['geoPostalAreas'] = $this->geoPostalAreas;
                $this->processGeoPostalAreas($modelData);
            }
        
    
        
            if (array_key_exists('geo_postal_areas_exclude', $modelData) &&
                $modelData['geo_postal_areas_exclude'] !== $this->geoPostalAreasExclude
            ) {
                

                $rollbackValues['geoPostalAreasExclude'] = $this->geoPostalAreasExclude;
                $this->processGeoPostalAreasExclude($modelData);
            }
        
    
        
            if (array_key_exists('daypart_targets', $modelData) &&
                $modelData['daypart_targets'] !== $this->daypartTargets
            ) {
                

                $rollbackValues['daypartTargets'] = $this->daypartTargets;
                $this->processDaypartTargets($modelData);
            }
        
    
        
            if (array_key_exists('axe_include_segment', $modelData) &&
                $modelData['axe_include_segment'] !== $this->axeIncludeSegment
            ) {
                

                $rollbackValues['axeIncludeSegment'] = $this->axeIncludeSegment;
                $this->processAxeIncludeSegment($modelData);
            }
        
    
        
            if (array_key_exists('axe_exclude_segment', $modelData) &&
                $modelData['axe_exclude_segment'] !== $this->axeExcludeSegment
            ) {
                

                $rollbackValues['axeExcludeSegment'] = $this->axeExcludeSegment;
                $this->processAxeExcludeSegment($modelData);
            }
        
    
        
            if (array_key_exists('audience_include', $modelData) &&
                $modelData['audience_include'] !== $this->audienceInclude
            ) {
                

                $rollbackValues['audienceInclude'] = $this->audienceInclude;
                $this->processAudienceInclude($modelData);
            }
        
    
        
            if (array_key_exists('audience_exclude', $modelData) &&
                $modelData['audience_exclude'] !== $this->audienceExclude
            ) {
                

                $rollbackValues['audienceExclude'] = $this->audienceExclude;
                $this->processAudienceExclude($modelData);
            }
        
    
        
            if (array_key_exists('frequency_cap', $modelData) &&
                $modelData['frequency_cap'] !== $this->frequencyCap
            ) {
                

                $rollbackValues['frequencyCap'] = $this->frequencyCap;
                $this->processFrequencyCap($modelData);
            }
        
    
        
            if (array_key_exists('property_list', $modelData) &&
                $modelData['property_list'] !== $this->propertyList
            ) {
                

                $rollbackValues['propertyList'] = $this->propertyList;
                $this->processPropertyList($modelData);
            }
        
    
        
            if (array_key_exists('collection_list', $modelData) &&
                $modelData['collection_list'] !== $this->collectionList
            ) {
                

                $rollbackValues['collectionList'] = $this->collectionList;
                $this->processCollectionList($modelData);
            }
        
    
        
            if (array_key_exists('collection_list_exclude', $modelData) &&
                $modelData['collection_list_exclude'] !== $this->collectionListExclude
            ) {
                

                $rollbackValues['collectionListExclude'] = $this->collectionListExclude;
                $this->processCollectionListExclude($modelData);
            }
        
    
        
            if (array_key_exists('age_restriction', $modelData) &&
                $modelData['age_restriction'] !== $this->ageRestriction
            ) {
                

                $rollbackValues['ageRestriction'] = $this->ageRestriction;
                $this->processAgeRestriction($modelData);
            }
        
    
        
            if (array_key_exists('device_platform', $modelData) &&
                $modelData['device_platform'] !== $this->devicePlatform
            ) {
                

                $rollbackValues['devicePlatform'] = $this->devicePlatform;
                $this->processDevicePlatform($modelData);
            }
        
    
        
            if (array_key_exists('device_type', $modelData) &&
                $modelData['device_type'] !== $this->deviceType
            ) {
                

                $rollbackValues['deviceType'] = $this->deviceType;
                $this->processDeviceType($modelData);
            }
        
    
        
            if (array_key_exists('device_type_exclude', $modelData) &&
                $modelData['device_type_exclude'] !== $this->deviceTypeExclude
            ) {
                

                $rollbackValues['deviceTypeExclude'] = $this->deviceTypeExclude;
                $this->processDeviceTypeExclude($modelData);
            }
        
    
        
            if (array_key_exists('store_catchments', $modelData) &&
                $modelData['store_catchments'] !== $this->storeCatchments
            ) {
                

                $rollbackValues['storeCatchments'] = $this->storeCatchments;
                $this->processStoreCatchments($modelData);
            }
        
    
        
            if (array_key_exists('geo_proximity', $modelData) &&
                $modelData['geo_proximity'] !== $this->geoProximity
            ) {
                

                $rollbackValues['geoProximity'] = $this->geoProximity;
                $this->processGeoProximity($modelData);
            }
        
    
        
            if (array_key_exists('language', $modelData) &&
                $modelData['language'] !== $this->language
            ) {
                

                $rollbackValues['language'] = $this->language;
                $this->processLanguage($modelData);
            }
        
    
        
            if (array_key_exists('keyword_targets', $modelData) &&
                $modelData['keyword_targets'] !== $this->keywordTargets
            ) {
                

                $rollbackValues['keywordTargets'] = $this->keywordTargets;
                $this->processKeywordTargets($modelData);
            }
        
    
        
            if (array_key_exists('negative_keywords', $modelData) &&
                $modelData['negative_keywords'] !== $this->negativeKeywords
            ) {
                

                $rollbackValues['negativeKeywords'] = $this->negativeKeywords;
                $this->processNegativeKeywords($modelData);
            }
        
    
        
    
        
    

    
        if (count($this->_errorRegistry->getErrors())) {
            foreach ($rollbackValues as $property => $value) {
                $this->{$property} = $value;
            }

            throw $this->_errorRegistry;
        }
    

    $this->_rawModelDataInput = array_merge($this->_rawModelDataInput, $modelData);

    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    
        
    

    return $this;
}



    protected function resolveSerializationHook(array $data, int $depth, array $except): array
    {
        $data = array_merge($this->serializeAdditionalProperties($depth, $except), $data);

        return $data;
    }


protected function serializeAdditionalProperties(int $depth, array $except): array
{
    

    return $this->getSerializedValue(
        $this->_additionalProperties,
        $depth,
        $except
    );
}


private function validateGeoCountries_ArrayItem_0138ace54b5ccc7984b3bee461f3137e(&$value, $modelData): void {
                    $invalidItems_4e29d2056abda99064f5f4c61f3802b1 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4e29d2056abda99064f5f4c61f3802b1, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_countries',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array geo_countries',
  1 => '^[A-Z]{2}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_4e29d2056abda99064f5f4c61f3802b1[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4e29d2056abda99064f5f4c61f3802b1[$index])
                ? $invalidItems_4e29d2056abda99064f5f4c61f3802b1[$index][] = $e
                : $invalidItems_4e29d2056abda99064f5f4c61f3802b1[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_4e29d2056abda99064f5f4c61f3802b1);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_countries',
  1 => $invalidItems_4e29d2056abda99064f5f4c61f3802b1,
)));
                    }
                }

private function validateGeoCountriesExclude_ArrayItem_8b18114d700f792d48d41ecbe46bd7d8(&$value, $modelData): void {
                    $invalidItems_92472fbf2224a1605703b4d8ccecb3ce = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_92472fbf2224a1605703b4d8ccecb3ce, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_countries_exclude',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array geo_countries_exclude',
  1 => '^[A-Z]{2}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_92472fbf2224a1605703b4d8ccecb3ce[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_92472fbf2224a1605703b4d8ccecb3ce[$index])
                ? $invalidItems_92472fbf2224a1605703b4d8ccecb3ce[$index][] = $e
                : $invalidItems_92472fbf2224a1605703b4d8ccecb3ce[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_92472fbf2224a1605703b4d8ccecb3ce);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_countries_exclude',
  1 => $invalidItems_92472fbf2224a1605703b4d8ccecb3ce,
)));
                    }
                }

private function validateGeoRegions_ArrayItem_915731c83177371ef0c4290afcd97052(&$value, $modelData): void {
                    $invalidItems_bbeaf621623fcabef399c5046f463f25 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_bbeaf621623fcabef399c5046f463f25, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_regions',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfS1bQS1aMC05XXsxLDN9JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array geo_regions',
  1 => '^[A-Z]{2}-[A-Z0-9]{1,3}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_bbeaf621623fcabef399c5046f463f25[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_bbeaf621623fcabef399c5046f463f25[$index])
                ? $invalidItems_bbeaf621623fcabef399c5046f463f25[$index][] = $e
                : $invalidItems_bbeaf621623fcabef399c5046f463f25[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_bbeaf621623fcabef399c5046f463f25);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_regions',
  1 => $invalidItems_bbeaf621623fcabef399c5046f463f25,
)));
                    }
                }

private function validateGeoRegionsExclude_ArrayItem_865b0472afff7decaf458f9e1d4d1313(&$value, $modelData): void {
                    $invalidItems_15018f2934958fdd42a9c22c2eaa5535 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_15018f2934958fdd42a9c22c2eaa5535, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_regions_exclude',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfS1bQS1aMC05XXsxLDN9JC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array geo_regions_exclude',
  1 => '^[A-Z]{2}-[A-Z0-9]{1,3}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_15018f2934958fdd42a9c22c2eaa5535[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_15018f2934958fdd42a9c22c2eaa5535[$index])
                ? $invalidItems_15018f2934958fdd42a9c22c2eaa5535[$index][] = $e
                : $invalidItems_15018f2934958fdd42a9c22c2eaa5535[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_15018f2934958fdd42a9c22c2eaa5535);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_regions_exclude',
  1 => $invalidItems_15018f2934958fdd42a9c22c2eaa5535,
)));
                    }
                }

private function validateGeoMetros_ArrayItem_0564475275a7d50090c03b36adf32d16(&$value, $modelData): void {
                    $invalidItems_6ed18e55398b2548a90b581232701c56 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_6ed18e55398b2548a90b581232701c56, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_metros',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_metros',
  1 => 'GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_6ed18e55398b2548a90b581232701c56[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_6ed18e55398b2548a90b581232701c56[$index])
                ? $invalidItems_6ed18e55398b2548a90b581232701c56[$index][] = $e
                : $invalidItems_6ed18e55398b2548a90b581232701c56[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_6ed18e55398b2548a90b581232701c56);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_metros',
  1 => $invalidItems_6ed18e55398b2548a90b581232701c56,
)));
                    }
                }

private function validateGeoMetrosExclude_ArrayItem_2fb441cc904fa9f4cb791638fd5bab04(&$value, $modelData): void {
                    $invalidItems_e2809a461a2b064925db1fbfa9b1766e = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_e2809a461a2b064925db1fbfa9b1766e, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_metros_exclude',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_metros_exclude',
  1 => 'GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_e2809a461a2b064925db1fbfa9b1766e[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_e2809a461a2b064925db1fbfa9b1766e[$index])
                ? $invalidItems_e2809a461a2b064925db1fbfa9b1766e[$index][] = $e
                : $invalidItems_e2809a461a2b064925db1fbfa9b1766e[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_e2809a461a2b064925db1fbfa9b1766e);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_metros_exclude',
  1 => $invalidItems_e2809a461a2b064925db1fbfa9b1766e,
)));
                    }
                }

private function validateGeoPostalAreas_ArrayItem_e8d34cccd2287ad30675139d5a02491d(&$value, $modelData): void {
                    $invalidItems_56908c27e3af99c9e740c59cb93b334c = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_56908c27e3af99c9e740c59cb93b334c, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_postal_areas',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_postal_areas',
  1 => 'GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_56908c27e3af99c9e740c59cb93b334c[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_56908c27e3af99c9e740c59cb93b334c[$index])
                ? $invalidItems_56908c27e3af99c9e740c59cb93b334c[$index][] = $e
                : $invalidItems_56908c27e3af99c9e740c59cb93b334c[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_56908c27e3af99c9e740c59cb93b334c);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_postal_areas',
  1 => $invalidItems_56908c27e3af99c9e740c59cb93b334c,
)));
                    }
                }

private function validateGeoPostalAreasExclude_ArrayItem_b8f668eac79c5d0a1c208de9561e29ab(&$value, $modelData): void {
                    $invalidItems_79ba47432dcb4aced93f86e9026d672a = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_79ba47432dcb4aced93f86e9026d672a, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_postal_areas_exclude',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_postal_areas_exclude',
  1 => 'GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_79ba47432dcb4aced93f86e9026d672a[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_79ba47432dcb4aced93f86e9026d672a[$index])
                ? $invalidItems_79ba47432dcb4aced93f86e9026d672a[$index][] = $e
                : $invalidItems_79ba47432dcb4aced93f86e9026d672a[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_79ba47432dcb4aced93f86e9026d672a);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_postal_areas_exclude',
  1 => $invalidItems_79ba47432dcb4aced93f86e9026d672a,
)));
                    }
                }

private function validateDaypartTargets_ArrayItem_b2e6e4a8fbb6958c6dd0a3fc98165f4b(&$value, $modelData): void {
                    $invalidItems_12a83ec2a70c949bb446d42a8fae07c8 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_12a83ec2a70c949bb446d42a8fae07c8, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_DaypartTarget($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array daypart_targets',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_DaypartTarget)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array daypart_targets',
  1 => 'GetMediaBuysResponse_DaypartTarget',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_12a83ec2a70c949bb446d42a8fae07c8[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_12a83ec2a70c949bb446d42a8fae07c8[$index])
                ? $invalidItems_12a83ec2a70c949bb446d42a8fae07c8[$index][] = $e
                : $invalidItems_12a83ec2a70c949bb446d42a8fae07c8[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_12a83ec2a70c949bb446d42a8fae07c8);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'daypart_targets',
  1 => $invalidItems_12a83ec2a70c949bb446d42a8fae07c8,
)));
                    }
                }

private function validateAudienceInclude_ArrayItem_d2b9828cbab7604269dfc0256a7b5a80(&$value, $modelData): void {
                    $invalidItems_b5b5a48f4b9f65e5380da8712bf0b918 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_b5b5a48f4b9f65e5380da8712bf0b918, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array audience_include',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_b5b5a48f4b9f65e5380da8712bf0b918[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_b5b5a48f4b9f65e5380da8712bf0b918[$index])
                ? $invalidItems_b5b5a48f4b9f65e5380da8712bf0b918[$index][] = $e
                : $invalidItems_b5b5a48f4b9f65e5380da8712bf0b918[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_b5b5a48f4b9f65e5380da8712bf0b918);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'audience_include',
  1 => $invalidItems_b5b5a48f4b9f65e5380da8712bf0b918,
)));
                    }
                }

private function validateAudienceExclude_ArrayItem_5485a1d621ac19bc3857f4c7ab6b937f(&$value, $modelData): void {
                    $invalidItems_6b27427a011fc73508ab1372d11ec7cb = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_6b27427a011fc73508ab1372d11ec7cb, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array audience_exclude',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_6b27427a011fc73508ab1372d11ec7cb[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_6b27427a011fc73508ab1372d11ec7cb[$index])
                ? $invalidItems_6b27427a011fc73508ab1372d11ec7cb[$index][] = $e
                : $invalidItems_6b27427a011fc73508ab1372d11ec7cb[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_6b27427a011fc73508ab1372d11ec7cb);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'audience_exclude',
  1 => $invalidItems_6b27427a011fc73508ab1372d11ec7cb,
)));
                    }
                }

private function validateDevicePlatform_ArrayItem_1a722f3e068c4222f7196a7b57e3e62d(&$value, $modelData): void {
                    $invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DevicePlatform)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_platform',
  1 => 'DevicePlatform',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_platform',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'ios',
   'android',
   'windows',
   'macos',
   'linux',
   'chromeos',
   'tvos',
   'tizen',
   'webos',
   'fire_os',
   'roku_os',
   'unknown',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array device_platform',
  1 => 
  array (
    0 => 'ios',
    1 => 'android',
    2 => 'windows',
    3 => 'macos',
    4 => 'linux',
    5 => 'chromeos',
    6 => 'tvos',
    7 => 'tizen',
    8 => 'webos',
    9 => 'fire_os',
    10 => 'roku_os',
    11 => 'unknown',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DevicePlatform',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array device_platform',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array device_platform',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6[$index])
                ? $invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6[$index][] = $e
                : $invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'device_platform',
  1 => $invalidItems_40cd6cfd19ba8756e5cb0c3e1611b4a6,
)));
                    }
                }

private function validateDeviceType_ArrayItem_7b31f7ca7c9afb627838fb1f4a23d7ae(&$value, $modelData): void {
                    $invalidItems_532d75aa060f608227847313d8af87ca = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_532d75aa060f608227847313d8af87ca, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DeviceType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 'DeviceType',
)));
}

            
                

if ($value instanceof UnitEnum && !($value instanceof DeviceType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'DeviceType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'desktop',
   'mobile',
   'tablet',
   'ctv',
   'dooh',
   'unknown',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 
  array (
    0 => 'desktop',
    1 => 'mobile',
    2 => 'tablet',
    3 => 'ctv',
    4 => 'dooh',
    5 => 'unknown',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeviceType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 'php_model_generator_enum',
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeviceType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_532d75aa060f608227847313d8af87ca[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_532d75aa060f608227847313d8af87ca[$index])
                ? $invalidItems_532d75aa060f608227847313d8af87ca[$index][] = $e
                : $invalidItems_532d75aa060f608227847313d8af87ca[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_532d75aa060f608227847313d8af87ca);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'device_type',
  1 => $invalidItems_532d75aa060f608227847313d8af87ca,
)));
                    }
                }

private function validateDeviceTypeExclude_ArrayItem_a41563359c2f9458a78d0c16746b4fc2(&$value, $modelData): void {
                    $invalidItems_f14bc63986341d0800dbedaa73056cd0 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_f14bc63986341d0800dbedaa73056cd0, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof DeviceType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'DeviceType',
)));
}

            
                

if ($value instanceof UnitEnum && !($value instanceof DeviceType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'DeviceType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'desktop',
   'mobile',
   'tablet',
   'ctv',
   'dooh',
   'unknown',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 
  array (
    0 => 'desktop',
    1 => 'mobile',
    2 => 'tablet',
    3 => 'ctv',
    4 => 'dooh',
    5 => 'unknown',
  ),
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeviceType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array device_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'php_model_generator_enum',
)));
}

            
                
$transformationFailed = false;
if (!($value instanceof UnitEnum) && 
(
    
    (function (&$value) use (&$transformationFailed): bool {
        // make sure exceptions from the filter are caught and added to the error handling
        try {
            $value = \PHPModelGenerator\Filter\Enum::filter($value, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeviceType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array device_type_exclude',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_f14bc63986341d0800dbedaa73056cd0[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_f14bc63986341d0800dbedaa73056cd0[$index])
                ? $invalidItems_f14bc63986341d0800dbedaa73056cd0[$index][] = $e
                : $invalidItems_f14bc63986341d0800dbedaa73056cd0[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_f14bc63986341d0800dbedaa73056cd0);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'device_type_exclude',
  1 => $invalidItems_f14bc63986341d0800dbedaa73056cd0,
)));
                    }
                }

private function validateStoreCatchments_ArrayItem_62edf85c78098c372087b2be56caeebb(&$value, $modelData): void {
                    $invalidItems_566eff2e45662f90b87489d97b54fa20 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_566eff2e45662f90b87489d97b54fa20, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array store_catchments',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array store_catchments',
  1 => 'GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_566eff2e45662f90b87489d97b54fa20[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_566eff2e45662f90b87489d97b54fa20[$index])
                ? $invalidItems_566eff2e45662f90b87489d97b54fa20[$index][] = $e
                : $invalidItems_566eff2e45662f90b87489d97b54fa20[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_566eff2e45662f90b87489d97b54fa20);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'store_catchments',
  1 => $invalidItems_566eff2e45662f90b87489d97b54fa20,
)));
                    }
                }

private function validateGeoProximity_ArrayItem_227a9816c058cc3f7de6327ba01eb056(&$value, $modelData): void {
                    $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array geo_proximity',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_proximity',
  1 => 'GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e[$index])
                ? $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e[$index][] = $e
                : $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'geo_proximity',
  1 => $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e,
)));
                    }
                }

private function validateLanguage_ArrayItem_2779a29e74a79760012ebacc3fa2254c(&$value, $modelData): void {
                    $invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array language',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bYS16XXsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array language',
  1 => '^[a-z]{2}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09[$index])
                ? $invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09[$index][] = $e
                : $invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'language',
  1 => $invalidItems_2688b9eee50c2a9fbaf8a0e5a10f3f09,
)));
                    }
                }

private function validateKeywordTargets_ArrayItem_9843bb86dde603d9db8f235b87a018ba(&$value, $modelData): void {
                    $invalidItems_f630fa9707fcd279706057235af9ef56 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_f630fa9707fcd279706057235af9ef56, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array keyword_targets',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array keyword_targets',
  1 => 'GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_f630fa9707fcd279706057235af9ef56[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_f630fa9707fcd279706057235af9ef56[$index])
                ? $invalidItems_f630fa9707fcd279706057235af9ef56[$index][] = $e
                : $invalidItems_f630fa9707fcd279706057235af9ef56[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_f630fa9707fcd279706057235af9ef56);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'keyword_targets',
  1 => $invalidItems_f630fa9707fcd279706057235af9ef56,
)));
                    }
                }

private function validateNegativeKeywords_ArrayItem_bf3c58537e5bc783dadd4d4ebfdad140(&$value, $modelData): void {
                    $invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            
                foreach($instantiationException->getErrors() as $nestedValidationError) {
                    $this->_errorRegistry->addError($nestedValidationError);
                }
            
        

        
            return $instantiationException;
        
    }
})($value)
;

            
                

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array negative_keywords',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array negative_keywords',
  1 => 'GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9[$index])
                ? $invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9[$index][] = $e
                : $invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'negative_keywords',
  1 => $invalidItems_2b694e8bfc2bcb5fea8de128a5fbc9c9,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
