<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MediaBuyStatus;

    use AdCP\MediaBuy\Enums\MediaBuyHealth;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

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

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

    use AdCP\MediaBuy\Enums\SnapshotUnavailableReason;

    use AdCP\MediaBuy\Enums\DevicePlatform;

    use AdCP\MediaBuy\Enums\DeviceType;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

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

    use AdCP\MediaBuy\Enums\CreativeApprovalStatus;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items')]

class GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/media_buy_id')]
        
            #[SchemaName('media_buy_id')]
        
            #[Required]
        
        /** @var string Seller's unique identifier for the media buy */
        protected $mediaBuyId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account')]
        
            #[SchemaName('account')]
        
        /** @var GetMediaBuysResponse_Account|null Account billed for this media buy */
        protected $account;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/invoice_recipient')]
        
            #[SchemaName('invoice_recipient')]
        
        /** @var GetMediaBuysResponse_BusinessEntity|null Per-buy invoice recipient when provided at creation. Confirms the seller accepted the billing override. Bank details are omitted (write-only). */
        protected $invoiceRecipient;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/status')]
        
            #[SchemaName('status')]
        
            #[Required]
        
        /** @var MediaBuyStatus Status of a media buy. */
        protected $status;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/health')]
        
            #[SchemaName('health')]
        
        /** @var MediaBuyHealth|null Dependency health of the media buy, orthogonal to `status`. `ok` (default) when no upstream resource that this buy depends on is in an offline state. `impaired` when at least one such resource (audience, creative, catalog_item, event_source, property) is offline and affects delivery for one or more packages — `impairments[]` MUST be non-empty in that case. On terminal-status buys, the seller MAY leave this field in whatever state held at the terminal transition. See lifecycle.mdx § Compliance and the impairment.coherence assertion. */
        protected $health = 'ok';
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments')]
        
            #[SchemaName('impairments')]
        
        /** @var GetMediaBuysResponse_Impairment[]|null Open impairments — upstream dependency state changes that affect delivery for at least one package on this buy. Empty when `health` is `ok`; non-empty iff `health` is `impaired` (health-iff rule on non-terminal buys). Sellers MUST add an entry on the next read after a referenced resource transitions to an offline state, and MUST remove the entry when the resource returns to a serviceable state or stops being a dependency (e.g., via assignment swap via update_media_buy). Staleness budget: the snapshot MUST reflect the impairment within 5 minutes of `impairment.observed_at` regardless of buyer poll cadence — sellers cannot rely on rare buyer polls to defer write propagation. See impairment.coherence assertion for the cross-resource invariant. */
        protected $impairments;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/rejection_reason')]
        
            #[SchemaName('rejection_reason')]
        
        /** @var string|null Reason provided by the seller when status is 'rejected'. Present only when status is 'rejected'. */
        protected $rejectionReason;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/currency')]
        
            #[SchemaName('currency')]
        
            #[Required]
        
        /** @var string ISO 4217 currency code (e.g., USD, EUR, GBP) for monetary values at this media buy level. total_budget is always denominated in this currency. Package-level fields may override with package.currency. */
        protected $currency;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/total_budget')]
        
            #[SchemaName('total_budget')]
        
            #[Required]
        
        /** @var float Total budget amount across all packages, denominated in media_buy.currency */
        protected $totalBudget;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/start_time')]
        
            #[SchemaName('start_time')]
        
        /** @var string|null ISO 8601 flight start time for this media buy (earliest package start_time). Avoids requiring buyers to compute min(packages[].start_time). */
        protected $startTime;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/end_time')]
        
            #[SchemaName('end_time')]
        
        /** @var string|null ISO 8601 flight end time for this media buy (latest package end_time). Avoids requiring buyers to compute max(packages[].end_time). */
        protected $endTime;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/creative_deadline')]
        
            #[SchemaName('creative_deadline')]
        
        /** @var string|null ISO 8601 timestamp for creative upload deadline */
        protected $creativeDeadline;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/confirmed_at')]
        
            #[SchemaName('confirmed_at')]
        
        /** @var string|null ISO 8601 timestamp when the seller confirmed this media buy. A successful create_media_buy response constitutes order confirmation. */
        protected $confirmedAt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/cancellation')]
        
            #[SchemaName('cancellation')]
        
        /** @var GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370|null Cancellation metadata. Present only when status is 'canceled'. */
        protected $cancellation;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/revision')]
        
            #[SchemaName('revision')]
        
        /** @var int|null Current revision number. Pass this in update_media_buy for optimistic concurrency. */
        protected $revision;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/created_at')]
        
            #[SchemaName('created_at')]
        
        /** @var string|null Creation timestamp */
        protected $createdAt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/updated_at')]
        
            #[SchemaName('updated_at')]
        
        /** @var string|null Last update timestamp */
        protected $updatedAt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/valid_actions')]
        
            #[SchemaName('valid_actions')]
        
        /** @var MediaBuyValidAction[]|null Flat-vocabulary actions the buyer can perform on this media buy in its current state. Eliminates the need for agents to internalize the state machine — the seller declares what is permitted right now. Deprecated in favor of `available_actions[]`, which carries `mode` (self_serve / conditional_self_serve / requires_proposal / requires_approval), optional SLA, and optional `terms_ref`. Sellers SHOULD populate both during the 3.x deprecation window; consumers MUST prefer `available_actions[]` when both are present. Removed in 4.0. */
        protected $validActions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/available_actions')]
        
            #[SchemaName('available_actions')]
        
        /** @var GetMediaBuysResponse_MediaBuyAvailableAction[]|null Structured per-buy resolution of the actions buyer can perform right now. Authoritative — divergence from product `allowed_actions[]` is expected (negotiated terms, account tier, buy-level overrides live on the deal, not the product). Each entry carries the resolved `mode` (singular, since the buy has a concrete state), optional `sla` commitment, and optional `terms_ref`. Predicate queries via #4425's `requires` grammar address fields by dotted path, e.g. `available_actions.extend_flight.sla.response_max`. Absent SLA means no commitment, not zero commitment — callers composing duration predicates MUST also compose with `present: true` to avoid silently matching sellers who never declared one. */
        protected $availableActions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity')]
        
            #[SchemaName('webhook_activity')]
        
        /** @var GetMediaBuysResponse_WebhookActivityRecord[]|null Recent reporting and health webhook fires for the calling principal, most-recent first. Present only when `include_webhook_activity` was true in the request AND the seller surfaces this debug capability for this buy. Three-state semantics: (a) field omitted — seller does not surface webhook activity (either does not persist fire history, or `capabilities.media_buy.propagation_surfaces` excludes webhook surfaces, or the buy has no registered `push_notification_config` for this principal); (b) empty array `[]` — seller persists fire history but has fired nothing recent for this principal; (c) non-empty array — actual fire records. Sellers whose declared `propagation_surfaces` does not include `webhook` MUST omit the field. **Retention (normative):** sellers that surface this field MUST retain records for at least 30 days from each record's `completed_at` (for records still in `pending` status the clock runs from `fired_at` until the attempt terminates, then resets to 30 days from `completed_at` — so retry trails do not age out mid-flight). Sellers that cannot honor the 30-day floor MUST omit the field entirely rather than return a shorter window. Sellers MAY return fewer than `webhook_activity_limit` records when fewer fire records exist within the retention window. Sellers MUST emit one record per attempt — single-attempt successes appear as a single record with `attempt: 1`. Record shape is canonical across resources: see [`/schemas/core/webhook-activity-record.json`](/schemas/v3/core/webhook-activity-record.json) and snapshot-and-log.mdx § Webhook activity log pattern. */
        protected $webhookActivity;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/history')]
        
            #[SchemaName('history')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88[]|null Revision history entries, most recent first. Only present when include_history > 0 in the request. Each entry represents a state change or update to the media buy. Entries are append-only: sellers MUST NOT modify or delete previously emitted history entries. Callers MAY cache entries by revision number. Returns min(N, available entries) when include_history exceeds the total. */
        protected $history;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages')]
        
            #[SchemaName('packages')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_PackageStatus[] Packages within this media buy, augmented with creative approval status and optional delivery snapshots */
        protected $packages;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'account',
  2 => 'invoice_recipient',
  5 => 'impairments',
  6 => 'rejection_reason',
  9 => 'start_time',
  10 => 'end_time',
  11 => 'creative_deadline',
  12 => 'confirmed_at',
  13 => 'cancellation',
  14 => 'revision',
  15 => 'created_at',
  16 => 'updated_at',
  17 => 'valid_actions',
  18 => 'available_actions',
  19 => 'webhook_activity',
  20 => 'history',
  22 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMediaBuyId($rawModelDataInput);
            
        
            
                $this->processAccount($rawModelDataInput);
            
        
            
                $this->processInvoiceRecipient($rawModelDataInput);
            
        
            
                $this->processStatus($rawModelDataInput);
            
        
            
                $this->processHealth($rawModelDataInput);
            
        
            
                $this->processImpairments($rawModelDataInput);
            
        
            
                $this->processRejectionReason($rawModelDataInput);
            
        
            
                $this->processCurrency($rawModelDataInput);
            
        
            
                $this->processTotalBudget($rawModelDataInput);
            
        
            
                $this->processStartTime($rawModelDataInput);
            
        
            
                $this->processEndTime($rawModelDataInput);
            
        
            
                $this->processCreativeDeadline($rawModelDataInput);
            
        
            
                $this->processConfirmedAt($rawModelDataInput);
            
        
            
                $this->processCancellation($rawModelDataInput);
            
        
            
                $this->processRevision($rawModelDataInput);
            
        
            
                $this->processCreatedAt($rawModelDataInput);
            
        
            
                $this->processUpdatedAt($rawModelDataInput);
            
        
            
                $this->processValidActions($rawModelDataInput);
            
        
            
                $this->processAvailableActions($rawModelDataInput);
            
        
            
                $this->processWebhookActivity($rawModelDataInput);
            
        
            
                $this->processHistory($rawModelDataInput);
            
        
            
                $this->processPackages($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        
            
        

        
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
   'media_buy_id',
   'account',
   'invoice_recipient',
   'status',
   'health',
   'impairments',
   'rejection_reason',
   'currency',
   'total_budget',
   'start_time',
   'end_time',
   'creative_deadline',
   'confirmed_at',
   'cancellation',
   'revision',
   'created_at',
   'updated_at',
   'valid_actions',
   'available_actions',
   'webhook_activity',
   'history',
   'packages',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayMedia_Buysc7061807015269c9e91a3f7e8646b5dd',
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
                 * Get the value of media_buy_id.
                 *
                 * Seller's unique identifier for the media buy
                 *
                 * @return string
                 */
                public function getMediaBuyId(): string
                {
                    

                    return $this->mediaBuyId;
                }
            

            
                /**
                 * Set the value of media_buy_id.
                 *
                 * @param string $mediaBuyId Seller's unique identifier for the media buy
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMediaBuyId(
                    string $mediaBuyId
                ): static {
                    if ($this->mediaBuyId === $mediaBuyId) {
                        return $this;
                    }

                    $value = $modelData['media_buy_id'] = $mediaBuyId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMediaBuyId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->mediaBuyId = $value;
                    $this->_rawModelDataInput['media_buy_id'] = $mediaBuyId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property mediaBuyId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMediaBuyId(array $modelData): void
            {
                

                $value = array_key_exists('media_buy_id', $modelData) ? $modelData['media_buy_id'] : $this->mediaBuyId;

                

                $this->mediaBuyId = $this->validateMediaBuyId($value, $modelData);
            }

            /**
             * Execute all validators for the property mediaBuyId
             */
            protected function validateMediaBuyId($value, array $modelData)
            {
                
                    

if (!array_key_exists('media_buy_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'media_buy_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'media_buy_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of account.
                 *
                 * Account billed for this media buy
                 * @example {"description":"Direct advertiser account","data":{"account_id":"acc_acme_direct","name":"Acme","advertiser":"Acme Corp","brand":{"domain":"acme-corp.com"},"operator":"acme-corp.com","status":"active","billing":"operator","account_scope":"brand","rate_card":"acme_vip_2024","payment_terms":"net_30"}}
                 * @example {"description":"Advertiser account with agency billing proxy","data":{"account_id":"acc_acme_pinnacle","name":"Acme c/o Pinnacle","advertiser":"Acme Corp","billing_proxy":"Pinnacle Media","brand":{"domain":"acme-corp.com"},"operator":"pinnacle-media.com","status":"active","billing":"operator","account_scope":"operator_brand","rate_card":"acme_vip_2024","payment_terms":"net_60"}}
                 * @example {"description":"Agency as direct buyer","data":{"account_id":"acc_pinnacle","name":"Pinnacle","advertiser":"Pinnacle Media","brand":{"domain":"pinnacle-media.com"},"operator":"pinnacle-media.com","status":"active","billing":"operator","account_scope":"operator","rate_card":"agency_standard","payment_terms":"net_45"}}
                 * @example {"description":"Account with brand identity and operator (via sync_accounts)","data":{"account_id":"acc_spark_001","name":"Spark (via Pinnacle)","advertiser":"Nova Brands","status":"active","brand":{"domain":"nova-brands.com","brand_id":"spark"},"operator":"pinnacle-media.com","billing":"agent","account_scope":"operator_brand","payment_terms":"net_30"}}
                 * @example {"description":"Pending account awaiting seller approval","data":{"account_id":"acc_glow_pending","name":"Glow","advertiser":"Nova Brands","status":"pending_approval","brand":{"domain":"nova-brands.com","brand_id":"glow"},"operator":"pinnacle-media.com","billing":"operator","account_scope":"brand"}}
                 * @example {"description":"Agency operates but advertiser is billed directly with structured billing entity","data":{"account_id":"acc_acme_direct_bill","name":"Acme (billed direct)","advertiser":"Acme Corp","brand":{"domain":"acme-corp.com"},"operator":"pinnacle-media.com","status":"active","billing":"advertiser","billing_entity":{"legal_name":"Acme Corporation GmbH","vat_id":"DE987654321","address":{"street":"Hauptstrasse 42","city":"Munich","postal_code":"80331","country":"DE"},"contacts":[{"role":"billing","name":"AP Department","email":"billing@acme-corp.com"}]},"account_scope":"operator_brand","payment_terms":"net_30"}}
                 *
                 * @return GetMediaBuysResponse_Account|null
                 */
                public function getAccount(): ?GetMediaBuysResponse_Account
                {
                    

                    return $this->account;
                }
            

            
                /**
                 * Set the value of account.
                 *
                 * @param GetMediaBuysResponse_Account $account Account billed for this media buy
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccount(
                    GetMediaBuysResponse_Account $account
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
        return is_array($value) ? new GetMediaBuysResponse_Account($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Account)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'account',
  1 => 'GetMediaBuysResponse_Account',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of invoice_recipient.
                 *
                 * Per-buy invoice recipient when provided at creation. Confirms the seller accepted the billing override. Bank details are omitted (write-only).
                 * @example {"description":"German agency with full B2B details","data":{"legal_name":"Pinnacle Media GmbH","vat_id":"DE123456789","registration_number":"HRB 12345","address":{"street":"Friedrichstrasse 100","city":"Berlin","postal_code":"10117","country":"DE"},"contacts":[{"role":"billing","name":"Sam Adeyemi","email":"billing@pinnacle-media.com","phone":"+49 30 12345678"}],"bank":{"account_holder":"Pinnacle Media GmbH","iban":"DE89370400440532013000","bic":"COBADEFFXXX"}}}
                 * @example {"description":"US advertiser with EIN and domestic bank details","data":{"legal_name":"Acme Corporation","tax_id":"12-3456789","address":{"street":"123 Main St","city":"New York","postal_code":"10001","region":"NY","country":"US"},"contacts":[{"role":"billing","name":"AP Department","email":"ap@acme-corp.com"}],"bank":{"account_holder":"Acme Corporation","routing_number":"021000021","account_number":"123456789"}}}
                 *
                 * @return GetMediaBuysResponse_BusinessEntity|null
                 */
                public function getInvoiceRecipient(): ?GetMediaBuysResponse_BusinessEntity
                {
                    

                    return $this->invoiceRecipient;
                }
            

            
                /**
                 * Set the value of invoice_recipient.
                 *
                 * @param GetMediaBuysResponse_BusinessEntity $invoiceRecipient Per-buy invoice recipient when provided at creation. Confirms the seller accepted the billing override. Bank details are omitted (write-only).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setInvoiceRecipient(
                    GetMediaBuysResponse_BusinessEntity $invoiceRecipient
                ): static {
                    if ($this->invoiceRecipient === $invoiceRecipient) {
                        return $this;
                    }

                    $value = $modelData['invoice_recipient'] = $invoiceRecipient;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateInvoiceRecipient($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->invoiceRecipient = $value;
                    $this->_rawModelDataInput['invoice_recipient'] = $invoiceRecipient;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property invoiceRecipient
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processInvoiceRecipient(array $modelData): void
            {
                
                    if (!array_key_exists('invoice_recipient', $modelData) && $this->invoiceRecipient === null) {
                        return;
                    }
                

                $value = array_key_exists('invoice_recipient', $modelData) ? $modelData['invoice_recipient'] : $this->invoiceRecipient;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_BusinessEntity($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'invoice_recipient',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->invoiceRecipient = $this->validateInvoiceRecipient($value, $modelData);
            }

            /**
             * Execute all validators for the property invoiceRecipient
             */
            protected function validateInvoiceRecipient($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'invoice_recipient',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_BusinessEntity)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'invoice_recipient',
  1 => 'GetMediaBuysResponse_BusinessEntity',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of status.
                 *
                 * Status of a media buy.
                 *
                 * @return MediaBuyStatus
                 */
                public function getStatus(): MediaBuyStatus
                {
                    

                    return $this->status;
                }
            

            
                /**
                 * Set the value of status.
                 *
                 * @param string|MediaBuyStatus $status Status of a media buy.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStatus(
                    string | MediaBuyStatus $status
                ): static {
                    if ($this->status === $status) {
                        return $this;
                    }

                    $value = $modelData['status'] = $status;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStatus($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->status = $value;
                    $this->_rawModelDataInput['status'] = $status;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property status
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStatus(array $modelData): void
            {
                

                $value = array_key_exists('status', $modelData) ? $modelData['status'] : $this->status;

                

                $this->status = $this->validateStatus($value, $modelData);
            }

            /**
             * Execute all validators for the property status
             */
            protected function validateStatus($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status',
  1 => 'MediaBuyStatus',
)));
}

                
                    

if (!array_key_exists('status', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'status',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status',
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
  0 => 'status',
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
  0 => 'status',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'status',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of health.
                 *
                 * Dependency health of the media buy, orthogonal to `status`. `ok` (default) when no upstream resource that this buy depends on is in an offline state. `impaired` when at least one such resource (audience, creative, catalog_item, event_source, property) is offline and affects delivery for one or more packages — `impairments[]` MUST be non-empty in that case. On terminal-status buys, the seller MAY leave this field in whatever state held at the terminal transition. See lifecycle.mdx § Compliance and the impairment.coherence assertion.
                 *
                 * @return MediaBuyHealth|null
                 */
                public function getHealth(): string | MediaBuyHealth | null
                {
                    

                    return $this->health;
                }
            

            
                /**
                 * Set the value of health.
                 *
                 * @param string|MediaBuyHealth|null $health Dependency health of the media buy, orthogonal to `status`. `ok` (default) when no upstream resource that this buy depends on is in an offline state. `impaired` when at least one such resource (audience, creative, catalog_item, event_source, property) is offline and affects delivery for one or more packages — `impairments[]` MUST be non-empty in that case. On terminal-status buys, the seller MAY leave this field in whatever state held at the terminal transition. See lifecycle.mdx § Compliance and the impairment.coherence assertion.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHealth(
                    string | MediaBuyHealth | null $health
                ): static {
                    if ($this->health === $health) {
                        return $this;
                    }

                    $value = $modelData['health'] = $health;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHealth($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->health = $value;
                    $this->_rawModelDataInput['health'] = $health;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property health
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHealth(array $modelData): void
            {
                
                    if (!array_key_exists('health', $modelData) && $this->health === null) {
                        return;
                    }
                

                $value = array_key_exists('health', $modelData) ? $modelData['health'] : $this->health;

                

                $this->health = $this->validateHealth($value, $modelData);
            }

            /**
             * Execute all validators for the property health
             */
            protected function validateHealth($value, array $modelData)
            {
                
                    $this->validateHealth_ComposedProperty_91620abbc946dd6958d3932d1ca67229($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of impairments.
                 *
                 * Open impairments — upstream dependency state changes that affect delivery for at least one package on this buy. Empty when `health` is `ok`; non-empty iff `health` is `impaired` (health-iff rule on non-terminal buys). Sellers MUST add an entry on the next read after a referenced resource transitions to an offline state, and MUST remove the entry when the resource returns to a serviceable state or stops being a dependency (e.g., via assignment swap via update_media_buy). Staleness budget: the snapshot MUST reflect the impairment within 5 minutes of `impairment.observed_at` regardless of buyer poll cadence — sellers cannot rely on rare buyer polls to defer write propagation. See impairment.coherence assertion for the cross-resource invariant.
                 *
                 * @return GetMediaBuysResponse_Impairment[]|null
                 */
                public function getImpairments(): ?array
                {
                    

                    return $this->impairments;
                }
            

            
                /**
                 * Set the value of impairments.
                 *
                 * @param GetMediaBuysResponse_Impairment[] $impairments Open impairments — upstream dependency state changes that affect delivery for at least one package on this buy. Empty when `health` is `ok`; non-empty iff `health` is `impaired` (health-iff rule on non-terminal buys). Sellers MUST add an entry on the next read after a referenced resource transitions to an offline state, and MUST remove the entry when the resource returns to a serviceable state or stops being a dependency (e.g., via assignment swap via update_media_buy). Staleness budget: the snapshot MUST reflect the impairment within 5 minutes of `impairment.observed_at` regardless of buyer poll cadence — sellers cannot rely on rare buyer polls to defer write propagation. See impairment.coherence assertion for the cross-resource invariant.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setImpairments(
                    array $impairments
                ): static {
                    if ($this->impairments === $impairments) {
                        return $this;
                    }

                    $value = $modelData['impairments'] = $impairments;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateImpairments($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->impairments = $value;
                    $this->_rawModelDataInput['impairments'] = $impairments;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property impairments
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processImpairments(array $modelData): void
            {
                
                    if (!array_key_exists('impairments', $modelData) && $this->impairments === null) {
                        return;
                    }
                

                $value = array_key_exists('impairments', $modelData) ? $modelData['impairments'] : $this->impairments;

                

                $this->impairments = $this->validateImpairments($value, $modelData);
            }

            /**
             * Execute all validators for the property impairments
             */
            protected function validateImpairments($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'impairments',
  1 => 'array',
)));
}

                
                    $this->validateImpairments_ArrayItem_ae8a4f51178b656c147aca64cc78a973($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of rejection_reason.
                 *
                 * Reason provided by the seller when status is 'rejected'. Present only when status is 'rejected'.
                 *
                 * @return string|null
                 */
                public function getRejectionReason(): ?string
                {
                    

                    return $this->rejectionReason;
                }
            

            
                /**
                 * Set the value of rejection_reason.
                 *
                 * @param string $rejectionReason Reason provided by the seller when status is 'rejected'. Present only when status is 'rejected'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRejectionReason(
                    string $rejectionReason
                ): static {
                    if ($this->rejectionReason === $rejectionReason) {
                        return $this;
                    }

                    $value = $modelData['rejection_reason'] = $rejectionReason;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRejectionReason($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->rejectionReason = $value;
                    $this->_rawModelDataInput['rejection_reason'] = $rejectionReason;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property rejectionReason
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRejectionReason(array $modelData): void
            {
                
                    if (!array_key_exists('rejection_reason', $modelData) && $this->rejectionReason === null) {
                        return;
                    }
                

                $value = array_key_exists('rejection_reason', $modelData) ? $modelData['rejection_reason'] : $this->rejectionReason;

                

                $this->rejectionReason = $this->validateRejectionReason($value, $modelData);
            }

            /**
             * Execute all validators for the property rejectionReason
             */
            protected function validateRejectionReason($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'rejection_reason',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of currency.
                 *
                 * ISO 4217 currency code (e.g., USD, EUR, GBP) for monetary values at this media buy level. total_budget is always denominated in this currency. Package-level fields may override with package.currency.
                 *
                 * @return string
                 */
                public function getCurrency(): string
                {
                    

                    return $this->currency;
                }
            

            
                /**
                 * Set the value of currency.
                 *
                 * @param string $currency ISO 4217 currency code (e.g., USD, EUR, GBP) for monetary values at this media buy level. total_budget is always denominated in this currency. Package-level fields may override with package.currency.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCurrency(
                    string $currency
                ): static {
                    if ($this->currency === $currency) {
                        return $this;
                    }

                    $value = $modelData['currency'] = $currency;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCurrency($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->currency = $value;
                    $this->_rawModelDataInput['currency'] = $currency;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property currency
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCurrency(array $modelData): void
            {
                

                $value = array_key_exists('currency', $modelData) ? $modelData['currency'] : $this->currency;

                

                $this->currency = $this->validateCurrency($value, $modelData);
            }

            /**
             * Execute all validators for the property currency
             */
            protected function validateCurrency($value, array $modelData)
            {
                
                    

if (!array_key_exists('currency', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'currency',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'currency',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aXXszfSQv'), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'currency',
  1 => '^[A-Z]{3}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of total_budget.
                 *
                 * Total budget amount across all packages, denominated in media_buy.currency
                 *
                 * @return float
                 */
                public function getTotalBudget(): float
                {
                    

                    return $this->totalBudget;
                }
            

            
                /**
                 * Set the value of total_budget.
                 *
                 * @param float $totalBudget Total budget amount across all packages, denominated in media_buy.currency
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTotalBudget(
                    float $totalBudget
                ): static {
                    if ($this->totalBudget === $totalBudget) {
                        return $this;
                    }

                    $value = $modelData['total_budget'] = $totalBudget;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTotalBudget($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->totalBudget = $value;
                    $this->_rawModelDataInput['total_budget'] = $totalBudget;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property totalBudget
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTotalBudget(array $modelData): void
            {
                

                $value = array_key_exists('total_budget', $modelData) ? $modelData['total_budget'] : $this->totalBudget;

                $value = is_int($value) ? (float) $value : $value;

                $this->totalBudget = $this->validateTotalBudget($value, $modelData);
            }

            /**
             * Execute all validators for the property totalBudget
             */
            protected function validateTotalBudget($value, array $modelData)
            {
                
                    

if (!array_key_exists('total_budget', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'total_budget',
)));
}

                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'total_budget',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'total_budget',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of start_time.
                 *
                 * ISO 8601 flight start time for this media buy (earliest package start_time). Avoids requiring buyers to compute min(packages[].start_time).
                 *
                 * @return string|null
                 */
                public function getStartTime(): ?string
                {
                    

                    return $this->startTime;
                }
            

            
                /**
                 * Set the value of start_time.
                 *
                 * @param string $startTime ISO 8601 flight start time for this media buy (earliest package start_time). Avoids requiring buyers to compute min(packages[].start_time).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStartTime(
                    string $startTime
                ): static {
                    if ($this->startTime === $startTime) {
                        return $this;
                    }

                    $value = $modelData['start_time'] = $startTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStartTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->startTime = $value;
                    $this->_rawModelDataInput['start_time'] = $startTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property startTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStartTime(array $modelData): void
            {
                
                    if (!array_key_exists('start_time', $modelData) && $this->startTime === null) {
                        return;
                    }
                

                $value = array_key_exists('start_time', $modelData) ? $modelData['start_time'] : $this->startTime;

                

                $this->startTime = $this->validateStartTime($value, $modelData);
            }

            /**
             * Execute all validators for the property startTime
             */
            protected function validateStartTime($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'start_time',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'start_time',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of end_time.
                 *
                 * ISO 8601 flight end time for this media buy (latest package end_time). Avoids requiring buyers to compute max(packages[].end_time).
                 *
                 * @return string|null
                 */
                public function getEndTime(): ?string
                {
                    

                    return $this->endTime;
                }
            

            
                /**
                 * Set the value of end_time.
                 *
                 * @param string $endTime ISO 8601 flight end time for this media buy (latest package end_time). Avoids requiring buyers to compute max(packages[].end_time).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEndTime(
                    string $endTime
                ): static {
                    if ($this->endTime === $endTime) {
                        return $this;
                    }

                    $value = $modelData['end_time'] = $endTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEndTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->endTime = $value;
                    $this->_rawModelDataInput['end_time'] = $endTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property endTime
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEndTime(array $modelData): void
            {
                
                    if (!array_key_exists('end_time', $modelData) && $this->endTime === null) {
                        return;
                    }
                

                $value = array_key_exists('end_time', $modelData) ? $modelData['end_time'] : $this->endTime;

                

                $this->endTime = $this->validateEndTime($value, $modelData);
            }

            /**
             * Execute all validators for the property endTime
             */
            protected function validateEndTime($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'end_time',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'end_time',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of creative_deadline.
                 *
                 * ISO 8601 timestamp for creative upload deadline
                 *
                 * @return string|null
                 */
                public function getCreativeDeadline(): ?string
                {
                    

                    return $this->creativeDeadline;
                }
            

            
                /**
                 * Set the value of creative_deadline.
                 *
                 * @param string $creativeDeadline ISO 8601 timestamp for creative upload deadline
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreativeDeadline(
                    string $creativeDeadline
                ): static {
                    if ($this->creativeDeadline === $creativeDeadline) {
                        return $this;
                    }

                    $value = $modelData['creative_deadline'] = $creativeDeadline;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreativeDeadline($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->creativeDeadline = $value;
                    $this->_rawModelDataInput['creative_deadline'] = $creativeDeadline;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property creativeDeadline
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreativeDeadline(array $modelData): void
            {
                
                    if (!array_key_exists('creative_deadline', $modelData) && $this->creativeDeadline === null) {
                        return;
                    }
                

                $value = array_key_exists('creative_deadline', $modelData) ? $modelData['creative_deadline'] : $this->creativeDeadline;

                

                $this->creativeDeadline = $this->validateCreativeDeadline($value, $modelData);
            }

            /**
             * Execute all validators for the property creativeDeadline
             */
            protected function validateCreativeDeadline($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'creative_deadline',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'creative_deadline',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of confirmed_at.
                 *
                 * ISO 8601 timestamp when the seller confirmed this media buy. A successful create_media_buy response constitutes order confirmation.
                 *
                 * @return string|null
                 */
                public function getConfirmedAt(): ?string
                {
                    

                    return $this->confirmedAt;
                }
            

            
                /**
                 * Set the value of confirmed_at.
                 *
                 * @param string $confirmedAt ISO 8601 timestamp when the seller confirmed this media buy. A successful create_media_buy response constitutes order confirmation.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setConfirmedAt(
                    string $confirmedAt
                ): static {
                    if ($this->confirmedAt === $confirmedAt) {
                        return $this;
                    }

                    $value = $modelData['confirmed_at'] = $confirmedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateConfirmedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->confirmedAt = $value;
                    $this->_rawModelDataInput['confirmed_at'] = $confirmedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property confirmedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processConfirmedAt(array $modelData): void
            {
                
                    if (!array_key_exists('confirmed_at', $modelData) && $this->confirmedAt === null) {
                        return;
                    }
                

                $value = array_key_exists('confirmed_at', $modelData) ? $modelData['confirmed_at'] : $this->confirmedAt;

                

                $this->confirmedAt = $this->validateConfirmedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property confirmedAt
             */
            protected function validateConfirmedAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'confirmed_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'confirmed_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of cancellation.
                 *
                 * Cancellation metadata. Present only when status is 'canceled'.
                 *
                 * @return GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370|null
                 */
                public function getCancellation(): ?GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370
                {
                    

                    return $this->cancellation;
                }
            

            
                /**
                 * Set the value of cancellation.
                 *
                 * @param GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370 $cancellation Cancellation metadata. Present only when status is 'canceled'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCancellation(
                    GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370 $cancellation
                ): static {
                    if ($this->cancellation === $cancellation) {
                        return $this;
                    }

                    $value = $modelData['cancellation'] = $cancellation;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCancellation($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->cancellation = $value;
                    $this->_rawModelDataInput['cancellation'] = $cancellation;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property cancellation
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCancellation(array $modelData): void
            {
                
                    if (!array_key_exists('cancellation', $modelData) && $this->cancellation === null) {
                        return;
                    }
                

                $value = array_key_exists('cancellation', $modelData) ? $modelData['cancellation'] : $this->cancellation;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'cancellation',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->cancellation = $this->validateCancellation($value, $modelData);
            }

            /**
             * Execute all validators for the property cancellation
             */
            protected function validateCancellation($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'cancellation',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'cancellation',
  1 => 'GetMediaBuysResponse_Cancellationa1dbdcb8720933d462d20c1567bfc370',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of revision.
                 *
                 * Current revision number. Pass this in update_media_buy for optimistic concurrency.
                 *
                 * @return int|null
                 */
                public function getRevision(): ?int
                {
                    

                    return $this->revision;
                }
            

            
                /**
                 * Set the value of revision.
                 *
                 * @param int $revision Current revision number. Pass this in update_media_buy for optimistic concurrency.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRevision(
                    int $revision
                ): static {
                    if ($this->revision === $revision) {
                        return $this;
                    }

                    $value = $modelData['revision'] = $revision;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateRevision($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->revision = $value;
                    $this->_rawModelDataInput['revision'] = $revision;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property revision
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRevision(array $modelData): void
            {
                
                    if (!array_key_exists('revision', $modelData) && $this->revision === null) {
                        return;
                    }
                

                $value = array_key_exists('revision', $modelData) ? $modelData['revision'] : $this->revision;

                

                $this->revision = $this->validateRevision($value, $modelData);
            }

            /**
             * Execute all validators for the property revision
             */
            protected function validateRevision($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'revision',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'revision',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of created_at.
                 *
                 * Creation timestamp
                 *
                 * @return string|null
                 */
                public function getCreatedAt(): ?string
                {
                    

                    return $this->createdAt;
                }
            

            
                /**
                 * Set the value of created_at.
                 *
                 * @param string $createdAt Creation timestamp
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreatedAt(
                    string $createdAt
                ): static {
                    if ($this->createdAt === $createdAt) {
                        return $this;
                    }

                    $value = $modelData['created_at'] = $createdAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreatedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->createdAt = $value;
                    $this->_rawModelDataInput['created_at'] = $createdAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property createdAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreatedAt(array $modelData): void
            {
                
                    if (!array_key_exists('created_at', $modelData) && $this->createdAt === null) {
                        return;
                    }
                

                $value = array_key_exists('created_at', $modelData) ? $modelData['created_at'] : $this->createdAt;

                

                $this->createdAt = $this->validateCreatedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property createdAt
             */
            protected function validateCreatedAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'created_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'created_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of updated_at.
                 *
                 * Last update timestamp
                 *
                 * @return string|null
                 */
                public function getUpdatedAt(): ?string
                {
                    

                    return $this->updatedAt;
                }
            

            
                /**
                 * Set the value of updated_at.
                 *
                 * @param string $updatedAt Last update timestamp
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUpdatedAt(
                    string $updatedAt
                ): static {
                    if ($this->updatedAt === $updatedAt) {
                        return $this;
                    }

                    $value = $modelData['updated_at'] = $updatedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUpdatedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->updatedAt = $value;
                    $this->_rawModelDataInput['updated_at'] = $updatedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property updatedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUpdatedAt(array $modelData): void
            {
                
                    if (!array_key_exists('updated_at', $modelData) && $this->updatedAt === null) {
                        return;
                    }
                

                $value = array_key_exists('updated_at', $modelData) ? $modelData['updated_at'] : $this->updatedAt;

                

                $this->updatedAt = $this->validateUpdatedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property updatedAt
             */
            protected function validateUpdatedAt($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'updated_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'updated_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of valid_actions.
                 *
                 * Flat-vocabulary actions the buyer can perform on this media buy in its current state. Eliminates the need for agents to internalize the state machine — the seller declares what is permitted right now. Deprecated in favor of `available_actions[]`, which carries `mode` (self_serve / conditional_self_serve / requires_proposal / requires_approval), optional SLA, and optional `terms_ref`. Sellers SHOULD populate both during the 3.x deprecation window; consumers MUST prefer `available_actions[]` when both are present. Removed in 4.0.
                 *
                 * @return MediaBuyValidAction[]|null
                 */
                public function getValidActions(): array | MediaBuyValidAction | null
                {
                    

                    return $this->validActions;
                }
            

            
                /**
                 * Set the value of valid_actions.
                 *
                 * @param string[]|MediaBuyValidAction[]|null $validActions Flat-vocabulary actions the buyer can perform on this media buy in its current state. Eliminates the need for agents to internalize the state machine — the seller declares what is permitted right now. Deprecated in favor of `available_actions[]`, which carries `mode` (self_serve / conditional_self_serve / requires_proposal / requires_approval), optional SLA, and optional `terms_ref`. Sellers SHOULD populate both during the 3.x deprecation window; consumers MUST prefer `available_actions[]` when both are present. Removed in 4.0.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValidActions(
                    array | MediaBuyValidAction | null $validActions
                ): static {
                    if ($this->validActions === $validActions) {
                        return $this;
                    }

                    $value = $modelData['valid_actions'] = $validActions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateValidActions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->validActions = $value;
                    $this->_rawModelDataInput['valid_actions'] = $validActions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property validActions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processValidActions(array $modelData): void
            {
                
                    if (!array_key_exists('valid_actions', $modelData) && $this->validActions === null) {
                        return;
                    }
                

                $value = array_key_exists('valid_actions', $modelData) ? $modelData['valid_actions'] : $this->validActions;

                

                $this->validActions = $this->validateValidActions($value, $modelData);
            }

            /**
             * Execute all validators for the property validActions
             */
            protected function validateValidActions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'valid_actions',
  1 => 'array',
)));
}

                
                    $this->validateValidActions_ArrayItem_0cd542b70c18a4eba18e238b45bcf501($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of available_actions.
                 *
                 * Structured per-buy resolution of the actions buyer can perform right now. Authoritative — divergence from product `allowed_actions[]` is expected (negotiated terms, account tier, buy-level overrides live on the deal, not the product). Each entry carries the resolved `mode` (singular, since the buy has a concrete state), optional `sla` commitment, and optional `terms_ref`. Predicate queries via #4425's `requires` grammar address fields by dotted path, e.g. `available_actions.extend_flight.sla.response_max`. Absent SLA means no commitment, not zero commitment — callers composing duration predicates MUST also compose with `present: true` to avoid silently matching sellers who never declared one.
                 *
                 * @return GetMediaBuysResponse_MediaBuyAvailableAction[]|null
                 */
                public function getAvailableActions(): ?array
                {
                    

                    return $this->availableActions;
                }
            

            
                /**
                 * Set the value of available_actions.
                 *
                 * @param GetMediaBuysResponse_MediaBuyAvailableAction[] $availableActions Structured per-buy resolution of the actions buyer can perform right now. Authoritative — divergence from product `allowed_actions[]` is expected (negotiated terms, account tier, buy-level overrides live on the deal, not the product). Each entry carries the resolved `mode` (singular, since the buy has a concrete state), optional `sla` commitment, and optional `terms_ref`. Predicate queries via #4425's `requires` grammar address fields by dotted path, e.g. `available_actions.extend_flight.sla.response_max`. Absent SLA means no commitment, not zero commitment — callers composing duration predicates MUST also compose with `present: true` to avoid silently matching sellers who never declared one.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAvailableActions(
                    array $availableActions
                ): static {
                    if ($this->availableActions === $availableActions) {
                        return $this;
                    }

                    $value = $modelData['available_actions'] = $availableActions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAvailableActions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->availableActions = $value;
                    $this->_rawModelDataInput['available_actions'] = $availableActions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property availableActions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAvailableActions(array $modelData): void
            {
                
                    if (!array_key_exists('available_actions', $modelData) && $this->availableActions === null) {
                        return;
                    }
                

                $value = array_key_exists('available_actions', $modelData) ? $modelData['available_actions'] : $this->availableActions;

                

                $this->availableActions = $this->validateAvailableActions($value, $modelData);
            }

            /**
             * Execute all validators for the property availableActions
             */
            protected function validateAvailableActions($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'available_actions',
  1 => 'array',
)));
}

                
                    $this->validateAvailableActions_ArrayItem_642c83fdf7257009d02e91ebc0c6c522($value, $modelData);
                
                    

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
  0 => 'available_actions',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of webhook_activity.
                 *
                 * Recent reporting and health webhook fires for the calling principal, most-recent first. Present only when `include_webhook_activity` was true in the request AND the seller surfaces this debug capability for this buy. Three-state semantics: (a) field omitted — seller does not surface webhook activity (either does not persist fire history, or `capabilities.media_buy.propagation_surfaces` excludes webhook surfaces, or the buy has no registered `push_notification_config` for this principal); (b) empty array `[]` — seller persists fire history but has fired nothing recent for this principal; (c) non-empty array — actual fire records. Sellers whose declared `propagation_surfaces` does not include `webhook` MUST omit the field. **Retention (normative):** sellers that surface this field MUST retain records for at least 30 days from each record's `completed_at` (for records still in `pending` status the clock runs from `fired_at` until the attempt terminates, then resets to 30 days from `completed_at` — so retry trails do not age out mid-flight). Sellers that cannot honor the 30-day floor MUST omit the field entirely rather than return a shorter window. Sellers MAY return fewer than `webhook_activity_limit` records when fewer fire records exist within the retention window. Sellers MUST emit one record per attempt — single-attempt successes appear as a single record with `attempt: 1`. Record shape is canonical across resources: see [`/schemas/core/webhook-activity-record.json`](/schemas/v3/core/webhook-activity-record.json) and snapshot-and-log.mdx § Webhook activity log pattern.
                 *
                 * @return GetMediaBuysResponse_WebhookActivityRecord[]|null
                 */
                public function getWebhookActivity(): ?array
                {
                    

                    return $this->webhookActivity;
                }
            

            
                /**
                 * Set the value of webhook_activity.
                 *
                 * @param GetMediaBuysResponse_WebhookActivityRecord[] $webhookActivity Recent reporting and health webhook fires for the calling principal, most-recent first. Present only when `include_webhook_activity` was true in the request AND the seller surfaces this debug capability for this buy. Three-state semantics: (a) field omitted — seller does not surface webhook activity (either does not persist fire history, or `capabilities.media_buy.propagation_surfaces` excludes webhook surfaces, or the buy has no registered `push_notification_config` for this principal); (b) empty array `[]` — seller persists fire history but has fired nothing recent for this principal; (c) non-empty array — actual fire records. Sellers whose declared `propagation_surfaces` does not include `webhook` MUST omit the field. **Retention (normative):** sellers that surface this field MUST retain records for at least 30 days from each record's `completed_at` (for records still in `pending` status the clock runs from `fired_at` until the attempt terminates, then resets to 30 days from `completed_at` — so retry trails do not age out mid-flight). Sellers that cannot honor the 30-day floor MUST omit the field entirely rather than return a shorter window. Sellers MAY return fewer than `webhook_activity_limit` records when fewer fire records exist within the retention window. Sellers MUST emit one record per attempt — single-attempt successes appear as a single record with `attempt: 1`. Record shape is canonical across resources: see [`/schemas/core/webhook-activity-record.json`](/schemas/v3/core/webhook-activity-record.json) and snapshot-and-log.mdx § Webhook activity log pattern.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setWebhookActivity(
                    array $webhookActivity
                ): static {
                    if ($this->webhookActivity === $webhookActivity) {
                        return $this;
                    }

                    $value = $modelData['webhook_activity'] = $webhookActivity;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateWebhookActivity($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->webhookActivity = $value;
                    $this->_rawModelDataInput['webhook_activity'] = $webhookActivity;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property webhookActivity
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processWebhookActivity(array $modelData): void
            {
                
                    if (!array_key_exists('webhook_activity', $modelData) && $this->webhookActivity === null) {
                        return;
                    }
                

                $value = array_key_exists('webhook_activity', $modelData) ? $modelData['webhook_activity'] : $this->webhookActivity;

                

                $this->webhookActivity = $this->validateWebhookActivity($value, $modelData);
            }

            /**
             * Execute all validators for the property webhookActivity
             */
            protected function validateWebhookActivity($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'webhook_activity',
  1 => 'array',
)));
}

                
                    $this->validateWebhookActivity_ArrayItem_14d44acc917b959d2414343542b9b4f4($value, $modelData);
                
                    

if (is_array($value) && count($value) > 200) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MaxItemsException($value ?? null, ...array (
  0 => 'webhook_activity',
  1 => 200,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of history.
                 *
                 * Revision history entries, most recent first. Only present when include_history > 0 in the request. Each entry represents a state change or update to the media buy. Entries are append-only: sellers MUST NOT modify or delete previously emitted history entries. Callers MAY cache entries by revision number. Returns min(N, available entries) when include_history exceeds the total.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88[]|null
                 */
                public function getHistory(): ?array
                {
                    

                    return $this->history;
                }
            

            
                /**
                 * Set the value of history.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88[] $history Revision history entries, most recent first. Only present when include_history > 0 in the request. Each entry represents a state change or update to the media buy. Entries are append-only: sellers MUST NOT modify or delete previously emitted history entries. Callers MAY cache entries by revision number. Returns min(N, available entries) when include_history exceeds the total.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHistory(
                    array $history
                ): static {
                    if ($this->history === $history) {
                        return $this;
                    }

                    $value = $modelData['history'] = $history;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHistory($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->history = $value;
                    $this->_rawModelDataInput['history'] = $history;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property history
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHistory(array $modelData): void
            {
                
                    if (!array_key_exists('history', $modelData) && $this->history === null) {
                        return;
                    }
                

                $value = array_key_exists('history', $modelData) ? $modelData['history'] : $this->history;

                

                $this->history = $this->validateHistory($value, $modelData);
            }

            /**
             * Execute all validators for the property history
             */
            protected function validateHistory($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'history',
  1 => 'array',
)));
}

                
                    $this->validateHistory_ArrayItem_1ee9f6b7aced7b6fc699b705c18a68f7($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of packages.
                 *
                 * Packages within this media buy, augmented with creative approval status and optional delivery snapshots
                 *
                 * @return GetMediaBuysResponse_PackageStatus[]
                 */
                public function getPackages(): array
                {
                    

                    return $this->packages;
                }
            

            
                /**
                 * Set the value of packages.
                 *
                 * @param GetMediaBuysResponse_PackageStatus[] $packages Packages within this media buy, augmented with creative approval status and optional delivery snapshots
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPackages(
                    array $packages
                ): static {
                    if ($this->packages === $packages) {
                        return $this;
                    }

                    $value = $modelData['packages'] = $packages;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePackages($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->packages = $value;
                    $this->_rawModelDataInput['packages'] = $packages;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property packages
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPackages(array $modelData): void
            {
                

                $value = array_key_exists('packages', $modelData) ? $modelData['packages'] : $this->packages;

                

                $this->packages = $this->validatePackages($value, $modelData);
            }

            /**
             * Execute all validators for the property packages
             */
            protected function validatePackages($value, array $modelData)
            {
                
                    

if (!array_key_exists('packages', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'packages',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'packages',
  1 => 'array',
)));
}

                
                    $this->validatePackages_ArrayItem_b5b8d6cb6a95c1e17c1a2673e1f7c48a($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @return GetMediaBuysResponse_ExtensionObject|null
                 */
                public function getExt(): ?GetMediaBuysResponse_ExtensionObject
                {
                    

                    return $this->ext;
                }
            

            
                /**
                 * Set the value of ext.
                 *
                 * @param GetMediaBuysResponse_ExtensionObject $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setExt(
                    GetMediaBuysResponse_ExtensionObject $ext
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
        return is_array($value) ? new GetMediaBuysResponse_ExtensionObject($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ExtensionObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'ext',
  1 => 'GetMediaBuysResponse_ExtensionObject',
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
    

    
        
            if (array_key_exists('media_buy_id', $modelData) &&
                $modelData['media_buy_id'] !== $this->mediaBuyId
            ) {
                

                $rollbackValues['mediaBuyId'] = $this->mediaBuyId;
                $this->processMediaBuyId($modelData);
            }
        
    
        
            if (array_key_exists('account', $modelData) &&
                $modelData['account'] !== $this->account
            ) {
                

                $rollbackValues['account'] = $this->account;
                $this->processAccount($modelData);
            }
        
    
        
            if (array_key_exists('invoice_recipient', $modelData) &&
                $modelData['invoice_recipient'] !== $this->invoiceRecipient
            ) {
                

                $rollbackValues['invoiceRecipient'] = $this->invoiceRecipient;
                $this->processInvoiceRecipient($modelData);
            }
        
    
        
            if (array_key_exists('status', $modelData) &&
                $modelData['status'] !== $this->status
            ) {
                

                $rollbackValues['status'] = $this->status;
                $this->processStatus($modelData);
            }
        
    
        
            if (array_key_exists('health', $modelData) &&
                $modelData['health'] !== $this->health
            ) {
                

                $rollbackValues['health'] = $this->health;
                $this->processHealth($modelData);
            }
        
    
        
            if (array_key_exists('impairments', $modelData) &&
                $modelData['impairments'] !== $this->impairments
            ) {
                

                $rollbackValues['impairments'] = $this->impairments;
                $this->processImpairments($modelData);
            }
        
    
        
            if (array_key_exists('rejection_reason', $modelData) &&
                $modelData['rejection_reason'] !== $this->rejectionReason
            ) {
                

                $rollbackValues['rejectionReason'] = $this->rejectionReason;
                $this->processRejectionReason($modelData);
            }
        
    
        
            if (array_key_exists('currency', $modelData) &&
                $modelData['currency'] !== $this->currency
            ) {
                

                $rollbackValues['currency'] = $this->currency;
                $this->processCurrency($modelData);
            }
        
    
        
            if (array_key_exists('total_budget', $modelData) &&
                $modelData['total_budget'] !== $this->totalBudget
            ) {
                

                $rollbackValues['totalBudget'] = $this->totalBudget;
                $this->processTotalBudget($modelData);
            }
        
    
        
            if (array_key_exists('start_time', $modelData) &&
                $modelData['start_time'] !== $this->startTime
            ) {
                

                $rollbackValues['startTime'] = $this->startTime;
                $this->processStartTime($modelData);
            }
        
    
        
            if (array_key_exists('end_time', $modelData) &&
                $modelData['end_time'] !== $this->endTime
            ) {
                

                $rollbackValues['endTime'] = $this->endTime;
                $this->processEndTime($modelData);
            }
        
    
        
            if (array_key_exists('creative_deadline', $modelData) &&
                $modelData['creative_deadline'] !== $this->creativeDeadline
            ) {
                

                $rollbackValues['creativeDeadline'] = $this->creativeDeadline;
                $this->processCreativeDeadline($modelData);
            }
        
    
        
            if (array_key_exists('confirmed_at', $modelData) &&
                $modelData['confirmed_at'] !== $this->confirmedAt
            ) {
                

                $rollbackValues['confirmedAt'] = $this->confirmedAt;
                $this->processConfirmedAt($modelData);
            }
        
    
        
            if (array_key_exists('cancellation', $modelData) &&
                $modelData['cancellation'] !== $this->cancellation
            ) {
                

                $rollbackValues['cancellation'] = $this->cancellation;
                $this->processCancellation($modelData);
            }
        
    
        
            if (array_key_exists('revision', $modelData) &&
                $modelData['revision'] !== $this->revision
            ) {
                

                $rollbackValues['revision'] = $this->revision;
                $this->processRevision($modelData);
            }
        
    
        
            if (array_key_exists('created_at', $modelData) &&
                $modelData['created_at'] !== $this->createdAt
            ) {
                

                $rollbackValues['createdAt'] = $this->createdAt;
                $this->processCreatedAt($modelData);
            }
        
    
        
            if (array_key_exists('updated_at', $modelData) &&
                $modelData['updated_at'] !== $this->updatedAt
            ) {
                

                $rollbackValues['updatedAt'] = $this->updatedAt;
                $this->processUpdatedAt($modelData);
            }
        
    
        
            if (array_key_exists('valid_actions', $modelData) &&
                $modelData['valid_actions'] !== $this->validActions
            ) {
                

                $rollbackValues['validActions'] = $this->validActions;
                $this->processValidActions($modelData);
            }
        
    
        
            if (array_key_exists('available_actions', $modelData) &&
                $modelData['available_actions'] !== $this->availableActions
            ) {
                

                $rollbackValues['availableActions'] = $this->availableActions;
                $this->processAvailableActions($modelData);
            }
        
    
        
            if (array_key_exists('webhook_activity', $modelData) &&
                $modelData['webhook_activity'] !== $this->webhookActivity
            ) {
                

                $rollbackValues['webhookActivity'] = $this->webhookActivity;
                $this->processWebhookActivity($modelData);
            }
        
    
        
            if (array_key_exists('history', $modelData) &&
                $modelData['history'] !== $this->history
            ) {
                

                $rollbackValues['history'] = $this->history;
                $this->processHistory($modelData);
            }
        
    
        
            if (array_key_exists('packages', $modelData) &&
                $modelData['packages'] !== $this->packages
            ) {
                

                $rollbackValues['packages'] = $this->packages;
                $this->processPackages($modelData);
            }
        
    
        
            if (array_key_exists('ext', $modelData) &&
                $modelData['ext'] !== $this->ext
            ) {
                

                $rollbackValues['ext'] = $this->ext;
                $this->processExt($modelData);
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
 * serialize the property status
 */
protected function serializeStatus()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->status, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyStatus',
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


private function validateHealth_ComposedProperty_91620abbc946dd6958d3932d1ca67229(&$value, $modelData): void {
                    
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

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                

                
                    

if ($value instanceof UnitEnum && !($value instanceof MediaBuyHealth)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'health',
  1 => 'MediaBuyHealth',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'health',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'ok',
   'impaired',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'health',
  1 => 
  array (
    0 => 'ok',
    1 => 'impaired',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyHealth',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'health',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'health',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_1c618($originalModelData, $value));
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
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AllOfException($value ?? null, ...array (
  0 => 'health',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }

private function validateImpairments_ArrayItem_ae8a4f51178b656c147aca64cc78a973(&$value, $modelData): void {
                    $invalidItems_1e25435e2b3386d0058687a611733566 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_1e25435e2b3386d0058687a611733566, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Impairment($value) : $value;
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
  0 => 'item of array impairments',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Impairment)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array impairments',
  1 => 'GetMediaBuysResponse_Impairment',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_1e25435e2b3386d0058687a611733566[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_1e25435e2b3386d0058687a611733566[$index])
                ? $invalidItems_1e25435e2b3386d0058687a611733566[$index][] = $e
                : $invalidItems_1e25435e2b3386d0058687a611733566[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_1e25435e2b3386d0058687a611733566);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'impairments',
  1 => $invalidItems_1e25435e2b3386d0058687a611733566,
)));
                    }
                }

private function validateValidActions_ArrayItem_0cd542b70c18a4eba18e238b45bcf501(&$value, $modelData): void {
                    $invalidItems_ff187cb66261896618b38535505796c0 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_ff187cb66261896618b38535505796c0, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof MediaBuyValidAction)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array valid_actions',
  1 => 'MediaBuyValidAction',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array valid_actions',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'pause',
   'resume',
   'cancel',
   'extend_flight',
   'shorten_flight',
   'update_flight_dates',
   'increase_budget',
   'decrease_budget',
   'reallocate_budget',
   'update_targeting',
   'update_pacing',
   'update_frequency_caps',
   'replace_creative',
   'update_creative_assignments',
   'remove_creative',
   'add_packages',
   'remove_packages',
   'update_budget',
   'update_dates',
   'update_packages',
   'sync_creatives',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array valid_actions',
  1 => 
  array (
    0 => 'pause',
    1 => 'resume',
    2 => 'cancel',
    3 => 'extend_flight',
    4 => 'shorten_flight',
    5 => 'update_flight_dates',
    6 => 'increase_budget',
    7 => 'decrease_budget',
    8 => 'reallocate_budget',
    9 => 'update_targeting',
    10 => 'update_pacing',
    11 => 'update_frequency_caps',
    12 => 'replace_creative',
    13 => 'update_creative_assignments',
    14 => 'remove_creative',
    15 => 'add_packages',
    16 => 'remove_packages',
    17 => 'update_budget',
    18 => 'update_dates',
    19 => 'update_packages',
    20 => 'sync_creatives',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MediaBuyValidAction',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array valid_actions',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array valid_actions',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_ff187cb66261896618b38535505796c0[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_ff187cb66261896618b38535505796c0[$index])
                ? $invalidItems_ff187cb66261896618b38535505796c0[$index][] = $e
                : $invalidItems_ff187cb66261896618b38535505796c0[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_ff187cb66261896618b38535505796c0);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'valid_actions',
  1 => $invalidItems_ff187cb66261896618b38535505796c0,
)));
                    }
                }

