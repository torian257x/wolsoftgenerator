<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;


/**
 * Builder class for GetMediaBuysRequest
 */
class GetMediaBuysRequestBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysRequest with fully validated properties
     */
    public function validate(): GetMediaBuysRequest
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysRequest($this->_rawModelDataInput);
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
             * Account to retrieve media buys for. When omitted, returns data across all accessible accounts.
             *
             * @return GetMediaBuysRequest_AccountReference|GetMediaBuysRequest_AccountReferenceBuilder|array|null
             */
            public function getAccount(): mixed
            {
                return $this->_rawModelDataInput['account'] ?? null;
            }

            /**
             * Set the value of account.
             *
             * @param GetMediaBuysRequest_AccountReference|GetMediaBuysRequest_AccountReferenceBuilder|array $account Account to retrieve media buys for. When omitted, returns data across all accessible accounts.
             *
             * {@link GetMediaBuysRequest::processAccount}
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
             * Array of media buy IDs to retrieve. When omitted, returns a paginated set of accessible media buys matching status_filter.
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
             * @param string[] $mediaBuyIds Array of media buy IDs to retrieve. When omitted, returns a paginated set of accessible media buys matching status_filter.
             *
             * {@link GetMediaBuysRequest::processMediaBuyIds}
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
             * Filter by status. Can be a single status or array of statuses. Defaults to ["active"] when media_buy_ids is omitted. When media_buy_ids is provided, no implicit status filter is applied.
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
             * @param string|MediaBuyStatus|string[]|MediaBuyStatus[]|null $statusFilter Filter by status. Can be a single status or array of statuses. Defaults to ["active"] when media_buy_ids is omitted. When media_buy_ids is provided, no implicit status filter is applied.
             *
             * {@link GetMediaBuysRequest::processStatusFilter}
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
             * Get the value of include_snapshot.
             *
             * When true, include a near-real-time delivery snapshot for each package. Snapshots reflect the latest available entity-level stats from the platform (e.g., updated every ~15 minutes on GAM, ~1 hour on batch-only platforms). The staleness_seconds field on each snapshot indicates data freshness. If a snapshot cannot be returned, package.snapshot_unavailable_reason explains why. Defaults to false.
             *
             * @return bool|null
             */
            public function getIncludeSnapshot(): ?bool
            {
                return $this->_rawModelDataInput['include_snapshot'] ?? null;
            }

            /**
             * Set the value of include_snapshot.
             *
             * @param bool $includeSnapshot When true, include a near-real-time delivery snapshot for each package. Snapshots reflect the latest available entity-level stats from the platform (e.g., updated every ~15 minutes on GAM, ~1 hour on batch-only platforms). The staleness_seconds field on each snapshot indicates data freshness. If a snapshot cannot be returned, package.snapshot_unavailable_reason explains why. Defaults to false.
             *
             * {@link GetMediaBuysRequest::processIncludeSnapshot}
             * 
             *
             * @return static
             */
            public function setIncludeSnapshot(
                bool $includeSnapshot
            ): static {
                if (array_key_exists('include_snapshot', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['include_snapshot'] === $includeSnapshot
                ) {
                    return $this;
                }

                $value = $modelData['include_snapshot'] = $includeSnapshot;

                

                

                $this->_rawModelDataInput['include_snapshot'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of include_history.
             *
             * When present, include the last N revision history entries for each media buy (returns min(N, available entries)). Each entry contains revision number, timestamp, actor, and a summary of what changed. Omit or set to 0 to exclude history (default). Recommended: 5-10 for monitoring, 50+ for audit.
             *
             * @return int|null
             */
            public function getIncludeHistory(): ?int
            {
                return $this->_rawModelDataInput['include_history'] ?? null;
            }

            /**
             * Set the value of include_history.
             *
             * @param int $includeHistory When present, include the last N revision history entries for each media buy (returns min(N, available entries)). Each entry contains revision number, timestamp, actor, and a summary of what changed. Omit or set to 0 to exclude history (default). Recommended: 5-10 for monitoring, 50+ for audit.
             *
             * {@link GetMediaBuysRequest::processIncludeHistory}
             * 
             *
             * @return static
             */
            public function setIncludeHistory(
                int $includeHistory
            ): static {
                if (array_key_exists('include_history', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['include_history'] === $includeHistory
                ) {
                    return $this;
                }

                $value = $modelData['include_history'] = $includeHistory;

                

                

                $this->_rawModelDataInput['include_history'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of include_webhook_activity.
             *
             * When true, each returned media buy includes a `webhook_activity` array describing recent delivery-report webhook fires for the calling principal. Used by buyer agents to verify whether a publisher actually fired against the buyer's registered endpoint and what the endpoint returned — closes the operator-ticket loop for webhook debugging. Scoped to the calling principal: a buyer sees only fires targeting its own endpoint, even when multiple principals share visibility into the same media buy. Defaults to false. See `webhook_activity_limit` for the per-buy cap.
             *
             * @return bool|null
             */
            public function getIncludeWebhookActivity(): ?bool
            {
                return $this->_rawModelDataInput['include_webhook_activity'] ?? null;
            }

            /**
             * Set the value of include_webhook_activity.
             *
             * @param bool $includeWebhookActivity When true, each returned media buy includes a `webhook_activity` array describing recent delivery-report webhook fires for the calling principal. Used by buyer agents to verify whether a publisher actually fired against the buyer's registered endpoint and what the endpoint returned — closes the operator-ticket loop for webhook debugging. Scoped to the calling principal: a buyer sees only fires targeting its own endpoint, even when multiple principals share visibility into the same media buy. Defaults to false. See `webhook_activity_limit` for the per-buy cap.
             *
             * {@link GetMediaBuysRequest::processIncludeWebhookActivity}
             * 
             *
             * @return static
             */
            public function setIncludeWebhookActivity(
                bool $includeWebhookActivity
            ): static {
                if (array_key_exists('include_webhook_activity', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['include_webhook_activity'] === $includeWebhookActivity
                ) {
                    return $this;
                }

                $value = $modelData['include_webhook_activity'] = $includeWebhookActivity;

                

                

                $this->_rawModelDataInput['include_webhook_activity'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of webhook_activity_limit.
             *
             * Maximum number of webhook delivery records to return per media buy, ordered most-recent first. Ignored when `include_webhook_activity` is false. Sellers that surface webhook activity MUST retain records for at least 30 days from each record's `completed_at` (see `webhook_activity` description in the response schema for the `pending`-status carve-out); sellers unable to honor that floor MUST omit the field entirely rather than truncate. When a buy has more historical fires than the limit, only the most recent are returned — there is no cursor for older fires; this surface is a debug aid, not a full audit log.
             *
             * @return int|null
             */
            public function getWebhookActivityLimit(): ?int
            {
                return $this->_rawModelDataInput['webhook_activity_limit'] ?? null;
            }

            /**
             * Set the value of webhook_activity_limit.
             *
             * @param int $webhookActivityLimit Maximum number of webhook delivery records to return per media buy, ordered most-recent first. Ignored when `include_webhook_activity` is false. Sellers that surface webhook activity MUST retain records for at least 30 days from each record's `completed_at` (see `webhook_activity` description in the response schema for the `pending`-status carve-out); sellers unable to honor that floor MUST omit the field entirely rather than truncate. When a buy has more historical fires than the limit, only the most recent are returned — there is no cursor for older fires; this surface is a debug aid, not a full audit log.
             *
             * {@link GetMediaBuysRequest::processWebhookActivityLimit}
             * 
             *
             * @return static
             */
            public function setWebhookActivityLimit(
                int $webhookActivityLimit
            ): static {
                if (array_key_exists('webhook_activity_limit', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['webhook_activity_limit'] === $webhookActivityLimit
                ) {
                    return $this;
                }

                $value = $modelData['webhook_activity_limit'] = $webhookActivityLimit;

                

                

                $this->_rawModelDataInput['webhook_activity_limit'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of pagination.
             *
             * Cursor-based pagination controls. Strongly recommended when querying broad scopes (for example, all active media buys in an account).
             *
             * @return GetMediaBuysRequest_PaginationRequest|GetMediaBuysRequest_PaginationRequestBuilder|array|null
             */
            public function getPagination(): mixed
            {
                return $this->_rawModelDataInput['pagination'] ?? null;
            }

            /**
             * Set the value of pagination.
             *
             * @param GetMediaBuysRequest_PaginationRequest|GetMediaBuysRequest_PaginationRequestBuilder|array $pagination Cursor-based pagination controls. Strongly recommended when querying broad scopes (for example, all active media buys in an account).
             *
             * {@link GetMediaBuysRequest::processPagination}
             * 
             *
             * @return static
             */
            public function setPagination(
                mixed $pagination
            ): static {
                if (array_key_exists('pagination', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['pagination'] === $pagination
                ) {
                    return $this;
                }

                $value = $modelData['pagination'] = $pagination;

                

                

                $this->_rawModelDataInput['pagination'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of context.
             *
             * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * @return GetMediaBuysRequest_ExtensionObject|GetMediaBuysRequest_ExtensionObjectBuilder|array|null
             */
            public function getContext(): mixed
            {
                return $this->_rawModelDataInput['context'] ?? null;
            }

            /**
             * Set the value of context.
             *
             * @param GetMediaBuysRequest_ExtensionObject|GetMediaBuysRequest_ExtensionObjectBuilder|array $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
             *
             * {@link GetMediaBuysRequest::processContext}
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
             * @return GetMediaBuysRequest_ExtensionObject|GetMediaBuysRequest_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysRequest_ExtensionObject|GetMediaBuysRequest_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysRequest::processExt}
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
             * {@link GetMediaBuysRequest::processAdcpVersion}
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
             * {@link GetMediaBuysRequest::processAdcpMajorVersion}
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
