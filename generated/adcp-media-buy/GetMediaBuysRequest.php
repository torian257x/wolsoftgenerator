<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetMediaBuysRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysRequest
 * @package AdCP\MediaBuy 
 *
 * Request parameters for retrieving media buy status, creative approval state, and optional delivery snapshots
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('')]

class GetMediaBuysRequest implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account')]
        
            #[SchemaName('account')]
        
        /** @var GetMediaBuysRequest_AccountReference|null Account to retrieve media buys for. When omitted, returns data across all accessible accounts. */
        protected $account;
    
        
            #[JsonPointer('/properties/media_buy_ids')]
        
            #[SchemaName('media_buy_ids')]
        
        /** @var string[]|null Array of media buy IDs to retrieve. When omitted, returns a paginated set of accessible media buys matching status_filter. */
        protected $mediaBuyIds;
    
        
            #[JsonPointer('/properties/status_filter')]
        
            #[SchemaName('status_filter')]
        
        /** @var MediaBuyStatus|MediaBuyStatus[]|null Filter by status. Can be a single status or array of statuses. Defaults to ["active"] when media_buy_ids is omitted. When media_buy_ids is provided, no implicit status filter is applied. */
        protected $statusFilter;
    
        
            #[JsonPointer('/properties/include_snapshot')]
        
            #[SchemaName('include_snapshot')]
        
        /** @var bool When true, include a near-real-time delivery snapshot for each package. Snapshots reflect the latest available entity-level stats from the platform (e.g., updated every ~15 minutes on GAM, ~1 hour on batch-only platforms). The staleness_seconds field on each snapshot indicates data freshness. If a snapshot cannot be returned, package.snapshot_unavailable_reason explains why. Defaults to false. */
        protected $includeSnapshot = false;
    
        
            #[JsonPointer('/properties/include_history')]
        
            #[SchemaName('include_history')]
        
        /** @var int When present, include the last N revision history entries for each media buy (returns min(N, available entries)). Each entry contains revision number, timestamp, actor, and a summary of what changed. Omit or set to 0 to exclude history (default). Recommended: 5-10 for monitoring, 50+ for audit. */
        protected $includeHistory = 0;
    
        
            #[JsonPointer('/properties/include_webhook_activity')]
        
            #[SchemaName('include_webhook_activity')]
        
        /** @var bool When true, each returned media buy includes a `webhook_activity` array describing recent delivery-report webhook fires for the calling principal. Used by buyer agents to verify whether a publisher actually fired against the buyer's registered endpoint and what the endpoint returned — closes the operator-ticket loop for webhook debugging. Scoped to the calling principal: a buyer sees only fires targeting its own endpoint, even when multiple principals share visibility into the same media buy. Defaults to false. See `webhook_activity_limit` for the per-buy cap. */
        protected $includeWebhookActivity = false;
    
        
            #[JsonPointer('/properties/webhook_activity_limit')]
        
            #[SchemaName('webhook_activity_limit')]
        
        /** @var int Maximum number of webhook delivery records to return per media buy, ordered most-recent first. Ignored when `include_webhook_activity` is false. Sellers that surface webhook activity MUST retain records for at least 30 days from each record's `completed_at` (see `webhook_activity` description in the response schema for the `pending`-status carve-out); sellers unable to honor that floor MUST omit the field entirely rather than truncate. When a buy has more historical fires than the limit, only the most recent are returned — there is no cursor for older fires; this surface is a debug aid, not a full audit log. */
        protected $webhookActivityLimit = 50;
    
        
            #[JsonPointer('/properties/pagination')]
        
            #[SchemaName('pagination')]
        
        /** @var GetMediaBuysRequest_PaginationRequest|null Cursor-based pagination controls. Strongly recommended when querying broad scopes (for example, all active media buys in an account). */
        protected $pagination;
    
        
            #[JsonPointer('/properties/context')]
        
            #[SchemaName('context')]
        
        /** @var GetMediaBuysRequest_ExtensionObject|null Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned. */
        protected $context;
    
        
            #[JsonPointer('/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysRequest_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
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
  4 => 'include_history',
  7 => 'pagination',
  8 => 'context',
  9 => 'ext',
  10 => 'adcp_version',
  11 => 'adcp_major_version',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysRequest constructor.
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
            
        
            
                $this->processIncludeSnapshot($rawModelDataInput);
            
        
            
                $this->processIncludeHistory($rawModelDataInput);
            
        
            
                $this->processIncludeWebhookActivity($rawModelDataInput);
            
        
            
                $this->processWebhookActivityLimit($rawModelDataInput);
            
        
            
                $this->processPagination($rawModelDataInput);
            
        
            
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
   'include_snapshot',
   'include_history',
   'include_webhook_activity',
   'webhook_activity_limit',
   'pagination',
   'context',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysRequest',
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
                 * Account to retrieve media buys for. When omitted, returns data across all accessible accounts.
                 * @example {"account_id":"acc_acme_001"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com"}
                 * @example {"brand":{"domain":"nova-brands.com","brand_id":"spark"},"operator":"pinnacle-media.com"}
                 * @example {"brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com","sandbox":true}
                 *
                 * @return GetMediaBuysRequest_AccountReference|null
                 */
                public function getAccount(): ?GetMediaBuysRequest_AccountReference
                {
                    

                    return $this->account;
                }
            

            
                /**
                 * Set the value of account.
                 *
                 * @param GetMediaBuysRequest_AccountReference $account Account to retrieve media buys for. When omitted, returns data across all accessible accounts.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccount(
                    GetMediaBuysRequest_AccountReference $account
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
        return is_array($value) ? new GetMediaBuysRequest_AccountReference($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_AccountReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'account',
  1 => 'GetMediaBuysRequest_AccountReference',
)));
}

                

                return $value;
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
                    

                    return $this->mediaBuyIds;
                }
            

            
                /**
                 * Set the value of media_buy_ids.
                 *
                 * @param string[] $mediaBuyIds Array of media buy IDs to retrieve. When omitted, returns a paginated set of accessible media buys matching status_filter.
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

                
                    $this->validateMediaBuyIds_ArrayItem_92757856415e0747337cb5f307b8da88($value, $modelData);
                
                    

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
                 * Filter by status. Can be a single status or array of statuses. Defaults to ["active"] when media_buy_ids is omitted. When media_buy_ids is provided, no implicit status filter is applied.
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
                 * @param string|MediaBuyStatus|string[]|MediaBuyStatus[]|null $statusFilter Filter by status. Can be a single status or array of statuses. Defaults to ["active"] when media_buy_ids is omitted. When media_buy_ids is provided, no implicit status filter is applied.
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
                
                    $this->validateStatusFilter_ComposedProperty_1b60741b357204b3cf203f4762034fc2($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of include_snapshot.
                 *
                 * When true, include a near-real-time delivery snapshot for each package. Snapshots reflect the latest available entity-level stats from the platform (e.g., updated every ~15 minutes on GAM, ~1 hour on batch-only platforms). The staleness_seconds field on each snapshot indicates data freshness. If a snapshot cannot be returned, package.snapshot_unavailable_reason explains why. Defaults to false.
                 *
                 * @return bool
                 */
                public function getIncludeSnapshot(): bool
                {
                    

                    return $this->includeSnapshot;
                }
            

            
                /**
                 * Set the value of include_snapshot.
                 *
                 * @param bool $includeSnapshot When true, include a near-real-time delivery snapshot for each package. Snapshots reflect the latest available entity-level stats from the platform (e.g., updated every ~15 minutes on GAM, ~1 hour on batch-only platforms). The staleness_seconds field on each snapshot indicates data freshness. If a snapshot cannot be returned, package.snapshot_unavailable_reason explains why. Defaults to false.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIncludeSnapshot(
                    bool $includeSnapshot
                ): static {
                    if ($this->includeSnapshot === $includeSnapshot) {
                        return $this;
                    }

                    $value = $modelData['include_snapshot'] = $includeSnapshot;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIncludeSnapshot($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->includeSnapshot = $value;
                    $this->_rawModelDataInput['include_snapshot'] = $includeSnapshot;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property includeSnapshot
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIncludeSnapshot(array $modelData): void
            {
                
                    if (!array_key_exists('include_snapshot', $modelData) && $this->includeSnapshot === null) {
                        return;
                    }
                

                $value = array_key_exists('include_snapshot', $modelData) ? $modelData['include_snapshot'] : $this->includeSnapshot;

                

                $this->includeSnapshot = $this->validateIncludeSnapshot($value, $modelData);
            }

            /**
             * Execute all validators for the property includeSnapshot
             */
            protected function validateIncludeSnapshot($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'include_snapshot',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of include_history.
                 *
                 * When present, include the last N revision history entries for each media buy (returns min(N, available entries)). Each entry contains revision number, timestamp, actor, and a summary of what changed. Omit or set to 0 to exclude history (default). Recommended: 5-10 for monitoring, 50+ for audit.
                 *
                 * @return int
                 */
                public function getIncludeHistory(): int
                {
                    

                    return $this->includeHistory;
                }
            

            
                /**
                 * Set the value of include_history.
                 *
                 * @param int $includeHistory When present, include the last N revision history entries for each media buy (returns min(N, available entries)). Each entry contains revision number, timestamp, actor, and a summary of what changed. Omit or set to 0 to exclude history (default). Recommended: 5-10 for monitoring, 50+ for audit.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIncludeHistory(
                    int $includeHistory
                ): static {
                    if ($this->includeHistory === $includeHistory) {
                        return $this;
                    }

                    $value = $modelData['include_history'] = $includeHistory;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIncludeHistory($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->includeHistory = $value;
                    $this->_rawModelDataInput['include_history'] = $includeHistory;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property includeHistory
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIncludeHistory(array $modelData): void
            {
                
                    if (!array_key_exists('include_history', $modelData) && $this->includeHistory === null) {
                        return;
                    }
                

                $value = array_key_exists('include_history', $modelData) ? $modelData['include_history'] : $this->includeHistory;

                

                $this->includeHistory = $this->validateIncludeHistory($value, $modelData);
            }

            /**
             * Execute all validators for the property includeHistory
             */
            protected function validateIncludeHistory($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'include_history',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'include_history',
  1 => 0,
)));
}

                
                    

