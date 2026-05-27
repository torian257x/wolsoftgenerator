<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\BuilderInterface;

    use PHPModelGenerator\Exception\ErrorRegistryException;

    use AdCP\MediaBuy\Enums\NotificationType;


/**
 * Builder class for GetMediaBuysResponse_NotificationConfig
 */
class GetMediaBuysResponse_NotificationConfigBuilder implements BuilderInterface
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
     * Set up a new instance of GetMediaBuysResponse_NotificationConfig with fully validated properties
     */
    public function validate(): GetMediaBuysResponse_NotificationConfig
    {
        $this->_array_walk_recursive_real(
            $this->_rawModelDataInput,
            function (&$property): void {
                if ($property instanceof BuilderInterface) {
                    $property = $property->getRawModelDataInput();
                }
            },
        );

        return new GetMediaBuysResponse_NotificationConfig($this->_rawModelDataInput);
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
             * Get the value of subscriber_id.
             *
             * Buyer-supplied identifier for this subscription endpoint. Echoed on every webhook payload and on every `webhook_activity[]` record fired against this config so the buyer can attribute fires across multiple endpoints. MUST be unique within the account's `notification_configs[]` — uniqueness is enforced by the seller at registration time; duplicates are rejected with `errors[]`. Always required (even with a single subscriber) so the SDK contract is uniform — no conditional required-when-multiple rules to trip up implementations. Format is opaque — recommended values are short kebab-case slugs (`buyer-primary`, `audit-bus`, `dx-team`).
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
             * @param string $subscriberId Buyer-supplied identifier for this subscription endpoint. Echoed on every webhook payload and on every `webhook_activity[]` record fired against this config so the buyer can attribute fires across multiple endpoints. MUST be unique within the account's `notification_configs[]` — uniqueness is enforced by the seller at registration time; duplicates are rejected with `errors[]`. Always required (even with a single subscriber) so the SDK contract is uniform — no conditional required-when-multiple rules to trip up implementations. Format is opaque — recommended values are short kebab-case slugs (`buyer-primary`, `audit-bus`, `dx-team`).
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processSubscriberId}
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
             * Get the value of url.
             *
             * Webhook endpoint URL. Same wire contract as `push-notification-config.url` — `format: "uri"`, no destination-port allowlist enforced by the protocol, SSRF protection via the IP-range check defined in docs/building/by-layer/L1/security.mdx#webhook-url-validation-ssrf.
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
             * @param string $url Webhook endpoint URL. Same wire contract as `push-notification-config.url` — `format: "uri"`, no destination-port allowlist enforced by the protocol, SSRF protection via the IP-range check defined in docs/building/by-layer/L1/security.mdx#webhook-url-validation-ssrf.
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processUrl}
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
             * Get the value of event_types.
             *
             * Notification types this subscriber wishes to receive on the registered `url`. The seller MUST NOT fire other types against this endpoint, and MUST NOT silently widen the filter when new types are added to `notification-type.json`. When omitted, the seller MUST default to a no-fire policy and surface an `errors[]` entry on `sync_accounts` so the buyer notices the missing filter. Values are drawn from `notification-type.json`, but only types whose contract anchors at the account scope are valid here — media-buy-anchored types (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) belong on a media buy's `push_notification_config`, not on this surface; sellers MUST reject those entries with an `errors[]` warning rather than silently dropping them.
             *
             * @return string[]|NotificationType[]|null
             */
            public function getEventTypes(): array | NotificationType | null
            {
                return $this->_rawModelDataInput['event_types'] ?? null;
            }

            /**
             * Set the value of event_types.
             *
             * @param string[]|NotificationType[] $eventTypes Notification types this subscriber wishes to receive on the registered `url`. The seller MUST NOT fire other types against this endpoint, and MUST NOT silently widen the filter when new types are added to `notification-type.json`. When omitted, the seller MUST default to a no-fire policy and surface an `errors[]` entry on `sync_accounts` so the buyer notices the missing filter. Values are drawn from `notification-type.json`, but only types whose contract anchors at the account scope are valid here — media-buy-anchored types (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) belong on a media buy's `push_notification_config`, not on this surface; sellers MUST reject those entries with an `errors[]` warning rather than silently dropping them.
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processEventTypes}
             * 
             *
             * @return static
             */
            public function setEventTypes(
                array | NotificationType $eventTypes
            ): static {
                if (array_key_exists('event_types', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['event_types'] === $eventTypes
                ) {
                    return $this;
                }

                $value = $modelData['event_types'] = $eventTypes;

                

                

                $this->_rawModelDataInput['event_types'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of authentication.
             *
             * Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads.
             *
             * @return GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9|GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9Builder|array|null
             */
            public function getAuthentication(): mixed
            {
                return $this->_rawModelDataInput['authentication'] ?? null;
            }

            /**
             * Set the value of authentication.
             *
             * @param GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9|GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9Builder|array $authentication Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads.
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processAuthentication}
             * 
             *
             * @return static
             */
            public function setAuthentication(
                mixed $authentication
            ): static {
                if (array_key_exists('authentication', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['authentication'] === $authentication
                ) {
                    return $this;
                }

                $value = $modelData['authentication'] = $authentication;

                

                

                $this->_rawModelDataInput['authentication'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of active.
             *
             * When false, the seller persists the configuration but suppresses fires. Use to pause a noisy subscriber without losing the registration. Sellers MUST NOT skip persisting the entry when `active: false` — the buyer's next `sync_accounts` MUST observe the same array, otherwise the buyer cannot distinguish pause from drop.
             *
             * @return bool|null
             */
            public function getActive(): ?bool
            {
                return $this->_rawModelDataInput['active'] ?? null;
            }

            /**
             * Set the value of active.
             *
             * @param bool $active When false, the seller persists the configuration but suppresses fires. Use to pause a noisy subscriber without losing the registration. Sellers MUST NOT skip persisting the entry when `active: false` — the buyer's next `sync_accounts` MUST observe the same array, otherwise the buyer cannot distinguish pause from drop.
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processActive}
             * 
             *
             * @return static
             */
            public function setActive(
                bool $active
            ): static {
                if (array_key_exists('active', $this->_rawModelDataInput)
                    && $this->_rawModelDataInput['active'] === $active
                ) {
                    return $this;
                }

                $value = $modelData['active'] = $active;

                

                

                $this->_rawModelDataInput['active'] = $value;

                return $this;
            }
        
    
        
            /**
             * Get the value of ext.
             *
             * Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
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
             * @param GetMediaBuysResponse_ExtensionObject|GetMediaBuysResponse_ExtensionObjectBuilder|array $ext Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization.
             *
             * {@link GetMediaBuysResponse_NotificationConfig::processExt}
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
