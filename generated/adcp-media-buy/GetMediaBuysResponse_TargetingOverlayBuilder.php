<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DevicePlatform;

    use AdCP\MediaBuy\Enums\DeviceType;


/**
 * Builder class for GetMediaBuysResponse_TargetingOverlay
 */
class GetMediaBuysResponse_TargetingOverlayBuilder implements BuilderInterface
{
    /** @var array */
    protected $_rawModelDataInput = [];

    
        /** @var ErrorRegistryException */
        protected $_errorRegistry;
    

    public function __construct(array $rawModelDataInput = [])
    {
        $this->_rawModelDataInput = $rawModelDataInput;

        
            $this->_errorRegistry = new ErrorRegistryException();
        
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
     * Set up a new instance of GetMediaBuysResponse_TargetingOverlay with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_TargetingOverlay
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_TargetingOverlay($this->_rawModelDataInput);
    }

    // PHPs builtin array_walk_recursive doesn't handle newly inserted arrays which we need to visit
    private function _array_walk_recursive_real(array &$array, callable $callback): void
    {
        foreach ($array as &$value) {
            $callback($value);

            if (is_array($value)) {
                $this->_array_walk_recursive_real($value, $callback);
            }
        }
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
                return $this->_rawModelDataInput['geo_countries'] ?? null;
            }