private function validateAvailableActions_ArrayItem_642c83fdf7257009d02e91ebc0c6c522(&$value, $modelData): void {
                    $invalidItems_c76f3ac8bd4100464dc98feb66a30ff1 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_c76f3ac8bd4100464dc98feb66a30ff1, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_MediaBuyAvailableAction($value) : $value;
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
  0 => 'item of array available_actions',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_MediaBuyAvailableAction)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array available_actions',
  1 => 'GetMediaBuysResponse_MediaBuyAvailableAction',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_c76f3ac8bd4100464dc98feb66a30ff1[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_c76f3ac8bd4100464dc98feb66a30ff1[$index])
                ? $invalidItems_c76f3ac8bd4100464dc98feb66a30ff1[$index][] = $e
                : $invalidItems_c76f3ac8bd4100464dc98feb66a30ff1[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_c76f3ac8bd4100464dc98feb66a30ff1);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'available_actions',
  1 => $invalidItems_c76f3ac8bd4100464dc98feb66a30ff1,
)));
                    }
                }

private function validateWebhookActivity_ArrayItem_14d44acc917b959d2414343542b9b4f4(&$value, $modelData): void {
                    $invalidItems_6ce0db1f07a2ba8814fbc149e5636a11 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_6ce0db1f07a2ba8814fbc149e5636a11, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_WebhookActivityRecord($value) : $value;
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
  0 => 'item of array webhook_activity',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_WebhookActivityRecord)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array webhook_activity',
  1 => 'GetMediaBuysResponse_WebhookActivityRecord',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_6ce0db1f07a2ba8814fbc149e5636a11[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_6ce0db1f07a2ba8814fbc149e5636a11[$index])
                ? $invalidItems_6ce0db1f07a2ba8814fbc149e5636a11[$index][] = $e
                : $invalidItems_6ce0db1f07a2ba8814fbc149e5636a11[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_6ce0db1f07a2ba8814fbc149e5636a11);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'webhook_activity',
  1 => $invalidItems_6ce0db1f07a2ba8814fbc149e5636a11,
)));
                    }
                }

