<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DeliveryType;

    use AdCP\MediaBuy\Enums\Exclusivity;

    use AdCP\MediaBuy\Enums\MediaChannel;

    use AdCP\MediaBuy\Enums\AvailableMetric;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\TMPResponseType;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use AdCP\MediaBuy\Enums\TransportMode;

    use AdCP\MediaBuy\Enums\TravelTimeUnit;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType;

    use AdCP\MediaBuy\Enums\PerformanceStandardMetric;

    use AdCP\MediaBuy\Enums\ViewabilityStandard;

    use AdCP\MediaBuy\Enums\MatchType;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Deprecated;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ProductFilters
 * @package AdCP\MediaBuy 
 *
 * Structured filters for product discovery
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters')]

class GetProductsRequest_ProductFilters implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/$defs/DeliveryType')]
        
            #[SchemaName('delivery_type')]
        
        /** @var DeliveryType Type of inventory delivery */
        protected $deliveryType;
    
        
            #[JsonPointer('/properties/filters/properties/exclusivity')]
        
            #[SchemaName('exclusivity')]
        
        /** @var Exclusivity|null Filter by exclusivity level. Returns products matching the specified exclusivity (e.g., 'exclusive' returns only sole-sponsorship products). */
        protected $exclusivity;
    
        
            #[JsonPointer('/properties/filters/properties/is_fixed_price')]
        
            #[SchemaName('is_fixed_price')]
        
        /** @var bool|null Filter by pricing availability: true = products offering fixed pricing (at least one option with fixed_price), false = products offering auction pricing (at least one option without fixed_price). Products with both fixed and auction options match both true and false. */
        protected $isFixedPrice;
    
        
            #[JsonPointer('/properties/filters/properties/format_ids')]
        
            #[SchemaName('format_ids')]
        
        /** @var GetProductsRequest_FormatReferenceStructuredObject[]|null Filter by specific format IDs */
        protected $formatIds;
    
        
            #[JsonPointer('/properties/filters/properties/standard_formats_only')]
        
            #[SchemaName('standard_formats_only')]
        
        /** @var bool|null Only return products accepting IAB standard formats */
        protected $standardFormatsOnly;
    
        
            #[JsonPointer('/properties/filters/properties/min_exposures')]
        
            #[SchemaName('min_exposures')]
        
        /** @var int|null Minimum exposures/impressions needed for measurement validity */
        protected $minExposures;
    
        
            #[JsonPointer('/properties/filters/properties/start_date')]
        
            #[SchemaName('start_date')]
        
        /** @var string|null Campaign start date (ISO 8601 date format: YYYY-MM-DD) for availability checks */
        protected $startDate;
    
        
            #[JsonPointer('/properties/filters/properties/end_date')]
        
            #[SchemaName('end_date')]
        
        /** @var string|null Campaign end date (ISO 8601 date format: YYYY-MM-DD) for availability checks */
        protected $endDate;
    
        
            #[JsonPointer('/properties/filters/properties/budget_range')]
        
            #[SchemaName('budget_range')]
        
        /** @var GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea|null Budget range to filter appropriate products */
        protected $budgetRange;
    
        
            #[JsonPointer('/properties/filters/properties/countries')]
        
            #[SchemaName('countries')]
        
        /** @var string[]|null Filter by country coverage using ISO 3166-1 alpha-2 codes (e.g., ['US', 'CA', 'GB']). Works for all inventory types. */
        protected $countries;
    
        
            #[JsonPointer('/properties/filters/properties/regions')]
        
            #[SchemaName('regions')]
        
        /** @var string[]|null Filter by region coverage using ISO 3166-2 codes (e.g., ['US-NY', 'US-CA', 'GB-SCT']). Use for locally-bound inventory (regional OOH, local TV) where products have region-specific coverage. */
        protected $regions;
    
        
            #[JsonPointer('/properties/filters/properties/metros')]
        
            #[SchemaName('metros')]
        
        /** @var GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf[]|null Filter by metro coverage for locally-bound inventory (radio, DOOH, local TV). Use when products have DMA/metro-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability. */
        protected $metros;
    
        
            #[JsonPointer('/properties/filters/properties/channels')]
        
            #[SchemaName('channels')]
        
        /** @var MediaChannel[]|null Filter by advertising channels (e.g., ['display', 'ctv', 'dooh']) */
        protected $channels;
    
        
            #[JsonPointer('/properties/filters/properties/required_axe_integrations')]
        
            #[SchemaName('required_axe_integrations')]
        
            #[Deprecated]
        
        /** @var string[]|null Deprecated: Use trusted_match filter instead. Filter to products executable through specific agentic ad exchanges. URLs are canonical identifiers. */
        protected $requiredAxeIntegrations;
    
        
            #[JsonPointer('/properties/filters/properties/trusted_match')]
        
            #[SchemaName('trusted_match')]
        
        /** @var GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b|null Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned. */
        protected $trustedMatch;
    
        
            #[JsonPointer('/properties/filters/properties/required_features')]
        
            #[SchemaName('required_features')]
        
        /** @var GetProductsRequest_MediaBuyFeatures|null Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering. */
        protected $requiredFeatures;
    
        
            #[JsonPointer('/properties/filters/properties/required_geo_targeting')]
        
            #[SchemaName('required_geo_targeting')]
        
        /** @var GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b[]|null Filter to products from sellers supporting specific geo targeting capabilities. Each entry specifies a targeting level (country, region, metro, postal_area) and optionally a system for levels that have multiple classification systems. */
        protected $requiredGeoTargeting;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting')]
        
            #[SchemaName('signal_targeting')]
        
        /** @var GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef[]|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a[]|null Filter to products supporting specific signals from data provider catalogs. Products must have the requested signals in their data_provider_signals and signal_targeting_allowed must be true (or all signals requested). */
        protected $signalTargeting;
    
        
            #[JsonPointer('/properties/filters/properties/postal_areas')]
        
            #[SchemaName('postal_areas')]
        
        /** @var GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584[]|null Filter by postal area coverage for locally-bound inventory (direct mail, DOOH, local campaigns). Use when products have postal-area-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability. */
        protected $postalAreas;
    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity')]
        
            #[SchemaName('geo_proximity')]
        
        /** @var GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db[]|null Filter by proximity to geographic points. Returns products with inventory coverage near these locations. Follows the same format as the targeting overlay — each entry uses exactly one method: travel_time + transport_mode, radius, or geometry. For locally-bound inventory (DOOH, radio), filters to products with coverage in the area. For digital inventory, filters to products from sellers supporting geo_proximity targeting. */
        protected $geoProximity;
    
        
            #[JsonPointer('/properties/filters/properties/required_performance_standards')]
        
            #[SchemaName('required_performance_standards')]
        
        /** @var GetProductsRequest_PerformanceStandard[]|null Filter to products that can meet the buyer's performance standard requirements. Each entry specifies a metric, minimum threshold, and optionally a required vendor and standard. Products that cannot meet these thresholds or do not support the specified vendors are excluded. Use this to tell the seller upfront: 'I need DoubleVerify for viewability at 70% MRC.' */
        protected $requiredPerformanceStandards;
    
        
            #[JsonPointer('/properties/filters/properties/required_metrics')]
        
            #[SchemaName('required_metrics')]
        
        /** @var AvailableMetric[]|null Filter to products whose `reporting_capabilities.available_metrics` is a superset of these metrics — i.e., products that commit to reporting all listed metrics in delivery responses. Use this for capability-level discovery (e.g., 'I need products that report `completed_views` for a CTV CPCV buy'); guarantee-level requirements with thresholds belong in `required_performance_standards` and `measurement_terms`. Sellers MUST silently exclude products that cannot meet this list (filter-not-fail; do not return an error). The product's declared `available_metrics` becomes the binding reporting contract carried into the resulting media buy — the same metric vocabulary is used to compute `missing_metrics` on `get_media_buy_delivery`. */
        protected $requiredMetrics;
    
        
            #[JsonPointer('/properties/filters/properties/required_vendor_metrics')]
        
            #[SchemaName('required_vendor_metrics')]
        
        /** @var GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a[]|null Filter to products whose `reporting_capabilities.vendor_metrics` matches these criteria. Each entry pins a `vendor` (matches any metric from that vendor), a `metric_id` (matches the metric across any vendor that uses that identifier), or both (specific vendor's specific metric). A product matches if its declared `vendor_metrics` covers ALL listed entries (AND across entries; pins within an entry are conjunctive). Cross-vendor discovery (e.g., 'I need attention measurement from any vendor that does it') is the buyer agent's responsibility — the agent resolves which vendors offer a category via the vendors' `brand.json` records, then enumerates them as filter entries. AdCP does not carry vendor-side metric metadata (category, methodology, standard alignment) in the filter surface; that lives at the vendor and is queried out-of-band. Sellers MUST silently exclude non-matching products (filter-not-fail; do not return an error) — same convention as the other `required_*` filters. */
        protected $requiredVendorMetrics;
    
        
            #[JsonPointer('/properties/filters/properties/keywords')]
        
            #[SchemaName('keywords')]
        
        /** @var GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5[]|null Filter by keyword relevance for search and retail media platforms. Returns products that support keyword targeting for these terms. Allows the sell-side agent to assess keyword availability and recommend appropriate products. Use match_type to indicate the desired precision. */
        protected $keywords;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'exclusivity',
  2 => 'is_fixed_price',
  3 => 'format_ids',
  4 => 'standard_formats_only',
  5 => 'min_exposures',
  6 => 'start_date',
  7 => 'end_date',
  8 => 'budget_range',
  9 => 'countries',
  10 => 'regions',
  11 => 'metros',
  12 => 'channels',
  13 => 'required_axe_integrations',
  14 => 'trusted_match',
  15 => 'required_features',
  16 => 'required_geo_targeting',
  17 => 'signal_targeting',
  18 => 'postal_areas',
  19 => 'geo_proximity',
  20 => 'required_performance_standards',
  21 => 'required_metrics',
  22 => 'required_vendor_metrics',
  23 => 'keywords',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ProductFilters constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processDeliveryType($rawModelDataInput);
            
        
            
                $this->processExclusivity($rawModelDataInput);
            
        
            
                $this->processIsFixedPrice($rawModelDataInput);
            
        
            
                $this->processFormatIds($rawModelDataInput);
            
        
            
                $this->processStandardFormatsOnly($rawModelDataInput);
            
        
            
                $this->processMinExposures($rawModelDataInput);
            
        
            
                $this->processStartDate($rawModelDataInput);
            
        
            
                $this->processEndDate($rawModelDataInput);
            
        
            
                $this->processBudgetRange($rawModelDataInput);
            
        
            
                $this->processCountries($rawModelDataInput);
            
        
            
                $this->processRegions($rawModelDataInput);
            
        
            
                $this->processMetros($rawModelDataInput);
            
        
            
                $this->processChannels($rawModelDataInput);
            
        
            
                $this->processRequiredAxeIntegrations($rawModelDataInput);
            
        
            
                $this->processTrustedMatch($rawModelDataInput);
            
        
            
                $this->processRequiredFeatures($rawModelDataInput);
            
        
            
                $this->processRequiredGeoTargeting($rawModelDataInput);
            
        
            
                $this->processSignalTargeting($rawModelDataInput);
            
        
            
                $this->processPostalAreas($rawModelDataInput);
            
        
            
                $this->processGeoProximity($rawModelDataInput);
            
        
            
                $this->processRequiredPerformanceStandards($rawModelDataInput);
            
        
            
                $this->processRequiredMetrics($rawModelDataInput);
            
        
            
                $this->processRequiredVendorMetrics($rawModelDataInput);
            
        
            
                $this->processKeywords($rawModelDataInput);
            
        
            
        
            
        

        
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
   'delivery_type',
   'exclusivity',
   'is_fixed_price',
   'format_ids',
   'standard_formats_only',
   'min_exposures',
   'start_date',
   'end_date',
   'budget_range',
   'countries',
   'regions',
   'metros',
   'channels',
   'required_axe_integrations',
   'trusted_match',
   'required_features',
   'required_geo_targeting',
   'signal_targeting',
   'postal_areas',
   'geo_proximity',
   'required_performance_standards',
   'required_metrics',
   'required_vendor_metrics',
   'keywords',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ProductFilters',
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
                 * Get the value of delivery_type.
                 *
                 * Type of inventory delivery
                 *
                 * @return DeliveryType
                 */
                public function getDeliveryType(): DeliveryType
                {
                    

                    return $this->deliveryType;
                }
            

            
                /**
                 * Set the value of delivery_type.
                 *
                 * @param string|DeliveryType $deliveryType Type of inventory delivery
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeliveryType(
                    string | DeliveryType $deliveryType
                ): static {
                    if ($this->deliveryType === $deliveryType) {
                        return $this;
                    }

                    $value = $modelData['delivery_type'] = $deliveryType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeliveryType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->deliveryType = $value;
                    $this->_rawModelDataInput['delivery_type'] = $deliveryType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property deliveryType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeliveryType(array $modelData): void
            {
                

                $value = array_key_exists('delivery_type', $modelData) ? $modelData['delivery_type'] : $this->deliveryType;

                

                $this->deliveryType = $this->validateDeliveryType($value, $modelData);
            }

            /**
             * Execute all validators for the property deliveryType
             */
            protected function validateDeliveryType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof DeliveryType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'DeliveryType',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'guaranteed',
   'non_guaranteed',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 
  array (
    0 => 'guaranteed',
    1 => 'non_guaranteed',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeliveryType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'delivery_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of exclusivity.
                 *
                 * Filter by exclusivity level. Returns products matching the specified exclusivity (e.g., 'exclusive' returns only sole-sponsorship products).
                 *
                 * @return Exclusivity|null
                 */
                public function getExclusivity(): ?Exclusivity
                {
                    

                    return $this->exclusivity;
                }
            

            
                /**
                 * Set the value of exclusivity.
                 *
                 * @param string|Exclusivity|null $exclusivity Filter by exclusivity level. Returns products matching the specified exclusivity (e.g., 'exclusive' returns only sole-sponsorship products).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExclusivity(
                    string | Exclusivity | null $exclusivity
                ): static {
                    if ($this->exclusivity === $exclusivity) {
                        return $this;
                    }

                    $value = $modelData['exclusivity'] = $exclusivity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateExclusivity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->exclusivity = $value;
                    $this->_rawModelDataInput['exclusivity'] = $exclusivity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property exclusivity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExclusivity(array $modelData): void
            {
                
                    if (!array_key_exists('exclusivity', $modelData) && $this->exclusivity === null) {
                        return;
                    }
                

                $value = array_key_exists('exclusivity', $modelData) ? $modelData['exclusivity'] : $this->exclusivity;

                

                $this->exclusivity = $this->validateExclusivity($value, $modelData);
            }

            /**
             * Execute all validators for the property exclusivity
             */
            protected function validateExclusivity($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof Exclusivity)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'exclusivity',
  1 => 'Exclusivity',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'exclusivity',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'none',
   'category',
   'exclusive',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'exclusivity',
  1 => 
  array (
    0 => 'none',
    1 => 'category',
    2 => 'exclusive',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\Exclusivity',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'exclusivity',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'exclusivity',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
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
                    

                    return $this->isFixedPrice;
                }
            

            
                /**
                 * Set the value of is_fixed_price.
                 *
                 * @param bool $isFixedPrice Filter by pricing availability: true = products offering fixed pricing (at least one option with fixed_price), false = products offering auction pricing (at least one option without fixed_price). Products with both fixed and auction options match both true and false.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIsFixedPrice(
                    bool $isFixedPrice
                ): static {
                    if ($this->isFixedPrice === $isFixedPrice) {
                        return $this;
                    }

                    $value = $modelData['is_fixed_price'] = $isFixedPrice;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIsFixedPrice($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->isFixedPrice = $value;
                    $this->_rawModelDataInput['is_fixed_price'] = $isFixedPrice;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property isFixedPrice
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIsFixedPrice(array $modelData): void
            {
                
                    if (!array_key_exists('is_fixed_price', $modelData) && $this->isFixedPrice === null) {
                        return;
                    }
                

                $value = array_key_exists('is_fixed_price', $modelData) ? $modelData['is_fixed_price'] : $this->isFixedPrice;

                

                $this->isFixedPrice = $this->validateIsFixedPrice($value, $modelData);
            }

            /**
             * Execute all validators for the property isFixedPrice
             */
            protected function validateIsFixedPrice($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'is_fixed_price',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format_ids.
                 *
                 * Filter by specific format IDs
                 *
                 * @return GetProductsRequest_FormatReferenceStructuredObject[]|null
                 */
                public function getFormatIds(): ?array
                {
                    

                    return $this->formatIds;
                }
            

            
                /**
                 * Set the value of format_ids.
                 *
                 * @param GetProductsRequest_FormatReferenceStructuredObject[] $formatIds Filter by specific format IDs
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormatIds(
                    array $formatIds
                ): static {
                    if ($this->formatIds === $formatIds) {
                        return $this;
                    }

                    $value = $modelData['format_ids'] = $formatIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFormatIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->formatIds = $value;
                    $this->_rawModelDataInput['format_ids'] = $formatIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property formatIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormatIds(array $modelData): void
            {
                
                    if (!array_key_exists('format_ids', $modelData) && $this->formatIds === null) {
                        return;
                    }
                

                $value = array_key_exists('format_ids', $modelData) ? $modelData['format_ids'] : $this->formatIds;

                

                $this->formatIds = $this->validateFormatIds($value, $modelData);
            }

            /**
             * Execute all validators for the property formatIds
             */
            protected function validateFormatIds($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'format_ids',
  1 => 'array',
)));
}

                
                    $this->validateFormatIds_ArrayItem_30caaabe5584100fd91c07b8c46acd18($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'format_ids',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->standardFormatsOnly;
                }
            

            
                /**
                 * Set the value of standard_formats_only.
                 *
                 * @param bool $standardFormatsOnly Only return products accepting IAB standard formats
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStandardFormatsOnly(
                    bool $standardFormatsOnly
                ): static {
                    if ($this->standardFormatsOnly === $standardFormatsOnly) {
                        return $this;
                    }

                    $value = $modelData['standard_formats_only'] = $standardFormatsOnly;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStandardFormatsOnly($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->standardFormatsOnly = $value;
                    $this->_rawModelDataInput['standard_formats_only'] = $standardFormatsOnly;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property standardFormatsOnly
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStandardFormatsOnly(array $modelData): void
            {
                
                    if (!array_key_exists('standard_formats_only', $modelData) && $this->standardFormatsOnly === null) {
                        return;
                    }
                

                $value = array_key_exists('standard_formats_only', $modelData) ? $modelData['standard_formats_only'] : $this->standardFormatsOnly;

                

                $this->standardFormatsOnly = $this->validateStandardFormatsOnly($value, $modelData);
            }

            /**
             * Execute all validators for the property standardFormatsOnly
             */
            protected function validateStandardFormatsOnly($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'standard_formats_only',
  1 => 'bool',
)));
}

                

                return $value;
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
                    

                    return $this->minExposures;
                }
            

            
                /**
                 * Set the value of min_exposures.
                 *
                 * @param int $minExposures Minimum exposures/impressions needed for measurement validity
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMinExposures(
                    int $minExposures
                ): static {
                    if ($this->minExposures === $minExposures) {
                        return $this;
                    }

                    $value = $modelData['min_exposures'] = $minExposures;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMinExposures($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->minExposures = $value;
                    $this->_rawModelDataInput['min_exposures'] = $minExposures;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property minExposures
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMinExposures(array $modelData): void
            {
                
                    if (!array_key_exists('min_exposures', $modelData) && $this->minExposures === null) {
                        return;
                    }
                

                $value = array_key_exists('min_exposures', $modelData) ? $modelData['min_exposures'] : $this->minExposures;

                

                $this->minExposures = $this->validateMinExposures($value, $modelData);
            }

            /**
             * Execute all validators for the property minExposures
             */
            protected function validateMinExposures($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'min_exposures',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'min_exposures',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->startDate;
                }
            

            
                /**
                 * Set the value of start_date.
                 *
                 * @param string $startDate Campaign start date (ISO 8601 date format: YYYY-MM-DD) for availability checks
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStartDate(
                    string $startDate
                ): static {
                    if ($this->startDate === $startDate) {
                        return $this;
                    }

                    $value = $modelData['start_date'] = $startDate;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStartDate($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->startDate = $value;
                    $this->_rawModelDataInput['start_date'] = $startDate;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property startDate
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStartDate(array $modelData): void
            {
                
                    if (!array_key_exists('start_date', $modelData) && $this->startDate === null) {
                        return;
                    }
                

                $value = array_key_exists('start_date', $modelData) ? $modelData['start_date'] : $this->startDate;

                

                $this->startDate = $this->validateStartDate($value, $modelData);
            }

            /**
             * Execute all validators for the property startDate
             */
            protected function validateStartDate($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'start_date',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'start_date',
  1 => 'date',
)));
}

                

                return $value;
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
                    

                    return $this->endDate;
                }
            

            
                /**
                 * Set the value of end_date.
                 *
                 * @param string $endDate Campaign end date (ISO 8601 date format: YYYY-MM-DD) for availability checks
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEndDate(
                    string $endDate
                ): static {
                    if ($this->endDate === $endDate) {
                        return $this;
                    }

                    $value = $modelData['end_date'] = $endDate;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEndDate($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->endDate = $value;
                    $this->_rawModelDataInput['end_date'] = $endDate;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property endDate
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEndDate(array $modelData): void
            {
                
                    if (!array_key_exists('end_date', $modelData) && $this->endDate === null) {
                        return;
                    }
                

                $value = array_key_exists('end_date', $modelData) ? $modelData['end_date'] : $this->endDate;

                

                $this->endDate = $this->validateEndDate($value, $modelData);
            }

            /**
             * Execute all validators for the property endDate
             */
            protected function validateEndDate($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'end_date',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'end_date',
  1 => 'date',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of budget_range.
                 *
                 * Budget range to filter appropriate products
                 *
                 * @return GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea|null
                 */
                public function getBudgetRange(): ?GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea
                {
                    

                    return $this->budgetRange;
                }
            

            
                /**
                 * Set the value of budget_range.
                 *
                 * @param GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea $budgetRange Budget range to filter appropriate products
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBudgetRange(
                    GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea $budgetRange
                ): static {
                    if ($this->budgetRange === $budgetRange) {
                        return $this;
                    }

                    $value = $modelData['budget_range'] = $budgetRange;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBudgetRange($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->budgetRange = $value;
                    $this->_rawModelDataInput['budget_range'] = $budgetRange;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property budgetRange
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBudgetRange(array $modelData): void
            {
                
                    if (!array_key_exists('budget_range', $modelData) && $this->budgetRange === null) {
                        return;
                    }
                

                $value = array_key_exists('budget_range', $modelData) ? $modelData['budget_range'] : $this->budgetRange;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'budget_range',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->budgetRange = $this->validateBudgetRange($value, $modelData);
            }

            /**
             * Execute all validators for the property budgetRange
             */
            protected function validateBudgetRange($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'budget_range',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'budget_range',
  1 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
)));
}

                

                return $value;
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
                    

                    return $this->countries;
                }
            

            
                /**
                 * Set the value of countries.
                 *
                 * @param string[] $countries Filter by country coverage using ISO 3166-1 alpha-2 codes (e.g., ['US', 'CA', 'GB']). Works for all inventory types.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCountries(
                    array $countries
                ): static {
                    if ($this->countries === $countries) {
                        return $this;
                    }

                    $value = $modelData['countries'] = $countries;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCountries($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->countries = $value;
                    $this->_rawModelDataInput['countries'] = $countries;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property countries
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCountries(array $modelData): void
            {
                
                    if (!array_key_exists('countries', $modelData) && $this->countries === null) {
                        return;
                    }
                

                $value = array_key_exists('countries', $modelData) ? $modelData['countries'] : $this->countries;

                

                $this->countries = $this->validateCountries($value, $modelData);
            }

            /**
             * Execute all validators for the property countries
             */
            protected function validateCountries($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'countries',
  1 => 'array',
)));
}

                
                    $this->validateCountries_ArrayItem_9df587c8f2e7d9a521b81d9018c9ec8c($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'countries',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->regions;
                }
            

            
                /**
                 * Set the value of regions.
                 *
                 * @param string[] $regions Filter by region coverage using ISO 3166-2 codes (e.g., ['US-NY', 'US-CA', 'GB-SCT']). Use for locally-bound inventory (regional OOH, local TV) where products have region-specific coverage.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRegions(
                    array $regions
                ): static {
                    if ($this->regions === $regions) {
                        return $this;
                    }

                    $value = $modelData['regions'] = $regions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRegions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->regions = $value;
                    $this->_rawModelDataInput['regions'] = $regions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property regions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRegions(array $modelData): void
            {
                
                    if (!array_key_exists('regions', $modelData) && $this->regions === null) {
                        return;
                    }
                

                $value = array_key_exists('regions', $modelData) ? $modelData['regions'] : $this->regions;

                

                $this->regions = $this->validateRegions($value, $modelData);
            }

            /**
             * Execute all validators for the property regions
             */
            protected function validateRegions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'regions',
  1 => 'array',
)));
}

                
                    $this->validateRegions_ArrayItem_dd8f52e8a1c55d7ff031e4e012c975ee($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'regions',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of metros.
                 *
                 * Filter by metro coverage for locally-bound inventory (radio, DOOH, local TV). Use when products have DMA/metro-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
                 *
                 * @return GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf[]|null
                 */
                public function getMetros(): ?array
                {
                    

                    return $this->metros;
                }
            

            
                /**
                 * Set the value of metros.
                 *
                 * @param GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf[] $metros Filter by metro coverage for locally-bound inventory (radio, DOOH, local TV). Use when products have DMA/metro-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMetros(
                    array $metros
                ): static {
                    if ($this->metros === $metros) {
                        return $this;
                    }

                    $value = $modelData['metros'] = $metros;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMetros($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->metros = $value;
                    $this->_rawModelDataInput['metros'] = $metros;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property metros
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMetros(array $modelData): void
            {
                
                    if (!array_key_exists('metros', $modelData) && $this->metros === null) {
                        return;
                    }
                

                $value = array_key_exists('metros', $modelData) ? $modelData['metros'] : $this->metros;

                

                $this->metros = $this->validateMetros($value, $modelData);
            }

            /**
             * Execute all validators for the property metros
             */
            protected function validateMetros($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'metros',
  1 => 'array',
)));
}

                
                    $this->validateMetros_ArrayItem_1f0c007315608bb4f82fa1e03aaa8052($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'metros',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of channels.
                 *
                 * Filter by advertising channels (e.g., ['display', 'ctv', 'dooh'])
                 *
                 * @return MediaChannel[]|null
                 */
                public function getChannels(): array | MediaChannel | null
                {
                    

                    return $this->channels;
                }
            

            
                /**
                 * Set the value of channels.
                 *
                 * @param string[]|MediaChannel[]|null $channels Filter by advertising channels (e.g., ['display', 'ctv', 'dooh'])
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setChannels(
                    array | MediaChannel | null $channels
                ): static {
                    if ($this->channels === $channels) {
                        return $this;
                    }

                    $value = $modelData['channels'] = $channels;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateChannels($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->channels = $value;
                    $this->_rawModelDataInput['channels'] = $channels;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property channels
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processChannels(array $modelData): void
            {
                
                    if (!array_key_exists('channels', $modelData) && $this->channels === null) {
                        return;
                    }
                

                $value = array_key_exists('channels', $modelData) ? $modelData['channels'] : $this->channels;

                

                $this->channels = $this->validateChannels($value, $modelData);
            }

            /**
             * Execute all validators for the property channels
             */
            protected function validateChannels($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'channels',
  1 => 'array',
)));
}

                
                    $this->validateChannels_ArrayItem_066876107ce853e417e91492e5730f80($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'channels',
  1 => 1,
)));
}

                

                return $value;
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
                    

                    return $this->requiredAxeIntegrations;
                }
            

            
                /**
                 * Set the value of required_axe_integrations.
                 *
                 * @param string[] $requiredAxeIntegrations Deprecated: Use trusted_match filter instead. Filter to products executable through specific agentic ad exchanges. URLs are canonical identifiers.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredAxeIntegrations(
                    array $requiredAxeIntegrations
                ): static {
                    if ($this->requiredAxeIntegrations === $requiredAxeIntegrations) {
                        return $this;
                    }

                    $value = $modelData['required_axe_integrations'] = $requiredAxeIntegrations;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredAxeIntegrations($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredAxeIntegrations = $value;
                    $this->_rawModelDataInput['required_axe_integrations'] = $requiredAxeIntegrations;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredAxeIntegrations
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredAxeIntegrations(array $modelData): void
            {
                
                    if (!array_key_exists('required_axe_integrations', $modelData) && $this->requiredAxeIntegrations === null) {
                        return;
                    }
                

                $value = array_key_exists('required_axe_integrations', $modelData) ? $modelData['required_axe_integrations'] : $this->requiredAxeIntegrations;

                

                $this->requiredAxeIntegrations = $this->validateRequiredAxeIntegrations($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredAxeIntegrations
             */
            protected function validateRequiredAxeIntegrations($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_axe_integrations',
  1 => 'array',
)));
}

                
                    $this->validateRequiredAxeIntegrations_ArrayItem_a6356488b3850f53a0ac83807d5ae659($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'required_axe_integrations',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of trusted_match.
                 *
                 * Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned.
                 *
                 * @return GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b|null
                 */
                public function getTrustedMatch(): ?GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b
                {
                    

                    return $this->trustedMatch;
                }
            

            
                /**
                 * Set the value of trusted_match.
                 *
                 * @param GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b $trustedMatch Filter products by Trusted Match Protocol capabilities. Only products with matching TMP support are returned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTrustedMatch(
                    GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b $trustedMatch
                ): static {
                    if ($this->trustedMatch === $trustedMatch) {
                        return $this;
                    }

                    $value = $modelData['trusted_match'] = $trustedMatch;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTrustedMatch($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->trustedMatch = $value;
                    $this->_rawModelDataInput['trusted_match'] = $trustedMatch;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property trustedMatch
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTrustedMatch(array $modelData): void
            {
                
                    if (!array_key_exists('trusted_match', $modelData) && $this->trustedMatch === null) {
                        return;
                    }
                

                $value = array_key_exists('trusted_match', $modelData) ? $modelData['trusted_match'] : $this->trustedMatch;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'trusted_match',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->trustedMatch = $this->validateTrustedMatch($value, $modelData);
            }

            /**
             * Execute all validators for the property trustedMatch
             */
            protected function validateTrustedMatch($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'trusted_match',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'trusted_match',
  1 => 'GetProductsRequest_Trusted_Match6b23af473012f9bbd1d109d8e7522a8b',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_features.
                 *
                 * Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering.
                 *
                 * @return GetProductsRequest_MediaBuyFeatures|null
                 */
                public function getRequiredFeatures(): ?GetProductsRequest_MediaBuyFeatures
                {
                    

                    return $this->requiredFeatures;
                }
            

            
                /**
                 * Set the value of required_features.
                 *
                 * @param GetProductsRequest_MediaBuyFeatures $requiredFeatures Filter to products from sellers supporting specific protocol features. Only features set to true are used for filtering.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredFeatures(
                    GetProductsRequest_MediaBuyFeatures $requiredFeatures
                ): static {
                    if ($this->requiredFeatures === $requiredFeatures) {
                        return $this;
                    }

                    $value = $modelData['required_features'] = $requiredFeatures;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredFeatures($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredFeatures = $value;
                    $this->_rawModelDataInput['required_features'] = $requiredFeatures;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredFeatures
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredFeatures(array $modelData): void
            {
                
                    if (!array_key_exists('required_features', $modelData) && $this->requiredFeatures === null) {
                        return;
                    }
                

                $value = array_key_exists('required_features', $modelData) ? $modelData['required_features'] : $this->requiredFeatures;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_MediaBuyFeatures($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'required_features',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->requiredFeatures = $this->validateRequiredFeatures($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredFeatures
             */
            protected function validateRequiredFeatures($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_features',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_MediaBuyFeatures)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'required_features',
  1 => 'GetProductsRequest_MediaBuyFeatures',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_geo_targeting.
                 *
                 * Filter to products from sellers supporting specific geo targeting capabilities. Each entry specifies a targeting level (country, region, metro, postal_area) and optionally a system for levels that have multiple classification systems.
                 *
                 * @return GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b[]|null
                 */
                public function getRequiredGeoTargeting(): ?array
                {
                    

                    return $this->requiredGeoTargeting;
                }
            

            
                /**
                 * Set the value of required_geo_targeting.
                 *
                 * @param GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b[] $requiredGeoTargeting Filter to products from sellers supporting specific geo targeting capabilities. Each entry specifies a targeting level (country, region, metro, postal_area) and optionally a system for levels that have multiple classification systems.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredGeoTargeting(
                    array $requiredGeoTargeting
                ): static {
                    if ($this->requiredGeoTargeting === $requiredGeoTargeting) {
                        return $this;
                    }

                    $value = $modelData['required_geo_targeting'] = $requiredGeoTargeting;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredGeoTargeting($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredGeoTargeting = $value;
                    $this->_rawModelDataInput['required_geo_targeting'] = $requiredGeoTargeting;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredGeoTargeting
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredGeoTargeting(array $modelData): void
            {
                
                    if (!array_key_exists('required_geo_targeting', $modelData) && $this->requiredGeoTargeting === null) {
                        return;
                    }
                

                $value = array_key_exists('required_geo_targeting', $modelData) ? $modelData['required_geo_targeting'] : $this->requiredGeoTargeting;

                

                $this->requiredGeoTargeting = $this->validateRequiredGeoTargeting($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredGeoTargeting
             */
            protected function validateRequiredGeoTargeting($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_geo_targeting',
  1 => 'array',
)));
}

                
                    $this->validateRequiredGeoTargeting_ArrayItem_d20c47dc07905cf2feaddf20f6b3a345($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'required_geo_targeting',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of signal_targeting.
                 *
                 * Filter to products supporting specific signals from data provider catalogs. Products must have the requested signals in their data_provider_signals and signal_targeting_allowed must be true (or all signals requested).
                 *
                 * @return GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef[]|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a[]|null
                 */
                public function getSignalTargeting(): ?array
                {
                    

                    return $this->signalTargeting;
                }
            

            
                /**
                 * Set the value of signal_targeting.
                 *
                 * @param GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef[]|GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a[]|GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a[] $signalTargeting Filter to products supporting specific signals from data provider catalogs. Products must have the requested signals in their data_provider_signals and signal_targeting_allowed must be true (or all signals requested).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSignalTargeting(
                    array $signalTargeting
                ): static {
                    if ($this->signalTargeting === $signalTargeting) {
                        return $this;
                    }

                    $value = $modelData['signal_targeting'] = $signalTargeting;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSignalTargeting($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->signalTargeting = $value;
                    $this->_rawModelDataInput['signal_targeting'] = $signalTargeting;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property signalTargeting
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSignalTargeting(array $modelData): void
            {
                
                    if (!array_key_exists('signal_targeting', $modelData) && $this->signalTargeting === null) {
                        return;
                    }
                

                $value = array_key_exists('signal_targeting', $modelData) ? $modelData['signal_targeting'] : $this->signalTargeting;

                

                $this->signalTargeting = $this->validateSignalTargeting($value, $modelData);
            }

            /**
             * Execute all validators for the property signalTargeting
             */
            protected function validateSignalTargeting($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'signal_targeting',
  1 => 'array',
)));
}

                
                    $this->validateSignalTargeting_ArrayItem_9972a22288525263bacbbd434fb7c160($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'signal_targeting',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of postal_areas.
                 *
                 * Filter by postal area coverage for locally-bound inventory (direct mail, DOOH, local campaigns). Use when products have postal-area-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
                 *
                 * @return GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584[]|null
                 */
                public function getPostalAreas(): ?array
                {
                    

                    return $this->postalAreas;
                }
            

            
                /**
                 * Set the value of postal_areas.
                 *
                 * @param GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584[] $postalAreas Filter by postal area coverage for locally-bound inventory (direct mail, DOOH, local campaigns). Use when products have postal-area-specific coverage. For digital inventory where products have broad coverage, use required_geo_targeting instead to filter by seller capability.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPostalAreas(
                    array $postalAreas
                ): static {
                    if ($this->postalAreas === $postalAreas) {
                        return $this;
                    }

                    $value = $modelData['postal_areas'] = $postalAreas;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePostalAreas($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->postalAreas = $value;
                    $this->_rawModelDataInput['postal_areas'] = $postalAreas;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property postalAreas
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPostalAreas(array $modelData): void
            {
                
                    if (!array_key_exists('postal_areas', $modelData) && $this->postalAreas === null) {
                        return;
                    }
                

                $value = array_key_exists('postal_areas', $modelData) ? $modelData['postal_areas'] : $this->postalAreas;

                

                $this->postalAreas = $this->validatePostalAreas($value, $modelData);
            }

            /**
             * Execute all validators for the property postalAreas
             */
            protected function validatePostalAreas($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'postal_areas',
  1 => 'array',
)));
}

                
                    $this->validatePostalAreas_ArrayItem_1faf6027fcd41cff303e358d0ce3d391($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'postal_areas',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geo_proximity.
                 *
                 * Filter by proximity to geographic points. Returns products with inventory coverage near these locations. Follows the same format as the targeting overlay — each entry uses exactly one method: travel_time + transport_mode, radius, or geometry. For locally-bound inventory (DOOH, radio), filters to products with coverage in the area. For digital inventory, filters to products from sellers supporting geo_proximity targeting.
                 *
                 * @return GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db[]|null
                 */
                public function getGeoProximity(): ?array
                {
                    

                    return $this->geoProximity;
                }
            

            
                /**
                 * Set the value of geo_proximity.
                 *
                 * @param GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db[] $geoProximity Filter by proximity to geographic points. Returns products with inventory coverage near these locations. Follows the same format as the targeting overlay — each entry uses exactly one method: travel_time + transport_mode, radius, or geometry. For locally-bound inventory (DOOH, radio), filters to products with coverage in the area. For digital inventory, filters to products from sellers supporting geo_proximity targeting.
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

                
                    $this->validateGeoProximity_ArrayItem_48b135ffebeecb8b94a2ce311864c00b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'geo_proximity',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_performance_standards.
                 *
                 * Filter to products that can meet the buyer's performance standard requirements. Each entry specifies a metric, minimum threshold, and optionally a required vendor and standard. Products that cannot meet these thresholds or do not support the specified vendors are excluded. Use this to tell the seller upfront: 'I need DoubleVerify for viewability at 70% MRC.'
                 *
                 * @return GetProductsRequest_PerformanceStandard[]|null
                 */
                public function getRequiredPerformanceStandards(): ?array
                {
                    

                    return $this->requiredPerformanceStandards;
                }
            

            
                /**
                 * Set the value of required_performance_standards.
                 *
                 * @param GetProductsRequest_PerformanceStandard[] $requiredPerformanceStandards Filter to products that can meet the buyer's performance standard requirements. Each entry specifies a metric, minimum threshold, and optionally a required vendor and standard. Products that cannot meet these thresholds or do not support the specified vendors are excluded. Use this to tell the seller upfront: 'I need DoubleVerify for viewability at 70% MRC.'
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredPerformanceStandards(
                    array $requiredPerformanceStandards
                ): static {
                    if ($this->requiredPerformanceStandards === $requiredPerformanceStandards) {
                        return $this;
                    }

                    $value = $modelData['required_performance_standards'] = $requiredPerformanceStandards;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredPerformanceStandards($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredPerformanceStandards = $value;
                    $this->_rawModelDataInput['required_performance_standards'] = $requiredPerformanceStandards;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredPerformanceStandards
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredPerformanceStandards(array $modelData): void
            {
                
                    if (!array_key_exists('required_performance_standards', $modelData) && $this->requiredPerformanceStandards === null) {
                        return;
                    }
                

                $value = array_key_exists('required_performance_standards', $modelData) ? $modelData['required_performance_standards'] : $this->requiredPerformanceStandards;

                

                $this->requiredPerformanceStandards = $this->validateRequiredPerformanceStandards($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredPerformanceStandards
             */
            protected function validateRequiredPerformanceStandards($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_performance_standards',
  1 => 'array',
)));
}

                
                    $this->validateRequiredPerformanceStandards_ArrayItem_6480717faf3d608db688476632f179f9($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'required_performance_standards',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_metrics.
                 *
                 * Filter to products whose `reporting_capabilities.available_metrics` is a superset of these metrics — i.e., products that commit to reporting all listed metrics in delivery responses. Use this for capability-level discovery (e.g., 'I need products that report `completed_views` for a CTV CPCV buy'); guarantee-level requirements with thresholds belong in `required_performance_standards` and `measurement_terms`. Sellers MUST silently exclude products that cannot meet this list (filter-not-fail; do not return an error). The product's declared `available_metrics` becomes the binding reporting contract carried into the resulting media buy — the same metric vocabulary is used to compute `missing_metrics` on `get_media_buy_delivery`.
                 * @example ["completed_views"]
                 * @example ["completed_views","completion_rate"]
                 * @example ["impressions","spend","engagements"]
                 *
                 * @return AvailableMetric[]|null
                 */
                public function getRequiredMetrics(): array | AvailableMetric | null
                {
                    

                    return $this->requiredMetrics;
                }
            

            
                /**
                 * Set the value of required_metrics.
                 *
                 * @param string[]|AvailableMetric[]|null $requiredMetrics Filter to products whose `reporting_capabilities.available_metrics` is a superset of these metrics — i.e., products that commit to reporting all listed metrics in delivery responses. Use this for capability-level discovery (e.g., 'I need products that report `completed_views` for a CTV CPCV buy'); guarantee-level requirements with thresholds belong in `required_performance_standards` and `measurement_terms`. Sellers MUST silently exclude products that cannot meet this list (filter-not-fail; do not return an error). The product's declared `available_metrics` becomes the binding reporting contract carried into the resulting media buy — the same metric vocabulary is used to compute `missing_metrics` on `get_media_buy_delivery`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredMetrics(
                    array | AvailableMetric | null $requiredMetrics
                ): static {
                    if ($this->requiredMetrics === $requiredMetrics) {
                        return $this;
                    }

                    $value = $modelData['required_metrics'] = $requiredMetrics;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredMetrics($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredMetrics = $value;
                    $this->_rawModelDataInput['required_metrics'] = $requiredMetrics;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredMetrics
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredMetrics(array $modelData): void
            {
                
                    if (!array_key_exists('required_metrics', $modelData) && $this->requiredMetrics === null) {
                        return;
                    }
                

                $value = array_key_exists('required_metrics', $modelData) ? $modelData['required_metrics'] : $this->requiredMetrics;

                

                $this->requiredMetrics = $this->validateRequiredMetrics($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredMetrics
             */
            protected function validateRequiredMetrics($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_metrics',
  1 => 'array',
)));
}

                
                    $this->validateRequiredMetrics_ArrayItem_b854ce64ca44b665a6986a1ff2121e1d($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'required_metrics',
  1 => 1,
)));
}

                
                    