            /**
             * Set the value of geo_countries.
             *
             * @param string[] $geoCountries Restrict delivery to specific countries. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoCountries}
             * 
             *
             * @return static
             */
            public function setGeoCountries(
                array $geoCountries
            ): static {
                if (array_key_exists('geo_countries', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_countries'] === $geoCountries
                ) {
                    return $this;
                }

                $value = $modelData['geo_countries'] = $geoCountries;

                

                

                $this->_rawModelDataInput['geo_countries'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['geo_countries_exclude'] ?? null;
            }

            /**
             * Set the value of geo_countries_exclude.
             *
             * @param string[] $geoCountriesExclude Exclude specific countries from delivery. ISO 3166-1 alpha-2 codes (e.g., 'US', 'GB', 'DE').
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoCountriesExclude}
             * 
             *
             * @return static
             */
            public function setGeoCountriesExclude(
                array $geoCountriesExclude
            ): static {
                if (array_key_exists('geo_countries_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_countries_exclude'] === $geoCountriesExclude
                ) {
                    return $this;
                }

                $value = $modelData['geo_countries_exclude'] = $geoCountriesExclude;

                

                

                $this->_rawModelDataInput['geo_countries_exclude'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['geo_regions'] ?? null;
            }

            /**
             * Set the value of geo_regions.
             *
             * @param string[] $geoRegions Restrict delivery to specific regions/states. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoRegions}
             * 
             *
             * @return static
             */
            public function setGeoRegions(
                array $geoRegions
            ): static {
                if (array_key_exists('geo_regions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_regions'] === $geoRegions
                ) {
                    return $this;
                }

                $value = $modelData['geo_regions'] = $geoRegions;

                

                

                $this->_rawModelDataInput['geo_regions'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['geo_regions_exclude'] ?? null;
            }

            /**
             * Set the value of geo_regions_exclude.
             *
             * @param string[] $geoRegionsExclude Exclude specific regions/states from delivery. ISO 3166-2 subdivision codes (e.g., 'US-CA', 'GB-SCT').
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoRegionsExclude}
             * 
             *
             * @return static
             */
            public function setGeoRegionsExclude(
                array $geoRegionsExclude
            ): static {
                if (array_key_exists('geo_regions_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_regions_exclude'] === $geoRegionsExclude
                ) {
                    return $this;
                }

                $value = $modelData['geo_regions_exclude'] = $geoRegionsExclude;

                

                

                $this->_rawModelDataInput['geo_regions_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_metros.
             *
             * Restrict delivery to specific metro areas. Each entry specifies the classification system and target values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e[]|GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921eBuilder[]|array|null
             */
            public function getGeoMetros(): mixed
            {
                return $this->_rawModelDataInput['geo_metros'] ?? null;
            }

            /**
             * Set the value of geo_metros.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921e[]|GetMediaBuysResponse_ItemOfArrayGeo_Metros6f0aaa0fc5b789ffaf488638fb98921eBuilder[]|array $geoMetros Restrict delivery to specific metro areas. Each entry specifies the classification system and target values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoMetros}
             * 
             *
             * @return static
             */
            public function setGeoMetros(
                mixed $geoMetros
            ): static {
                if (array_key_exists('geo_metros', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_metros'] === $geoMetros
                ) {
                    return $this;
                }

                $value = $modelData['geo_metros'] = $geoMetros;

                

                

                $this->_rawModelDataInput['geo_metros'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_metros_exclude.
             *
             * Exclude specific metro areas from delivery. Each entry specifies the classification system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f[]|GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082fBuilder[]|array|null
             */
            public function getGeoMetrosExclude(): mixed
            {
                return $this->_rawModelDataInput['geo_metros_exclude'] ?? null;
            }

            /**
             * Set the value of geo_metros_exclude.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082f[]|GetMediaBuysResponse_ItemOfArrayGeo_Metros_Exclude182ab5f8897de8b3a9398de731d5082fBuilder[]|array $geoMetrosExclude Exclude specific metro areas from delivery. Each entry specifies the classification system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoMetrosExclude}
             * 
             *
             * @return static
             */
            public function setGeoMetrosExclude(
                mixed $geoMetrosExclude
            ): static {
                if (array_key_exists('geo_metros_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_metros_exclude'] === $geoMetrosExclude
                ) {
                    return $this;
                }

                $value = $modelData['geo_metros_exclude'] = $geoMetrosExclude;

                

                

                $this->_rawModelDataInput['geo_metros_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_postal_areas.
             *
             * Restrict delivery to specific postal areas. Each entry specifies the postal system and target values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b[]|GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0bBuilder[]|array|null
             */
            public function getGeoPostalAreas(): mixed
            {
                return $this->_rawModelDataInput['geo_postal_areas'] ?? null;
            }

            /**
             * Set the value of geo_postal_areas.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0b[]|GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areasc1e0690a73eca4c9d7bc20213faf3b0bBuilder[]|array $geoPostalAreas Restrict delivery to specific postal areas. Each entry specifies the postal system and target values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoPostalAreas}
             * 
             *
             * @return static
             */
            public function setGeoPostalAreas(
                mixed $geoPostalAreas
            ): static {
                if (array_key_exists('geo_postal_areas', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_postal_areas'] === $geoPostalAreas
                ) {
                    return $this;
                }

                $value = $modelData['geo_postal_areas'] = $geoPostalAreas;

                

                

                $this->_rawModelDataInput['geo_postal_areas'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_postal_areas_exclude.
             *
             * Exclude specific postal areas from delivery. Each entry specifies the postal system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e[]|GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724eBuilder[]|array|null
             */
            public function getGeoPostalAreasExclude(): mixed
            {
                return $this->_rawModelDataInput['geo_postal_areas_exclude'] ?? null;
            }

            /**
             * Set the value of geo_postal_areas_exclude.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724e[]|GetMediaBuysResponse_ItemOfArrayGeo_Postal_Areas_Excludeb3b0176fce8ade5a14c48dbec850724eBuilder[]|array $geoPostalAreasExclude Exclude specific postal areas from delivery. Each entry specifies the postal system and excluded values. Seller must declare supported systems in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoPostalAreasExclude}
             * 
             *
             * @return static
             */
            public function setGeoPostalAreasExclude(
                mixed $geoPostalAreasExclude
            ): static {
                if (array_key_exists('geo_postal_areas_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_postal_areas_exclude'] === $geoPostalAreasExclude
                ) {
                    return $this;
                }

                $value = $modelData['geo_postal_areas_exclude'] = $geoPostalAreasExclude;

                

                

                $this->_rawModelDataInput['geo_postal_areas_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of daypart_targets.
             *
             * Restrict delivery to specific time windows. Each entry specifies days of week and an hour range.
             *
             * @return GetMediaBuysResponse_DaypartTarget[]|GetMediaBuysResponse_DaypartTargetBuilder[]|array|null
             */
            public function getDaypartTargets(): mixed
            {
                return $this->_rawModelDataInput['daypart_targets'] ?? null;
            }

            /**
             * Set the value of daypart_targets.
             *
             * @param GetMediaBuysResponse_DaypartTarget[]|GetMediaBuysResponse_DaypartTargetBuilder[]|array $daypartTargets Restrict delivery to specific time windows. Each entry specifies days of week and an hour range.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processDaypartTargets}
             * 
             *
             * @return static
             */
            public function setDaypartTargets(
                mixed $daypartTargets
            ): static {
                if (array_key_exists('daypart_targets', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['daypart_targets'] === $daypartTargets
                ) {
                    return $this;
                }

                $value = $modelData['daypart_targets'] = $daypartTargets;

                

                

                $this->_rawModelDataInput['daypart_targets'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['axe_include_segment'] ?? null;
            }

            /**
             * Set the value of axe_include_segment.
             *
             * @param string $axeIncludeSegment Deprecated: Use TMP provider fields instead. AXE segment ID to include for targeting.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processAxeIncludeSegment}
             * 
             *
             * @return static
             */
            public function setAxeIncludeSegment(
                string $axeIncludeSegment
            ): static {
                if (array_key_exists('axe_include_segment', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['axe_include_segment'] === $axeIncludeSegment
                ) {
                    return $this;
                }

                $value = $modelData['axe_include_segment'] = $axeIncludeSegment;

                

                

                $this->_rawModelDataInput['axe_include_segment'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['axe_exclude_segment'] ?? null;
            }

            /**
             * Set the value of axe_exclude_segment.
             *
             * @param string $axeExcludeSegment Deprecated: Use TMP provider fields instead. AXE segment ID to exclude from targeting.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processAxeExcludeSegment}
             * 
             *
             * @return static
             */
            public function setAxeExcludeSegment(
                string $axeExcludeSegment
            ): static {
                if (array_key_exists('axe_exclude_segment', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['axe_exclude_segment'] === $axeExcludeSegment
                ) {
                    return $this;
                }

                $value = $modelData['axe_exclude_segment'] = $axeExcludeSegment;

                

                

                $this->_rawModelDataInput['axe_exclude_segment'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['audience_include'] ?? null;
            }

            /**
             * Set the value of audience_include.
             *
             * @param string[] $audienceInclude Restrict delivery to members of these first-party CRM audiences. Only users present in the uploaded lists are eligible. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Not for lookalike expansion — express that intent in the campaign brief. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processAudienceInclude}
             * 
             *
             * @return static
             */
            public function setAudienceInclude(
                array $audienceInclude
            ): static {
                if (array_key_exists('audience_include', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['audience_include'] === $audienceInclude
                ) {
                    return $this;
                }

                $value = $modelData['audience_include'] = $audienceInclude;

                

                

                $this->_rawModelDataInput['audience_include'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['audience_exclude'] ?? null;
            }

            /**
             * Set the value of audience_exclude.
             *
             * @param string[] $audienceExclude Suppress delivery to members of these first-party CRM audiences. Matched users are excluded regardless of other targeting. References audience_id values from sync_audiences on the same seller account — audience IDs are not portable across sellers. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processAudienceExclude}
             * 
             *
             * @return static
             */
            public function setAudienceExclude(
                array $audienceExclude
            ): static {
                if (array_key_exists('audience_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['audience_exclude'] === $audienceExclude
                ) {
                    return $this;
                }

                $value = $modelData['audience_exclude'] = $audienceExclude;

                

                

                $this->_rawModelDataInput['audience_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of frequency_cap.
             *
             * Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set.
             *
             * @return GetMediaBuysResponse_FrequencyCap|GetMediaBuysResponse_FrequencyCapBuilder|array|null
             */
            public function getFrequencyCap(): mixed
            {
                return $this->_rawModelDataInput['frequency_cap'] ?? null;
            }

            /**
             * Set the value of frequency_cap.
             *
             * @param GetMediaBuysResponse_FrequencyCap|GetMediaBuysResponse_FrequencyCapBuilder|array $frequencyCap Frequency capping settings for package-level application. Two types of frequency control can be used independently or together: suppress enforces a cooldown between consecutive exposures; max_impressions + per + window caps total exposures per entity in a time window. When both suppress and max_impressions are set, an impression is delivered only if both constraints permit it (AND semantics). At least one of suppress, suppress_minutes, or max_impressions must be set.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processFrequencyCap}
             * 
             *
             * @return static
             */
            public function setFrequencyCap(
                mixed $frequencyCap
            ): static {
                if (array_key_exists('frequency_cap', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['frequency_cap'] === $frequencyCap
                ) {
                    return $this;
                }

                $value = $modelData['frequency_cap'] = $frequencyCap;

                

                

                $this->_rawModelDataInput['frequency_cap'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of property_list.
             *
             * Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false.
             *
             * @return GetMediaBuysResponse_PropertyListReference|GetMediaBuysResponse_PropertyListReferenceBuilder|array|null
             */
            public function getPropertyList(): mixed
            {
                return $this->_rawModelDataInput['property_list'] ?? null;
            }

            /**
             * Set the value of property_list.
             *
             * @param GetMediaBuysResponse_PropertyListReference|GetMediaBuysResponse_PropertyListReferenceBuilder|array $propertyList Reference to a property list for targeting specific properties within this product. The package runs on the intersection of the product's publisher_properties and this list. Sellers SHOULD return a validation error if the product has property_targeting_allowed: false.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processPropertyList}
             * 
             *
             * @return static
             */
            public function setPropertyList(
                mixed $propertyList
            ): static {
                if (array_key_exists('property_list', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['property_list'] === $propertyList
                ) {
                    return $this;
                }

                $value = $modelData['property_list'] = $propertyList;

                

                

                $this->_rawModelDataInput['property_list'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of collection_list.
             *
             * Reference to a collection list for including specific collections (programs, shows) within this product. The package runs on the intersection of matched collections and this list. Use for inclusion-based collection targeting. Seller must declare support in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_CollectionListReference|GetMediaBuysResponse_CollectionListReferenceBuilder|array|null
             */
            public function getCollectionList(): mixed
            {
                return $this->_rawModelDataInput['collection_list'] ?? null;
            }

            /**
             * Set the value of collection_list.
             *
             * @param GetMediaBuysResponse_CollectionListReference|GetMediaBuysResponse_CollectionListReferenceBuilder|array $collectionList Reference to a collection list for including specific collections (programs, shows) within this product. The package runs on the intersection of matched collections and this list. Use for inclusion-based collection targeting. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processCollectionList}
             * 
             *
             * @return static
             */
            public function setCollectionList(
                mixed $collectionList
            ): static {
                if (array_key_exists('collection_list', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['collection_list'] === $collectionList
                ) {
                    return $this;
                }

                $value = $modelData['collection_list'] = $collectionList;

                

                

                $this->_rawModelDataInput['collection_list'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of collection_list_exclude.
             *
             * Reference to a collection list for excluding specific collections (programs, shows) from this product. Matched collections must not carry the buyer's ads. Use for brand safety do-not-air lists. Seller must declare support in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_CollectionListReference|GetMediaBuysResponse_CollectionListReferenceBuilder|array|null
             */
            public function getCollectionListExclude(): mixed
            {
                return $this->_rawModelDataInput['collection_list_exclude'] ?? null;
            }

            /**
             * Set the value of collection_list_exclude.
             *
             * @param GetMediaBuysResponse_CollectionListReference|GetMediaBuysResponse_CollectionListReferenceBuilder|array $collectionListExclude Reference to a collection list for excluding specific collections (programs, shows) from this product. Matched collections must not carry the buyer's ads. Use for brand safety do-not-air lists. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processCollectionListExclude}
             * 
             *
             * @return static
             */
            public function setCollectionListExclude(
                mixed $collectionListExclude
            ): static {
                if (array_key_exists('collection_list_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['collection_list_exclude'] === $collectionListExclude
                ) {
                    return $this;
                }

                $value = $modelData['collection_list_exclude'] = $collectionListExclude;

                

                

                $this->_rawModelDataInput['collection_list_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of age_restriction.
             *
             * Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting.
             *
             * @return GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b|GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1bBuilder|array|null
             */
            public function getAgeRestriction(): mixed
            {
                return $this->_rawModelDataInput['age_restriction'] ?? null;
            }

            /**
             * Set the value of age_restriction.
             *
             * @param GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b|GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1bBuilder|array $ageRestriction Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processAgeRestriction}
             * 
             *
             * @return static
             */
            public function setAgeRestriction(
                mixed $ageRestriction
            ): static {
                if (array_key_exists('age_restriction', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['age_restriction'] === $ageRestriction
                ) {
                    return $this;
                }

                $value = $modelData['age_restriction'] = $ageRestriction;

                

                

                $this->_rawModelDataInput['age_restriction'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of device_platform.
             *
             * Restrict to specific platforms. Use for technical compatibility (app only works on iOS). Values from Sec-CH-UA-Platform standard, extended for CTV.
             *
             * @return string[]|DevicePlatform[]|null
             */
            public function getDevicePlatform(): array | DevicePlatform | null
            {
                return $this->_rawModelDataInput['device_platform'] ?? null;
            }

            /**
             * Set the value of device_platform.
             *
             * @param string[]|DevicePlatform[]|null $devicePlatform Restrict to specific platforms. Use for technical compatibility (app only works on iOS). Values from Sec-CH-UA-Platform standard, extended for CTV.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processDevicePlatform}
             * 
             *
             * @return static
             */
            public function setDevicePlatform(
                array | DevicePlatform | null $devicePlatform
            ): static {
                if (array_key_exists('device_platform', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['device_platform'] === $devicePlatform
                ) {
                    return $this;
                }

                $value = $modelData['device_platform'] = $devicePlatform;

                

                

                $this->_rawModelDataInput['device_platform'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of device_type.
             *
             * Restrict to specific device form factors. Use for campaigns targeting hardware categories rather than operating systems (e.g., mobile-only promotions, CTV campaigns).
             *
             * @return string[]|DeviceType[]|null
             */
            public function getDeviceType(): array | DeviceType | null
            {
                return $this->_rawModelDataInput['device_type'] ?? null;
            }

            /**
             * Set the value of device_type.
             *
             * @param string[]|DeviceType[]|null $deviceType Restrict to specific device form factors. Use for campaigns targeting hardware categories rather than operating systems (e.g., mobile-only promotions, CTV campaigns).
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processDeviceType}
             * 
             *
             * @return static
             */
            public function setDeviceType(
                array | DeviceType | null $deviceType
            ): static {
                if (array_key_exists('device_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['device_type'] === $deviceType
                ) {
                    return $this;
                }

                $value = $modelData['device_type'] = $deviceType;

                

                

                $this->_rawModelDataInput['device_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of device_type_exclude.
             *
             * Exclude specific device form factors from delivery (e.g., exclude CTV for app-install campaigns).
             *
             * @return string[]|DeviceType[]|null
             */
            public function getDeviceTypeExclude(): array | DeviceType | null
            {
                return $this->_rawModelDataInput['device_type_exclude'] ?? null;
            }

            /**
             * Set the value of device_type_exclude.
             *
             * @param string[]|DeviceType[]|null $deviceTypeExclude Exclude specific device form factors from delivery (e.g., exclude CTV for app-install campaigns).
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processDeviceTypeExclude}
             * 
             *
             * @return static
             */
            public function setDeviceTypeExclude(
                array | DeviceType | null $deviceTypeExclude
            ): static {
                if (array_key_exists('device_type_exclude', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['device_type_exclude'] === $deviceTypeExclude
                ) {
                    return $this;
                }

                $value = $modelData['device_type_exclude'] = $deviceTypeExclude;

                

                

                $this->_rawModelDataInput['device_type_exclude'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of store_catchments.
             *
             * Target users within store catchment areas from a synced store catalog. Each entry references a store-type catalog and optionally narrows to specific stores or catchment zones.
             *
             * @return GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e[]|GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39eBuilder[]|array|null
             */
            public function getStoreCatchments(): mixed
            {
                return $this->_rawModelDataInput['store_catchments'] ?? null;
            }

            /**
             * Set the value of store_catchments.
             *
             * @param GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39e[]|GetMediaBuysResponse_ItemOfArrayStore_Catchments96ad80be436081bfc2ca2caf8bf1d39eBuilder[]|array $storeCatchments Target users within store catchment areas from a synced store catalog. Each entry references a store-type catalog and optionally narrows to specific stores or catchment zones.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processStoreCatchments}
             * 
             *
             * @return static
             */
            public function setStoreCatchments(
                mixed $storeCatchments
            ): static {
                if (array_key_exists('store_catchments', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['store_catchments'] === $storeCatchments
                ) {
                    return $this;
                }

                $value = $modelData['store_catchments'] = $storeCatchments;

                

                

                $this->_rawModelDataInput['store_catchments'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_proximity.
             *
             * Target users within travel time, distance, or a custom boundary around arbitrary geographic points. Multiple entries use OR semantics — a user within range of any listed point is eligible. For campaigns targeting 10+ locations, consider using store_catchments with a location catalog instead. Seller must declare support in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f[]|GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fBuilder[]|array|null
             */
            public function getGeoProximity(): mixed
            {
                return $this->_rawModelDataInput['geo_proximity'] ?? null;
            }

            /**
             * Set the value of geo_proximity.
             *
             * @param GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339f[]|GetMediaBuysResponse_ItemOfArrayGeo_Proximity014570a07fc3e7d618cb16a2c40b339fBuilder[]|array $geoProximity Target users within travel time, distance, or a custom boundary around arbitrary geographic points. Multiple entries use OR semantics — a user within range of any listed point is eligible. For campaigns targeting 10+ locations, consider using store_catchments with a location catalog instead. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processGeoProximity}
             * 
             *
             * @return static
             */
            public function setGeoProximity(
                mixed $geoProximity
            ): static {
                if (array_key_exists('geo_proximity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['geo_proximity'] === $geoProximity
                ) {
                    return $this;
                }

                $value = $modelData['geo_proximity'] = $geoProximity;

                

                

                $this->_rawModelDataInput['geo_proximity'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['language'] ?? null;
            }

            /**
             * Set the value of language.
             *
             * @param string[] $language Restrict to users with specific language preferences. ISO 639-1 codes (e.g., 'en', 'es', 'fr').
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processLanguage}
             * 
             *
             * @return static
             */
            public function setLanguage(
                array $language
            ): static {
                if (array_key_exists('language', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['language'] === $language
                ) {
                    return $this;
                }

                $value = $modelData['language'] = $language;

                

                

                $this->_rawModelDataInput['language'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of keyword_targets.
             *
             * Keyword targeting for search and retail media platforms. Restricts delivery to queries matching the specified keywords. Each keyword is identified by the tuple (keyword, match_type) — the same keyword string with different match types are distinct targets. Sellers SHOULD reject duplicate (keyword, match_type) pairs within a single request. Seller must declare support in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9[]|GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9Builder[]|array|null
             */
            public function getKeywordTargets(): mixed
            {
                return $this->_rawModelDataInput['keyword_targets'] ?? null;
            }

            /**
             * Set the value of keyword_targets.
             *
             * @param GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9[]|GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9Builder[]|array $keywordTargets Keyword targeting for search and retail media platforms. Restricts delivery to queries matching the specified keywords. Each keyword is identified by the tuple (keyword, match_type) — the same keyword string with different match types are distinct targets. Sellers SHOULD reject duplicate (keyword, match_type) pairs within a single request. Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processKeywordTargets}
             * 
             *
             * @return static
             */
            public function setKeywordTargets(
                mixed $keywordTargets
            ): static {
                if (array_key_exists('keyword_targets', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['keyword_targets'] === $keywordTargets
                ) {
                    return $this;
                }

                $value = $modelData['keyword_targets'] = $keywordTargets;

                

                

                $this->_rawModelDataInput['keyword_targets'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of negative_keywords.
             *
             * Keywords to exclude from delivery. Queries matching these keywords will not trigger the ad. Each negative keyword is identified by the tuple (keyword, match_type). Seller must declare support in get_adcp_capabilities.
             *
             * @return GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b[]|GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26bBuilder[]|array|null
             */
            public function getNegativeKeywords(): mixed
            {
                return $this->_rawModelDataInput['negative_keywords'] ?? null;
            }

            /**
             * Set the value of negative_keywords.
             *
             * @param GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26b[]|GetMediaBuysResponse_ItemOfArrayNegative_Keywordsf2d9b12589c935b85b5f513a9d73d26bBuilder[]|array $negativeKeywords Keywords to exclude from delivery. Queries matching these keywords will not trigger the ad. Each negative keyword is identified by the tuple (keyword, match_type). Seller must declare support in get_adcp_capabilities.
             *
             * {@link GetMediaBuysResponse_TargetingOverlay::processNegativeKeywords}
             * 
             *
             * @return static
             */
            public function setNegativeKeywords(
                mixed $negativeKeywords
            ): static {
                if (array_key_exists('negative_keywords', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['negative_keywords'] === $negativeKeywords
                ) {
                    return $this;
                }

                $value = $modelData['negative_keywords'] = $negativeKeywords;

                

                

                $this->_rawModelDataInput['negative_keywords'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
