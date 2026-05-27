<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\NotificationType;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

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

    use AdCP\MediaBuy\Enums\AuthenticationScheme;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_ImpairmentResource_Type;

    use AdCP\MediaBuy\Enums\ImpairmentReasonCode;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use AdCP\MediaBuy\Enums\CanceledBy;

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_WebhookActivityRecord
 * @package AdCP\MediaBuy 
 *
 * Single webhook delivery attempt surfaced to a calling principal as a buyer-side debug aid. Represents one HTTP attempt of a logical webhook fire from the seller to the buyer's registered endpoint — retries of the same logical fire share `idempotency_key` and differ by `attempt`. This is the canonical record shape for any AdCP resource that exposes a `webhook_activity[]` log on its read API; see snapshot-and-log.mdx § Webhook activity log pattern for the full normative contract (scoping, retention, three-state presence, request-field conventions).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items')]

class GetMediaBuysResponse_WebhookActivityRecord implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/idempotency_key')]
        
            #[SchemaName('idempotency_key')]
        
            #[Required]
        
        /** @var string Equals the `idempotency_key` carried in the webhook payload itself (see docs/building/by-layer/L3/webhooks.mdx § Dedup by `idempotency_key`). Stable across retry attempts of the same logical fire — retries with `attempt` > 1 reuse this key. Buyers correlate this surface with their own endpoint logs via this exact field; the spec deliberately reuses the payload key rather than minting a parallel `delivery_id` so callers do not need a join table. Format is sender-defined; callers MUST treat as opaque. */
        protected $idempotencyKey;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/subscriber_id')]
        
            #[SchemaName('subscriber_id')]
        
        /** @var string|null Identifies which registered webhook subscriber received this fire. **Required on records from account-anchored notification channels** (`notification_configs[]` registered via `sync_accounts`) — every subscriber has a `subscriber_id` at registration time, the seller MUST echo it on every fire and every activity record. **Optional on records from per-resource push channels** (`push_notification_config` on a media buy or task) — the calling principal is unambiguous in single-subscriber configurations and the field MAY be omitted; sellers MUST populate it once `reporting_webhook` adopts multi-subscriber (per #3009 in AdCP 4.0). Buyers MUST NOT use absence as a signal that no other subscribers exist; that information is not exposed by this surface. */
        protected $subscriberId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/fired_at')]
        
            #[SchemaName('fired_at')]
        
            #[Required]
        
        /** @var string ISO 8601 timestamp when the seller initiated the HTTP request for this attempt. */
        protected $firedAt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/completed_at')]
        
            #[SchemaName('completed_at')]
        
        /** @var string|null ISO 8601 timestamp when the seller observed the response (or terminal timeout / connection error — for `timeout` and `connection_error` outcomes, `completed_at` is set to the moment the seller declared the attempt terminal). Explicitly `null` when the attempt is still in flight or queued for retry (status `pending`); MUST be set as `null` rather than omitted so callers can distinguish 'still in flight' from 'field missing'. */
        protected $completedAt;
    
        
            #[JsonPointer('/$defs/NotificationType')]
        
            #[SchemaName('notification_type')]
        
            #[Required]
        
        /** @var NotificationType Type of push notification fired by a seller agent. Media-buy-anchored notifications (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) fire against a media buy's `push_notification_config`. Account-anchored notifications (`creative.status_changed`, `creative.purged`) fire against an account's `notification_configs[]` entries whose `event_types` include the value — these outlive any single media buy and anchor at the account. New notification types added to this enum MUST declare their anchor (media-buy or account) and per-type `notification_id` semantics in the enumDescription. Sellers MUST reject `notification_configs[]` entries whose `event_types` include any media-buy-anchored type, and MUST reject `push_notification_config` registrations for account-anchored types. */
        protected $notificationType;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/sequence_number')]
        
            #[SchemaName('sequence_number')]
        
        /** @var int|null Sequence number from the webhook payload. Surfaced here so the buyer can spot stale-sequence drops and gaps without correlating against their own endpoint log. Absent for notification types that do not carry a sequence number. */
        protected $sequenceNumber;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/attempt')]
        
            #[SchemaName('attempt')]
        
            #[Required]
        
        /** @var int 1-indexed retry counter for this logical fire. Initial fire is attempt=1; retries increment. Sellers MUST emit one record per attempt, so a successful first-attempt fire appears as a single record with `attempt: 1` and a 3-attempt retry trail appears as three records sharing `idempotency_key`. */
        protected $attempt;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/status')]
        
            #[SchemaName('status')]
        
            #[Required]
        
        /** @var GetMediaBuysResponse_WebhookActivityRecordStatus Outcome of this attempt. `success` — response received with 2xx (`http_status_code` populated). `failed` — response received with non-2xx (`http_status_code` populated). `timeout` — no response within the seller's configured timeout (`http_status_code` null). `connection_error` — DNS / TLS / socket failure before any HTTP response (`http_status_code` null). `pending` — attempt is in flight or queued for retry (`completed_at` null, `http_status_code` null). The `timeout` / `connection_error` split is intentional and operationally distinct: `timeout` typically signals a slow / overloaded buyer endpoint, `connection_error` typically signals it is unreachable or misconfigured. */
        protected $status;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/url')]
        
            #[SchemaName('url')]
        
            #[Required]
        
        /** @var string Target URL for this fire. Query string and fragment MUST be stripped before surfacing — buyers commonly stash bearer tokens in the query string and sellers MUST NOT echo those back through this debug surface. Sellers SHOULD additionally redact path segments matching obvious secret patterns (e.g., a path segment that is high-entropy random material or matches a UUID / token format). Buyers matching this against their own configured URL should compare by origin + path; query strings will not match and that mismatch is expected. */
        protected $url;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/http_status_code')]
        
            #[SchemaName('http_status_code')]
        
        /** @var int|null HTTP status code returned by the buyer's endpoint. Explicitly `null` when no HTTP response was received (status `timeout`, `connection_error`, or `pending`); MUST be set as `null` rather than omitted. */
        protected $httpStatusCode;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/response_time_ms')]
        
            #[SchemaName('response_time_ms')]
        
        /** @var int|null Wall-clock latency between request send and response receipt, in milliseconds. Explicitly `null` when the attempt did not complete (`timeout`, `connection_error`, `pending`); MUST be set as `null` rather than omitted. */
        protected $responseTimeMs;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/payload_size_bytes')]
        
            #[SchemaName('payload_size_bytes')]
        
        /** @var int|null Size of the request body the seller sent, in bytes. Useful for diagnosing oversized-payload rejections from the buyer's gateway. */
        protected $payloadSizeBytes;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/error_message')]
        
            #[SchemaName('error_message')]
        
        /** @var string|null Short human-readable server-side classification of why this attempt did not succeed (e.g., `connection refused`, `TLS handshake timeout`, `HTTP 503 Service Unavailable`). Explicitly `null` for `success` (MUST be set as `null` rather than omitted). Sellers MUST NOT include request headers, request body content, or response body content in this field — payload surfacing is reserved for a future `include_webhook_payloads` extension and is subject to stricter access controls. Sellers SHOULD also avoid including buyer-endpoint internal hostnames, stack traces, or other implementation detail leaked by the response — keep it a stable classification string. */
        protected $errorMessage;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/webhook_activity/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Resource-specific extension slot. Adopters MAY surface a resource-specific cross-reference (e.g., `creative_id` on a creative-lifecycle record, `media_buy_id` on a record nested inside an account-level read) under `ext` rather than adding top-level fields — the canonical record shape stays uniform across resources and the `ext` envelope absorbs per-resource needs. Top-level extensions are not permitted (`additionalProperties: false`). */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'subscriber_id',
  3 => 'completed_at',
  5 => 'sequence_number',
  9 => 'http_status_code',
  10 => 'response_time_ms',
  11 => 'payload_size_bytes',
  12 => 'error_message',
  13 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_WebhookActivityRecord constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processIdempotencyKey($rawModelDataInput);
            
        
            
                $this->processSubscriberId($rawModelDataInput);
            
        
            
                $this->processFiredAt($rawModelDataInput);
            
        
            
                $this->processCompletedAt($rawModelDataInput);
            
        
            
                $this->processNotificationType($rawModelDataInput);
            
        
            
                $this->processSequenceNumber($rawModelDataInput);
            
        
            
                $this->processAttempt($rawModelDataInput);
            
        
            
                $this->processStatus($rawModelDataInput);
            
        
            
                $this->processUrl($rawModelDataInput);
            
        
            
                $this->processHttpStatusCode($rawModelDataInput);
            
        
            
                $this->processResponseTimeMs($rawModelDataInput);
            
        
            
                $this->processPayloadSizeBytes($rawModelDataInput);
            
        
            
                $this->processErrorMessage($rawModelDataInput);
            
        
            
                $this->processExt($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
    }

    
        protected function executeBaseValidators(array &$modelData): void
        {
            $value = &$modelData;

            
                

if ($additionalProperties =  (static function () use ($modelData): array {
    $additionalProperties = array_diff(array_keys($modelData), array (
   'idempotency_key',
   'subscriber_id',
   'fired_at',
   'completed_at',
   'notification_type',
   'sequence_number',
   'attempt',
   'status',
   'url',
   'http_status_code',
   'response_time_ms',
   'payload_size_bytes',
   'error_message',
   'ext',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_WebhookActivityRecord',
  1 => $additionalProperties,
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
                 * Get the value of idempotency_key.
                 *
                 * Equals the `idempotency_key` carried in the webhook payload itself (see docs/building/by-layer/L3/webhooks.mdx § Dedup by `idempotency_key`). Stable across retry attempts of the same logical fire — retries with `attempt` > 1 reuse this key. Buyers correlate this surface with their own endpoint logs via this exact field; the spec deliberately reuses the payload key rather than minting a parallel `delivery_id` so callers do not need a join table. Format is sender-defined; callers MUST treat as opaque.
                 *
                 * @return string
                 */
                public function getIdempotencyKey(): string
                {
                    

                    return $this->idempotencyKey;
                }
            

            
                /**
                 * Set the value of idempotency_key.
                 *
                 * @param string $idempotencyKey Equals the `idempotency_key` carried in the webhook payload itself (see docs/building/by-layer/L3/webhooks.mdx § Dedup by `idempotency_key`). Stable across retry attempts of the same logical fire — retries with `attempt` > 1 reuse this key. Buyers correlate this surface with their own endpoint logs via this exact field; the spec deliberately reuses the payload key rather than minting a parallel `delivery_id` so callers do not need a join table. Format is sender-defined; callers MUST treat as opaque.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setIdempotencyKey(
                    string $idempotencyKey
                ): static {
                    if ($this->idempotencyKey === $idempotencyKey) {
                        return $this;
                    }

                    $value = $modelData['idempotency_key'] = $idempotencyKey;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateIdempotencyKey($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->idempotencyKey = $value;
                    $this->_rawModelDataInput['idempotency_key'] = $idempotencyKey;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property idempotencyKey
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processIdempotencyKey(array $modelData): void
            {
                

                $value = array_key_exists('idempotency_key', $modelData) ? $modelData['idempotency_key'] : $this->idempotencyKey;

                

                $this->idempotencyKey = $this->validateIdempotencyKey($value, $modelData);
            }

            /**
             * Execute all validators for the property idempotencyKey
             */
            protected function validateIdempotencyKey($value, array $modelData)
            {
                
                    

if (!array_key_exists('idempotency_key', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'idempotency_key',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'idempotency_key',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of subscriber_id.
                 *
                 * Identifies which registered webhook subscriber received this fire. **Required on records from account-anchored notification channels** (`notification_configs[]` registered via `sync_accounts`) — every subscriber has a `subscriber_id` at registration time, the seller MUST echo it on every fire and every activity record. **Optional on records from per-resource push channels** (`push_notification_config` on a media buy or task) — the calling principal is unambiguous in single-subscriber configurations and the field MAY be omitted; sellers MUST populate it once `reporting_webhook` adopts multi-subscriber (per #3009 in AdCP 4.0). Buyers MUST NOT use absence as a signal that no other subscribers exist; that information is not exposed by this surface.
                 *
                 * @return string|null
                 */
                public function getSubscriberId(): ?string
                {
                    

                    return $this->subscriberId;
                }
            

            
                /**
                 * Set the value of subscriber_id.
                 *
                 * @param string $subscriberId Identifies which registered webhook subscriber received this fire. **Required on records from account-anchored notification channels** (`notification_configs[]` registered via `sync_accounts`) — every subscriber has a `subscriber_id` at registration time, the seller MUST echo it on every fire and every activity record. **Optional on records from per-resource push channels** (`push_notification_config` on a media buy or task) — the calling principal is unambiguous in single-subscriber configurations and the field MAY be omitted; sellers MUST populate it once `reporting_webhook` adopts multi-subscriber (per #3009 in AdCP 4.0). Buyers MUST NOT use absence as a signal that no other subscribers exist; that information is not exposed by this surface.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSubscriberId(
                    string $subscriberId
                ): static {
                    if ($this->subscriberId === $subscriberId) {
                        return $this;
                    }

                    $value = $modelData['subscriber_id'] = $subscriberId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSubscriberId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->subscriberId = $value;
                    $this->_rawModelDataInput['subscriber_id'] = $subscriberId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property subscriberId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSubscriberId(array $modelData): void
            {
                
                    if (!array_key_exists('subscriber_id', $modelData) && $this->subscriberId === null) {
                        return;
                    }
                

                $value = array_key_exists('subscriber_id', $modelData) ? $modelData['subscriber_id'] : $this->subscriberId;

                

                $this->subscriberId = $this->validateSubscriberId($value, $modelData);
            }

            /**
             * Execute all validators for the property subscriberId
             */
            protected function validateSubscriberId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'subscriber_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of fired_at.
                 *
                 * ISO 8601 timestamp when the seller initiated the HTTP request for this attempt.
                 *
                 * @return string
                 */
                public function getFiredAt(): string
                {
                    

                    return $this->firedAt;
                }
            

            
                /**
                 * Set the value of fired_at.
                 *
                 * @param string $firedAt ISO 8601 timestamp when the seller initiated the HTTP request for this attempt.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFiredAt(
                    string $firedAt
                ): static {
                    if ($this->firedAt === $firedAt) {
                        return $this;
                    }

                    $value = $modelData['fired_at'] = $firedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFiredAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->firedAt = $value;
                    $this->_rawModelDataInput['fired_at'] = $firedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property firedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFiredAt(array $modelData): void
            {
                

                $value = array_key_exists('fired_at', $modelData) ? $modelData['fired_at'] : $this->firedAt;

                

                $this->firedAt = $this->validateFiredAt($value, $modelData);
            }

            /**
             * Execute all validators for the property firedAt
             */
            protected function validateFiredAt($value, array $modelData)
            {
                
                    

if (!array_key_exists('fired_at', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'fired_at',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'fired_at',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'fired_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of completed_at.
                 *
                 * ISO 8601 timestamp when the seller observed the response (or terminal timeout / connection error — for `timeout` and `connection_error` outcomes, `completed_at` is set to the moment the seller declared the attempt terminal). Explicitly `null` when the attempt is still in flight or queued for retry (status `pending`); MUST be set as `null` rather than omitted so callers can distinguish 'still in flight' from 'field missing'.
                 *
                 * @return string|null
                 */
                public function getCompletedAt(): ?string
                {
                    

                    return $this->completedAt;
                }
            

            
                /**
                 * Set the value of completed_at.
                 *
                 * @param string|null $completedAt ISO 8601 timestamp when the seller observed the response (or terminal timeout / connection error — for `timeout` and `connection_error` outcomes, `completed_at` is set to the moment the seller declared the attempt terminal). Explicitly `null` when the attempt is still in flight or queued for retry (status `pending`); MUST be set as `null` rather than omitted so callers can distinguish 'still in flight' from 'field missing'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCompletedAt(
                    ?string $completedAt
                ): static {
                    if ($this->completedAt === $completedAt) {
                        return $this;
                    }

                    $value = $modelData['completed_at'] = $completedAt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCompletedAt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->completedAt = $value;
                    $this->_rawModelDataInput['completed_at'] = $completedAt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property completedAt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCompletedAt(array $modelData): void
            {
                
                    if (!array_key_exists('completed_at', $modelData) && $this->completedAt === null) {
                        return;
                    }
                

                $value = array_key_exists('completed_at', $modelData) ? $modelData['completed_at'] : $this->completedAt;

                

                $this->completedAt = $this->validateCompletedAt($value, $modelData);
            }

            /**
             * Execute all validators for the property completedAt
             */
            protected function validateCompletedAt($value, array $modelData)
            {
                
                    

if (!is_string($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'completed_at',
  1 => 
  array (
    0 => 'string',
    1 => 'null',
  ),
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'completed_at',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of notification_type.
                 *
                 * Type of push notification fired by a seller agent. Media-buy-anchored notifications (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) fire against a media buy's `push_notification_config`. Account-anchored notifications (`creative.status_changed`, `creative.purged`) fire against an account's `notification_configs[]` entries whose `event_types` include the value — these outlive any single media buy and anchor at the account. New notification types added to this enum MUST declare their anchor (media-buy or account) and per-type `notification_id` semantics in the enumDescription. Sellers MUST reject `notification_configs[]` entries whose `event_types` include any media-buy-anchored type, and MUST reject `push_notification_config` registrations for account-anchored types.
                 *
                 * @return NotificationType
                 */
                public function getNotificationType(): NotificationType
                {
                    

                    return $this->notificationType;
                }
            

            
                /**
                 * Set the value of notification_type.
                 *
                 * @param string|NotificationType $notificationType Type of push notification fired by a seller agent. Media-buy-anchored notifications (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) fire against a media buy's `push_notification_config`. Account-anchored notifications (`creative.status_changed`, `creative.purged`) fire against an account's `notification_configs[]` entries whose `event_types` include the value — these outlive any single media buy and anchor at the account. New notification types added to this enum MUST declare their anchor (media-buy or account) and per-type `notification_id` semantics in the enumDescription. Sellers MUST reject `notification_configs[]` entries whose `event_types` include any media-buy-anchored type, and MUST reject `push_notification_config` registrations for account-anchored types.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setNotificationType(
                    string | NotificationType $notificationType
                ): static {
                    if ($this->notificationType === $notificationType) {
                        return $this;
                    }

                    $value = $modelData['notification_type'] = $notificationType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateNotificationType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->notificationType = $value;
                    $this->_rawModelDataInput['notification_type'] = $notificationType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property notificationType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processNotificationType(array $modelData): void
            {
                

                $value = array_key_exists('notification_type', $modelData) ? $modelData['notification_type'] : $this->notificationType;

                

                $this->notificationType = $this->validateNotificationType($value, $modelData);
            }

            /**
             * Execute all validators for the property notificationType
             */
            protected function validateNotificationType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof NotificationType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'notification_type',
  1 => 'NotificationType',
)));
}

                
                    

if (!array_key_exists('notification_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'notification_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'notification_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'scheduled',
   'final',
   'delayed',
   'adjusted',
   'impairment',
   'creative.status_changed',
   'creative.purged',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'notification_type',
  1 => 
  array (
    0 => 'scheduled',
    1 => 'final',
    2 => 'delayed',
    3 => 'adjusted',
    4 => 'impairment',
    5 => 'creative.status_changed',
    6 => 'creative.purged',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\NotificationType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'notification_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'notification_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sequence_number.
                 *
                 * Sequence number from the webhook payload. Surfaced here so the buyer can spot stale-sequence drops and gaps without correlating against their own endpoint log. Absent for notification types that do not carry a sequence number.
                 *
                 * @return int|null
                 */
                public function getSequenceNumber(): ?int
                {
                    

                    return $this->sequenceNumber;
                }
            

            
                /**
                 * Set the value of sequence_number.
                 *
                 * @param int $sequenceNumber Sequence number from the webhook payload. Surfaced here so the buyer can spot stale-sequence drops and gaps without correlating against their own endpoint log. Absent for notification types that do not carry a sequence number.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSequenceNumber(
                    int $sequenceNumber
                ): static {
                    if ($this->sequenceNumber === $sequenceNumber) {
                        return $this;
                    }

                    $value = $modelData['sequence_number'] = $sequenceNumber;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSequenceNumber($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sequenceNumber = $value;
                    $this->_rawModelDataInput['sequence_number'] = $sequenceNumber;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sequenceNumber
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSequenceNumber(array $modelData): void
            {
                
                    if (!array_key_exists('sequence_number', $modelData) && $this->sequenceNumber === null) {
                        return;
                    }
                

                $value = array_key_exists('sequence_number', $modelData) ? $modelData['sequence_number'] : $this->sequenceNumber;

                

                $this->sequenceNumber = $this->validateSequenceNumber($value, $modelData);
            }

            /**
             * Execute all validators for the property sequenceNumber
             */
            protected function validateSequenceNumber($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sequence_number',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'sequence_number',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of attempt.
                 *
                 * 1-indexed retry counter for this logical fire. Initial fire is attempt=1; retries increment. Sellers MUST emit one record per attempt, so a successful first-attempt fire appears as a single record with `attempt: 1` and a 3-attempt retry trail appears as three records sharing `idempotency_key`.
                 *
                 * @return int
                 */
                public function getAttempt(): int
                {
                    

                    return $this->attempt;
                }
            

            
                /**
                 * Set the value of attempt.
                 *
                 * @param int $attempt 1-indexed retry counter for this logical fire. Initial fire is attempt=1; retries increment. Sellers MUST emit one record per attempt, so a successful first-attempt fire appears as a single record with `attempt: 1` and a 3-attempt retry trail appears as three records sharing `idempotency_key`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAttempt(
                    int $attempt
                ): static {
                    if ($this->attempt === $attempt) {
                        return $this;
                    }

                    $value = $modelData['attempt'] = $attempt;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAttempt($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->attempt = $value;
                    $this->_rawModelDataInput['attempt'] = $attempt;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property attempt
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAttempt(array $modelData): void
            {
                

                $value = array_key_exists('attempt', $modelData) ? $modelData['attempt'] : $this->attempt;

                

                $this->attempt = $this->validateAttempt($value, $modelData);
            }

            /**
             * Execute all validators for the property attempt
             */
            protected function validateAttempt($value, array $modelData)
            {
                
                    

if (!array_key_exists('attempt', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'attempt',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'attempt',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'attempt',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of status.
                 *
                 * Outcome of this attempt. `success` — response received with 2xx (`http_status_code` populated). `failed` — response received with non-2xx (`http_status_code` populated). `timeout` — no response within the seller's configured timeout (`http_status_code` null). `connection_error` — DNS / TLS / socket failure before any HTTP response (`http_status_code` null). `pending` — attempt is in flight or queued for retry (`completed_at` null, `http_status_code` null). The `timeout` / `connection_error` split is intentional and operationally distinct: `timeout` typically signals a slow / overloaded buyer endpoint, `connection_error` typically signals it is unreachable or misconfigured.
                 *
                 * @return GetMediaBuysResponse_WebhookActivityRecordStatus
                 */
                public function getStatus(): GetMediaBuysResponse_WebhookActivityRecordStatus
                {
                    

                    return $this->status;
                }
            

            
                /**
                 * Set the value of status.
                 *
                 * @param string|GetMediaBuysResponse_WebhookActivityRecordStatus $status Outcome of this attempt. `success` — response received with 2xx (`http_status_code` populated). `failed` — response received with non-2xx (`http_status_code` populated). `timeout` — no response within the seller's configured timeout (`http_status_code` null). `connection_error` — DNS / TLS / socket failure before any HTTP response (`http_status_code` null). `pending` — attempt is in flight or queued for retry (`completed_at` null, `http_status_code` null). The `timeout` / `connection_error` split is intentional and operationally distinct: `timeout` typically signals a slow / overloaded buyer endpoint, `connection_error` typically signals it is unreachable or misconfigured.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStatus(
                    string | GetMediaBuysResponse_WebhookActivityRecordStatus $status
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
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_WebhookActivityRecordStatus)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'status',
  1 => 'GetMediaBuysResponse_WebhookActivityRecordStatus',
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
   'success',
   'failed',
   'timeout',
   'connection_error',
   'pending',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'status',
  1 => 
  array (
    0 => 'success',
    1 => 'failed',
    2 => 'timeout',
    3 => 'connection_error',
    4 => 'pending',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_WebhookActivityRecordStatus',
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
                 * Get the value of url.
                 *
                 * Target URL for this fire. Query string and fragment MUST be stripped before surfacing — buyers commonly stash bearer tokens in the query string and sellers MUST NOT echo those back through this debug surface. Sellers SHOULD additionally redact path segments matching obvious secret patterns (e.g., a path segment that is high-entropy random material or matches a UUID / token format). Buyers matching this against their own configured URL should compare by origin + path; query strings will not match and that mismatch is expected.
                 *
                 * @return string
                 */
                public function getUrl(): string
                {
                    

                    return $this->url;
                }
            

            
                /**
                 * Set the value of url.
                 *
                 * @param string $url Target URL for this fire. Query string and fragment MUST be stripped before surfacing — buyers commonly stash bearer tokens in the query string and sellers MUST NOT echo those back through this debug surface. Sellers SHOULD additionally redact path segments matching obvious secret patterns (e.g., a path segment that is high-entropy random material or matches a UUID / token format). Buyers matching this against their own configured URL should compare by origin + path; query strings will not match and that mismatch is expected.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUrl(
                    string $url
                ): static {
                    if ($this->url === $url) {
                        return $this;
                    }

                    $value = $modelData['url'] = $url;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUrl($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->url = $value;
                    $this->_rawModelDataInput['url'] = $url;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property url
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUrl(array $modelData): void
            {
                

                $value = array_key_exists('url', $modelData) ? $modelData['url'] : $this->url;

                

                $this->url = $this->validateUrl($value, $modelData);
            }

            /**
             * Execute all validators for the property url
             */
            protected function validateUrl($value, array $modelData)
            {
                
                    

if (!array_key_exists('url', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'url',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'url',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\UriFormatValidator::validate($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'url',
  1 => 'uri',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of http_status_code.
                 *
                 * HTTP status code returned by the buyer's endpoint. Explicitly `null` when no HTTP response was received (status `timeout`, `connection_error`, or `pending`); MUST be set as `null` rather than omitted.
                 *
                 * @return int|null
                 */
                public function getHttpStatusCode(): ?int
                {
                    

                    return $this->httpStatusCode;
                }
            

            
                /**
                 * Set the value of http_status_code.
                 *
                 * @param int|null $httpStatusCode HTTP status code returned by the buyer's endpoint. Explicitly `null` when no HTTP response was received (status `timeout`, `connection_error`, or `pending`); MUST be set as `null` rather than omitted.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setHttpStatusCode(
                    ?int $httpStatusCode
                ): static {
                    if ($this->httpStatusCode === $httpStatusCode) {
                        return $this;
                    }

                    $value = $modelData['http_status_code'] = $httpStatusCode;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateHttpStatusCode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->httpStatusCode = $value;
                    $this->_rawModelDataInput['http_status_code'] = $httpStatusCode;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property httpStatusCode
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processHttpStatusCode(array $modelData): void
            {
                
                    if (!array_key_exists('http_status_code', $modelData) && $this->httpStatusCode === null) {
                        return;
                    }
                

                $value = array_key_exists('http_status_code', $modelData) ? $modelData['http_status_code'] : $this->httpStatusCode;

                

                $this->httpStatusCode = $this->validateHttpStatusCode($value, $modelData);
            }

            /**
             * Execute all validators for the property httpStatusCode
             */
            protected function validateHttpStatusCode($value, array $modelData)
            {
                
                    

if (!is_int($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'http_status_code',
  1 => 
  array (
    0 => 'int',
    1 => 'null',
  ),
)));
}

                
                    

if (is_int($value) && $value < 100) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'http_status_code',
  1 => 100,
)));
}

                
                    

if (is_int($value) && $value > 599) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'http_status_code',
  1 => 599,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of response_time_ms.
                 *
                 * Wall-clock latency between request send and response receipt, in milliseconds. Explicitly `null` when the attempt did not complete (`timeout`, `connection_error`, `pending`); MUST be set as `null` rather than omitted.
                 *
                 * @return int|null
                 */
                public function getResponseTimeMs(): ?int
                {
                    

                    return $this->responseTimeMs;
                }
            

            
                /**
                 * Set the value of response_time_ms.
                 *
                 * @param int|null $responseTimeMs Wall-clock latency between request send and response receipt, in milliseconds. Explicitly `null` when the attempt did not complete (`timeout`, `connection_error`, `pending`); MUST be set as `null` rather than omitted.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setResponseTimeMs(
                    ?int $responseTimeMs
                ): static {
                    if ($this->responseTimeMs === $responseTimeMs) {
                        return $this;
                    }

                    $value = $modelData['response_time_ms'] = $responseTimeMs;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateResponseTimeMs($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->responseTimeMs = $value;
                    $this->_rawModelDataInput['response_time_ms'] = $responseTimeMs;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property responseTimeMs
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processResponseTimeMs(array $modelData): void
            {
                
                    if (!array_key_exists('response_time_ms', $modelData) && $this->responseTimeMs === null) {
                        return;
                    }
                

                $value = array_key_exists('response_time_ms', $modelData) ? $modelData['response_time_ms'] : $this->responseTimeMs;

                

                $this->responseTimeMs = $this->validateResponseTimeMs($value, $modelData);
            }

            /**
             * Execute all validators for the property responseTimeMs
             */
            protected function validateResponseTimeMs($value, array $modelData)
            {
                
                    

if (!is_int($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'response_time_ms',
  1 => 
  array (
    0 => 'int',
    1 => 'null',
  ),
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'response_time_ms',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of payload_size_bytes.
                 *
                 * Size of the request body the seller sent, in bytes. Useful for diagnosing oversized-payload rejections from the buyer's gateway.
                 *
                 * @return int|null
                 */
                public function getPayloadSizeBytes(): ?int
                {
                    

                    return $this->payloadSizeBytes;
                }
            

            
                /**
                 * Set the value of payload_size_bytes.
                 *
                 * @param int $payloadSizeBytes Size of the request body the seller sent, in bytes. Useful for diagnosing oversized-payload rejections from the buyer's gateway.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPayloadSizeBytes(
                    int $payloadSizeBytes
                ): static {
                    if ($this->payloadSizeBytes === $payloadSizeBytes) {
                        return $this;
                    }

                    $value = $modelData['payload_size_bytes'] = $payloadSizeBytes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePayloadSizeBytes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->payloadSizeBytes = $value;
                    $this->_rawModelDataInput['payload_size_bytes'] = $payloadSizeBytes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property payloadSizeBytes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPayloadSizeBytes(array $modelData): void
            {
                
                    if (!array_key_exists('payload_size_bytes', $modelData) && $this->payloadSizeBytes === null) {
                        return;
                    }
                

                $value = array_key_exists('payload_size_bytes', $modelData) ? $modelData['payload_size_bytes'] : $this->payloadSizeBytes;

                

                $this->payloadSizeBytes = $this->validatePayloadSizeBytes($value, $modelData);
            }

            /**
             * Execute all validators for the property payloadSizeBytes
             */
            protected function validatePayloadSizeBytes($value, array $modelData)
            {
                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'payload_size_bytes',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'payload_size_bytes',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of error_message.
                 *
                 * Short human-readable server-side classification of why this attempt did not succeed (e.g., `connection refused`, `TLS handshake timeout`, `HTTP 503 Service Unavailable`). Explicitly `null` for `success` (MUST be set as `null` rather than omitted). Sellers MUST NOT include request headers, request body content, or response body content in this field — payload surfacing is reserved for a future `include_webhook_payloads` extension and is subject to stricter access controls. Sellers SHOULD also avoid including buyer-endpoint internal hostnames, stack traces, or other implementation detail leaked by the response — keep it a stable classification string.
                 *
                 * @return string|null
                 */
                public function getErrorMessage(): ?string
                {
                    

                    return $this->errorMessage;
                }
            

            
                /**
                 * Set the value of error_message.
                 *
                 * @param string|null $errorMessage Short human-readable server-side classification of why this attempt did not succeed (e.g., `connection refused`, `TLS handshake timeout`, `HTTP 503 Service Unavailable`). Explicitly `null` for `success` (MUST be set as `null` rather than omitted). Sellers MUST NOT include request headers, request body content, or response body content in this field — payload surfacing is reserved for a future `include_webhook_payloads` extension and is subject to stricter access controls. Sellers SHOULD also avoid including buyer-endpoint internal hostnames, stack traces, or other implementation detail leaked by the response — keep it a stable classification string.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setErrorMessage(
                    ?string $errorMessage
                ): static {
                    if ($this->errorMessage === $errorMessage) {
                        return $this;
                    }

                    $value = $modelData['error_message'] = $errorMessage;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateErrorMessage($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->errorMessage = $value;
                    $this->_rawModelDataInput['error_message'] = $errorMessage;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property errorMessage
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processErrorMessage(array $modelData): void
            {
                
                    if (!array_key_exists('error_message', $modelData) && $this->errorMessage === null) {
                        return;
                    }
                

                $value = array_key_exists('error_message', $modelData) ? $modelData['error_message'] : $this->errorMessage;

                

                $this->errorMessage = $this->validateErrorMessage($value, $modelData);
            }

            /**
             * Execute all validators for the property errorMessage
             */
            protected function validateErrorMessage($value, array $modelData)
            {
                
                    

if (!is_string($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'error_message',
  1 => 
  array (
    0 => 'string',
    1 => 'null',
  ),
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 500) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'error_message',
  1 => 500,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Resource-specific extension slot. Adopters MAY surface a resource-specific cross-reference (e.g., `creative_id` on a creative-lifecycle record, `media_buy_id` on a record nested inside an account-level read) under `ext` rather than adding top-level fields — the canonical record shape stays uniform across resources and the `ext` envelope absorbs per-resource needs. Top-level extensions are not permitted (`additionalProperties: false`).
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
                 * @param GetMediaBuysResponse_ExtensionObject $ext Resource-specific extension slot. Adopters MAY surface a resource-specific cross-reference (e.g., `creative_id` on a creative-lifecycle record, `media_buy_id` on a record nested inside an account-level read) under `ext` rather than adding top-level fields — the canonical record shape stays uniform across resources and the `ext` envelope absorbs per-resource needs. Top-level extensions are not permitted (`additionalProperties: false`).
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
    

    
        
            if (array_key_exists('idempotency_key', $modelData) &&
                $modelData['idempotency_key'] !== $this->idempotencyKey
            ) {
                

                $rollbackValues['idempotencyKey'] = $this->idempotencyKey;
                $this->processIdempotencyKey($modelData);
            }
        
    
        
            if (array_key_exists('subscriber_id', $modelData) &&
                $modelData['subscriber_id'] !== $this->subscriberId
            ) {
                

                $rollbackValues['subscriberId'] = $this->subscriberId;
                $this->processSubscriberId($modelData);
            }
        
    
        
            if (array_key_exists('fired_at', $modelData) &&
                $modelData['fired_at'] !== $this->firedAt
            ) {
                

                $rollbackValues['firedAt'] = $this->firedAt;
                $this->processFiredAt($modelData);
            }
        
    
        
            if (array_key_exists('completed_at', $modelData) &&
                $modelData['completed_at'] !== $this->completedAt
            ) {
                

                $rollbackValues['completedAt'] = $this->completedAt;
                $this->processCompletedAt($modelData);
            }
        
    
        
            if (array_key_exists('notification_type', $modelData) &&
                $modelData['notification_type'] !== $this->notificationType
            ) {
                

                $rollbackValues['notificationType'] = $this->notificationType;
                $this->processNotificationType($modelData);
            }
        
    
        
            if (array_key_exists('sequence_number', $modelData) &&
                $modelData['sequence_number'] !== $this->sequenceNumber
            ) {
                

                $rollbackValues['sequenceNumber'] = $this->sequenceNumber;
                $this->processSequenceNumber($modelData);
            }
        
    
        
            if (array_key_exists('attempt', $modelData) &&
                $modelData['attempt'] !== $this->attempt
            ) {
                

                $rollbackValues['attempt'] = $this->attempt;
                $this->processAttempt($modelData);
            }
        
    
        
            if (array_key_exists('status', $modelData) &&
                $modelData['status'] !== $this->status
            ) {
                

                $rollbackValues['status'] = $this->status;
                $this->processStatus($modelData);
            }
        
    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                

                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
            }
        
    
        
            if (array_key_exists('http_status_code', $modelData) &&
                $modelData['http_status_code'] !== $this->httpStatusCode
            ) {
                

                $rollbackValues['httpStatusCode'] = $this->httpStatusCode;
                $this->processHttpStatusCode($modelData);
            }
        
    
        
            if (array_key_exists('response_time_ms', $modelData) &&
                $modelData['response_time_ms'] !== $this->responseTimeMs
            ) {
                

                $rollbackValues['responseTimeMs'] = $this->responseTimeMs;
                $this->processResponseTimeMs($modelData);
            }
        
    
        
            if (array_key_exists('payload_size_bytes', $modelData) &&
                $modelData['payload_size_bytes'] !== $this->payloadSizeBytes
            ) {
                

                $rollbackValues['payloadSizeBytes'] = $this->payloadSizeBytes;
                $this->processPayloadSizeBytes($modelData);
            }
        
    
        
            if (array_key_exists('error_message', $modelData) &&
                $modelData['error_message'] !== $this->errorMessage
            ) {
                

                $rollbackValues['errorMessage'] = $this->errorMessage;
                $this->processErrorMessage($modelData);
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
 * serialize the property notificationType
 */
protected function serializeNotificationType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->notificationType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\NotificationType',
));
}


/**
 * serialize the property status
 */
protected function serializeStatus()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->status, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_WebhookActivityRecordStatus',
));
}





}

// @codeCoverageIgnoreEnd