if (is_array($value) && (static function (array $items): bool {
    if (empty($items)) {
        return false;
    }

    asort($items);
    $lastSeen = array_shift($items);

    foreach ($items as $value) {
        if ($value === $lastSeen) {
            return true;
        }

        $lastSeen = $value;
    }

    return false;
})($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\UniqueItemsException($value ?? null, ...array (
  0 => 'required_metrics',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of required_vendor_metrics.
                 *
                 * Filter to products whose `reporting_capabilities.vendor_metrics` matches these criteria. Each entry pins a `vendor` (matches any metric from that vendor), a `metric_id` (matches the metric across any vendor that uses that identifier), or both (specific vendor's specific metric). A product matches if its declared `vendor_metrics` covers ALL listed entries (AND across entries; pins within an entry are conjunctive). Cross-vendor discovery (e.g., 'I need attention measurement from any vendor that does it') is the buyer agent's responsibility — the agent resolves which vendors offer a category via the vendors' `brand.json` records, then enumerates them as filter entries. AdCP does not carry vendor-side metric metadata (category, methodology, standard alignment) in the filter surface; that lives at the vendor and is queried out-of-band. Sellers MUST silently exclude non-matching products (filter-not-fail; do not return an error) — same convention as the other `required_*` filters.
                 * @example [{"vendor":{"domain":"attentionvendor.example"}}]
                 * @example [{"vendor":{"domain":"panelmeasurement.example"},"metric_id":"demographic_reach"}]
                 * @example [{"vendor":{"domain":"attentionvendor.example"}},{"vendor":{"domain":"secondattentionvendor.example"}}]
                 *
                 * @return GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a[]|null
                 */
                public function getRequiredVendorMetrics(): ?array
                {
                    

                    return $this->requiredVendorMetrics;
                }
            

            
                /**
                 * Set the value of required_vendor_metrics.
                 *
                 * @param GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a[] $requiredVendorMetrics Filter to products whose `reporting_capabilities.vendor_metrics` matches these criteria. Each entry pins a `vendor` (matches any metric from that vendor), a `metric_id` (matches the metric across any vendor that uses that identifier), or both (specific vendor's specific metric). A product matches if its declared `vendor_metrics` covers ALL listed entries (AND across entries; pins within an entry are conjunctive). Cross-vendor discovery (e.g., 'I need attention measurement from any vendor that does it') is the buyer agent's responsibility — the agent resolves which vendors offer a category via the vendors' `brand.json` records, then enumerates them as filter entries. AdCP does not carry vendor-side metric metadata (category, methodology, standard alignment) in the filter surface; that lives at the vendor and is queried out-of-band. Sellers MUST silently exclude non-matching products (filter-not-fail; do not return an error) — same convention as the other `required_*` filters.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRequiredVendorMetrics(
                    array $requiredVendorMetrics
                ): static {
                    if ($this->requiredVendorMetrics === $requiredVendorMetrics) {
                        return $this;
                    }

                    $value = $modelData['required_vendor_metrics'] = $requiredVendorMetrics;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRequiredVendorMetrics($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->requiredVendorMetrics = $value;
                    $this->_rawModelDataInput['required_vendor_metrics'] = $requiredVendorMetrics;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property requiredVendorMetrics
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRequiredVendorMetrics(array $modelData): void
            {
                
                    if (!array_key_exists('required_vendor_metrics', $modelData) && $this->requiredVendorMetrics === null) {
                        return;
                    }
                

                $value = array_key_exists('required_vendor_metrics', $modelData) ? $modelData['required_vendor_metrics'] : $this->requiredVendorMetrics;

                

                $this->requiredVendorMetrics = $this->validateRequiredVendorMetrics($value, $modelData);
            }

            /**
             * Execute all validators for the property requiredVendorMetrics
             */
            protected function validateRequiredVendorMetrics($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'required_vendor_metrics',
  1 => 'array',
)));
}

                
                    $this->validateRequiredVendorMetrics_ArrayItem_9bb3fc974691ef19f01a9647480b8b6f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'required_vendor_metrics',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of keywords.
                 *
                 * Filter by keyword relevance for search and retail media platforms. Returns products that support keyword targeting for these terms. Allows the sell-side agent to assess keyword availability and recommend appropriate products. Use match_type to indicate the desired precision.
                 *
                 * @return GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5[]|null
                 */
                public function getKeywords(): ?array
                {
                    

                    return $this->keywords;
                }
            

            
                /**
                 * Set the value of keywords.
                 *
                 * @param GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5[] $keywords Filter by keyword relevance for search and retail media platforms. Returns products that support keyword targeting for these terms. Allows the sell-side agent to assess keyword availability and recommend appropriate products. Use match_type to indicate the desired precision.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setKeywords(
                    array $keywords
                ): static {
                    if ($this->keywords === $keywords) {
                        return $this;
                    }

                    $value = $modelData['keywords'] = $keywords;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateKeywords($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->keywords = $value;
                    $this->_rawModelDataInput['keywords'] = $keywords;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property keywords
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processKeywords(array $modelData): void
            {
                
                    if (!array_key_exists('keywords', $modelData) && $this->keywords === null) {
                        return;
                    }
                

                $value = array_key_exists('keywords', $modelData) ? $modelData['keywords'] : $this->keywords;

                

                $this->keywords = $this->validateKeywords($value, $modelData);
            }

            /**
             * Execute all validators for the property keywords
             */
            protected function validateKeywords($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'keywords',
  1 => 'array',
)));
}

                
                    $this->validateKeywords_ArrayItem_b5290cf675f56f6770d83364143a0b6e($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'keywords',
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
    

    
        
            if (array_key_exists('delivery_type', $modelData) &&
                $modelData['delivery_type'] !== $this->deliveryType
            ) {
                

                $rollbackValues['deliveryType'] = $this->deliveryType;
                $this->processDeliveryType($modelData);
            }
        
    
        
            if (array_key_exists('exclusivity', $modelData) &&
                $modelData['exclusivity'] !== $this->exclusivity
            ) {
                

                $rollbackValues['exclusivity'] = $this->exclusivity;
                $this->processExclusivity($modelData);
            }
        
    
        
            if (array_key_exists('is_fixed_price', $modelData) &&
                $modelData['is_fixed_price'] !== $this->isFixedPrice
            ) {
                

                $rollbackValues['isFixedPrice'] = $this->isFixedPrice;
                $this->processIsFixedPrice($modelData);
            }
        
    
        
            if (array_key_exists('format_ids', $modelData) &&
                $modelData['format_ids'] !== $this->formatIds
            ) {
                

                $rollbackValues['formatIds'] = $this->formatIds;
                $this->processFormatIds($modelData);
            }
        
    
        
            if (array_key_exists('standard_formats_only', $modelData) &&
                $modelData['standard_formats_only'] !== $this->standardFormatsOnly
            ) {
                

                $rollbackValues['standardFormatsOnly'] = $this->standardFormatsOnly;
                $this->processStandardFormatsOnly($modelData);
            }
        
    
        
            if (array_key_exists('min_exposures', $modelData) &&
                $modelData['min_exposures'] !== $this->minExposures
            ) {
                

                $rollbackValues['minExposures'] = $this->minExposures;
                $this->processMinExposures($modelData);
            }
        
    
        
            if (array_key_exists('start_date', $modelData) &&
                $modelData['start_date'] !== $this->startDate
            ) {
                

                $rollbackValues['startDate'] = $this->startDate;
                $this->processStartDate($modelData);
            }
        
    
        
            if (array_key_exists('end_date', $modelData) &&
                $modelData['end_date'] !== $this->endDate
            ) {
                

                $rollbackValues['endDate'] = $this->endDate;
                $this->processEndDate($modelData);
            }
        
    
        
            if (array_key_exists('budget_range', $modelData) &&
                $modelData['budget_range'] !== $this->budgetRange
            ) {
                

                $rollbackValues['budgetRange'] = $this->budgetRange;
                $this->processBudgetRange($modelData);
            }
        
    
        
            if (array_key_exists('countries', $modelData) &&
                $modelData['countries'] !== $this->countries
            ) {
                

                $rollbackValues['countries'] = $this->countries;
                $this->processCountries($modelData);
            }
        
    
        
            if (array_key_exists('regions', $modelData) &&
                $modelData['regions'] !== $this->regions
            ) {
                

                $rollbackValues['regions'] = $this->regions;
                $this->processRegions($modelData);
            }
        
    
        
            if (array_key_exists('metros', $modelData) &&
                $modelData['metros'] !== $this->metros
            ) {
                

                $rollbackValues['metros'] = $this->metros;
                $this->processMetros($modelData);
            }
        
    
        
            if (array_key_exists('channels', $modelData) &&
                $modelData['channels'] !== $this->channels
            ) {
                

                $rollbackValues['channels'] = $this->channels;
                $this->processChannels($modelData);
            }
        
    
        
            if (array_key_exists('required_axe_integrations', $modelData) &&
                $modelData['required_axe_integrations'] !== $this->requiredAxeIntegrations
            ) {
                

                $rollbackValues['requiredAxeIntegrations'] = $this->requiredAxeIntegrations;
                $this->processRequiredAxeIntegrations($modelData);
            }
        
    
        
            if (array_key_exists('trusted_match', $modelData) &&
                $modelData['trusted_match'] !== $this->trustedMatch
            ) {
                

                $rollbackValues['trustedMatch'] = $this->trustedMatch;
                $this->processTrustedMatch($modelData);
            }
        
    
        
            if (array_key_exists('required_features', $modelData) &&
                $modelData['required_features'] !== $this->requiredFeatures
            ) {
                

                $rollbackValues['requiredFeatures'] = $this->requiredFeatures;
                $this->processRequiredFeatures($modelData);
            }
        
    
        
            if (array_key_exists('required_geo_targeting', $modelData) &&
                $modelData['required_geo_targeting'] !== $this->requiredGeoTargeting
            ) {
                

                $rollbackValues['requiredGeoTargeting'] = $this->requiredGeoTargeting;
                $this->processRequiredGeoTargeting($modelData);
            }
        
    
        
            if (array_key_exists('signal_targeting', $modelData) &&
                $modelData['signal_targeting'] !== $this->signalTargeting
            ) {
                

                $rollbackValues['signalTargeting'] = $this->signalTargeting;
                $this->processSignalTargeting($modelData);
            }
        
    
        
            if (array_key_exists('postal_areas', $modelData) &&
                $modelData['postal_areas'] !== $this->postalAreas
            ) {
                

                $rollbackValues['postalAreas'] = $this->postalAreas;
                $this->processPostalAreas($modelData);
            }
        
    
        
            if (array_key_exists('geo_proximity', $modelData) &&
                $modelData['geo_proximity'] !== $this->geoProximity
            ) {
                

                $rollbackValues['geoProximity'] = $this->geoProximity;
                $this->processGeoProximity($modelData);
            }
        
    
        
            if (array_key_exists('required_performance_standards', $modelData) &&
                $modelData['required_performance_standards'] !== $this->requiredPerformanceStandards
            ) {
                

                $rollbackValues['requiredPerformanceStandards'] = $this->requiredPerformanceStandards;
                $this->processRequiredPerformanceStandards($modelData);
            }
        
    
        
            if (array_key_exists('required_metrics', $modelData) &&
                $modelData['required_metrics'] !== $this->requiredMetrics
            ) {
                

                $rollbackValues['requiredMetrics'] = $this->requiredMetrics;
                $this->processRequiredMetrics($modelData);
            }
        
    
        
            if (array_key_exists('required_vendor_metrics', $modelData) &&
                $modelData['required_vendor_metrics'] !== $this->requiredVendorMetrics
            ) {
                

                $rollbackValues['requiredVendorMetrics'] = $this->requiredVendorMetrics;
                $this->processRequiredVendorMetrics($modelData);
            }
        
    
        
            if (array_key_exists('keywords', $modelData) &&
                $modelData['keywords'] !== $this->keywords
            ) {
                

                $rollbackValues['keywords'] = $this->keywords;
                $this->processKeywords($modelData);
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


/**
 * serialize the property deliveryType
 */
protected function serializeDeliveryType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->deliveryType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DeliveryType',
));
}


