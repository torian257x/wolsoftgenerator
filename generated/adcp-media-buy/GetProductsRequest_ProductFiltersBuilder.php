<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\DeliveryType;

    use AdCP\MediaBuy\Enums\Exclusivity;

    use AdCP\MediaBuy\Enums\MediaChannel;

    use AdCP\MediaBuy\Enums\AvailableMetric;


/**
 * Builder class for GetProductsRequest_ProductFilters
 */
class GetProductsRequest_ProductFiltersBuilder implements BuilderInterface
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
     * Set up a new instance of GetProductsRequest_ProductFilters with fully validated properties
     */
    public function validate(): GetProductsRequest_ProductFilters
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetProductsRequest_ProductFilters($this->_rawModelDataInput);
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
             * Get the value of delivery_type.
             *
             * Type of inventory delivery
             *
             * @return string|DeliveryType|null
             */
            public function getDeliveryType(): string | DeliveryType | null
            {
                return $this->_rawModelDataInput['delivery_type'] ?? null;
            }

            /**
             * Set the value of delivery_type.
             *
             * @param string|DeliveryType $deliveryType Type of inventory delivery
             *
             * {@link GetProductsRequest_ProductFilters::processDeliveryType}
             * 
             *
             * @return static
             */
            public function setDeliveryType(
                string | DeliveryType $deliveryType
            ): static {
                if (array_key_exists('delivery_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['delivery_type'] === $deliveryType
                ) {
                    return $this;
                }

                $value = $modelData['delivery_type'] = $deliveryType;

                

                

                $this->_rawModelDataInput['delivery_type'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of exclusivity.
             *
             * Filter by exclusivity level. Returns products matching the specified exclusivity (e.g., 'exclusive' returns only sole-sponsorship products).
             *
             * @return string|Exclusivity|null
             */
            public function getExclusivity(): string | Exclusivity | null
            {
                return $this->_rawModelDataInput['exclusivity'] ?? null;
            }

            /**
             * Set the value of exclusivity.
             *
             * @param string|Exclusivity|null $exclusivity Filter by exclusivity level. Returns products matching the specified exclusivity (e.g., 'exclusive' returns only sole-sponsorship products).
             *
             * {@link GetProductsRequest_ProductFilters::processExclusivity}
             * 
             *
             * @return static
             */
            public function setExclusivity(
                string | Exclusivity | null $exclusivity
            ): static {
                if (array_key_exists('exclusivity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['exclusivity'] === $exclusivity
                ) {
                    return $this;
                }

                $value = $modelData['exclusivity'] = $exclusivity;

                

                

                $this->_rawModelDataInput['exclusivity'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of is_fixed_price.
             *
             * Filter by pricing availability: true = products offering fixed pricing (at least one option with fixed_price), false = products offering auction pricing (at least one option without fixed_price). Products with both fixed and auction options match both true and false.
             *
             * @return bool|null
             */
            public function getIsFixedPrice(): ?bool
            {
                return $this->_rawModelDataInput['is_fixed_price'] ?? null;
            }

            /**
             * Set the value of is_fixed_price.
             *
             * @param bool $isFixedPrice Filter by pricing availability: true = products offering fixed pricing (at least one option with fixed_price), false = products offering auction pricing (at least one option without fixed_price). Products with both fixed and auction options match both true and false.
             *
             * {@link GetProductsRequest_ProductFilters::processIsFixedPrice}
             * 
             *
             * @return static
             */
            public function setIsFixedPrice(
                bool $isFixedPrice
            ): static {
                if (array_key_exists('is_fixed_price', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['is_fixed_price'] === $isFixedPrice
                ) {
                    return $this;
                }

                $value = $modelData['is_fixed_price'] = $isFixedPrice;

                

                

                $this->_rawModelDataInput['is_fixed_price'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of format_ids.
             *
             * Filter by specific format IDs
             *
             * @return GetProductsRequest_FormatReferenceStructuredObject[]|GetProductsRequest_FormatReferenceStructuredObjectBuilder[]|array|null
             */
            public function getFormatIds(): mixed
            {
                return $this->_rawModelDataInput['format_ids'] ?? null;
            }

            /**
             * Set the value of format_ids.
             *
             * @param GetProductsRequest_FormatReferenceStructuredObject[]|GetProductsRequest_FormatReferenceStructuredObjectBuilder[]|array $formatIds Filter by specific format IDs
             *
             * {@link GetProductsRequest_ProductFilters::processFormatIds}
             * 
             *
             * @return static
             */
            public function setFormatIds(
                mixed $formatIds
            ): static {
                if (array_key_exists('format_ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['format_ids'] === $formatIds
                ) {
                    return $this;
                }

                $value = $modelData['format_ids'] = $formatIds;

                

                

                $this->_rawModelDataInput['format_ids'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of standard_formats_only.
             *
             * Only return products accepting IAB standard formats
             *
             * @return bool|null
             */
            public function getStandardFormatsOnly(): ?bool
            {
                return $this->_rawModelDataInput['standard_formats_only'] ?? null;
            }

            /**
             * Set the value of standard_formats_only.
             *
             * @param bool $standardFormatsOnly Only return products accepting IAB standard formats
             *
             * {@link GetProductsRequest_ProductFilters::processStandardFormatsOnly}
             * 
             *
             * @return static
             */
            public function setStandardFormatsOnly(
                bool $standardFormatsOnly
            ): static {
                if (array_key_exists('standard_formats_only', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['standard_formats_only'] === $standardFormatsOnly
                ) {
                    return $this;
                }

                $value = $modelData['standard_formats_only'] = $standardFormatsOnly;

                

                

                $this->_rawModelDataInput['standard_formats_only'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of min_exposures.
             *
             * Minimum exposures/impressions needed for measurement validity
             *
             * @return int|null
             */
            public function getMinExposures(): ?int
            {
                return $this->_rawModelDataInput['min_exposures'] ?? null;
            }

            /**
             * Set the value of min_exposures.
             *
             * @param int $minExposures Minimum exposures/impressions needed for measurement validity
             *
             * {@link GetProductsRequest_ProductFilters::processMinExposures}
             * 
             *
             * @return static
             */
            public function setMinExposures(
                int $minExposures
            ): static {
                if (array_key_exists('min_exposures', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['min_exposures'] === $minExposures
                ) {
                    return $this;
                }

                $value = $modelData['min_exposures'] = $minExposures;

                

                

                $this->_rawModelDataInput['min_exposures'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of start_date.
             *
             * Campaign start date (ISO 8601 date format: YYYY-MM-DD) for availability checks
             *
             * @return string|null
             */
            public function getStartDate(): ?string
            {
                return $this->_rawModelDataInput['start_date'] ?? null;
            }

            /**
             * Set the value of start_date.
             *
             * @param string $startDate Campaign start date (ISO 8601 date format: YYYY-MM-DD) for availability checks
             *
             * {@link GetProductsRequest_ProductFilters::processStartDate}
             * 
             *
             * @return static
             */
            public function setStartDate(
                string $startDate
            ): static {
                if (array_key_exists('start_date', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['start_date'] === $startDate
                ) {
                    return $this;
                }

                $value = $modelData['start_date'] = $startDate;

                

                

                $this->_rawModelDataInput['start_date'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of end_date.
             *
             * Campaign end date (ISO 8601 date format: YYYY-MM-DD) for availability checks
             *
             * @return string|null
             */
            public function getEndDate(): ?string
            {
                return $this->_rawModelDataInput['end_date'] ?? null;
            }

            /**
             * Set the value of end_date.
             *
             * @param string $endDate Campaign end date (ISO 8601 date format: YYYY-MM-DD) for availability checks
             *
             * {@link GetProductsRequest_ProductFilters::processEndDate}
             * 
             *
             * @return static
             */
            public function setEndDate(
                string $endDate
            ): static {
                if (array_key_exists('end_date', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['end_date'] === $endDate
                ) {
                    return $this;
                }

                $value = $modelData['end_date'] = $endDate;

                

                

                $this->_rawModelDataInput['end_date'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of budget_range.
             *
             * Budget range to filter appropriate products
             *
             * @return GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea|GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2eaBuilder|array|null
             */
            public function getBudgetRange(): mixed
            {
                return $this->_rawModelDataInput['budget_range'] ?? null;
            }

            /**
             * Set the value of budget_range.
             *
             * @param GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea|GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2eaBuilder|array $budgetRange Budget range to filter appropriate products
             *
             * {@link GetProductsRequest_ProductFilters::processBudgetRange}
             * 
             *
             * @return static
             */
            public function setBudgetRange(
                mixed $budgetRange
            ): static {
                if (array_key_exists('budget_range', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['budget_range'] === $budgetRange
                ) {
                    return $this;
                }

                $value = $modelData['budget_range'] = $budgetRange;

                

                

                $this->_rawModelDataInput['budget_range'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of countries.
             *
             * Filter by country coverage using ISO 3166-1 alpha-2 codes (e.g., ['US', 'CA', 'GB']). Works for all inventory types.
             *
             * @return string[]|null
             */
            public function getCountries(): ?array
            {
                return $this->_rawModelDataInput['countries'] ?? null;
            }

            /**
             * Set the value of countries.
             *
             * @param string[] $countries Filter by country coverage using ISO 3166-1 alpha-2 codes (e.g., ['US', 'CA', 'GB']). Works for all inventory types.
             *
             * {@link GetProductsRequest_ProductFilters::processCountries}
             * 
             *
             * @return static
             */
            public function setCountries(
                array $countries
            ): static {
                if (array_key_exists('countries', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['countries'] === $countries
                ) {
                    return $this;
                }

                $value = $modelData['countries'] = $countries;

                

                

                $this->_rawModelDataInput['countries'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of regions.
             *
             * Filter by region coverage using ISO 3166-2 codes (e.g., ['US-NY', 'US-CA', 'GB-SCT']). Use for locally-bound inventory (regional OOH, local TV) where products have region-specific coverage.
             *
             * @return string[]|null
             */
            public function getRegions(): ?array
            {
                return $this->_rawModelDataInput['regions'] ?? null;
            }

            /**
             * Set the value of regions.
             *
             * @param string[] $regions Filter by region coverage using ISO 3166-2 codes (e.g., ['US-NY', 'US-CA', 'GB-SCT']). Use for locally-bound inventory (regional OOH, local TV) where products have region-specific coverage.
             *
             * {@link GetProductsRequest_ProductFilters::processRegions}
             * 
             *
             * @return static
             */
            public function setRegions(
                array $regions
            ): static {
                if (array_key_exists('regions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['regions'] === $regions
                ) {
                    return $this;
                }

                $value = $modelData['regions'] = $regions;

                

                

                $this->_rawModelDataInput['regions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of metros.
             *
             * Filter by metro coverage for locally-bound inventory (radio, DOOH, local TV). Use when products have DMA/metro-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
             *
             * @return GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf[]|GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bfBuilder[]|array|null
             */
            public function getMetros(): mixed
            {
                return $this->_rawModelDataInput['metros'] ?? null;
            }

            /**
             * Set the value of metros.
             *
             * @param GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf[]|GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bfBuilder[]|array $metros Filter by metro coverage for locally-bound inventory (radio, DOOH, local TV). Use when products have DMA/metro-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
             *
             * {@link GetProductsRequest_ProductFilters::processMetros}
             * 
             *
             * @return static
             */
            public function setMetros(
                mixed $metros
            ): static {
                if (array_key_exists('metros', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['metros'] === $metros
                ) {
                    return $this;
                }

                $value = $modelData['metros'] = $metros;

                

                

                $this->_rawModelDataInput['metros'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of channels.
             *
             * Filter by advertising channels (e.g., ['display', 'ctv', 'dooh'])
             *
             * @return string[]|MediaChannel[]|null
             */
            public function getChannels(): array | MediaChannel | null
            {
                return $this->_rawModelDataInput['channels'] ?? null;
            }

            /**
             * Set the value of channels.
             *
             * @param string[]|MediaChannel[]|null $channels Filter by advertising channels (e.g., ['display', 'ctv', 'dooh'])
             *
             * {@link GetProductsRequest_ProductFilters::processChannels}
             * 
             *
             * @return static
             */
            public function setChannels(
                array | MediaChannel | null $channels
            ): static {
                if (array_key_exists('channels', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['channels'] === $channels
                ) {
                    return $this;
                }

                $value = $modelData['channels'] = $channels;

                

                

                $this->_rawModelDataInput['channels'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of required_axe_integrations.
             *
             * Deprecated: Use trusted_match filter instead. Filter to products executable through specific agentic ad exchanges. URLs are canonical identifiers.
             *
             * @return string[]|null
             */
            public function getRequiredAxeIntegrations(): ?array
            {
                return $this->_rawModelDataInput['required_axe_integrations'] ?? null;
            }

            /**
             * Set the value of required_axe_integrations.
             *
             * @param string[] $requiredAxeIntegrations Deprecated: Use trusted_match filter instead. Filter to products executable through specific agentic ad exchanges. URLs are canonical identifiers.
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredAxeIntegrations}
             * 
             *
             * @return static
             */
            public function setRequiredAxeIntegrations(
                array $requiredAxeIntegrations
            ): static {
                if (array_key_exists('required_axe_integrations', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_axe_integrations'] === $requiredAxeIntegrations
                ) {
                    return $this;
                }

                $value = $modelData['required_axe_integrations'] = $requiredAxeIntegrations;

                

                

                $this->_rawModelDataInput['required_axe_integrations'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of trusted_match.
             *
             * Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned.
             *
             * @return GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b|GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8bBuilder|array|null
             */
            public function getTrustedMatch(): mixed
            {
                return $this->_rawModelDataInput['trusted_match'] ?? null;
            }

            /**
             * Set the value of trusted_match.
             *
             * @param GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b|GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8bBuilder|array $trustedMatch Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned.
             *
             * {@link GetProductsRequest_ProductFilters::processTrustedMatch}
             * 
             *
             * @return static
             */
            public function setTrustedMatch(
                mixed $trustedMatch
            ): static {
                if (array_key_exists('trusted_match', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['trusted_match'] === $trustedMatch
                ) {
                    return $this;
                }

                $value = $modelData['trusted_match'] = $trustedMatch;

                

                

                $this->_rawModelDataInput['trusted_match'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of required_features.
             *
             * Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering.
             *
             * @return GetProductsRequest_MediaBuyFeatures|GetProductsRequest_MediaBuyFeaturesBuilder|array|null
             */
            public function getRequiredFeatures(): mixed
            {
                return $this->_rawModelDataInput['required_features'] ?? null;
            }

            /**
             * Set the value of required_features.
             *
             * @param GetProductsRequest_MediaBuyFeatures|GetProductsRequest_MediaBuyFeaturesBuilder|array $requiredFeatures Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering.
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredFeatures}
             * 
             *
             * @return static
             */
            public function setRequiredFeatures(
                mixed $requiredFeatures
            ): static {
                if (array_key_exists('required_features', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_features'] === $requiredFeatures
                ) {
                    return $this;
                }

                $value = $modelData['required_features'] = $requiredFeatures;

                

                

                $this->_rawModelDataInput['required_features'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of required_geo_targeting.
             *
             * Filter to products from sellers supporting specific geo targeting capabilities. Each entry specifies a targeting level (country, region, metro, postal_area) and optionally a system for levels that have multiple classification systems.
             *
             * @return GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b[]|GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0bBuilder[]|array|null
             */
            public function getRequiredGeoTargeting(): mixed
            {
                return $this->_rawModelDataInput['required_geo_targeting'] ?? null;
            }

            /**
             * Set the value of required_geo_targeting.
             *
             * @param GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b[]|GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0bBuilder[]|array $requiredGeoTargeting Filter to products from sellers supporting specific geo targeting capabilities. Each entry specifies a targeting level (country, region, metro, postal_area) and optionally a system for levels that have multiple classification systems.
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredGeoTargeting}
             * 
             *
             * @return static
             */
            public function setRequiredGeoTargeting(
                mixed $requiredGeoTargeting
            ): static {
                if (array_key_exists('required_geo_targeting', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_geo_targeting'] === $requiredGeoTargeting
                ) {
                    return $this;
                }

                $value = $modelData['required_geo_targeting'] = $requiredGeoTargeting;

                

                

                $this->_rawModelDataInput['required_geo_targeting'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of signal_targeting.
             *
             * Filter to products supporting specific signals from data provider catalogs. Products must have the requested signals in their data_provider_signals and signal_targeting_allowed must be true (or all signals requested).
             *
             * @return GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef[]|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a[]|GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9efBuilder[]|array|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929aBuilder[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362aBuilder[]|null
             */
            public function getSignalTargeting(): mixed
            {
                return $this->_rawModelDataInput['signal_targeting'] ?? null;
            }

            /**
             * Set the value of signal_targeting.
             *
             * @param GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef[]|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a[]|GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9efBuilder[]|array|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929aBuilder[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362aBuilder[] $signalTargeting Filter to products supporting specific signals from data provider catalogs. Products must have the requested signals in their data_provider_signals and signal_targeting_allowed must be true (or all signals requested).
             *
             * {@link GetProductsRequest_ProductFilters::processSignalTargeting}
             * 
             *
             * @return static
             */
            public function setSignalTargeting(
                mixed $signalTargeting
            ): static {
                if (array_key_exists('signal_targeting', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['signal_targeting'] === $signalTargeting
                ) {
                    return $this;
                }

                $value = $modelData['signal_targeting'] = $signalTargeting;

                

                

                $this->_rawModelDataInput['signal_targeting'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of postal_areas.
             *
             * Filter by postal area coverage for locally-bound inventory (direct mail, DOOH, local campaigns). Use when products have postal-area-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
             *
             * @return GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584[]|GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584Builder[]|array|null
             */
            public function getPostalAreas(): mixed
            {
                return $this->_rawModelDataInput['postal_areas'] ?? null;
            }

            /**
             * Set the value of postal_areas.
             *
             * @param GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584[]|GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584Builder[]|array $postalAreas Filter by postal area coverage for locally-bound inventory (direct mail, DOOH, local campaigns). Use when products have postal-area-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
             *
             * {@link GetProductsRequest_ProductFilters::processPostalAreas}
             * 
             *
             * @return static
             */
            public function setPostalAreas(
                mixed $postalAreas
            ): static {
                if (array_key_exists('postal_areas', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['postal_areas'] === $postalAreas
                ) {
                    return $this;
                }

                $value = $modelData['postal_areas'] = $postalAreas;

                

                

                $this->_rawModelDataInput['postal_areas'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of geo_proximity.
             *
             * Filter by proximity to geographic points. Returns products with inventory coverage near these locations. Follows the same format as the targeting overlay — each entry uses exactly one method: travel_time + transport_mode, radius, or geometry. For locally-bound inventory (DOOH, radio), filters to products with coverage in the area. For digital inventory, filters to products from sellers supporting geo_proximity targeting.
             *
             * @return GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db[]|GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1dbBuilder[]|array|null
             */
            public function getGeoProximity(): mixed
            {
                return $this->_rawModelDataInput['geo_proximity'] ?? null;
            }

            /**
             * Set the value of geo_proximity.
             *
             * @param GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db[]|GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1dbBuilder[]|array $geoProximity Filter by proximity to geographic points. Returns products with inventory coverage near these locations. Follows the same format as the targeting overlay — each entry uses exactly one method: travel_time + transport_mode, radius, or geometry. For locally-bound inventory (DOOH, radio), filters to products with coverage in the area. For digital inventory, filters to products from sellers supporting geo_proximity targeting.
             *
             * {@link GetProductsRequest_ProductFilters::processGeoProximity}
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
             * Get the value of required_performance_standards.
             *
             * Filter to products that can meet the buyer's performance standard requirements. Each entry specifies a metric, minimum threshold, and optionally a required vendor and standard. Products that cannot meet these thresholds or do not support the specified vendors are excluded. Use this to tell the seller upfront: 'I need DoubleVerify for viewability at 70% MRC.'
             *
             * @return GetProductsRequest_PerformanceStandard[]|GetProductsRequest_PerformanceStandardBuilder[]|array|null
             */
            public function getRequiredPerformanceStandards(): mixed
            {
                return $this->_rawModelDataInput['required_performance_standards'] ?? null;
            }

            /**
             * Set the value of required_performance_standards.
             *
             * @param GetProductsRequest_PerformanceStandard[]|GetProductsRequest_PerformanceStandardBuilder[]|array $requiredPerformanceStandards Filter to products that can meet the buyer's performance standard requirements. Each entry specifies a metric, minimum threshold, and optionally a required vendor and standard. Products that cannot meet these thresholds or do not support the specified vendors are excluded. Use this to tell the seller upfront: 'I need DoubleVerify for viewability at 70% MRC.'
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredPerformanceStandards}
             * 
             *
             * @return static
             */
            public function setRequiredPerformanceStandards(
                mixed $requiredPerformanceStandards
            ): static {
                if (array_key_exists('required_performance_standards', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_performance_standards'] === $requiredPerformanceStandards
                ) {
                    return $this;
                }

                $value = $modelData['required_performance_standards'] = $requiredPerformanceStandards;

                

                

                $this->_rawModelDataInput['required_performance_standards'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of required_metrics.
             *
             * Filter to products whose `reporting_capabilities.available_metrics` is a superset of these metrics — i.e., products that commit to reporting all listed metrics in delivery responses. Use this for capability-level discovery (e.g., 'I need products that report `completed_views` for a CTV CPCV buy'); guarantee-level requirements with thresholds belong in `required_performance_standards` and `measurement_terms`. Sellers MUST silently exclude products that cannot meet this list (filter-not-fail; do not return an error). The product's declared `available_metrics` becomes the binding reporting contract carried into the resulting media buy — the same metric vocabulary is used to compute `missing_metrics` on `get_media_buy_delivery`.
             *
             * @return string[]|AvailableMetric[]|null
             */
            public function getRequiredMetrics(): array | AvailableMetric | null
            {
                return $this->_rawModelDataInput['required_metrics'] ?? null;
            }

            /**
             * Set the value of required_metrics.
             *
             * @param string[]|AvailableMetric[]|null $requiredMetrics Filter to products whose `reporting_capabilities.available_metrics` is a superset of these metrics — i.e., products that commit to reporting all listed metrics in delivery responses. Use this for capability-level discovery (e.g., 'I need products that report `completed_views` for a CTV CPCV buy'); guarantee-level requirements with thresholds belong in `required_performance_standards` and `measurement_terms`. Sellers MUST silently exclude products that cannot meet this list (filter-not-fail; do not return an error). The product's declared `available_metrics` becomes the binding reporting contract carried into the resulting media buy — the same metric vocabulary is used to compute `missing_metrics` on `get_media_buy_delivery`.
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredMetrics}
             * 
             *
             * @return static
             */
            public function setRequiredMetrics(
                array | AvailableMetric | null $requiredMetrics
            ): static {
                if (array_key_exists('required_metrics', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_metrics'] === $requiredMetrics
                ) {
                    return $this;
                }

                $value = $modelData['required_metrics'] = $requiredMetrics;

                

                

                $this->_rawModelDataInput['required_metrics'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of required_vendor_metrics.
             *
             * Filter to products whose `reporting_capabilities.vendor_metrics` matches these criteria. Each entry pins a `vendor` (matches any metric from that vendor), a `metric_id` (matches the metric across any vendor that uses that identifier), or both (specific vendor's specific metric). A product matches if its declared `vendor_metrics` covers ALL listed entries (AND across entries; pins within an entry are conjunctive). Cross-vendor discovery (e.g., 'I need attention measurement from any vendor that does it') is the buyer agent's responsibility — the agent resolves which vendors offer a category via the vendors' `brand.json` records, then enumerates them as filter entries. AdCP does not carry vendor-side metric metadata (category, methodology, standard alignment) in the filter surface; that lives at the vendor and is queried out-of-band. Sellers MUST silently exclude non-matching products (filter-not-fail; do not return an error) — same convention as the other `required_*` filters.
             *
             * @return GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a[]|GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aBuilder[]|array|null
             */
            public function getRequiredVendorMetrics(): mixed
            {
                return $this->_rawModelDataInput['required_vendor_metrics'] ?? null;
            }

            /**
             * Set the value of required_vendor_metrics.
             *
             * @param GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a[]|GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011aBuilder[]|array $requiredVendorMetrics Filter to products whose `reporting_capabilities.vendor_metrics` matches these criteria. Each entry pins a `vendor` (matches any metric from that vendor), a `metric_id` (matches the metric across any vendor that uses that identifier), or both (specific vendor's specific metric). A product matches if its declared `vendor_metrics` covers ALL listed entries (AND across entries; pins within an entry are conjunctive). Cross-vendor discovery (e.g., 'I need attention measurement from any vendor that does it') is the buyer agent's responsibility — the agent resolves which vendors offer a category via the vendors' `brand.json` records, then enumerates them as filter entries. AdCP does not carry vendor-side metric metadata (category, methodology, standard alignment) in the filter surface; that lives at the vendor and is queried out-of-band. Sellers MUST silently exclude non-matching products (filter-not-fail; do not return an error) — same convention as the other `required_*` filters.
             *
             * {@link GetProductsRequest_ProductFilters::processRequiredVendorMetrics}
             * 
             *
             * @return static
             */
            public function setRequiredVendorMetrics(
                mixed $requiredVendorMetrics
            ): static {
                if (array_key_exists('required_vendor_metrics', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['required_vendor_metrics'] === $requiredVendorMetrics
                ) {
                    return $this;
                }

                $value = $modelData['required_vendor_metrics'] = $requiredVendorMetrics;

                

                

                $this->_rawModelDataInput['required_vendor_metrics'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of keywords.
             *
             * Filter by keyword relevance for search and retail media platforms. Returns products that support keyword targeting for these terms. Allows the sell-side agent to assess keyword availability and recommend appropriate products. Use match_type to indicate the desired precision.
             *
             * @return GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5[]|GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5Builder[]|array|null
             */
            public function getKeywords(): mixed
            {
                return $this->_rawModelDataInput['keywords'] ?? null;
            }

            /**
             * Set the value of keywords.
             *
             * @param GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5[]|GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5Builder[]|array $keywords Filter by keyword relevance for search and retail media platforms. Returns products that support keyword targeting for these terms. Allows the sell-side agent to assess keyword availability and recommend appropriate products. Use match_type to indicate the desired precision.
             *
             * {@link GetProductsRequest_ProductFilters::processKeywords}
             * 
             *
             * @return static
             */
            public function setKeywords(
                mixed $keywords
            ): static {
                if (array_key_exists('keywords', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['keywords'] === $keywords
                ) {
                    return $this;
                }

                $value = $modelData['keywords'] = $keywords;

                

                

                $this->_rawModelDataInput['keywords'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
