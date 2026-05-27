<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\NotificationType;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;


/**
 * Builder class for GetMediaBuysResponse_WebhookActivityRecord
 */
class GetMediaBuysResponse_WebhookActivityRecordBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_WebhookActivityRecord with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_WebhookActivityRecord
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_WebhookActivityRecord($this->_rawModelDataInput);
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
             * Get the value of idempotency_key.
             *
             * Equals the `idempotency_key` carried in the webhook payload itself (see docs/building/by-layer/L3/webhooks.mdx § Dedup by `idempotency_key`). Stable across retry attempts of the same logical fire — retries with `attempt` > 1 reuse this key. Buyers correlate this surface with their own endpoint logs via this exact field; the spec deliberately reuses the payload key rather than minting a parallel `delivery_id` so callers do not need a join table. Format is sender-defined; callers MUST treat as opaque.
             *
             * @return string|null
             */
            public function getIdempotencyKey(): ?string
            {
                return $this->_rawModelDataInput['idempotency_key'] ?? null;
            }

            /**
             * Set the value of idempotency_key.
             *
             * @param string $idempotencyKey Equals the `idempotency_key` carried in the webhook payload itself (see docs/building/by-layer/L3/webhooks.mdx § Dedup by `idempotency_key`). Stable across retry attempts of the same logical fire — retries with `attempt` > 1 reuse this key. Buyers correlate this surface with their own endpoint logs via this exact field; the spec deliberately reuses the payload key rather than minting a parallel `delivery_id` so callers do not need a join table. Format is sender-defined; callers MUST treat as opaque.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processIdempotencyKey}
             * 
             *
             * @return static
             */
            public function setIdempotencyKey(
                string $idempotencyKey
            ): static {
                if (array_key_exists('idempotency_key', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['idempotency_key'] === $idempotencyKey
                ) {
                    return $this;
                }

                $value = $modelData['idempotency_key'] = $idempotencyKey;

                

                

                $this->_rawModelDataInput['idempotency_key'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['subscriber_id'] ?? null;
            }

            /**
             * Set the value of subscriber_id.
             *
             * @param string $subscriberId Identifies which registered webhook subscriber received this fire. **Required on records from account-anchored notification channels** (`notification_configs[]` registered via `sync_accounts`) — every subscriber has a `subscriber_id` at registration time, the seller MUST echo it on every fire and every activity record. **Optional on records from per-resource push channels** (`push_notification_config` on a media buy or task) — the calling principal is unambiguous in single-subscriber configurations and the field MAY be omitted; sellers MUST populate it once `reporting_webhook` adopts multi-subscriber (per #3009 in AdCP 4.0). Buyers MUST NOT use absence as a signal that no other subscribers exist; that information is not exposed by this surface.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processSubscriberId}
             * 
             *
             * @return static
             */
            public function setSubscriberId(
                string $subscriberId
            ): static {
                if (array_key_exists('subscriber_id', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['subscriber_id'] === $subscriberId
                ) {
                    return $this;
                }

                $value = $modelData['subscriber_id'] = $subscriberId;

                

                

                $this->_rawModelDataInput['subscriber_id'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of fired_at.
             *
             * ISO 8601 timestamp when the seller initiated the HTTP request for this attempt.
             *
             * @return string|null
             */
            public function getFiredAt(): ?string
            {
                return $this->_rawModelDataInput['fired_at'] ?? null;
            }

            /**
             * Set the value of fired_at.
             *
             * @param string $firedAt ISO 8601 timestamp when the seller initiated the HTTP request for this attempt.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processFiredAt}
             * 
             *
             * @return static
             */
            public function setFiredAt(
                string $firedAt
            ): static {
                if (array_key_exists('fired_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['fired_at'] === $firedAt
                ) {
                    return $this;
                }

                $value = $modelData['fired_at'] = $firedAt;

                

                

                $this->_rawModelDataInput['fired_at'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['completed_at'] ?? null;
            }

            /**
             * Set the value of completed_at.
             *
             * @param string|null $completedAt ISO 8601 timestamp when the seller observed the response (or terminal timeout / connection error — for `timeout` and `connection_error` outcomes, `completed_at` is set to the moment the seller declared the attempt terminal). Explicitly `null` when the attempt is still in flight or queued for retry (status `pending`); MUST be set as `null` rather than omitted so callers can distinguish 'still in flight' from 'field missing'.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processCompletedAt}
             * 
             *
             * @return static
             */
            public function setCompletedAt(
                ?string $completedAt
            ): static {
                if (array_key_exists('completed_at', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['completed_at'] === $completedAt
                ) {
                    return $this;
                }

                $value = $modelData['completed_at'] = $completedAt;

                

                

                $this->_rawModelDataInput['completed_at'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of notification_type.
             *
             * Type of push notification fired by a seller agent. Media-buy-anchored notifications (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) fire against a media buy's `push_notification_config`. Account-anchored notifications (`creative.status_changed`, `creative.purged`) fire against an account's `notification_configs[]` entries whose `event_types` include the value — these outlive any single media buy and anchor at the account. New notification types added to this enum MUST declare their anchor (media-buy or account) and per-type `notification_id` semantics in the enumDescription. Sellers MUST reject `notification_configs[]` entries whose `event_types` include any media-buy-anchored type, and MUST reject `push_notification_config` registrations for account-anchored types.
             *
             * @return string|NotificationType|null
             */
            public function getNotificationType(): string | NotificationType | null
            {
                return $this->_rawModelDataInput['notification_type'] ?? null;
            }

            /**
             * Set the value of notification_type.
             *
             * @param string|NotificationType $notificationType Type of push notification fired by a seller agent. Media-buy-anchored notifications (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) fire against a media buy's `push_notification_config`. Account-anchored notifications (`creative.status_changed`, `creative.purged`) fire against an account's `notification_configs[]` entries whose `event_types` include the value — these outlive any single media buy and anchor at the account. New notification types added to this enum MUST declare their anchor (media-buy or account) and per-type `notification_id` semantics in the enumDescription. Sellers MUST reject `notification_configs[]` entries whose `event_types` include any media-buy-anchored type, and MUST reject `push_notification_config` registrations for account-anchored types.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processNotificationType}
             * 
             *
             * @return static
             */
            public function setNotificationType(
                string | NotificationType $notificationType
            ): static {
                if (array_key_exists('notification_type', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['notification_type'] === $notificationType
                ) {
                    return $this;
                }

                $value = $modelData['notification_type'] = $notificationType;

                

                

                $this->_rawModelDataInput['notification_type'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['sequence_number'] ?? null;
            }

            /**
             * Set the value of sequence_number.
             *
             * @param int $sequenceNumber Sequence number from the webhook payload. Surfaced here so the buyer can spot stale-sequence drops and gaps without correlating against their own endpoint log. Absent for notification types that do not carry a sequence number.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processSequenceNumber}
             * 
             *
             * @return static
             */
            public function setSequenceNumber(
                int $sequenceNumber
            ): static {
                if (array_key_exists('sequence_number', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['sequence_number'] === $sequenceNumber
                ) {
                    return $this;
                }

                $value = $modelData['sequence_number'] = $sequenceNumber;

                

                

                $this->_rawModelDataInput['sequence_number'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of attempt.
             *
             * 1-indexed retry counter for this logical fire. Initial fire is attempt=1; retries increment. Sellers MUST emit one record per attempt, so a successful first-attempt fire appears as a single record with `attempt: 1` and a 3-attempt retry trail appears as three records sharing `idempotency_key`.
             *
             * @return int|null
             */
            public function getAttempt(): ?int
            {
                return $this->_rawModelDataInput['attempt'] ?? null;
            }

            /**
             * Set the value of attempt.
             *
             * @param int $attempt 1-indexed retry counter for this logical fire. Initial fire is attempt=1; retries increment. Sellers MUST emit one record per attempt, so a successful first-attempt fire appears as a single record with `attempt: 1` and a 3-attempt retry trail appears as three records sharing `idempotency_key`.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processAttempt}
             * 
             *
             * @return static
             */
            public function setAttempt(
                int $attempt
            ): static {
                if (array_key_exists('attempt', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['attempt'] === $attempt
                ) {
                    return $this;
                }

                $value = $modelData['attempt'] = $attempt;

                

                

                $this->_rawModelDataInput['attempt'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of status.
             *
             * Outcome of this attempt. `success` — response received with 2xx (`http_status_code` populated). `failed` — response received with non-2xx (`http_status_code` populated). `timeout` — no response within the seller's configured timeout (`http_status_code` null). `connection_error` — DNS / TLS / socket failure before any HTTP response (`http_status_code` null). `pending` — attempt is in flight or queued for retry (`completed_at` null, `http_status_code` null). The `timeout` / `connection_error` split is intentional and operationally distinct: `timeout` typically signals a slow / overloaded buyer endpoint, `connection_error` typically signals it is unreachable or misconfigured.
             *
             * @return string|GetMediaBuysResponse_WebhookActivityRecordStatus|null
             */
            public function getStatus(): string | GetMediaBuysResponse_WebhookActivityRecordStatus | null
            {
                return $this->_rawModelDataInput['status'] ?? null;
            }

            /**
             * Set the value of status.
             *
             * @param string|GetMediaBuysResponse_WebhookActivityRecordStatus $status Outcome of this attempt. `success` — response received with 2xx (`http_status_code` populated). `failed` — response received with non-2xx (`http_status_code` populated). `timeout` — no response within the seller's configured timeout (`http_status_code` null). `connection_error` — DNS / TLS / socket failure before any HTTP response (`http_status_code` null). `pending` — attempt is in flight or queued for retry (`completed_at` null, `http_status_code` null). The `timeout` / `connection_error` split is intentional and operationally distinct: `timeout` typically signals a slow / overloaded buyer endpoint, `connection_error` typically signals it is unreachable or misconfigured.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processStatus}
             * 
             *
             * @return static
             */
            public function setStatus(
                string | GetMediaBuysResponse_WebhookActivityRecordStatus $status
            ): static {
                if (array_key_exists('status', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['status'] === $status
                ) {
                    return $this;
                }

                $value = $modelData['status'] = $status;

                

                

                $this->_rawModelDataInput['status'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of url.
             *
             * Target URL for this fire. Query string and fragment MUST be stripped before surfacing — buyers commonly stash bearer tokens in the query string and sellers MUST NOT echo those back through this debug surface. Sellers SHOULD additionally redact path segments matching obvious secret patterns (e.g., a path segment that is high-entropy random material or matches a UUID / token format). Buyers matching this against their own configured URL should compare by origin + path; query strings will not match and that mismatch is expected.
             *
             * @return string|null
             */
            public function getUrl(): ?string
            {
                return $this->_rawModelDataInput['url'] ?? null;
            }

            /**
             * Set the value of url.
             *
             * @param string $url Target URL for this fire. Query string and fragment MUST be stripped before surfacing — buyers commonly stash bearer tokens in the query string and sellers MUST NOT echo those back through this debug surface. Sellers SHOULD additionally redact path segments matching obvious secret patterns (e.g., a path segment that is high-entropy random material or matches a UUID / token format). Buyers matching this against their own configured URL should compare by origin + path; query strings will not match and that mismatch is expected.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processUrl}
             * 
             *
             * @return static
             */
            public function setUrl(
                string $url
            ): static {
                if (array_key_exists('url', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['url'] === $url
                ) {
                    return $this;
                }

                $value = $modelData['url'] = $url;

                

                

                $this->_rawModelDataInput['url'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['http_status_code'] ?? null;
            }

            /**
             * Set the value of http_status_code.
             *
             * @param int|null $httpStatusCode HTTP status code returned by the buyer's endpoint. Explicitly `null` when no HTTP response was received (status `timeout`, `connection_error`, or `pending`); MUST be set as `null` rather than omitted.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processHttpStatusCode}
             * 
             *
             * @return static
             */
            public function setHttpStatusCode(
                ?int $httpStatusCode
            ): static {
                if (array_key_exists('http_status_code', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['http_status_code'] === $httpStatusCode
                ) {
                    return $this;
                }

                $value = $modelData['http_status_code'] = $httpStatusCode;

                

                

                $this->_rawModelDataInput['http_status_code'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['response_time_ms'] ?? null;
            }

            /**
             * Set the value of response_time_ms.
             *
             * @param int|null $responseTimeMs Wall-clock latency between request send and response receipt, in milliseconds. Explicitly `null` when the attempt did not complete (`timeout`, `connection_error`, `pending`); MUST be set as `null` rather than omitted.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processResponseTimeMs}
             * 
             *
             * @return static
             */
            public function setResponseTimeMs(
                ?int $responseTimeMs
            ): static {
                if (array_key_exists('response_time_ms', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['response_time_ms'] === $responseTimeMs
                ) {
                    return $this;
                }

                $value = $modelData['response_time_ms'] = $responseTimeMs;

                

                

                $this->_rawModelDataInput['response_time_ms'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['payload_size_bytes'] ?? null;
            }

            /**
             * Set the value of payload_size_bytes.
             *
             * @param int $payloadSizeBytes Size of the request body the seller sent, in bytes. Useful for diagnosing oversized-payload rejections from the buyer's gateway.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processPayloadSizeBytes}
             * 
             *
             * @return static
             */
            public function setPayloadSizeBytes(
                int $payloadSizeBytes
            ): static {
                if (array_key_exists('payload_size_bytes', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['payload_size_bytes'] === $payloadSizeBytes
                ) {
                    return $this;
                }

                $value = $modelData['payload_size_bytes'] = $payloadSizeBytes;

                

                

                $this->_rawModelDataInput['payload_size_bytes'] = $value;

                return $this;
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
                return $this->_rawModelDataInput['error_message'] ?? null;
            }

            /**
             * Set the value of error_message.
             *
             * @param string|null $errorMessage Short human-readable server-side classification of why this attempt did not succeed (e.g., `connection refused`, `TLS handshake timeout`, `HTTP 503 Service Unavailable`). Explicitly `null` for `success` (MUST be set as `null` rather than omitted). Sellers MUST NOT include request headers, request body content, or response body content in this field — payload surfacing is reserved for a future `include_webhook_payloads` extension and is subject to stricter access controls. Sellers SHOULD also avoid including buyer-endpoint internal hostnames, stack traces, or other implementation detail leaked by the response — keep it a stable classification string.
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processErrorMessage}
             * 
             *
             * @return static
             */
            public function setErrorMessage(
                ?string $errorMessage
            ): static {
                if (array_key_exists('error_message', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['error_message'] === $errorMessage
                ) {
                    return $this;
                }

                $value = $modelData['error_message'] = $errorMessage;

                

                

                $this->_rawModelDataInput['error_message'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Resource-specific extension slot. Adopters MAY surface a resource-specific cross-reference (e.g., `creative_id` on a creative-lifecycle record, `media_buy_id` on a record nested inside an account-level read) under `ext` rather than adding top-level fields — the canonical record shape stays uniform across resources and the `ext` envelope absorbs per-resource needs. Top-level extensions are not permitted (`additionalProperties: false`).
             *
             * @return GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array|null
             */
            public function getExt(): mixed
            {
                return $this->_rawModelDataInput['ext'] ?? null;
            }

            /**
             * Set the value of ext.
             *
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Resource-specific extension slot. Adopters MAY surface a resource-specific cross-reference (e.g., `creative_id` on a creative-lifecycle record, `media_buy_id` on a record nested inside an account-level read) under `ext` rather than adding top-level fields — the canonical record shape stays uniform across resources and the `ext` envelope absorbs per-resource needs. Top-level extensions are not permitted (`additionalProperties: false`).
             *
             * {@link GetMediaBuysResponse_WebhookActivityRecord::processExt}
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
        
    
}

// @codeCoverageIgnoreEnd
