<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\ReportingFrequency;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\AttributionModel;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryRequest_DurationUnit;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use AdCP\MediaBuy\Enums\SortMetric;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use AdCP\MediaBuy\Enums\PostalCodeSystem;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryRequest
 * @package AdCP\MediaBuy 
 *
 * Request parameters for retrieving comprehensive delivery metrics
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('')]

class GetMediaBuyDeliveryRequest implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account')]
        
            #[SchemaName('account')]
        
        /** @var GetMediaBuyDeliveryRequest_AccountReference|null Filter delivery data to a specific account. When omitted, returns data across all accessible accounts. */
        protected $account;
    
        
            #[JsonPointer('/properties/media_buy_ids')]
        
            #[SchemaName('media_buy_ids')]
        
        /** @var string[]|null Array of media buy IDs to get delivery data for */
        protected $mediaBuyIds;
    
        
            #[JsonPointer('/properties/status_filter')]
        
            #[SchemaName('status_filter')]
        
        /** @var MediaBuyStatus|MediaBuyStatus[]|null Filter by status. Can be a single status or array of statuses */
        protected $statusFilter;
    
        
            #[JsonPointer('/properties/start_date')]
        
            #[SchemaName('start_date')]
        
        /** @var string|null Start date for reporting period (YYYY-MM-DD). When omitted along with end_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'. */
        protected $startDate;
    
        
            #[JsonPointer('/properties/end_date')]
        
            #[SchemaName('end_date')]
        
        /** @var string|null End date for reporting period (YYYY-MM-DD). When omitted along with start_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'. */
        protected $endDate;
    
        
            #[JsonPointer('/properties/include_package_daily_breakdown')]
        
            #[SchemaName('include_package_daily_breakdown')]
        
        /** @var bool When true, include daily_breakdown arrays within each package in by_package. Useful for per-package pacing analysis and line-item monitoring. Omit or set false to reduce response size — package daily data can be large for multi-package buys over long flights. */
        protected $includePackageDailyBreakdown = false;
    
        
            #[JsonPointer('/properties/time_granularity')]
        
            #[SchemaName('time_granularity')]
        
        /** @var ReportingFrequency|null Per-window slice granularity for the pull, using the same vocabulary as reporting_webhook.reporting_frequency. When set, the seller returns per-window delivery slices over the date range — useful for reconstructing data a buyer's webhook receiver missed, since the slice payload is shape-aligned with what reporting_webhook would have delivered for the same window. Capability-scoped: the value MUST be one of the seller's declared reporting_capabilities.windowed_pull_granularities; otherwise the seller MUST return UNSUPPORTED_GRANULARITY. When omitted, behavior is unchanged (cumulative aggregates plus optional daily breakdowns per existing fields). */
        protected $timeGranularity;
    
        
            #[JsonPointer('/properties/include_window_breakdown')]
        
            #[SchemaName('include_window_breakdown')]
        
        /** @var bool When true, the response includes media_buy_deliveries[].windows[] — an array of per-window delivery slices over the date range at the requested time_granularity. Ignored when time_granularity is omitted. Each window's payload mirrors what reporting_webhook would have delivered for the same window, enabling lossless GET-path recovery for buyers who missed webhook fires. Omit or set false to reduce response size when only cumulative aggregates are needed. */
        protected $includeWindowBreakdown = false;
    
        
            #[JsonPointer('/properties/attribution_window')]
        
            #[SchemaName('attribution_window')]
        
        /** @var GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0|null Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options. */
        protected $attributionWindow;
    
        
            #[JsonPointer('/properties/reporting_dimensions')]
        
            #[SchemaName('reporting_dimensions')]
        
        /** @var GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb|null Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object. */
        protected $reportingDimensions;
    
        
            #[JsonPointer('/properties/context')]
        
            #[SchemaName('context')]
        
        /** @var GetMediaBuyDeliveryRequest_ExtensionObject|null Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned. */
        protected $context;
    
        
            #[JsonPointer('/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuyDeliveryRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_version')]
        
            #[SchemaName('adcp_version')]
        
        /** @var string|null Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values. */
        protected $adcpVersion;
    
        
            #[JsonPointer('/allOf/0/properties/adcp_major_version')]
        
            #[SchemaName('adcp_major_version')]
        
        /** @var int|null DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version. */
        protected $adcpMajorVersion;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'account',
  1 => 'media_buy_ids',
  2 => 'status_filter',
  3 => 'start_date',
  4 => 'end_date',
  6 => 'time_granularity',
  8 => 'attribution_window',
  9 => 'reporting_dimensions',
  10 => 'context',
  11 => 'ext',
  12 => 'adcp_version',
  13 => 'adcp_major_version',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuyDeliveryRequest constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAccount($rawModelDataInput);
            
        
            
                $this->processMediaBuyIds($rawModelDataInput);
            
        
            
                $this->processStatusFilter($rawModelDataInput);
            
        
            
                $this->processStartDate($rawModelDataInput);
            
        
            
                $this->processEndDate($rawModelDataInput);
            
        
            
                $this->processIncludePackageDailyBreakdown($rawModelDataInput);
            
        
            
                $this->processTimeGranularity($rawModelDataInput);
            
        
            
                $this->processIncludeWindowBreakdown($rawModelDataInput);
            
        
            
                $this->processAttributionWindow($rawModelDataInput);
            
        
            
                $this->processReportingDimensions($rawModelDataInput);
            
        
            
                $this->processContext($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
                $this->processAdcpVersion($rawModelDataInput);
            
        
            
                $this->processAdcpMajorVersion($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'account',
   'media_buy_ids',
   'status_filter',
   'start_date',
   'end_date',
   'include_package_daily_breakdown',
   'time_granularity',
   'include_window_breakdown',
   'attribution_window',
   'reporting_dimensions',
   'context',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest',
)));
}

            

            
                $this->validateComposition_0($modelData);
            
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
                 * Get the value of account.
                 *
                 * Filter delivery data to a specific account. When omitted, returns data across all accessible accounts.
                 * @example {"account_id":"acc_acme_001"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com"}
                 * @example {"brand":{"domain":"nova-brands.com","brand_id":"spark"},"operator":"pinnacle-media.com"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com","sandbox":true}
                 *
                 * @return GetMediaBuyDeliveryRequest_AccountReference|null
                 */
                public function getAccount(): ?GetMediaBuyDeliveryRequest_AccountReference
                {
                    

                    return $this->account;
                }
            

            
                /**
                 * Set the value of account.
                 *
                 * @param GetMediaBuyDeliveryRequest_AccountReference $account Filter delivery data to a specific account. When omitted, returns data across all accessible accounts.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccount(
                    GetMediaBuyDeliveryRequest_AccountReference $account
                ): static {
                    if ($this->account === $account) {
                        return $this;
                    }

                    $value = $modelData['account'] = $account;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateAccount($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->account = $value;
                    $this->_rawModelDataInput['account'] = $account;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property account
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccount(array $modelData): void
            {
                
                    if (!array_key_exists('account', $modelData) && $this->account === null) {
                        return;
                    }
                

                $value = array_key_exists('account', $modelData) ? $modelData['account'] : $this->account;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_AccountReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'account',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->account = $this->validateAccount($value, $modelData);
            }

            /**
             * Execute all validators for the property account
             */
            protected function validateAccount($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'account',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_AccountReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'account',
  1 => 'GetMediaBuyDeliveryRequest_AccountReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of media_buy_ids.
                 *
                 * Array of media buy IDs to get delivery data for
                 *
                 * @return string[]|null
                 */
                public function getMediaBuyIds(): ?array
                {
                    

                    return $this->mediaBuyIds;
                }
            

            
                /**
                 * Set the value of media_buy_ids.
                 *
                 * @param string[] $mediaBuyIds Array of media buy IDs to get delivery data for
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMediaBuyIds(
                    array $mediaBuyIds
                ): static {
                    if ($this->mediaBuyIds === $mediaBuyIds) {
                        return $this;
                    }

                    $value = $modelData['media_buy_ids'] = $mediaBuyIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateMediaBuyIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->mediaBuyIds = $value;
                    $this->_rawModelDataInput['media_buy_ids'] = $mediaBuyIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mediaBuyIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMediaBuyIds(array $modelData): void
            {
                
                    if (!array_key_exists('media_buy_ids', $modelData) && $this->mediaBuyIds === null) {
                        return;
                    }
                

                $value = array_key_exists('media_buy_ids', $modelData) ? $modelData['media_buy_ids'] : $this->mediaBuyIds;

                

                $this->mediaBuyIds = $this->validateMediaBuyIds($value, $modelData);
            }

            /**
             * Execute all validators for the property mediaBuyIds
             */
            protected function validateMediaBuyIds($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'media_buy_ids',
  1 => 'array',
)));
}

                
                    $this->validateMediaBuyIds_ArrayItem_14858ab4a0a6aed437542fed187fc21b($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'media_buy_ids',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of status_filter.
                 *
                 * Filter by status. Can be a single status or array of statuses
                 *
                 * @return MediaBuyStatus|MediaBuyStatus[]|null
                 */
                public function getStatusFilter(): string | array | MediaBuyStatus | null
                {
                    

                    return $this->statusFilter;
                }
            

            
                /**
                 * Set the value of status_filter.
                 *
                 * @param string|MediaBuyStatus|string[]|MediaBuyStatus[]|null $statusFilter Filter by status. Can be a single status or array of statuses
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStatusFilter(
                    string | array | MediaBuyStatus | null $statusFilter
                ): static {
                    if ($this->statusFilter === $statusFilter) {
                        return $this;
                    }

                    $value = $modelData['status_filter'] = $statusFilter;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateStatusFilter($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->statusFilter = $value;
                    $this->_rawModelDataInput['status_filter'] = $statusFilter;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property statusFilter
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStatusFilter(array $modelData): void
            {
                
                    if (!array_key_exists('status_filter', $modelData) && $this->statusFilter === null) {
                        return;
                    }
                

                $value = array_key_exists('status_filter', $modelData) ? $modelData['status_filter'] : $this->statusFilter;

                

                $this->statusFilter = $this->validateStatusFilter($value, $modelData);
            }

            /**
             * Execute all validators for the property statusFilter
             */
            protected function validateStatusFilter($value, array $modelData)
            {
                
                    $this->validateStatusFilter_ComposedProperty_a4a91974e7254935ab04854238c44715($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of start_date.
                 *
                 * Start date for reporting period (YYYY-MM-DD). When omitted along with end_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
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
                 * @param string $startDate Start date for reporting period (YYYY-MM-DD). When omitted along with end_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
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

                
                    

if (is_string($value) && !preg_match(base64_decode('L15cZHs0fS1cZHsyfS1cZHsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'start_date',
  1 => '^\\d{4}-\\d{2}-\\d{2}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of end_date.
                 *
                 * End date for reporting period (YYYY-MM-DD). When omitted along with start_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
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
                 * @param string $endDate End date for reporting period (YYYY-MM-DD). When omitted along with start_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
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

                
                    

if (is_string($value) && !preg_match(base64_decode('L15cZHs0fS1cZHsyfS1cZHsyfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'end_date',
  1 => '^\\d{4}-\\d{2}-\\d{2}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of include_package_daily_breakdown.
                 *
                 * When true, include daily_breakdown arrays within each package in by_package. Useful for per-package pacing analysis and line-item monitoring. Omit or set false to reduce response size — package daily data can be large for multi-package buys over long flights.
                 *
                 * @return bool
                 */
                public function getIncludePackageDailyBreakdown(): bool
                {
                    

                    return $this->includePackageDailyBreakdown;
                }
            

            
                /**
                 * Set the value of include_package_daily_breakdown.
                 *
                 * @param bool $includePackageDailyBreakdown When true, include daily_breakdown arrays within each package in by_package. Useful for per-package pacing analysis and line-item monitoring. Omit or set false to reduce response size — package daily data can be large for multi-package buys over long flights.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIncludePackageDailyBreakdown(
                    bool $includePackageDailyBreakdown
                ): static {
                    if ($this->includePackageDailyBreakdown === $includePackageDailyBreakdown) {
                        return $this;
                    }

                    $value = $modelData['include_package_daily_breakdown'] = $includePackageDailyBreakdown;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIncludePackageDailyBreakdown($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->includePackageDailyBreakdown = $value;
                    $this->_rawModelDataInput['include_package_daily_breakdown'] = $includePackageDailyBreakdown;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property includePackageDailyBreakdown
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIncludePackageDailyBreakdown(array $modelData): void
            {
                
                    if (!array_key_exists('include_package_daily_breakdown', $modelData) && $this->includePackageDailyBreakdown === null) {
                        return;
                    }
                

                $value = array_key_exists('include_package_daily_breakdown', $modelData) ? $modelData['include_package_daily_breakdown'] : $this->includePackageDailyBreakdown;

                

                $this->includePackageDailyBreakdown = $this->validateIncludePackageDailyBreakdown($value, $modelData);
            }

            /**
             * Execute all validators for the property includePackageDailyBreakdown
             */
            protected function validateIncludePackageDailyBreakdown($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'include_package_daily_breakdown',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of time_granularity.
                 *
                 * Per-window slice granularity for the pull, using the same vocabulary as reporting_webhook.reporting_frequency. When set, the seller returns per-window delivery slices over the date range — useful for reconstructing data a buyer's webhook receiver missed, since the slice payload is shape-aligned with what reporting_webhook would have delivered for the same window. Capability-scoped: the value MUST be one of the seller's declared reporting_capabilities.windowed_pull_granularities; otherwise the seller MUST return UNSUPPORTED_GRANULARITY. When omitted, behavior is unchanged (cumulative aggregates plus optional daily breakdowns per existing fields).
                 *
                 * @return ReportingFrequency|null
                 */
                public function getTimeGranularity(): ?ReportingFrequency
                {
                    

                    return $this->timeGranularity;
                }
            

            
                /**
                 * Set the value of time_granularity.
                 *
                 * @param string|ReportingFrequency|null $timeGranularity Per-window slice granularity for the pull, using the same vocabulary as reporting_webhook.reporting_frequency. When set, the seller returns per-window delivery slices over the date range — useful for reconstructing data a buyer's webhook receiver missed, since the slice payload is shape-aligned with what reporting_webhook would have delivered for the same window. Capability-scoped: the value MUST be one of the seller's declared reporting_capabilities.windowed_pull_granularities; otherwise the seller MUST return UNSUPPORTED_GRANULARITY. When omitted, behavior is unchanged (cumulative aggregates plus optional daily breakdowns per existing fields).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTimeGranularity(
                    string | ReportingFrequency | null $timeGranularity
                ): static {
                    if ($this->timeGranularity === $timeGranularity) {
                        return $this;
                    }

                    $value = $modelData['time_granularity'] = $timeGranularity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateTimeGranularity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->timeGranularity = $value;
                    $this->_rawModelDataInput['time_granularity'] = $timeGranularity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property timeGranularity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTimeGranularity(array $modelData): void
            {
                
                    if (!array_key_exists('time_granularity', $modelData) && $this->timeGranularity === null) {
                        return;
                    }
                

                $value = array_key_exists('time_granularity', $modelData) ? $modelData['time_granularity'] : $this->timeGranularity;

                

                $this->timeGranularity = $this->validateTimeGranularity($value, $modelData);
            }

            /**
             * Execute all validators for the property timeGranularity
             */
            protected function validateTimeGranularity($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ReportingFrequency)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'time_granularity',
  1 => 'ReportingFrequency',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'time_granularity',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'hourly',
   'daily',
   'monthly',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'time_granularity',
  1 => 
  array (
    0 => 'hourly',
    1 => 'daily',
    2 => 'monthly',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ReportingFrequency',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'time_granularity',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'time_granularity',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of include_window_breakdown.
                 *
                 * When true, the response includes media_buy_deliveries[].windows[] — an array of per-window delivery slices over the date range at the requested time_granularity. Ignored when time_granularity is omitted. Each window's payload mirrors what reporting_webhook would have delivered for the same window, enabling lossless GET-path recovery for buyers who missed webhook fires. Omit or set false to reduce response size when only cumulative aggregates are needed.
                 *
                 * @return bool
                 */
                public function getIncludeWindowBreakdown(): bool
                {
                    

                    return $this->includeWindowBreakdown;
                }
            

            
                /**
                 * Set the value of include_window_breakdown.
                 *
                 * @param bool $includeWindowBreakdown When true, the response includes media_buy_deliveries[].windows[] — an array of per-window delivery slices over the date range at the requested time_granularity. Ignored when time_granularity is omitted. Each window's payload mirrors what reporting_webhook would have delivered for the same window, enabling lossless GET-path recovery for buyers who missed webhook fires. Omit or set false to reduce response size when only cumulative aggregates are needed.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIncludeWindowBreakdown(
                    bool $includeWindowBreakdown
                ): static {
                    if ($this->includeWindowBreakdown === $includeWindowBreakdown) {
                        return $this;
                    }

                    $value = $modelData['include_window_breakdown'] = $includeWindowBreakdown;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIncludeWindowBreakdown($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->includeWindowBreakdown = $value;
                    $this->_rawModelDataInput['include_window_breakdown'] = $includeWindowBreakdown;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property includeWindowBreakdown
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIncludeWindowBreakdown(array $modelData): void
            {
                
                    if (!array_key_exists('include_window_breakdown', $modelData) && $this->includeWindowBreakdown === null) {
                        return;
                    }
                

                $value = array_key_exists('include_window_breakdown', $modelData) ? $modelData['include_window_breakdown'] : $this->includeWindowBreakdown;

                

                $this->includeWindowBreakdown = $this->validateIncludeWindowBreakdown($value, $modelData);
            }

            /**
             * Execute all validators for the property includeWindowBreakdown
             */
            protected function validateIncludeWindowBreakdown($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'include_window_breakdown',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of attribution_window.
                 *
                 * Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options.
                 *
                 * @return GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0|null
                 */
                public function getAttributionWindow(): ?GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0
                {
                    

                    return $this->attributionWindow;
                }
            

            
                /**
                 * Set the value of attribution_window.
                 *
                 * @param GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0 $attributionWindow Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAttributionWindow(
                    GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0 $attributionWindow
                ): static {
                    if ($this->attributionWindow === $attributionWindow) {
                        return $this;
                    }

                    $value = $modelData['attribution_window'] = $attributionWindow;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateAttributionWindow($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->attributionWindow = $value;
                    $this->_rawModelDataInput['attribution_window'] = $attributionWindow;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property attributionWindow
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAttributionWindow(array $modelData): void
            {
                
                    if (!array_key_exists('attribution_window', $modelData) && $this->attributionWindow === null) {
                        return;
                    }
                

                $value = array_key_exists('attribution_window', $modelData) ? $modelData['attribution_window'] : $this->attributionWindow;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->attributionWindow = $this->validateAttributionWindow($value, $modelData);
            }

            /**
             * Execute all validators for the property attributionWindow
             */
            protected function validateAttributionWindow($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'attribution_window',
  1 => 'GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of reporting_dimensions.
                 *
                 * Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object.
                 *
                 * @return GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb|null
                 */
                public function getReportingDimensions(): ?GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb
                {
                    

                    return $this->reportingDimensions;
                }
            

            
                /**
                 * Set the value of reporting_dimensions.
                 *
                 * @param GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb $reportingDimensions Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setReportingDimensions(
                    GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb $reportingDimensions
                ): static {
                    if ($this->reportingDimensions === $reportingDimensions) {
                        return $this;
                    }

                    $value = $modelData['reporting_dimensions'] = $reportingDimensions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateReportingDimensions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->reportingDimensions = $value;
                    $this->_rawModelDataInput['reporting_dimensions'] = $reportingDimensions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property reportingDimensions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processReportingDimensions(array $modelData): void
            {
                
                    if (!array_key_exists('reporting_dimensions', $modelData) && $this->reportingDimensions === null) {
                        return;
                    }
                

                $value = array_key_exists('reporting_dimensions', $modelData) ? $modelData['reporting_dimensions'] : $this->reportingDimensions;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'reporting_dimensions',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->reportingDimensions = $this->validateReportingDimensions($value, $modelData);
            }

            /**
             * Execute all validators for the property reportingDimensions
             */
            protected function validateReportingDimensions($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'reporting_dimensions',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'reporting_dimensions',
  1 => 'GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of context.
                 *
                 * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @return GetMediaBuyDeliveryRequest_ExtensionObject|null
                 */
                public function getContext(): ?GetMediaBuyDeliveryRequest_ExtensionObject
                {
                    

                    return $this->context;
                }
            

            
                /**
                 * Set the value of context.
                 *
                 * @param GetMediaBuyDeliveryRequest_ExtensionObject $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContext(
                    GetMediaBuyDeliveryRequest_ExtensionObject $context
                ): static {
                    if ($this->context === $context) {
                        return $this;
                    }

                    $value = $modelData['context'] = $context;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateContext($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->context = $value;
                    $this->_rawModelDataInput['context'] = $context;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property context
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processContext(array $modelData): void
            {
                
                    if (!array_key_exists('context', $modelData) && $this->context === null) {
                        return;
                    }
                

                $value = array_key_exists('context', $modelData) ? $modelData['context'] : $this->context;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'context',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->context = $this->validateContext($value, $modelData);
            }

            /**
             * Execute all validators for the property context
             */
            protected function validateContext($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'context',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'context',
  1 => 'GetMediaBuyDeliveryRequest_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuyDeliveryRequest_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuyDeliveryRequest_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuyDeliveryRequest_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuyDeliveryRequest_ExtensionObject $ext
                ): static {
                    if ($this->ext === $ext) {
                        return $this;
                    }

                    $value = $modelData['ext'] = $ext;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateExt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->ext = $value;
                    $this->_rawModelDataInput['ext'] = $ext;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property ext
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processExt(array $modelData): void
            {
                
                    if (!array_key_exists('ext', $modelData) && $this->ext === null) {
                        return;
                    }
                

                $value = array_key_exists('ext', $modelData) ? $modelData['ext'] : $this->ext;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_ExtensionObject($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'ext',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->ext = $this->validateExt($value, $modelData);
            }

            /**
             * Execute all validators for the property ext
             */
            protected function validateExt($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'ext',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuyDeliveryRequest_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of adcp_version.
                 *
                 * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 * @example 3.0
                 * @example 3.1
                 * @example 3.1-beta
                 * @example 3.1-rc.1
                 *
                 * @return string|null
                 */
                public function getAdcpVersion(): ?string
                {
                    

                    return $this->adcpVersion;
                }
            

            
                /**
                 * Set the value of adcp_version.
                 *
                 * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAdcpVersion(
                    string $adcpVersion
                ): static {
                    if ($this->adcpVersion === $adcpVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_version'] = $adcpVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateAdcpVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpVersion = $value;
                    $this->_rawModelDataInput['adcp_version'] = $adcpVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpVersion
             *
             * @param array $modelData
             *
             * 
             */
            protected function processAdcpVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_version', $modelData) && $this->adcpVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_version', $modelData) ? $modelData['adcp_version'] : $this->adcpVersion;

                

                $this->adcpVersion = $this->validateAdcpVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpVersion
             */
            protected function validateAdcpVersion($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of adcp_major_version.
                 *
                 * DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * @return int|null
                 */
                public function getAdcpMajorVersion(): ?int
                {
                    

                    return $this->adcpMajorVersion;
                }
            

            
                /**
                 * Set the value of adcp_major_version.
                 *
                 * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAdcpMajorVersion(
                    int $adcpMajorVersion
                ): static {
                    if ($this->adcpMajorVersion === $adcpMajorVersion) {
                        return $this;
                    }

                    $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateAdcpMajorVersion($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->adcpMajorVersion = $value;
                    $this->_rawModelDataInput['adcp_major_version'] = $adcpMajorVersion;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property adcpMajorVersion
             *
             * @param array $modelData
             *
             * 
             */
            protected function processAdcpMajorVersion(array $modelData): void
            {
                
                    if (!array_key_exists('adcp_major_version', $modelData) && $this->adcpMajorVersion === null) {
                        return;
                    }
                

                $value = array_key_exists('adcp_major_version', $modelData) ? $modelData['adcp_major_version'] : $this->adcpMajorVersion;

                

                $this->adcpMajorVersion = $this->validateAdcpMajorVersion($value, $modelData);
            }

            /**
             * Execute all validators for the property adcpMajorVersion
             */
            protected function validateAdcpMajorVersion($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
    
        
    
        
    

    /**
 * Validate updated properties which are part of a composition validation
 *
 * @param array $modifiedModelData An array containing all updated data as key-value pairs
 *
 * 
 */
private function validateComposition_0(array &$modifiedModelData): void
{
    $validatorIndex = 0;
    $value = $modelData = array_merge($this->_rawModelDataInput, $modifiedModelData);

    
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
    $succeededCompositionElements = 1;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    
        $originalPropertyValidationState = $this->_propertyValidationState ?? [];
    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'adcp_version',
                            
                                'adcp_major_version',
                            
                        ]
                    )
                ) {
                    
                        $compositionErrorCollection[] = $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex];
                    

                    if (
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]->getErrors()
                        
                    ) {
                        throw new \Exception();
                    }
                } else {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuyDeliveryRequest_AdCPVersionEnvelope($value) : $value;
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
  0 => 'GetMediaBuyDeliveryRequest',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuyDeliveryRequest_AdCPVersionEnvelope)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest',
  1 => 'GetMediaBuyDeliveryRequest_AdCPVersionEnvelope',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    
                        if (isset($validatorIndex)) {
                            $this->_propertyValidationState[$validatorIndex][$validatorComponentIndex] = $this->_errorRegistry;
                        }
                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_a8804($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryRequest',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
    }

    foreach (array_keys($modifiedModelData) as $property) {
        $modifiedModelData[$property] = $modelData[$property];
    }
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
    

    
        
            if (array_key_exists('account', $modelData) &&
                $modelData['account'] !== $this->account
            ) {
                



                $rollbackValues['account'] = $this->account;
                $this->processAccount($modelData);
            }
        
    
        
            if (array_key_exists('media_buy_ids', $modelData) &&
                $modelData['media_buy_ids'] !== $this->mediaBuyIds
            ) {
                



                $rollbackValues['mediaBuyIds'] = $this->mediaBuyIds;
                $this->processMediaBuyIds($modelData);
            }
        
    
        
            if (array_key_exists('status_filter', $modelData) &&
                $modelData['status_filter'] !== $this->statusFilter
            ) {
                



                $rollbackValues['statusFilter'] = $this->statusFilter;
                $this->processStatusFilter($modelData);
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
        
    
        
            if (array_key_exists('include_package_daily_breakdown', $modelData) &&
                $modelData['include_package_daily_breakdown'] !== $this->includePackageDailyBreakdown
            ) {
                



                $rollbackValues['includePackageDailyBreakdown'] = $this->includePackageDailyBreakdown;
                $this->processIncludePackageDailyBreakdown($modelData);
            }
        
    
        
            if (array_key_exists('time_granularity', $modelData) &&
                $modelData['time_granularity'] !== $this->timeGranularity
            ) {
                



                $rollbackValues['timeGranularity'] = $this->timeGranularity;
                $this->processTimeGranularity($modelData);
            }
        
    
        
            if (array_key_exists('include_window_breakdown', $modelData) &&
                $modelData['include_window_breakdown'] !== $this->includeWindowBreakdown
            ) {
                



                $rollbackValues['includeWindowBreakdown'] = $this->includeWindowBreakdown;
                $this->processIncludeWindowBreakdown($modelData);
            }
        
    
        
            if (array_key_exists('attribution_window', $modelData) &&
                $modelData['attribution_window'] !== $this->attributionWindow
            ) {
                



                $rollbackValues['attributionWindow'] = $this->attributionWindow;
                $this->processAttributionWindow($modelData);
            }
        
    
        
            if (array_key_exists('reporting_dimensions', $modelData) &&
                $modelData['reporting_dimensions'] !== $this->reportingDimensions
            ) {
                



                $rollbackValues['reportingDimensions'] = $this->reportingDimensions;
                $this->processReportingDimensions($modelData);
            }
        
    
        
            if (array_key_exists('context', $modelData) &&
                $modelData['context'] !== $this->context
            ) {
                



                $rollbackValues['context'] = $this->context;
                $this->processContext($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                



                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
            }
        
    
        
            if (array_key_exists('adcp_version', $modelData) &&
                $modelData['adcp_version'] !== $this->adcpVersion
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['adcpVersion'] = $this->adcpVersion;
                $this->processAdcpVersion($modelData);
            }
        
    
        
            if (array_key_exists('adcp_major_version', $modelData) &&
                $modelData['adcp_major_version'] !== $this->adcpMajorVersion
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['adcpMajorVersion'] = $this->adcpMajorVersion;
                $this->processAdcpMajorVersion($modelData);
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
 * serialize the property timeGranularity
 */
protected function serializeTimeGranularity()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->timeGranularity, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ReportingFrequency',
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


private function validateMediaBuyIds_ArrayItem_14858ab4a0a6aed437542fed187fc21b(&$value, $modelData): void {
                    $invalidItems_565e5fbe9a0906e6545f46490a291fd9 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_565e5fbe9a0906e6545f46490a291fd9, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array media_buy_ids',
  1 => 'string',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_565e5fbe9a0906e6545f46490a291fd9[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_565e5fbe9a0906e6545f46490a291fd9[$index])
                ? $invalidItems_565e5fbe9a0906e6545f46490a291fd9[$index][] = $e
                : $invalidItems_565e5fbe9a0906e6545f46490a291fd9[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_565e5fbe9a0906e6545f46490a291fd9);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'media_buy_ids',
  1 => $invalidItems_565e5fbe9a0906e6545f46490a291fd9,
)));
                    }
                }

private function validateStatusFilter_ComposedProperty_a4a91974e7254935ab04854238c44715(&$value, $modelData): void {
                    
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
    $succeededCompositionElements = 2;
    $validatorComponentIndex = 0;
    $originalModelData = $value;
    $proposedValue = null;
    $modifiedValues = [];

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'MediaBuyStatus',
)));
}

                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'MediaBuyStatus',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'pending_creatives',
   'pending_start',
   'active',
   'paused',
   'completed',
   'rejected',
   'canceled',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 
  array (
    0 => 'pending_creatives',
    1 => 'pending_start',
    2 => 'active',
    3 => 'paused',
    4 => 'completed',
    5 => 'rejected',
    6 => 'canceled',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'status_filter',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'php_model_generator_enum',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f8c05($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'array',
)));
}

                
                    $this->validateStatusFilter_ArrayItem_63279fc19956ae5720501246e6e5d82f($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 1,
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_f8c05($originalModelData, $value));
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
  0 => 'status_filter',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_a8804(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'adcp_version' => 'getAdcpVersion',
  'adcp_major_version' => 'getAdcpMajorVersion',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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


                        private function _getModifiedValues_f8c05(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
);
    
                            foreach (array (
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

private function validateStatusFilter_ArrayItem_63279fc19956ae5720501246e6e5d82f(&$value, $modelData): void {
                    $invalidItems_bc4fe9635384049f84e7b2beea98391a = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_bc4fe9635384049f84e7b2beea98391a, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof MediaBuyStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'MediaBuyStatus',
)));
}

            
                

if ($value instanceof UnitEnum && !($value instanceof MediaBuyStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'MediaBuyStatus',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'pending_creatives',
   'pending_start',
   'active',
   'paused',
   'completed',
   'rejected',
   'canceled',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 
  array (
    0 => 'pending_creatives',
    1 => 'pending_start',
    2 => 'active',
    3 => 'paused',
    4 => 'completed',
    5 => 'rejected',
    6 => 'canceled',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'status_filter',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array status_filter',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyStatus',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array status_filter',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_bc4fe9635384049f84e7b2beea98391a[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_bc4fe9635384049f84e7b2beea98391a[$index])
                ? $invalidItems_bc4fe9635384049f84e7b2beea98391a[$index][] = $e
                : $invalidItems_bc4fe9635384049f84e7b2beea98391a[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_bc4fe9635384049f84e7b2beea98391a);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'status_filter',
  1 => $invalidItems_bc4fe9635384049f84e7b2beea98391a,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