/**
 * serialize the property exclusivity
 */
protected function serializeExclusivity()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->exclusivity, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\Exclusivity',
));
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


private function validateFormatIds_ArrayItem_30caaabe5584100fd91c07b8c46acd18(&$value, $modelData): void {
                    $invalidItems_cfeb67a2bca9e6820d978ece6ea045de = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_cfeb67a2bca9e6820d978ece6ea045de, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_FormatReferenceStructuredObject($value) : $value;
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
  0 => 'item of array format_ids',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_FormatReferenceStructuredObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array format_ids',
  1 => 'GetProductsRequest_FormatReferenceStructuredObject',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_cfeb67a2bca9e6820d978ece6ea045de[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_cfeb67a2bca9e6820d978ece6ea045de[$index])
                ? $invalidItems_cfeb67a2bca9e6820d978ece6ea045de[$index][] = $e
                : $invalidItems_cfeb67a2bca9e6820d978ece6ea045de[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_cfeb67a2bca9e6820d978ece6ea045de);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'format_ids',
  1 => $invalidItems_cfeb67a2bca9e6820d978ece6ea045de,
)));
                    }
                }

private function validateCountries_ArrayItem_9df587c8f2e7d9a521b81d9018c9ec8c(&$value, $modelData): void {
                    $invalidItems_a7858466597392c2ccc66df697536a23 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_a7858466597392c2ccc66df697536a23, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array countries',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array countries',
  1 => '^[A-Z]{2}$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_a7858466597392c2ccc66df697536a23[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_a7858466597392c2ccc66df697536a23[$index])
                ? $invalidItems_a7858466597392c2ccc66df697536a23[$index][] = $e
                : $invalidItems_a7858466597392c2ccc66df697536a23[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_a7858466597392c2ccc66df697536a23);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'countries',
  1 => $invalidItems_a7858466597392c2ccc66df697536a23,
)));
                    }
                }

