<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\SnapshotUnavailableReason;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use AdCP\MediaBuy\Enums\DevicePlatform;

    use AdCP\MediaBuy\Enums\DeviceType;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

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

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

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
 * Class GetMediaBuysResponse_PackageStatus
 * @package AdCP\MediaBuy 
 *
 * Current status of a package within a media buy — includes creative approval state and optional delivery snapshot. For the creation input shape, see PackageRequest. For the creation output shape, see Package.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items')]

class GetMediaBuysResponse_PackageStatus implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/package_id')]
        
            #[SchemaName('package_id')]
        
            #[Required]
        
        /** @var string Seller's package identifier */
        protected $packageId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/product_id')]
        
            #[SchemaName('product_id')]
        
        /** @var string|null Product identifier this package is purchased from */
        protected $productId;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/budget')]
        
            #[SchemaName('budget')]
        
        /** @var float|null Package budget amount, denominated in package.currency when present, otherwise media_buy.currency */
        protected $budget;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/currency')]
        
            #[SchemaName('currency')]
        
        /** @var string|null ISO 4217 currency code for monetary values at this package level (budget, bid_price, snapshot.spend). When absent, inherit media_buy.currency. */
        protected $currency;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/bid_price')]
        
            #[SchemaName('bid_price')]
        
        /** @var float|null Current bid price for auction-based packages. Denominated in package.currency when present, otherwise media_buy.currency. Relevant for automated price optimization loops. */
        protected $bidPrice;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/impressions')]
        
            #[SchemaName('impressions')]
        
        /** @var float|null Goal impression count for impression-based packages */
        protected $impressions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay')]
        
            #[SchemaName('targeting_overlay')]
        
        /** @var GetMediaBuysResponse_TargetingOverlay|null Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted. */
        protected $targetingOverlay;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/start_time')]
        
            #[SchemaName('start_time')]
        
        /** @var string|null ISO 8601 flight start time for this package. Use to determine whether the package is within its scheduled flight before interpreting delivery status. */
        protected $startTime;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/end_time')]
        
            #[SchemaName('end_time')]
        
        /** @var string|null ISO 8601 flight end time for this package */
        protected $endTime;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/paused')]
        
            #[SchemaName('paused')]
        
        /** @var bool|null Whether this package is currently paused by the buyer */
        protected $paused;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/canceled')]
        
            #[SchemaName('canceled')]
        
        /** @var bool|null Whether this package has been canceled. Canceled packages stop delivery and cannot be reactivated. */
        protected $canceled;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/cancellation')]
        
            #[SchemaName('cancellation')]
        
        /** @var GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f|null Cancellation metadata. Present only when canceled is true. */
        protected $cancellation;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_deadline')]
        
            #[SchemaName('creative_deadline')]
        
        /** @var string|null ISO 8601 timestamp for creative upload or change deadline for this package. After this deadline, creative changes are rejected. When absent, the media buy's creative_deadline applies. */
        protected $creativeDeadline;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/creative_approvals')]
        
            #[SchemaName('creative_approvals')]
        
        /** @var GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf[]|null Approval status for each creative assigned to this package. Absent when no creatives have been assigned. */
        protected $creativeApprovals;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/format_ids_pending')]
        
            #[SchemaName('format_ids_pending')]
        
        /** @var GetMediaBuysResponse_FormatReferenceStructuredObject[]|null Format IDs from the original create_media_buy format_ids_to_provide that have not yet been uploaded via sync_creatives. When empty or absent, all required formats have been provided. */
        protected $formatIdsPending;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot_unavailable_reason')]
        
            #[SchemaName('snapshot_unavailable_reason')]
        
        /** @var SnapshotUnavailableReason|null Machine-readable reason the snapshot is omitted. Present only when include_snapshot was true and snapshot is unavailable for this package. */
        protected $snapshotUnavailableReason;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot')]
        
            #[SchemaName('snapshot')]
        
        /** @var GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de|null Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data. */
        protected $snapshot;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/ext')]
        
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
  1 => 'product_id',
  2 => 'budget',
  3 => 'currency',
  4 => 'bid_price',
  5 => 'impressions',
  6 => 'targeting_overlay',
  7 => 'start_time',
  8 => 'end_time',
  9 => 'paused',
  10 => 'canceled',
  11 => 'cancellation',
  12 => 'creative_deadline',
  13 => 'creative_approvals',
  14 => 'format_ids_pending',
  15 => 'snapshot_unavailable_reason',
  16 => 'snapshot',
  17 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_PackageStatus constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPackageId($rawModelDataInput);
            
        
            
                $this->processProductId($rawModelDataInput);
            
        
            
                $this->processBudget($rawModelDataInput);
            
        
            
                $this->processCurrency($rawModelDataInput);
            
        
            
                $this->processBidPrice($rawModelDataInput);
            
        
            
                $this->processImpressions($rawModelDataInput);
            
        
            
                $this->processTargetingOverlay($rawModelDataInput);
            
        
            
                $this->processStartTime($rawModelDataInput);
            
        
            
                $this->processEndTime($rawModelDataInput);
            
        
            
                $this->processPaused($rawModelDataInput);
            
        
            
                $this->processCanceled($rawModelDataInput);
            
        
            
                $this->processCancellation($rawModelDataInput);
            
        
            
                $this->processCreativeDeadline($rawModelDataInput);
            
        
            
                $this->processCreativeApprovals($rawModelDataInput);
            
        
            
                $this->processFormatIdsPending($rawModelDataInput);
            
        
            
                $this->processSnapshotUnavailableReason($rawModelDataInput);
            
        
            
                $this->processSnapshot($rawModelDataInput);
            
        
            
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
   'package_id',
   'product_id',
   'budget',
   'currency',
   'bid_price',
   'impressions',
   'targeting_overlay',
   'start_time',
   'end_time',
   'paused',
   'canceled',
   'cancellation',
   'creative_deadline',
   'creative_approvals',
   'format_ids_pending',
   'snapshot_unavailable_reason',
   'snapshot',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_PackageStatus',
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
                 * Get the value of package_id.
                 *
                 * Seller's package identifier
                 *
                 * @return string
                 */
                public function getPackageId(): string
                {
                    

                    return $this->packageId;
                }
            

            
                /**
                 * Set the value of package_id.
                 *
                 * @param string $packageId Seller's package identifier
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPackageId(
                    string $packageId
                ): static {
                    if ($this->packageId === $packageId) {
                        return $this;
                    }

                    $value = $modelData['package_id'] = $packageId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePackageId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->packageId = $value;
                    $this->_rawModelDataInput['package_id'] = $packageId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property packageId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPackageId(array $modelData): void
            {
                

                $value = array_key_exists('package_id', $modelData) ? $modelData['package_id'] : $this->packageId;

                

                $this->packageId = $this->validatePackageId($value, $modelData);
            }

            /**
             * Execute all validators for the property packageId
             */
            protected function validatePackageId($value, array $modelData)
            {
                
                    

if (!array_key_exists('package_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'package_id',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'package_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of product_id.
                 *
                 * Product identifier this package is purchased from
                 *
                 * @return string|null
                 */
                public function getProductId(): ?string
                {
                    

                    return $this->productId;
                }
            

            
                /**
                 * Set the value of product_id.
                 *
                 * @param string $productId Product identifier this package is purchased from
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setProductId(
                    string $productId
                ): static {
                    if ($this->productId === $productId) {
                        return $this;
                    }

                    $value = $modelData['product_id'] = $productId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateProductId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->productId = $value;
                    $this->_rawModelDataInput['product_id'] = $productId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property productId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processProductId(array $modelData): void
            {
                
                    if (!array_key_exists('product_id', $modelData) && $this->productId === null) {
                        return;
                    }
                

                $value = array_key_exists('product_id', $modelData) ? $modelData['product_id'] : $this->productId;

                

                $this->productId = $this->validateProductId($value, $modelData);
            }

            /**
             * Execute all validators for the property productId
             */
            protected function validateProductId($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'product_id',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of budget.
                 *
                 * Package budget amount, denominated in package.currency when present, otherwise media_buy.currency
                 *
                 * @return float|null
                 */
                public function getBudget(): ?float
                {
                    

                    return $this->budget;
                }
            

            
                /**
                 * Set the value of budget.
                 *
                 * @param float $budget Package budget amount, denominated in package.currency when present, otherwise media_buy.currency
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBudget(
                    float $budget
                ): static {
                    if ($this->budget === $budget) {
                        return $this;
                    }

                    $value = $modelData['budget'] = $budget;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBudget($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->budget = $value;
                    $this->_rawModelDataInput['budget'] = $budget;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property budget
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBudget(array $modelData): void
            {
                
                    if (!array_key_exists('budget', $modelData) && $this->budget === null) {
                        return;
                    }
                

                $value = array_key_exists('budget', $modelData) ? $modelData['budget'] : $this->budget;

                $value = is_int($value) ? (float) $value : $value;

                $this->budget = $this->validateBudget($value, $modelData);
            }

            /**
             * Execute all validators for the property budget
             */
            protected function validateBudget($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'budget',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'budget',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of currency.
                 *
                 * ISO 4217 currency code for monetary values at this package level (budget, bid_price, snapshot.spend). When absent, inherit media_buy.currency.
                 *
                 * @return string|null
                 */
                public function getCurrency(): ?string
                {
                    

                    return $this->currency;
                }
            

            
                /**
                 * Set the value of currency.
                 *
                 * @param string $currency ISO 4217 currency code for monetary values at this package level (budget, bid_price, snapshot.spend). When absent, inherit media_buy.currency.
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
                
                    if (!array_key_exists('currency', $modelData) && $this->currency === null) {
                        return;
                    }
                

                $value = array_key_exists('currency', $modelData) ? $modelData['currency'] : $this->currency;

                

                $this->currency = $this->validateCurrency($value, $modelData);
            }

            /**
             * Execute all validators for the property currency
             */
            protected function validateCurrency($value, array $modelData)
            {
                
                    

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
                 * Get the value of bid_price.
                 *
                 * Current bid price for auction-based packages. Denominated in package.currency when present, otherwise media_buy.currency. Relevant for automated price optimization loops.
                 *
                 * @return float|null
                 */
                public function getBidPrice(): ?float
                {
                    

                    return $this->bidPrice;
                }
            

            
                /**
                 * Set the value of bid_price.
                 *
                 * @param float $bidPrice Current bid price for auction-based packages. Denominated in package.currency when present, otherwise media_buy.currency. Relevant for automated price optimization loops.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBidPrice(
                    float $bidPrice
                ): static {
                    if ($this->bidPrice === $bidPrice) {
                        return $this;
                    }

                    $value = $modelData['bid_price'] = $bidPrice;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBidPrice($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->bidPrice = $value;
                    $this->_rawModelDataInput['bid_price'] = $bidPrice;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property bidPrice
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBidPrice(array $modelData): void
            {
                
                    if (!array_key_exists('bid_price', $modelData) && $this->bidPrice === null) {
                        return;
                    }
                

                $value = array_key_exists('bid_price', $modelData) ? $modelData['bid_price'] : $this->bidPrice;

                $value = is_int($value) ? (float) $value : $value;

                $this->bidPrice = $this->validateBidPrice($value, $modelData);
            }

            /**
             * Execute all validators for the property bidPrice
             */
            protected function validateBidPrice($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'bid_price',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'bid_price',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of impressions.
                 *
                 * Goal impression count for impression-based packages
                 *
                 * @return float|null
                 */
                public function getImpressions(): ?float
                {
                    

                    return $this->impressions;
                }
            

            
                /**
                 * Set the value of impressions.
                 *
                 * @param float $impressions Goal impression count for impression-based packages
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setImpressions(
                    float $impressions
                ): static {
                    if ($this->impressions === $impressions) {
                        return $this;
                    }

                    $value = $modelData['impressions'] = $impressions;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateImpressions($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->impressions = $value;
                    $this->_rawModelDataInput['impressions'] = $impressions;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property impressions
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processImpressions(array $modelData): void
            {
                
                    if (!array_key_exists('impressions', $modelData) && $this->impressions === null) {
                        return;
                    }
                

                $value = array_key_exists('impressions', $modelData) ? $modelData['impressions'] : $this->impressions;

                $value = is_int($value) ? (float) $value : $value;

                $this->impressions = $this->validateImpressions($value, $modelData);
            }

            /**
             * Execute all validators for the property impressions
             */
            protected function validateImpressions($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'impressions',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'impressions',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of targeting_overlay.
                 *
                 * Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted.
                 *
                 * @return GetMediaBuysResponse_TargetingOverlay|null
                 */
                public function getTargetingOverlay(): ?GetMediaBuysResponse_TargetingOverlay
                {
                    

                    return $this->targetingOverlay;
                }
            

            
                /**
                 * Set the value of targeting_overlay.
                 *
                 * @param GetMediaBuysResponse_TargetingOverlay $targetingOverlay Targeting overlay applied to this package, echoed from the most recent create_media_buy or update_media_buy. Sellers SHOULD echo any persisted targeting so buyers can verify what was stored without replaying their own request. Sellers claiming the property-lists or collection-lists specialisms MUST include, within this targeting_overlay, the PropertyListReference / CollectionListReference they persisted.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTargetingOverlay(
                    GetMediaBuysResponse_TargetingOverlay $targetingOverlay
                ): static {
                    if ($this->targetingOverlay === $targetingOverlay) {
                        return $this;
                    }

                    $value = $modelData['targeting_overlay'] = $targetingOverlay;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTargetingOverlay($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->targetingOverlay = $value;
                    $this->_rawModelDataInput['targeting_overlay'] = $targetingOverlay;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property targetingOverlay
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTargetingOverlay(array $modelData): void
            {
                
                    if (!array_key_exists('targeting_overlay', $modelData) && $this->targetingOverlay === null) {
                        return;
                    }
                

                $value = array_key_exists('targeting_overlay', $modelData) ? $modelData['targeting_overlay'] : $this->targetingOverlay;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_TargetingOverlay($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'targeting_overlay',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->targetingOverlay = $this->validateTargetingOverlay($value, $modelData);
            }

            /**
             * Execute all validators for the property targetingOverlay
             */
            protected function validateTargetingOverlay($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'targeting_overlay',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_TargetingOverlay)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'targeting_overlay',
  1 => 'GetMediaBuysResponse_TargetingOverlay',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of start_time.
                 *
                 * ISO 8601 flight start time for this package. Use to determine whether the package is within its scheduled flight before interpreting delivery status.
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
                 * @param string $startTime ISO 8601 flight start time for this package. Use to determine whether the package is within its scheduled flight before interpreting delivery status.
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
                 * ISO 8601 flight end time for this package
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
                 * @param string $endTime ISO 8601 flight end time for this package
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
                 * Get the value of paused.
                 *
                 * Whether this package is currently paused by the buyer
                 *
                 * @return bool|null
                 */
                public function getPaused(): ?bool
                {
                    

                    return $this->paused;
                }
            

            
                /**
                 * Set the value of paused.
                 *
                 * @param bool $paused Whether this package is currently paused by the buyer
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPaused(
                    bool $paused
                ): static {
                    if ($this->paused === $paused) {
                        return $this;
                    }

                    $value = $modelData['paused'] = $paused;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePaused($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->paused = $value;
                    $this->_rawModelDataInput['paused'] = $paused;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property paused
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPaused(array $modelData): void
            {
                
                    if (!array_key_exists('paused', $modelData) && $this->paused === null) {
                        return;
                    }
                

                $value = array_key_exists('paused', $modelData) ? $modelData['paused'] : $this->paused;

                

                $this->paused = $this->validatePaused($value, $modelData);
            }

            /**
             * Execute all validators for the property paused
             */
            protected function validatePaused($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'paused',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of canceled.
                 *
                 * Whether this package has been canceled. Canceled packages stop delivery and cannot be reactivated.
                 *
                 * @return bool|null
                 */
                public function getCanceled(): ?bool
                {
                    

                    return $this->canceled;
                }
            

            
                /**
                 * Set the value of canceled.
                 *
                 * @param bool $canceled Whether this package has been canceled. Canceled packages stop delivery and cannot be reactivated.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCanceled(
                    bool $canceled
                ): static {
                    if ($this->canceled === $canceled) {
                        return $this;
                    }

                    $value = $modelData['canceled'] = $canceled;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCanceled($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->canceled = $value;
                    $this->_rawModelDataInput['canceled'] = $canceled;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property canceled
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCanceled(array $modelData): void
            {
                
                    if (!array_key_exists('canceled', $modelData) && $this->canceled === null) {
                        return;
                    }
                

                $value = array_key_exists('canceled', $modelData) ? $modelData['canceled'] : $this->canceled;

                

                $this->canceled = $this->validateCanceled($value, $modelData);
            }

            /**
             * Execute all validators for the property canceled
             */
            protected function validateCanceled($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'canceled',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of cancellation.
                 *
                 * Cancellation metadata. Present only when canceled is true.
                 *
                 * @return GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f|null
                 */
                public function getCancellation(): ?GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f
                {
                    

                    return $this->cancellation;
                }
            

            
                /**
                 * Set the value of cancellation.
                 *
                 * @param GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f $cancellation Cancellation metadata. Present only when canceled is true.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCancellation(
                    GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f $cancellation
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
        return is_array($value) ? new GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f($value) : $value;
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

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'cancellation',
  1 => 'GetMediaBuysResponse_Cancellation86dfc7bbdbf088e383309da2d050967f',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of creative_deadline.
                 *
                 * ISO 8601 timestamp for creative upload or change deadline for this package. After this deadline, creative changes are rejected. When absent, the media buy's creative_deadline applies.
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
                 * @param string $creativeDeadline ISO 8601 timestamp for creative upload or change deadline for this package. After this deadline, creative changes are rejected. When absent, the media buy's creative_deadline applies.
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
                 * Get the value of creative_approvals.
                 *
                 * Approval status for each creative assigned to this package. Absent when no creatives have been assigned.
                 *
                 * @return GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf[]|null
                 */
                public function getCreativeApprovals(): ?array
                {
                    

                    return $this->creativeApprovals;
                }
            

            
                /**
                 * Set the value of creative_approvals.
                 *
                 * @param GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf[] $creativeApprovals Approval status for each creative assigned to this package. Absent when no creatives have been assigned.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCreativeApprovals(
                    array $creativeApprovals
                ): static {
                    if ($this->creativeApprovals === $creativeApprovals) {
                        return $this;
                    }

                    $value = $modelData['creative_approvals'] = $creativeApprovals;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCreativeApprovals($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->creativeApprovals = $value;
                    $this->_rawModelDataInput['creative_approvals'] = $creativeApprovals;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property creativeApprovals
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCreativeApprovals(array $modelData): void
            {
                
                    if (!array_key_exists('creative_approvals', $modelData) && $this->creativeApprovals === null) {
                        return;
                    }
                

                $value = array_key_exists('creative_approvals', $modelData) ? $modelData['creative_approvals'] : $this->creativeApprovals;

                

                $this->creativeApprovals = $this->validateCreativeApprovals($value, $modelData);
            }

            /**
             * Execute all validators for the property creativeApprovals
             */
            protected function validateCreativeApprovals($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'creative_approvals',
  1 => 'array',
)));
}

                
                    $this->validateCreativeApprovals_ArrayItem_d9376f586510864a45ff1629d0ded079($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of format_ids_pending.
                 *
                 * Format IDs from the original create_media_buy format_ids_to_provide that have not yet been uploaded via sync_creatives. When empty or absent, all required formats have been provided.
                 *
                 * @return GetMediaBuysResponse_FormatReferenceStructuredObject[]|null
                 */
                public function getFormatIdsPending(): ?array
                {
                    

                    return $this->formatIdsPending;
                }
            

            
                /**
                 * Set the value of format_ids_pending.
                 *
                 * @param GetMediaBuysResponse_FormatReferenceStructuredObject[] $formatIdsPending Format IDs from the original create_media_buy format_ids_to_provide that have not yet been uploaded via sync_creatives. When empty or absent, all required formats have been provided.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFormatIdsPending(
                    array $formatIdsPending
                ): static {
                    if ($this->formatIdsPending === $formatIdsPending) {
                        return $this;
                    }

                    $value = $modelData['format_ids_pending'] = $formatIdsPending;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFormatIdsPending($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->formatIdsPending = $value;
                    $this->_rawModelDataInput['format_ids_pending'] = $formatIdsPending;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property formatIdsPending
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFormatIdsPending(array $modelData): void
            {
                
                    if (!array_key_exists('format_ids_pending', $modelData) && $this->formatIdsPending === null) {
                        return;
                    }
                

                $value = array_key_exists('format_ids_pending', $modelData) ? $modelData['format_ids_pending'] : $this->formatIdsPending;

                

                $this->formatIdsPending = $this->validateFormatIdsPending($value, $modelData);
            }

            /**
             * Execute all validators for the property formatIdsPending
             */
            protected function validateFormatIdsPending($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'format_ids_pending',
  1 => 'array',
)));
}

                
                    $this->validateFormatIdsPending_ArrayItem_a6fb28643012c17cbcf69adeeb76b4b0($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of snapshot_unavailable_reason.
                 *
                 * Machine-readable reason the snapshot is omitted. Present only when include_snapshot was true and snapshot is unavailable for this package.
                 *
                 * @return SnapshotUnavailableReason|null
                 */
                public function getSnapshotUnavailableReason(): ?SnapshotUnavailableReason
                {
                    

                    return $this->snapshotUnavailableReason;
                }
            

            
                /**
                 * Set the value of snapshot_unavailable_reason.
                 *
                 * @param string|SnapshotUnavailableReason|null $snapshotUnavailableReason Machine-readable reason the snapshot is omitted. Present only when include_snapshot was true and snapshot is unavailable for this package.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSnapshotUnavailableReason(
                    string | SnapshotUnavailableReason | null $snapshotUnavailableReason
                ): static {
                    if ($this->snapshotUnavailableReason === $snapshotUnavailableReason) {
                        return $this;
                    }

                    $value = $modelData['snapshot_unavailable_reason'] = $snapshotUnavailableReason;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSnapshotUnavailableReason($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->snapshotUnavailableReason = $value;
                    $this->_rawModelDataInput['snapshot_unavailable_reason'] = $snapshotUnavailableReason;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property snapshotUnavailableReason
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSnapshotUnavailableReason(array $modelData): void
            {
                
                    if (!array_key_exists('snapshot_unavailable_reason', $modelData) && $this->snapshotUnavailableReason === null) {
                        return;
                    }
                

                $value = array_key_exists('snapshot_unavailable_reason', $modelData) ? $modelData['snapshot_unavailable_reason'] : $this->snapshotUnavailableReason;

                

                $this->snapshotUnavailableReason = $this->validateSnapshotUnavailableReason($value, $modelData);
            }

            /**
             * Execute all validators for the property snapshotUnavailableReason
             */
            protected function validateSnapshotUnavailableReason($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof SnapshotUnavailableReason)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'snapshot_unavailable_reason',
  1 => 'SnapshotUnavailableReason',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'snapshot_unavailable_reason',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'SNAPSHOT_UNSUPPORTED',
   'SNAPSHOT_TEMPORARILY_UNAVAILABLE',
   'SNAPSHOT_PERMISSION_DENIED',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'snapshot_unavailable_reason',
  1 => 
  array (
    0 => 'SNAPSHOT_UNSUPPORTED',
    1 => 'SNAPSHOT_TEMPORARILY_UNAVAILABLE',
    2 => 'SNAPSHOT_PERMISSION_DENIED',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\SnapshotUnavailableReason',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'snapshot_unavailable_reason',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'snapshot_unavailable_reason',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of snapshot.
                 *
                 * Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data.
                 *
                 * @return GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de|null
                 */
                public function getSnapshot(): ?GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de
                {
                    

                    return $this->snapshot;
                }
            

            
                /**
                 * Set the value of snapshot.
                 *
                 * @param GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de $snapshot Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSnapshot(
                    GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de $snapshot
                ): static {
                    if ($this->snapshot === $snapshot) {
                        return $this;
                    }

                    $value = $modelData['snapshot'] = $snapshot;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSnapshot($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->snapshot = $value;
                    $this->_rawModelDataInput['snapshot'] = $snapshot;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property snapshot
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSnapshot(array $modelData): void
            {
                
                    if (!array_key_exists('snapshot', $modelData) && $this->snapshot === null) {
                        return;
                    }
                

                $value = array_key_exists('snapshot', $modelData) ? $modelData['snapshot'] : $this->snapshot;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'snapshot',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->snapshot = $this->validateSnapshot($value, $modelData);
            }

            /**
             * Execute all validators for the property snapshot
             */
            protected function validateSnapshot($value, array $modelData)
            {
                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'snapshot',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'snapshot',
  1 => 'GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de',
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
    

    
        
            if (array_key_exists('package_id', $modelData) &&
                $modelData['package_id'] !== $this->packageId
            ) {
                

                $rollbackValues['packageId'] = $this->packageId;
                $this->processPackageId($modelData);
            }
        
    
        
            if (array_key_exists('product_id', $modelData) &&
                $modelData['product_id'] !== $this->productId
            ) {
                

                $rollbackValues['productId'] = $this->productId;
                $this->processProductId($modelData);
            }
        
    
        
            if (array_key_exists('budget', $modelData) &&
                $modelData['budget'] !== $this->budget
            ) {
                

                $rollbackValues['budget'] = $this->budget;
                $this->processBudget($modelData);
            }
        
    
        
            if (array_key_exists('currency', $modelData) &&
                $modelData['currency'] !== $this->currency
            ) {
                

                $rollbackValues['currency'] = $this->currency;
                $this->processCurrency($modelData);
            }
        
    
        
            if (array_key_exists('bid_price', $modelData) &&
                $modelData['bid_price'] !== $this->bidPrice
            ) {
                

                $rollbackValues['bidPrice'] = $this->bidPrice;
                $this->processBidPrice($modelData);
            }
        
    
        
            if (array_key_exists('impressions', $modelData) &&
                $modelData['impressions'] !== $this->impressions
            ) {
                

                $rollbackValues['impressions'] = $this->impressions;
                $this->processImpressions($modelData);
            }
        
    
        
            if (array_key_exists('targeting_overlay', $modelData) &&
                $modelData['targeting_overlay'] !== $this->targetingOverlay
            ) {
                

                $rollbackValues['targetingOverlay'] = $this->targetingOverlay;
                $this->processTargetingOverlay($modelData);
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
        
    
        
            if (array_key_exists('paused', $modelData) &&
                $modelData['paused'] !== $this->paused
            ) {
                

                $rollbackValues['paused'] = $this->paused;
                $this->processPaused($modelData);
            }
        
    
        
            if (array_key_exists('canceled', $modelData) &&
                $modelData['canceled'] !== $this->canceled
            ) {
                

                $rollbackValues['canceled'] = $this->canceled;
                $this->processCanceled($modelData);
            }
        
    
        
            if (array_key_exists('cancellation', $modelData) &&
                $modelData['cancellation'] !== $this->cancellation
            ) {
                

                $rollbackValues['cancellation'] = $this->cancellation;
                $this->processCancellation($modelData);
            }
        
    
        
            if (array_key_exists('creative_deadline', $modelData) &&
                $modelData['creative_deadline'] !== $this->creativeDeadline
            ) {
                

                $rollbackValues['creativeDeadline'] = $this->creativeDeadline;
                $this->processCreativeDeadline($modelData);
            }
        
    
        
            if (array_key_exists('creative_approvals', $modelData) &&
                $modelData['creative_approvals'] !== $this->creativeApprovals
            ) {
                

                $rollbackValues['creativeApprovals'] = $this->creativeApprovals;
                $this->processCreativeApprovals($modelData);
            }
        
    
        
            if (array_key_exists('format_ids_pending', $modelData) &&
                $modelData['format_ids_pending'] !== $this->formatIdsPending
            ) {
                

                $rollbackValues['formatIdsPending'] = $this->formatIdsPending;
                $this->processFormatIdsPending($modelData);
            }
        
    
        
            if (array_key_exists('snapshot_unavailable_reason', $modelData) &&
                $modelData['snapshot_unavailable_reason'] !== $this->snapshotUnavailableReason
            ) {
                

                $rollbackValues['snapshotUnavailableReason'] = $this->snapshotUnavailableReason;
                $this->processSnapshotUnavailableReason($modelData);
            }
        
    
        
            if (array_key_exists('snapshot', $modelData) &&
                $modelData['snapshot'] !== $this->snapshot
            ) {
                

                $rollbackValues['snapshot'] = $this->snapshot;
                $this->processSnapshot($modelData);
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
 * serialize the property snapshotUnavailableReason
 */
protected function serializeSnapshotUnavailableReason()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->snapshotUnavailableReason, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\SnapshotUnavailableReason',
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


private function validateCreativeApprovals_ArrayItem_d9376f586510864a45ff1629d0ded079(&$value, $modelData): void {
                    $invalidItems_2dab5c4469beb013b938ec70b9d3d0f8 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_2dab5c4469beb013b938ec70b9d3d0f8, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf($value) : $value;
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
  0 => 'item of array creative_approvals',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array creative_approvals',
  1 => 'GetMediaBuysResponse_ItemOfArrayCreative_Approvalsea4cf9200407e5ebf06e7e00e1c175bf',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_2dab5c4469beb013b938ec70b9d3d0f8[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_2dab5c4469beb013b938ec70b9d3d0f8[$index])
                ? $invalidItems_2dab5c4469beb013b938ec70b9d3d0f8[$index][] = $e
                : $invalidItems_2dab5c4469beb013b938ec70b9d3d0f8[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_2dab5c4469beb013b938ec70b9d3d0f8);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'creative_approvals',
  1 => $invalidItems_2dab5c4469beb013b938ec70b9d3d0f8,
)));
                    }
                }

private function validateFormatIdsPending_ArrayItem_a6fb28643012c17cbcf69adeeb76b4b0(&$value, $modelData): void {
                    $invalidItems_73f552916a03aab9e290a43deaf21f31 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_73f552916a03aab9e290a43deaf21f31, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysResponse_FormatReferenceStructuredObject($value) : $value;
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
  0 => 'item of array format_ids_pending',
  1 => 'object',
)));
}

            
                

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysResponse_FormatReferenceStructuredObject)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'item of array format_ids_pending',
  1 => 'GetMediaBuysResponse_FormatReferenceStructuredObject',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_73f552916a03aab9e290a43deaf21f31[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_73f552916a03aab9e290a43deaf21f31[$index])
                ? $invalidItems_73f552916a03aab9e290a43deaf21f31[$index][] = $e
                : $invalidItems_73f552916a03aab9e290a43deaf21f31[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_73f552916a03aab9e290a43deaf21f31);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'format_ids_pending',
  1 => $invalidItems_73f552916a03aab9e290a43deaf21f31,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
