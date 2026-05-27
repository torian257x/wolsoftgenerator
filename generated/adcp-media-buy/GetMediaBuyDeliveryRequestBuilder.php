<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use AdCP\MediaBuy\Enums\ReportingFrequency;


/**
 * Builder class for GetMediaBuyDeliveryRequest
 */
class GetMediaBuyDeliveryRequestBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuyDeliveryRequest with fully validated properties
     */
    public function validate(): GetMediaBuyDeliveryRequest
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuyDeliveryRequest($this->_rawModelDataInput);
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
             * Get the value of account.
             *
             * Filter delivery data to a specific account. When omitted, returns data across all accessible accounts.
             *
             * @return GetMediaBuyDeliveryRequest_AccountReference|GetMediaBuyDeliveryRequest_AccountReferenceBuilder|array|null
             */
            public function getAccount(): mixed
            {
                return $this->_rawModelDataInput['account'] ?? null;
            }

            /**
             * Set the value of account.
             *
             * @param GetMediaBuyDeliveryRequest_AccountReference|GetMediaBuyDeliveryRequest_AccountReferenceBuilder|array $account Filter delivery data to a specific account. When omitted, returns data across all accessible accounts.
             *
             * {@link GetMediaBuyDeliveryRequest::processAccount}
             * 
             *
             * @return static
             */
            public function setAccount(
                mixed $account
            ): static {
                if (array_key_exists('account', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['account'] === $account
                ) {
                    return $this;
                }

                $value = $modelData['account'] = $account;

                

                

                $this->_rawModelDataInput['account'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['media_buy_ids'] ?? null;
            }

            /**
             * Set the value of media_buy_ids.
             *
             * @param string[] $mediaBuyIds Array of media buy IDs to get delivery data for
             *
             * {@link GetMediaBuyDeliveryRequest::processMediaBuyIds}
             * 
             *
             * @return static
             */
            public function setMediaBuyIds(
                array $mediaBuyIds
            ): static {
                if (array_key_exists('media_buy_ids', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['media_buy_ids'] === $mediaBuyIds
                ) {
                    return $this;
                }

                $value = $modelData['media_buy_ids'] = $mediaBuyIds;

                

                

                $this->_rawModelDataInput['media_buy_ids'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of status_filter.
             *
             * Filter by status. Can be a single status or array of statuses
             *
             * @return string|MediaBuyStatus|string[]|MediaBuyStatus[]|null
             */
            public function getStatusFilter(): string | array | MediaBuyStatus | null
            {
                return $this->_rawModelDataInput['status_filter'] ?? null;
            }

            /**
             * Set the value of status_filter.
             *
             * @param string|MediaBuyStatus|string[]|MediaBuyStatus[]|null $statusFilter Filter by status. Can be a single status or array of statuses
             *
             * {@link GetMediaBuyDeliveryRequest::processStatusFilter}
             * 
             *
             * @return static
             */
            public function setStatusFilter(
                string | array | MediaBuyStatus | null $statusFilter
            ): static {
                if (array_key_exists('status_filter', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['status_filter'] === $statusFilter
                ) {
                    return $this;
                }

                $value = $modelData['status_filter'] = $statusFilter;

                

                

                $this->_rawModelDataInput['status_filter'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['start_date'] ?? null;
            }

            /**
             * Set the value of start_date.
             *
             * @param string $startDate Start date for reporting period (YYYY-MM-DD). When omitted along with end_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
             *
             * {@link GetMediaBuyDeliveryRequest::processStartDate}
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
             * End date for reporting period (YYYY-MM-DD). When omitted along with start_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
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
             * @param string $endDate End date for reporting period (YYYY-MM-DD). When omitted along with start_date, returns campaign lifetime data. Only accepted when the product's reporting_capabilities.date_range_support is 'date_range'.
             *
             * {@link GetMediaBuyDeliveryRequest::processEndDate}
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
             * Get the value of include_package_daily_breakdown.
             *
             * When true, include daily_breakdown arrays within each package in by_package. Useful for per-package pacing analysis and line-item monitoring. Omit or set false to reduce response size — package daily data can be large for multi-package buys over long flights.
             *
             * @return bool|null
             */
            public function getIncludePackageDailyBreakdown(): ?bool
            {
                return $this->_rawModelDataInput['include_package_daily_breakdown'] ?? null;
            }

            /**
             * Set the value of include_package_daily_breakdown.
             *
             * @param bool $includePackageDailyBreakdown When true, include daily_breakdown arrays within each package in by_package. Useful for per-package pacing analysis and line-item monitoring. Omit or set false to reduce response size — package daily data can be large for multi-package buys over long flights.
             *
             * {@link GetMediaBuyDeliveryRequest::processIncludePackageDailyBreakdown}
             * 
             *
             * @return static
             */
            public function setIncludePackageDailyBreakdown(
                bool $includePackageDailyBreakdown
            ): static {
                if (array_key_exists('include_package_daily_breakdown', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['include_package_daily_breakdown'] === $includePackageDailyBreakdown
                ) {
                    return $this;
                }

                $value = $modelData['include_package_daily_breakdown'] = $includePackageDailyBreakdown;

                

                

                $this->_rawModelDataInput['include_package_daily_breakdown'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of time_granularity.
             *
             * Per-window slice granularity for the pull, using the same vocabulary as reporting_webhook.reporting_frequency. When set, the seller returns per-window delivery slices over the date range — useful for reconstructing data a buyer's webhook receiver missed, since the slice payload is shape-aligned with what reporting_webhook would have delivered for the same window. Capability-scoped: the value MUST be one of the seller's declared reporting_capabilities.windowed_pull_granularities; otherwise the seller MUST return UNSUPPORTED_GRANULARITY. When omitted, behavior is unchanged (cumulative aggregates plus optional daily breakdowns per existing fields).
             *
             * @return string|ReportingFrequency|null
             */
            public function getTimeGranularity(): string | ReportingFrequency | null
            {
                return $this->_rawModelDataInput['time_granularity'] ?? null;
            }

            /**
             * Set the value of time_granularity.
             *
             * @param string|ReportingFrequency|null $timeGranularity Per-window slice granularity for the pull, using the same vocabulary as reporting_webhook.reporting_frequency. When set, the seller returns per-window delivery slices over the date range — useful for reconstructing data a buyer's webhook receiver missed, since the slice payload is shape-aligned with what reporting_webhook would have delivered for the same window. Capability-scoped: the value MUST be one of the seller's declared reporting_capabilities.windowed_pull_granularities; otherwise the seller MUST return UNSUPPORTED_GRANULARITY. When omitted, behavior is unchanged (cumulative aggregates plus optional daily breakdowns per existing fields).
             *
             * {@link GetMediaBuyDeliveryRequest::processTimeGranularity}
             * 
             *
             * @return static
             */
            public function setTimeGranularity(
                string | ReportingFrequency | null $timeGranularity
            ): static {
                if (array_key_exists('time_granularity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['time_granularity'] === $timeGranularity
                ) {
                    return $this;
                }

                $value = $modelData['time_granularity'] = $timeGranularity;

                

                

                $this->_rawModelDataInput['time_granularity'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of include_window_breakdown.
             *
             * When true, the response includes media_buy_deliveries[].windows[] — an array of per-window delivery slices over the date range at the requested time_granularity. Ignored when time_granularity is omitted. Each window's payload mirrors what reporting_webhook would have delivered for the same window, enabling lossless GET-path recovery for buyers who missed webhook fires. Omit or set false to reduce response size when only cumulative aggregates are needed.
             *
             * @return bool|null
             */
            public function getIncludeWindowBreakdown(): ?bool
            {
                return $this->_rawModelDataInput['include_window_breakdown'] ?? null;
            }

            /**
             * Set the value of include_window_breakdown.
             *
             * @param bool $includeWindowBreakdown When true, the response includes media_buy_deliveries[].windows[] — an array of per-window delivery slices over the date range at the requested time_granularity. Ignored when time_granularity is omitted. Each window's payload mirrors what reporting_webhook would have delivered for the same window, enabling lossless GET-path recovery for buyers who missed webhook fires. Omit or set false to reduce response size when only cumulative aggregates are needed.
             *
             * {@link GetMediaBuyDeliveryRequest::processIncludeWindowBreakdown}
             * 
             *
             * @return static
             */
            public function setIncludeWindowBreakdown(
                bool $includeWindowBreakdown
            ): static {
                if (array_key_exists('include_window_breakdown', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['include_window_breakdown'] === $includeWindowBreakdown
                ) {
                    return $this;
                }

                $value = $modelData['include_window_breakdown'] = $includeWindowBreakdown;

                

                

                $this->_rawModelDataInput['include_window_breakdown'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of attribution_window.
             *
             * Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options.
             *
             * @return GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0|GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0Builder|array|null
             */
            public function getAttributionWindow(): mixed
            {
                return $this->_rawModelDataInput['attribution_window'] ?? null;
            }

            /**
             * Set the value of attribution_window.
             *
             * @param GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0|GetMediaBuyDeliveryRequest_Attribution_Window4e5e31487f48a00d0d769200411eb3a0Builder|array $attributionWindow Attribution window to apply for conversion metrics. When provided, the seller returns conversion data using the requested lookback windows instead of their platform default. The seller echoes the applied window in the response. Sellers that do not support configurable windows ignore this field and return their default. Check get_adcp_capabilities conversion_tracking.attribution_windows for available options.
             *
             * {@link GetMediaBuyDeliveryRequest::processAttributionWindow}
             * 
             *
             * @return static
             */
            public function setAttributionWindow(
                mixed $attributionWindow
            ): static {
                if (array_key_exists('attribution_window', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['attribution_window'] === $attributionWindow
                ) {
                    return $this;
                }

                $value = $modelData['attribution_window'] = $attributionWindow;

                

                

                $this->_rawModelDataInput['attribution_window'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of reporting_dimensions.
             *
             * Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object.
             *
             * @return GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb|GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cbBuilder|array|null
             */
            public function getReportingDimensions(): mixed
            {
                return $this->_rawModelDataInput['reporting_dimensions'] ?? null;
            }

            /**
             * Set the value of reporting_dimensions.
             *
             * @param GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cb|GetMediaBuyDeliveryRequest_Reporting_Dimensions7c4f0163bf4d11d5c1a1fd493980b6cbBuilder|array $reportingDimensions Request dimensional breakdowns in delivery reporting. Each key enables a specific breakdown dimension within by_package — include as an empty object (e.g., "device_type": {}) to activate with defaults. Omit entirely for no breakdowns (backward compatible). Unsupported dimensions are silently omitted from the response. Note: keyword, catalog_item, and creative breakdowns are returned automatically when the seller supports them and are not controlled by this object.
             *
             * {@link GetMediaBuyDeliveryRequest::processReportingDimensions}
             * 
             *
             * @return static
             */
            public function setReportingDimensions(
                mixed $reportingDimensions
            ): static {
                if (array_key_exists('reporting_dimensions', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['reporting_dimensions'] === $reportingDimensions
                ) {
                    return $this;
                }

                $value = $modelData['reporting_dimensions'] = $reportingDimensions;

                

                

                $this->_rawModelDataInput['reporting_dimensions'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of context.
             *
             * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * @return GetMediaBuyDeliveryRequest_ExtensionObject|GetMediaBuyDeliveryRequest_ExtensionObjectBuilder|array|null
             */
            public function getContext(): mixed
            {
                return $this->_rawModelDataInput['context'] ?? null;
            }

            /**
             * Set the value of context.
             *
             * @param GetMediaBuyDeliveryRequest_ExtensionObject|GetMediaBuyDeliveryRequest_ExtensionObjectBuilder|array $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * {@link GetMediaBuyDeliveryRequest::processContext}
             * 
             *
             * @return static
             */
            public function setContext(
                mixed $context
            ): static {
                if (array_key_exists('context', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['context'] === $context
                ) {
                    return $this;
                }

                $value = $modelData['context'] = $context;

                

                

                $this->_rawModelDataInput['context'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * @return GetMediaBuyDeliveryRequest_ExtensionObject|GetMediaBuyDeliveryRequest_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuyDeliveryRequest_ExtensionObject|GetMediaBuyDeliveryRequest_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuyDeliveryRequest::processExt}
             * 
             *
             * @return static
             */
            public function setExt(
                mixed $ext
            ): static {
                if (array_key_exists('ext', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['ext'] === $ext
                ) {
                    return $this;
                }

                $value = $modelData['ext'] = $ext;

                

                

                $this->_rawModelDataInput['ext'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of adcp_version.
             *
             * Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * @return string|null
             */
            public function getAdcpVersion(): ?string
            {
                return $this->_rawModelDataInput['adcp_version'] ?? null;
            }

            /**
             * Set the value of adcp_version.
             *
             * @param string $adcpVersion Release-precision AdCP version (VERSION.RELEASE, e.g. "3.0", "3.1", "3.1-beta"). On a request: the buyer's release pin — the seller validates against its supported_versions and returns VERSION_UNSUPPORTED on cross-major mismatch, or downshifts to the highest supported release within the same major. On a response: the release the seller actually served — clients SHOULD validate the response against that release's schema, not against their pin. Patches are not negotiated; surface them as build_version on capabilities for operational visibility. When omitted, falls back to adcp_major_version (deprecated) or server default. Buyers SHOULD emit both adcp_version and adcp_major_version through 3.x to remain compatible with sellers that only read the legacy field. NORMALIZATION: SDKs that read full-semver values from bundle metadata (e.g. ComplianceIndex.published_version = "3.1.0-beta.1") MUST normalize to release-precision ("3.1-beta.1") before emitting on the wire — meta-field values are NOT valid wire values.
             *
             * {@link GetMediaBuyDeliveryRequest::processAdcpVersion}
             * 
             *
             * @return static
             */
            public function setAdcpVersion(
                string $adcpVersion
            ): static {
                if (array_key_exists('adcp_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_version'] === $adcpVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_version'] = $adcpVersion;

                

                

                $this->_rawModelDataInput['adcp_version'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['adcp_major_version'] ?? null;
            }

            /**
             * Set the value of adcp_major_version.
             *
             * @param int $adcpMajorVersion DEPRECATED in favor of adcp_version (release-precision string). Servers MUST continue to honor this field through 3.x. Removed in 4.0. Original semantics: the AdCP major version the buyer's payloads conform to. Sellers validate against their supported major_versions and return VERSION_UNSUPPORTED if unsupported. When omitted, the seller assumes its highest supported version.
             *
             * {@link GetMediaBuyDeliveryRequest::processAdcpMajorVersion}
             * 
             *
             * @return static
             */
            public function setAdcpMajorVersion(
                int $adcpMajorVersion
            ): static {
                if (array_key_exists('adcp_major_version', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['adcp_major_version'] === $adcpMajorVersion
                ) {
                    return $this;
                }

                $value = $modelData['adcp_major_version'] = $adcpMajorVersion;

                

                

                $this->_rawModelDataInput['adcp_major_version'] = $value;

                return $this;
            }
        
    
}

// @codeCoverageIgnoreEnd