private function validateRegions_ArrayItem_dd8f52e8a1c55d7ff031e4e012c975ee(&$value, $modelData): void {
                    $invalidItems_fa2c38a1f2f436364cf933fa38397ba5 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_fa2c38a1f2f436364cf933fa38397ba5, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array regions',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXsyfS1bQS1aMC05XSskLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array regions',
  1 => '^[A-Z]{2}-[A-Z0-9]+$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_fa2c38a1f2f436364cf933fa38397ba5[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_fa2c38a1f2f436364cf933fa38397ba5[$index])
                ? $invalidItems_fa2c38a1f2f436364cf933fa38397ba5[$index][] = $e
                : $invalidItems_fa2c38a1f2f436364cf933fa38397ba5[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_fa2c38a1f2f436364cf933fa38397ba5);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'regions',
  1 => $invalidItems_fa2c38a1f2f436364cf933fa38397ba5,
)));
                    }
                }

private function validateMetros_ArrayItem_1f0c007315608bb4f82fa1e03aaa8052(&$value, $modelData): void {
                    $invalidItems_20532ec6f7d8dc8287aaf578018d906a = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_20532ec6f7d8dc8287aaf578018d906a, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf($value) : $value;
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
  0 => 'item of array metros',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array metros',
  1 => 'GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_20532ec6f7d8dc8287aaf578018d906a[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_20532ec6f7d8dc8287aaf578018d906a[$index])
                ? $invalidItems_20532ec6f7d8dc8287aaf578018d906a[$index][] = $e
                : $invalidItems_20532ec6f7d8dc8287aaf578018d906a[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_20532ec6f7d8dc8287aaf578018d906a);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'metros',
  1 => $invalidItems_20532ec6f7d8dc8287aaf578018d906a,
)));
                    }
                }

