<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\NotificationType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

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

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_NotificationConfig
 * @package AdCP\MediaBuy 
 *
 * Account-level webhook subscription for notifications whose lifecycle outlives any single media buy — creative state changes, library purges, future org-level signals. Distinct from `push-notification-config.json`, which anchors at a per-resource operation (a single task or media buy). An account MAY register multiple notification configs to fan a single seller's events out to multiple buyer-side endpoints; each entry filters by `event_types`. As with push-notification-config, the default signing scheme is the AdCP RFC 9421 webhook profile against the seller's brand.json `agents[]` JWKS; the optional `authentication` block opts into the deprecated Bearer / HMAC-SHA256 fallback for compatibility. Credentials and shared secrets in `authentication.credentials` are write-only — sellers MUST NOT echo them back in `list_accounts` responses.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items')]

class GetMediaBuysResponse_NotificationConfig implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/subscriber_id')]
        
            #[SchemaName('subscriber_id')]
        
            #[Required]
        
        /** @var string Buyer-supplied identifier for this subscription endpoint. Echoed on every webhook payload and on every `webhook_activity[]` record fired against this config so the buyer can attribute fires across multiple endpoints. MUST be unique within the account's `notification_configs[]` — uniqueness is enforced by the seller at registration time; duplicates are rejected with `errors[]`. Always required (even with a single subscriber) so the SDK contract is uniform — no conditional required-when-multiple rules to trip up implementations. Format is opaque — recommended values are short kebab-case slugs (`buyer-primary`, `audit-bus`, `dx-team`). */
        protected $subscriberId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/url')]
        
            #[SchemaName('url')]
        
            #[Required]
        
        /** @var string Webhook endpoint URL. Same wire contract as `push-notification-config.url` — `format: "uri"`, no destination-port allowlist enforced by the protocol, SSRF protection via the IP-range check defined in docs/building/by-layer/L1/security.mdx#webhook-url-validation-ssrf. */
        protected $url;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/event_types')]
        
            #[SchemaName('event_types')]
        
            #[Required]
        
        /** @var NotificationType[] Notification types this subscriber wishes to receive on the registered `url`. The seller MUST NOT fire other types against this endpoint, and MUST NOT silently widen the filter when new types are added to `notification-type.json`. When omitted, the seller MUST default to a no-fire policy and surface an `errors[]` entry on `sync_accounts` so the buyer notices the missing filter. Values are drawn from `notification-type.json`, but only types whose contract anchors at the account scope are valid here — media-buy-anchored types (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) belong on a media buy's `push_notification_config`, not on this surface; sellers MUST reject those entries with an `errors[]` warning rather than silently dropping them. */
        protected $eventTypes;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/authentication')]
        
            #[SchemaName('authentication')]
        
        /** @var GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9|null Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads. */
        protected $authentication;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/active')]
        
            #[SchemaName('active')]
        
        /** @var bool When false, the seller persists the configuration but suppresses fires. Use to pause a noisy subscriber without losing the registration. Sellers MUST NOT skip persisting the entry when `active: false` — the buyer's next `sync_accounts` MUST observe the same array, otherwise the buyer cannot distinguish pause from drop. */
        protected $active = true;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/account/properties/notification_configs/items/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Extension object for platform-specific, vendor-namespaced parameters. Extensions are always optional and must be namespaced under a vendor/platform key (e.g., ext.gam, ext.roku). Used for custom capabilities, partner-specific configuration, and features being proposed for standardization. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  3 => 'authentication',
  5 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_NotificationConfig constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSubscriberId($rawModelDataInput);
            
        
            
                $this->processUrl($rawModelDataInput);
            
        
            
                $this->processEventTypes($rawModelDataInput);
            
        
            
                $this->processAuthentication($rawModelDataInput);
            
        
            
                $this->processActive($rawModelDataInput);
            
        
            
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
   'subscriber_id',
   'url',
   'event_types',
   'authentication',
   'active',
   'ext',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_NotificationConfig',
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
                 * Get the value of subscriber_id.
                 *
                 * Buyer-supplied identifier for this subscription endpoint. Echoed on every webhook payload and on every `webhook_activity[]` record fired against this config so the buyer can attribute fires across multiple endpoints. MUST be unique within the account's `notification_configs[]` — uniqueness is enforced by the seller at registration time; duplicates are rejected with `errors[]`. Always required (even with a single subscriber) so the SDK contract is uniform — no conditional required-when-multiple rules to trip up implementations. Format is opaque — recommended values are short kebab-case slugs (`buyer-primary`, `audit-bus`, `dx-team`).
                 *
                 * @return string
                 */
                public function getSubscriberId(): string
                {
                    

                    return $this->subscriberId;
                }
            

            
                /**
                 * Set the value of subscriber_id.
                 *
                 * @param string $subscriberId Buyer-supplied identifier for this subscription endpoint. Echoed on every webhook payload and on every `webhook_activity[]` record fired against this config so the buyer can attribute fires across multiple endpoints. MUST be unique within the account's `notification_configs[]` — uniqueness is enforced by the seller at registration time; duplicates are rejected with `errors[]`. Always required (even with a single subscriber) so the SDK contract is uniform — no conditional required-when-multiple rules to trip up implementations. Format is opaque — recommended values are short kebab-case slugs (`buyer-primary`, `audit-bus`, `dx-team`).
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
                

                $value = array_key_exists('subscriber_id', $modelData) ? $modelData['subscriber_id'] : $this->subscriberId;

                

                $this->subscriberId = $this->validateSubscriberId($value, $modelData);
            }

            /**
             * Execute all validators for the property subscriberId
             */
            protected function validateSubscriberId($value, array $modelData)
            {
                
                    

if (!array_key_exists('subscriber_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'subscriber_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'subscriber_id',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bQS1aYS16MC05Xy46LV17MSw2NH0kLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'subscriber_id',
  1 => '^[A-Za-z0-9_.:-]{1,64}$',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'subscriber_id',
  1 => 1,
)));
}

                
                    