private function validateHistory_ArrayItem_1ee9f6b7aced7b6fc699b705c18a68f7(&$value, $modelData): void {
                    $invalidItems_9ce8ae11d928997cefa6209db38c14a7 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_9ce8ae11d928997cefa6209db38c14a7, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88($value) : $value;
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
  0 => 'item of array history',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array history',
  1 => 'GetMediaBuysResponse_ItemOfArrayHistorye30b0d87589f81ed4e27bbb6f1932e88',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_9ce8ae11d928997cefa6209db38c14a7[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_9ce8ae11d928997cefa6209db38c14a7[$index])
                ? $invalidItems_9ce8ae11d928997cefa6209db38c14a7[$index][] = $e
                : $invalidItems_9ce8ae11d928997cefa6209db38c14a7[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_9ce8ae11d928997cefa6209db38c14a7);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'history',
  1 => $invalidItems_9ce8ae11d928997cefa6209db38c14a7,
)));
                    }
                }

private function validatePackages_ArrayItem_b5b8d6cb6a95c1e17c1a2673e1f7c48a(&$value, $modelData): void {
                    $invalidItems_4208a43a9473f7b4480afb843c7357fd = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4208a43a9473f7b4480afb843c7357fd, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_PackageStatus($value) : $value;
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
  0 => 'item of array packages',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_PackageStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array packages',
  1 => 'GetMediaBuysResponse_PackageStatus',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_4208a43a9473f7b4480afb843c7357fd[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4208a43a9473f7b4480afb843c7357fd[$index])
                ? $invalidItems_4208a43a9473f7b4480afb843c7357fd[$index][] = $e
                : $invalidItems_4208a43a9473f7b4480afb843c7357fd[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_4208a43a9473f7b4480afb843c7357fd);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'packages',
  1 => $invalidItems_4208a43a9473f7b4480afb843c7357fd,
)));
                    }
                }


                        private function _getModifiedValues_1c618(array $originalModelData, object $nestedCompositionObject): array {
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


}

// @codeCoverageIgnoreEnd