private function validateChannels_ArrayItem_066876107ce853e417e91492e5730f80(&$value, $modelData): void {
                    $invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof MediaChannel)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array channels',
  1 => 'MediaChannel',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array channels',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'display',
   'olv',
   'social',
   'search',
   'ctv',
   'linear_tv',
   'radio',
   'streaming_audio',
   'podcast',
   'dooh',
   'ooh',
   'print',
   'cinema',
   'email',
   'gaming',
   'retail_media',
   'influencer',
   'affiliate',
   'product_placement',
   'sponsored_intelligence',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array channels',
  1 => 
  array (
    0 => 'display',
    1 => 'olv',
    2 => 'social',
    3 => 'search',
    4 => 'ctv',
    5 => 'linear_tv',
    6 => 'radio',
    7 => 'streaming_audio',
    8 => 'podcast',
    9 => 'dooh',
    10 => 'ooh',
    11 => 'print',
    12 => 'cinema',
    13 => 'email',
    14 => 'gaming',
    15 => 'retail_media',
    16 => 'influencer',
    17 => 'affiliate',
    18 => 'product_placement',
    19 => 'sponsored_intelligence',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaChannel',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array channels',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array channels',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f[$index])
                ? $invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f[$index][] = $e
                : $invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'channels',
  1 => $invalidItems_1ce8d88a069c14b1c2b1cd859e6b707f,
)));
                    }
                }