if (is_string($value) && mb_strlen($value) > 64) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MaxLengthException($value ?? null, ...array (
  0 => 'subscriber_id',
  1 => 64,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of url.
                 *
                 * Webhook endpoint URL. Same wire contract as `push-notification-config.url` — `format: "uri"`, no destination-port allowlist enforced by the protocol, SSRF protection via the IP-range check defined in docs/building/by-layer/L1/security.mdx#webhook-url-validation-ssrf.
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
                 * @param string $url Webhook endpoint URL. Same wire contract as `push-notification-config.url` — `format: "uri"`, no destination-port allowlist enforced by the protocol, SSRF protection via the IP-range check defined in docs/building/by-layer/L1/security.mdx#webhook-url-validation-ssrf.
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
                 * Get the value of event_types.
                 *
                 * Notification types this subscriber wishes to receive on the registered `url`. The seller MUST NOT fire other types against this endpoint, and MUST NOT silently widen the filter when new types are added to `notification-type.json`. When omitted, the seller MUST default to a no-fire policy and surface an `errors[]` entry on `sync_accounts` so the buyer notices the missing filter. Values are drawn from `notification-type.json`, but only types whose contract anchors at the account scope are valid here — media-buy-anchored types (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) belong on a media buy's `push_notification_config`, not on this surface; sellers MUST reject those entries with an `errors[]` warning rather than silently dropping them.
                 *
                 * @return NotificationType[]
                 */
                public function getEventTypes(): array | NotificationType
                {
                    

                    return $this->eventTypes;
                }
            

            
                /**
                 * Set the value of event_types.
                 *
                 * @param string[]|NotificationType[] $eventTypes Notification types this subscriber wishes to receive on the registered `url`. The seller MUST NOT fire other types against this endpoint, and MUST NOT silently widen the filter when new types are added to `notification-type.json`. When omitted, the seller MUST default to a no-fire policy and surface an `errors[]` entry on `sync_accounts` so the buyer notices the missing filter. Values are drawn from `notification-type.json`, but only types whose contract anchors at the account scope are valid here — media-buy-anchored types (`scheduled`, `final`, `delayed`, `adjusted`, `impairment`) belong on a media buy's `push_notification_config`, not on this surface; sellers MUST reject those entries with an `errors[]` warning rather than silently dropping them.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEventTypes(
                    array | NotificationType $eventTypes
                ): static {
                    if ($this->eventTypes === $eventTypes) {
                        return $this;
                    }

                    $value = $modelData['event_types'] = $eventTypes;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEventTypes($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->eventTypes = $value;
                    $this->_rawModelDataInput['event_types'] = $eventTypes;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property eventTypes
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEventTypes(array $modelData): void
            {
                

                $value = array_key_exists('event_types', $modelData) ? $modelData['event_types'] : $this->eventTypes;

                

                $this->eventTypes = $this->validateEventTypes($value, $modelData);
            }

            /**
             * Execute all validators for the property eventTypes
             */
            protected function validateEventTypes($value, array $modelData)
            {
                
                    

if (!array_key_exists('event_types', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'event_types',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'event_types',
  1 => 'array',
)));
}

                
                    $this->validateEventTypes_ArrayItem_1d8674cc32117361add0ba5b91c5a9b3($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'event_types',
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
  0 => 'event_types',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of authentication.
                 *
                 * Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads.
                 *
                 * @return GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9|null
                 */
                public function getAuthentication(): ?GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9
                {
                    

                    return $this->authentication;
                }
            

            
                /**
                 * Set the value of authentication.
                 *
                 * @param GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9 $authentication Legacy authentication selector. Same precedence and semantics as `push-notification-config.authentication` — presence opts the seller into Bearer or HMAC-SHA256 signing; absence selects the default RFC 9421 webhook profile keyed off the seller's brand.json `agents[]` JWKS. Deprecated; removed in AdCP 4.0. Credentials are write-only and MUST NOT be echoed on `list_accounts` reads.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAuthentication(
                    GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9 $authentication
                ): static {
                    if ($this->authentication === $authentication) {
                        return $this;
                    }

                    $value = $modelData['authentication'] = $authentication;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAuthentication($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->authentication = $value;
                    $this->_rawModelDataInput['authentication'] = $authentication;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property authentication
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAuthentication(array $modelData): void
            {
                
                    if (!array_key_exists('authentication', $modelData) && $this->authentication === null) {
                        return;
                    }
                

                $value = array_key_exists('authentication', $modelData) ? $modelData['authentication'] : $this->authentication;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'authentication',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->authentication = $this->validateAuthentication($value, $modelData);
            }

            /**
             * Execute all validators for the property authentication
             */
            protected function validateAuthentication($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'authentication',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'authentication',
  1 => 'GetMediaBuysResponse_Authentication06378826d17c9c08ef7b6b1da6a3d1d9',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of active.
                 *
                 * When false, the seller persists the configuration but suppresses fires. Use to pause a noisy subscriber without losing the registration. Sellers MUST NOT skip persisting the entry when `active: false` — the buyer's next `sync_accounts` MUST observe the same array, otherwise the buyer cannot distinguish pause from drop.
                 *
                 * @return bool
                 */
                public function getActive(): bool
                {
                    

                    return $this->active;
                }
            

            
                /**
                 * Set the value of active.
                 *
                 * @param bool $active When false, the seller persists the configuration but suppresses fires. Use to pause a noisy subscriber without losing the registration. Sellers MUST NOT skip persisting the entry when `active: false` — the buyer's next `sync_accounts` MUST observe the same array, otherwise the buyer cannot distinguish pause from drop.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setActive(
                    bool $active
                ): static {
                    if ($this->active === $active) {
                        return $this;
                    }

                    $value = $modelData['active'] = $active;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateActive($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->active = $value;
                    $this->_rawModelDataInput['active'] = $active;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property active
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processActive(array $modelData): void
            {
                
                    if (!array_key_exists('active', $modelData) && $this->active === null) {
                        return;
                    }
                

                $value = array_key_exists('active', $modelData) ? $modelData['active'] : $this->active;

                

                $this->active = $this->validateActive($value, $modelData);
            }

            /**
             * Execute all validators for the property active
             */
            protected function validateActive($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'active',
  1 => 'bool',
)));
}

                

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
    

    
        
            if (array_key_exists('subscriber_id', $modelData) &&
                $modelData['subscriber_id'] !== $this->subscriberId
            ) {
                

                $rollbackValues['subscriberId'] = $this->subscriberId;
                $this->processSubscriberId($modelData);
            }
        
    
        
            if (array_key_exists('url', $modelData) &&
                $modelData['url'] !== $this->url
            ) {
                

                $rollbackValues['url'] = $this->url;
                $this->processUrl($modelData);
            }
        
    
        
            if (array_key_exists('event_types', $modelData) &&
                $modelData['event_types'] !== $this->eventTypes
            ) {
                

                $rollbackValues['eventTypes'] = $this->eventTypes;
                $this->processEventTypes($modelData);
            }
        
    
        
            if (array_key_exists('authentication', $modelData) &&
                $modelData['authentication'] !== $this->authentication
            ) {
                

                $rollbackValues['authentication'] = $this->authentication;
                $this->processAuthentication($modelData);
            }
        
    
        
            if (array_key_exists('active', $modelData) &&
                $modelData['active'] !== $this->active
            ) {
                

                $rollbackValues['active'] = $this->active;
                $this->processActive($modelData);
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




private function validateEventTypes_ArrayItem_1d8674cc32117361add0ba5b91c5a9b3(&$value, $modelData): void {
                    $invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof NotificationType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array event_types',
  1 => 'NotificationType',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array event_types',
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
  0 => 'item of array event_types',
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
  0 => 'item of array event_types',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array event_types',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c[$index])
                ? $invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c[$index][] = $e
                : $invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'event_types',
  1 => $invalidItems_4bf0cc1a0997fc4f59957b4a139cc30c,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