if (is_int($value) && $value > 1000) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'include_history',
  1 => 1000,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of include_webhook_activity.
                 *
                 * When true, each returned media buy includes a `webhook_activity` array describing recent delivery-report webhook fires for the calling principal. Used by buyer agents to verify whether a publisher actually fired against the buyer's registered endpoint and what the endpoint returned — closes the operator-ticket loop for webhook debugging. Scoped to the calling principal: a buyer sees only fires targeting its own endpoint, even when multiple principals share visibility into the same media buy. Defaults to false. See `webhook_activity_limit` for the per-buy cap.
                 *
                 * @return bool
                 */
                public function getIncludeWebhookActivity(): bool
                {
                    

                    return $this->includeWebhookActivity;
                }
            

            
                /**
                 * Set the value of include_webhook_activity.
                 *
                 * @param bool $includeWebhookActivity When true, each returned media buy includes a `webhook_activity` array describing recent delivery-report webhook fires for the calling principal. Used by buyer agents to verify whether a publisher actually fired against the buyer's registered endpoint and what the endpoint returned — closes the operator-ticket loop for webhook debugging. Scoped to the calling principal: a buyer sees only fires targeting its own endpoint, even when multiple principals share visibility into the same media buy. Defaults to false. See `webhook_activity_limit` for the per-buy cap.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIncludeWebhookActivity(
                    bool $includeWebhookActivity
                ): static {
                    if ($this->includeWebhookActivity === $includeWebhookActivity) {
                        return $this;
                    }

                    $value = $modelData['include_webhook_activity'] = $includeWebhookActivity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateIncludeWebhookActivity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->includeWebhookActivity = $value;
                    $this->_rawModelDataInput['include_webhook_activity'] = $includeWebhookActivity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property includeWebhookActivity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIncludeWebhookActivity(array $modelData): void
            {
                
                    if (!array_key_exists('include_webhook_activity', $modelData) && $this->includeWebhookActivity === null) {
                        return;
                    }
                

                $value = array_key_exists('include_webhook_activity', $modelData) ? $modelData['include_webhook_activity'] : $this->includeWebhookActivity;

                

                $this->includeWebhookActivity = $this->validateIncludeWebhookActivity($value, $modelData);
            }

            /**
             * Execute all validators for the property includeWebhookActivity
             */
            protected function validateIncludeWebhookActivity($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'include_webhook_activity',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of webhook_activity_limit.
                 *
                 * Maximum number of webhook delivery records to return per media buy, ordered most-recent first. Ignored when `include_webhook_activity` is false. Sellers that surface webhook activity MUST retain records for at least 30 days from each record's `completed_at` (see `webhook_activity` description in the response schema for the `pending`-status carve-out); sellers unable to honor that floor MUST omit the field entirely rather than truncate. When a buy has more historical fires than the limit, only the most recent are returned — there is no cursor for older fires; this surface is a debug aid, not a full audit log.
                 *
                 * @return int
                 */
                public function getWebhookActivityLimit(): int
                {
                    

                    return $this->webhookActivityLimit;
                }
            

            
                /**
                 * Set the value of webhook_activity_limit.
                 *
                 * @param int $webhookActivityLimit Maximum number of webhook delivery records to return per media buy, ordered most-recent first. Ignored when `include_webhook_activity` is false. Sellers that surface webhook activity MUST retain records for at least 30 days from each record's `completed_at` (see `webhook_activity` description in the response schema for the `pending`-status carve-out); sellers unable to honor that floor MUST omit the field entirely rather than truncate. When a buy has more historical fires than the limit, only the most recent are returned — there is no cursor for older fires; this surface is a debug aid, not a full audit log.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWebhookActivityLimit(
                    int $webhookActivityLimit
                ): static {
                    if ($this->webhookActivityLimit === $webhookActivityLimit) {
                        return $this;
                    }

                    $value = $modelData['webhook_activity_limit'] = $webhookActivityLimit;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateWebhookActivityLimit($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->webhookActivityLimit = $value;
                    $this->_rawModelDataInput['webhook_activity_limit'] = $webhookActivityLimit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property webhookActivityLimit
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWebhookActivityLimit(array $modelData): void
            {
                
                    if (!array_key_exists('webhook_activity_limit', $modelData) && $this->webhookActivityLimit === null) {
                        return;
                    }
                

                $value = array_key_exists('webhook_activity_limit', $modelData) ? $modelData['webhook_activity_limit'] : $this->webhookActivityLimit;

                

                $this->webhookActivityLimit = $this->validateWebhookActivityLimit($value, $modelData);
            }

            /**
             * Execute all validators for the property webhookActivityLimit
             */
            protected function validateWebhookActivityLimit($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'webhook_activity_limit',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'webhook_activity_limit',
  1 => 1,
)));
}

                
                    