private function validateRequiredAxeIntegrations_ArrayItem_a6356488b3850f53a0ac83807d5ae659(&$value, $modelData): void {
                    $invalidItems_1f2e7b0107feea07986af0477de4b7da = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_1f2e7b0107feea07986af0477de4b7da, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array required_axe_integrations',
  1 => 'string',
)));
}

            
                

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'item of array required_axe_integrations',
  1 => 'uri',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_1f2e7b0107feea07986af0477de4b7da[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_1f2e7b0107feea07986af0477de4b7da[$index])
                ? $invalidItems_1f2e7b0107feea07986af0477de4b7da[$index][] = $e
                : $invalidItems_1f2e7b0107feea07986af0477de4b7da[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_1f2e7b0107feea07986af0477de4b7da);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_axe_integrations',
  1 => $invalidItems_1f2e7b0107feea07986af0477de4b7da,
)));
                    }
                }

private function validateRequiredGeoTargeting_ArrayItem_d20c47dc07905cf2feaddf20f6b3a345(&$value, $modelData): void {
                    $invalidItems_3ef72c3a8a64be403861942b69ac8ff5 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_3ef72c3a8a64be403861942b69ac8ff5, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b($value) : $value;
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
  0 => 'item of array required_geo_targeting',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array required_geo_targeting',
  1 => 'GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_3ef72c3a8a64be403861942b69ac8ff5[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_3ef72c3a8a64be403861942b69ac8ff5[$index])
                ? $invalidItems_3ef72c3a8a64be403861942b69ac8ff5[$index][] = $e
                : $invalidItems_3ef72c3a8a64be403861942b69ac8ff5[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_3ef72c3a8a64be403861942b69ac8ff5);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_geo_targeting',
  1 => $invalidItems_3ef72c3a8a64be403861942b69ac8ff5,
)));
                    }
                }

private function validateSignalTargeting_ArrayItem_9972a22288525263bacbbd434fb7c160(&$value, $modelData): void {
                    $invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                $this->validateItemOfArraySignalTargeting_ComposedProperty_43087587ed9b388cb35f9e8355353308($value, $modelData);
            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579[$index])
                ? $invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579[$index][] = $e
                : $invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'signal_targeting',
  1 => $invalidItems_38e35f6956c7aeb25d1ea6dbb3a7b579,
)));
                    }
                }

private function validatePostalAreas_ArrayItem_1faf6027fcd41cff303e358d0ce3d391(&$value, $modelData): void {
                    $invalidItems_1bd55ff5a1639fab66728f8abc743f39 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_1bd55ff5a1639fab66728f8abc743f39, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584($value) : $value;
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
  0 => 'item of array postal_areas',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array postal_areas',
  1 => 'GetProductsRequest_ItemOfArrayPostal_Areasa566d26eff316395a41e4b7961048584',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_1bd55ff5a1639fab66728f8abc743f39[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_1bd55ff5a1639fab66728f8abc743f39[$index])
                ? $invalidItems_1bd55ff5a1639fab66728f8abc743f39[$index][] = $e
                : $invalidItems_1bd55ff5a1639fab66728f8abc743f39[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_1bd55ff5a1639fab66728f8abc743f39);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'postal_areas',
  1 => $invalidItems_1bd55ff5a1639fab66728f8abc743f39,
)));
                    }
                }