if (is_int($value) && $value > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'webhook_activity_limit',
  1 => 200,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of pagination.
                 *
                 * Cursor-based pagination controls. Strongly recommended when querying broad scopes (for example, all active media buys in an account).
                 *
                 * @return GetMediaBuysRequest_PaginationRequest|null
                 */
                public function getPagination(): ?GetMediaBuysRequest_PaginationRequest
                {
                    

                    return $this->pagination;
                }
            

            
                /**
                 * Set the value of pagination.
                 *
                 * @param GetMediaBuysRequest_PaginationRequest $pagination Cursor-based pagination controls. Strongly recommended when querying broad scopes (for example, all active media buys in an account).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPagination(
                    GetMediaBuysRequest_PaginationRequest $pagination
                ): static {
                    if ($this->pagination === $pagination) {
                        return $this;
                    }

                    $value = $modelData['pagination'] = $pagination;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validatePagination($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->pagination = $value;
                    $this->_rawModelDataInput['pagination'] = $pagination;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property pagination
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPagination(array $modelData): void
            {
                
                    if (!array_key_exists('pagination', $modelData) && $this->pagination === null) {
                        return;
                    }
                

                $value = array_key_exists('pagination', $modelData) ? $modelData['pagination'] : $this->pagination;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_PaginationRequest($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'pagination',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->pagination = $this->validatePagination($value, $modelData);
            }

            /**
             * Execute all validators for the property pagination
             */
            protected function validatePagination($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_PaginationRequest)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'pagination',
  1 => 'GetMediaBuysRequest_PaginationRequest',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of context.
                 *
                 * Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @return GetMediaBuysRequest_ExtensionObject|null
                 */
                public function getContext(): ?GetMediaBuysRequest_ExtensionObject
                {
                    

                    return $this->context;
                }
            

            
                /**
                 * Set the value of context.
                 *
                 * @param GetMediaBuysRequest_ExtensionObject $context Opaque correlation data that is echoed unchanged in responses. Used for internal tracking, UI session IDs, trace IDs, and other caller-specific identifiers that don't affect protocol behavior. Context data is never parsed by AdCP agents - it's simply preserved and returned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setContext(
                    GetMediaBuysRequest_ExtensionObject $context
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
        return is_array($value) ? new GetMediaBuysRequest_ExtensionObject($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'context',
  1 => 'GetMediaBuysRequest_ExtensionObject',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysRequest_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysRequest_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysRequest_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysRequest_ExtensionObject $ext
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
        return is_array($value) ? new GetMediaBuysRequest_ExtensionObject($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysRequest_ExtensionObject',
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
        return is_array($value) ? new GetMediaBuysRequest_AdCPVersionEnvelope($value) : $value;
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
  0 => 'GetMediaBuysRequest',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_AdCPVersionEnvelope)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetMediaBuysRequest',
  1 => 'GetMediaBuysRequest_AdCPVersionEnvelope',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_c286d($originalModelData, $value));
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
  0 => 'GetMediaBuysRequest',
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
        
    
        
            if (array_key_exists('include_snapshot', $modelData) &&
                $modelData['include_snapshot'] !== $this->includeSnapshot
            ) {
                



                $rollbackValues['includeSnapshot'] = $this->includeSnapshot;
                $this->processIncludeSnapshot($modelData);
            }
        
    
        
            if (array_key_exists('include_history', $modelData) &&
                $modelData['include_history'] !== $this->includeHistory
            ) {
                



                $rollbackValues['includeHistory'] = $this->includeHistory;
                $this->processIncludeHistory($modelData);
            }
        
    
        
            if (array_key_exists('include_webhook_activity', $modelData) &&
                $modelData['include_webhook_activity'] !== $this->includeWebhookActivity
            ) {
                



                $rollbackValues['includeWebhookActivity'] = $this->includeWebhookActivity;
                $this->processIncludeWebhookActivity($modelData);
            }
        
    
        
            if (array_key_exists('webhook_activity_limit', $modelData) &&
                $modelData['webhook_activity_limit'] !== $this->webhookActivityLimit
            ) {
                



                $rollbackValues['webhookActivityLimit'] = $this->webhookActivityLimit;
                $this->processWebhookActivityLimit($modelData);
            }
        
    
        
            if (array_key_exists('pagination', $modelData) &&
                $modelData['pagination'] !== $this->pagination
            ) {
                



                $rollbackValues['pagination'] = $this->pagination;
                $this->processPagination($modelData);
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


private function validateMediaBuyIds_ArrayItem_92757856415e0747337cb5f307b8da88(&$value, $modelData): void {
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

private function validateStatusFilter_ComposedProperty_1b60741b357204b3cf203f4762034fc2(&$value, $modelData): void {
                    
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_449e1($originalModelData, $value));
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_449e1($originalModelData, $value));
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


                        private function _getModifiedValues_c286d(array $originalModelData, object $nestedCompositionObject): array {
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


                        private function _getModifiedValues_449e1(array $originalModelData, object $nestedCompositionObject): array {
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