private function validateGeoProximity_ArrayItem_48b135ffebeecb8b94a2ce311864c00b(&$value, $modelData): void {
                    $invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_c69ab1d3f4b36b0c6de4ce357a4c102e, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db($value) : $value;
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

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array geo_proximity',
  1 => 'GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db',
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

private function validateRequiredPerformanceStandards_ArrayItem_6480717faf3d608db688476632f179f9(&$value, $modelData): void {
                    $invalidItems_d93e277cd47c0800191e633a3ea58e21 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_d93e277cd47c0800191e633a3ea58e21, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_PerformanceStandard($value) : $value;
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
  0 => 'item of array required_performance_standards',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_PerformanceStandard)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array required_performance_standards',
  1 => 'GetProductsRequest_PerformanceStandard',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_d93e277cd47c0800191e633a3ea58e21[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_d93e277cd47c0800191e633a3ea58e21[$index])
                ? $invalidItems_d93e277cd47c0800191e633a3ea58e21[$index][] = $e
                : $invalidItems_d93e277cd47c0800191e633a3ea58e21[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_d93e277cd47c0800191e633a3ea58e21);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_performance_standards',
  1 => $invalidItems_d93e277cd47c0800191e633a3ea58e21,
)));
                    }
                }

private function validateRequiredMetrics_ArrayItem_b854ce64ca44b665a6986a1ff2121e1d(&$value, $modelData): void {
                    $invalidItems_2f8cfc94cfd488940f30fb57da664346 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_2f8cfc94cfd488940f30fb57da664346, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof AvailableMetric)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array required_metrics',
  1 => 'AvailableMetric',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array required_metrics',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'impressions',
   'spend',
   'clicks',
   'ctr',
   'views',
   'completed_views',
   'completion_rate',
   'conversions',
   'conversion_value',
   'roas',
   'cost_per_acquisition',
   'new_to_brand_rate',
   'leads',
   'reach',
   'frequency',
   'grps',
   'engagements',
   'engagement_rate',
   'follows',
   'saves',
   'profile_visits',
   'viewability',
   'quartile_data',
   'dooh_metrics',
   'cost_per_click',
   'cost_per_completed_view',
   'cpm',
   'downloads',
   'units_sold',
   'new_to_brand_units',
   'plays',
   'incremental_sales_lift',
   'brand_lift',
   'foot_traffic',
   'conversion_lift',
   'brand_search_lift',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array required_metrics',
  1 => 
  array (
    0 => 'impressions',
    1 => 'spend',
    2 => 'clicks',
    3 => 'ctr',
    4 => 'views',
    5 => 'completed_views',
    6 => 'completion_rate',
    7 => 'conversions',
    8 => 'conversion_value',
    9 => 'roas',
    10 => 'cost_per_acquisition',
    11 => 'new_to_brand_rate',
    12 => 'leads',
    13 => 'reach',
    14 => 'frequency',
    15 => 'grps',
    16 => 'engagements',
    17 => 'engagement_rate',
    18 => 'follows',
    19 => 'saves',
    20 => 'profile_visits',
    21 => 'viewability',
    22 => 'quartile_data',
    23 => 'dooh_metrics',
    24 => 'cost_per_click',
    25 => 'cost_per_completed_view',
    26 => 'cpm',
    27 => 'downloads',
    28 => 'units_sold',
    29 => 'new_to_brand_units',
    30 => 'plays',
    31 => 'incremental_sales_lift',
    32 => 'brand_lift',
    33 => 'foot_traffic',
    34 => 'conversion_lift',
    35 => 'brand_search_lift',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AvailableMetric',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array required_metrics',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array required_metrics',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_2f8cfc94cfd488940f30fb57da664346[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_2f8cfc94cfd488940f30fb57da664346[$index])
                ? $invalidItems_2f8cfc94cfd488940f30fb57da664346[$index][] = $e
                : $invalidItems_2f8cfc94cfd488940f30fb57da664346[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_2f8cfc94cfd488940f30fb57da664346);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_metrics',
  1 => $invalidItems_2f8cfc94cfd488940f30fb57da664346,
)));
                    }
                }

private function validateRequiredVendorMetrics_ArrayItem_9bb3fc974691ef19f01a9647480b8b6f(&$value, $modelData): void {
                    $invalidItems_9997d95b33dc2af13760de2a2fe95146 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_9997d95b33dc2af13760de2a2fe95146, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a($value) : $value;
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
  0 => 'item of array required_vendor_metrics',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array required_vendor_metrics',
  1 => 'GetProductsRequest_ItemOfArrayRequired_Vendor_Metricscaaf7132b47c1cf0d914ce3e52aa011a',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_9997d95b33dc2af13760de2a2fe95146[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_9997d95b33dc2af13760de2a2fe95146[$index])
                ? $invalidItems_9997d95b33dc2af13760de2a2fe95146[$index][] = $e
                : $invalidItems_9997d95b33dc2af13760de2a2fe95146[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_9997d95b33dc2af13760de2a2fe95146);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'required_vendor_metrics',
  1 => $invalidItems_9997d95b33dc2af13760de2a2fe95146,
)));
                    }
                }

private function validateKeywords_ArrayItem_b5290cf675f56f6770d83364143a0b6e(&$value, $modelData): void {
                    $invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5($value) : $value;
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
  0 => 'item of array keywords',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array keywords',
  1 => 'GetProductsRequest_ItemOfArrayKeywords59f003c5a6f57cf899b79e85aa512ac5',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140[$index])
                ? $invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140[$index][] = $e
                : $invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'keywords',
  1 => $invalidItems_fc2b44ce91aae1f0a9e3a5b87b872140,
)));
                    }
                }

private function validateItemOfArraySignalTargeting_ComposedProperty_43087587ed9b388cb35f9e8355353308(&$value, $modelData): void {
                    
            $succeededCompositionElements = 0;
            $compositionErrorCollection = [];
        
                    
                    if (
(function (&$value) use (
    &$modelData,
    &$modifiedModelData,
    &$compositionErrorCollection,
    &$succeededCompositionElements,
    &$validatorIndex
) {
    $succeededCompositionElements = 3;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef($value) : $value;
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
  0 => 'item of array signal_targeting',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array signal_targeting',
  1 => 'GetProductsRequest_ItemOfArraySignal_Targeting7482d73a2474263aef0607131830a9ef',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f92e2($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a($value) : $value;
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
  0 => 'item of array signal_targeting',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array signal_targeting',
  1 => 'GetProductsRequest_ItemOfArraySignal_Targetingadfc121dcfabbb642153271b4a89929a',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f92e2($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a($value) : $value;
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
  0 => 'item of array signal_targeting',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array signal_targeting',
  1 => 'GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f92e2($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'item of array signal_targeting',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_f92e2(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'additionalProperties',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'additionalProperties',
  3 => 'skipNotProvidedPropertiesMap',
  4 => 'additionalProperties',
  5 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'signal_id' => 'getSignalId',
  'value_type' => 'getValueType',
  'value' => 'getValue',
  'additionalProperties' => 'get_additionalProperties',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'values' => 'getValues',
  'min_value' => 'getMinValue',
  'max_value' => 'getMaxValue',
) as $key => $accessor) {
                                if ((isset($originalModelData[$key]) || in_array($key, $defaultValueMap))
                                    && method_exists($nestedCompositionObject, $accessor)
                                    && ($modifiedValue = $nestedCompositionObject->$accessor())
                                        !== ($originalModelData[$key] ?? !$modifiedValue)
                                ) {
                                    $modifiedValues[$key] = $modifiedValue;
                                }
                            }
    
                            return $modifiedValues;
                        }


}

// @codeCoverageIgnoreEnd
