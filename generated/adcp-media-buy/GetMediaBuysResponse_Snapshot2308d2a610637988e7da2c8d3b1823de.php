<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de
 * @package AdCP\MediaBuy 
 *
 * Near-real-time delivery snapshot for this package. Only present when include_snapshot was true in the request. Represents the latest available entity-level stats from the platform — not billing-grade data.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot')]

class GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/as_of')]
        
            #[SchemaName('as_of')]
        
            #[Required]
        
        /** @var string ISO 8601 timestamp when this snapshot was captured by the platform */
        protected $asOf;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/staleness_seconds')]
        
            #[SchemaName('staleness_seconds')]
        
            #[Required]
        
        /** @var int Maximum age of this data in seconds. For example, 900 means the data may be up to 15 minutes old. Use this to interpret zero delivery: a value of 900 means zero impressions is likely real; a value of 14400 means reporting may still be catching up. */
        protected $stalenessSeconds;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/impressions')]
        
            #[SchemaName('impressions')]
        
            #[Required]
        
        /** @var float Total impressions delivered since package start */
        protected $impressions;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/spend')]
        
            #[SchemaName('spend')]
        
            #[Required]
        
        /** @var float Total spend since package start, denominated in snapshot.currency when present, otherwise package.currency or media_buy.currency */
        protected $spend;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/currency')]
        
            #[SchemaName('currency')]
        
        /** @var string|null ISO 4217 currency code for spend in this snapshot. Optional when unchanged from package.currency or media_buy.currency. */
        protected $currency;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/clicks')]
        
            #[SchemaName('clicks')]
        
        /** @var float|null Total clicks since package start (when available) */
        protected $clicks;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/pacing_index')]
        
            #[SchemaName('pacing_index')]
        
        /** @var float|null Current delivery pace relative to expected (1.0 = on track, <1.0 = behind, >1.0 = ahead). Absent when pacing cannot be determined. */
        protected $pacingIndex;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/delivery_status')]
        
            #[SchemaName('delivery_status')]
        
        /** @var GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status|null Operational delivery state of this package. 'not_delivering' means the package is within its scheduled flight but has delivered zero impressions for at least one full staleness cycle — the signal for automated price adjustments or buyer alerts. Implementers must not return 'not_delivering' until at least staleness_seconds have elapsed since package activation. */
        protected $deliveryStatus;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/snapshot/properties/ext')]
        
            #[SchemaName('ext')]
        
        /** @var GetMediaBuysResponse_ExtensionObject|null Optional extension object for seller-specific snapshot fields. */
        protected $ext;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  4 => 'currency',
  5 => 'clicks',
  6 => 'pacing_index',
  7 => 'delivery_status',
  8 => 'ext',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAsOf($rawModelDataInput);
            
        
            
                $this->processStalenessSeconds($rawModelDataInput);
            
        
            
                $this->processImpressions($rawModelDataInput);
            
        
            
                $this->processSpend($rawModelDataInput);
            
        
            
                $this->processCurrency($rawModelDataInput);
            
        
            
                $this->processClicks($rawModelDataInput);
            
        
            
                $this->processPacingIndex($rawModelDataInput);
            
        
            
                $this->processDeliveryStatus($rawModelDataInput);
            
        
            
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
   'as_of',
   'staleness_seconds',
   'impressions',
   'spend',
   'currency',
   'clicks',
   'pacing_index',
   'delivery_status',
   'ext',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823de',
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
                 * Get the value of as_of.
                 *
                 * ISO 8601 timestamp when this snapshot was captured by the platform
                 *
                 * @return string
                 */
                public function getAsOf(): string
                {
                    

                    return $this->asOf;
                }
            

            
                /**
                 * Set the value of as_of.
                 *
                 * @param string $asOf ISO 8601 timestamp when this snapshot was captured by the platform
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAsOf(
                    string $asOf
                ): static {
                    if ($this->asOf === $asOf) {
                        return $this;
                    }

                    $value = $modelData['as_of'] = $asOf;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAsOf($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->asOf = $value;
                    $this->_rawModelDataInput['as_of'] = $asOf;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property asOf
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAsOf(array $modelData): void
            {
                

                $value = array_key_exists('as_of', $modelData) ? $modelData['as_of'] : $this->asOf;

                

                $this->asOf = $this->validateAsOf($value, $modelData);
            }

            /**
             * Execute all validators for the property asOf
             */
            protected function validateAsOf($value, array $modelData)
            {
                
                    

if (!array_key_exists('as_of', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'as_of',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'as_of',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'as_of',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of staleness_seconds.
                 *
                 * Maximum age of this data in seconds. For example, 900 means the data may be up to 15 minutes old. Use this to interpret zero delivery: a value of 900 means zero impressions is likely real; a value of 14400 means reporting may still be catching up.
                 *
                 * @return int
                 */
                public function getStalenessSeconds(): int
                {
                    

                    return $this->stalenessSeconds;
                }
            

            
                /**
                 * Set the value of staleness_seconds.
                 *
                 * @param int $stalenessSeconds Maximum age of this data in seconds. For example, 900 means the data may be up to 15 minutes old. Use this to interpret zero delivery: a value of 900 means zero impressions is likely real; a value of 14400 means reporting may still be catching up.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStalenessSeconds(
                    int $stalenessSeconds
                ): static {
                    if ($this->stalenessSeconds === $stalenessSeconds) {
                        return $this;
                    }

                    $value = $modelData['staleness_seconds'] = $stalenessSeconds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStalenessSeconds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->stalenessSeconds = $value;
                    $this->_rawModelDataInput['staleness_seconds'] = $stalenessSeconds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property stalenessSeconds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStalenessSeconds(array $modelData): void
            {
                

                $value = array_key_exists('staleness_seconds', $modelData) ? $modelData['staleness_seconds'] : $this->stalenessSeconds;

                

                $this->stalenessSeconds = $this->validateStalenessSeconds($value, $modelData);
            }

            /**
             * Execute all validators for the property stalenessSeconds
             */
            protected function validateStalenessSeconds($value, array $modelData)
            {
                
                    

if (!array_key_exists('staleness_seconds', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'staleness_seconds',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'staleness_seconds',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'staleness_seconds',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of impressions.
                 *
                 * Total impressions delivered since package start
                 *
                 * @return float
                 */
                public function getImpressions(): float
                {
                    

                    return $this->impressions;
                }
            

            
                /**
                 * Set the value of impressions.
                 *
                 * @param float $impressions Total impressions delivered since package start
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
                

                $value = array_key_exists('impressions', $modelData) ? $modelData['impressions'] : $this->impressions;

                $value = is_int($value) ? (float) $value : $value;

                $this->impressions = $this->validateImpressions($value, $modelData);
            }

            /**
             * Execute all validators for the property impressions
             */
            protected function validateImpressions($value, array $modelData)
            {
                
                    

if (!array_key_exists('impressions', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'impressions',
)));
}

                
                    

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
                 * Get the value of spend.
                 *
                 * Total spend since package start, denominated in snapshot.currency when present, otherwise package.currency or media_buy.currency
                 *
                 * @return float
                 */
                public function getSpend(): float
                {
                    

                    return $this->spend;
                }
            

            
                /**
                 * Set the value of spend.
                 *
                 * @param float $spend Total spend since package start, denominated in snapshot.currency when present, otherwise package.currency or media_buy.currency
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSpend(
                    float $spend
                ): static {
                    if ($this->spend === $spend) {
                        return $this;
                    }

                    $value = $modelData['spend'] = $spend;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSpend($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->spend = $value;
                    $this->_rawModelDataInput['spend'] = $spend;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property spend
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSpend(array $modelData): void
            {
                

                $value = array_key_exists('spend', $modelData) ? $modelData['spend'] : $this->spend;

                $value = is_int($value) ? (float) $value : $value;

                $this->spend = $this->validateSpend($value, $modelData);
            }

            /**
             * Execute all validators for the property spend
             */
            protected function validateSpend($value, array $modelData)
            {
                
                    

if (!array_key_exists('spend', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'spend',
)));
}

                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'spend',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'spend',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of currency.
                 *
                 * ISO 4217 currency code for spend in this snapshot. Optional when unchanged from package.currency or media_buy.currency.
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
                 * @param string $currency ISO 4217 currency code for spend in this snapshot. Optional when unchanged from package.currency or media_buy.currency.
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
                 * Get the value of clicks.
                 *
                 * Total clicks since package start (when available)
                 *
                 * @return float|null
                 */
                public function getClicks(): ?float
                {
                    

                    return $this->clicks;
                }
            

            
                /**
                 * Set the value of clicks.
                 *
                 * @param float $clicks Total clicks since package start (when available)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setClicks(
                    float $clicks
                ): static {
                    if ($this->clicks === $clicks) {
                        return $this;
                    }

                    $value = $modelData['clicks'] = $clicks;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateClicks($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->clicks = $value;
                    $this->_rawModelDataInput['clicks'] = $clicks;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property clicks
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processClicks(array $modelData): void
            {
                
                    if (!array_key_exists('clicks', $modelData) && $this->clicks === null) {
                        return;
                    }
                

                $value = array_key_exists('clicks', $modelData) ? $modelData['clicks'] : $this->clicks;

                $value = is_int($value) ? (float) $value : $value;

                $this->clicks = $this->validateClicks($value, $modelData);
            }

            /**
             * Execute all validators for the property clicks
             */
            protected function validateClicks($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'clicks',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'clicks',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of pacing_index.
                 *
                 * Current delivery pace relative to expected (1.0 = on track, <1.0 = behind, >1.0 = ahead). Absent when pacing cannot be determined.
                 *
                 * @return float|null
                 */
                public function getPacingIndex(): ?float
                {
                    

                    return $this->pacingIndex;
                }
            

            
                /**
                 * Set the value of pacing_index.
                 *
                 * @param float $pacingIndex Current delivery pace relative to expected (1.0 = on track, <1.0 = behind, >1.0 = ahead). Absent when pacing cannot be determined.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPacingIndex(
                    float $pacingIndex
                ): static {
                    if ($this->pacingIndex === $pacingIndex) {
                        return $this;
                    }

                    $value = $modelData['pacing_index'] = $pacingIndex;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePacingIndex($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->pacingIndex = $value;
                    $this->_rawModelDataInput['pacing_index'] = $pacingIndex;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property pacingIndex
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPacingIndex(array $modelData): void
            {
                
                    if (!array_key_exists('pacing_index', $modelData) && $this->pacingIndex === null) {
                        return;
                    }
                

                $value = array_key_exists('pacing_index', $modelData) ? $modelData['pacing_index'] : $this->pacingIndex;

                $value = is_int($value) ? (float) $value : $value;

                $this->pacingIndex = $this->validatePacingIndex($value, $modelData);
            }

            /**
             * Execute all validators for the property pacingIndex
             */
            protected function validatePacingIndex($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'pacing_index',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'pacing_index',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of delivery_status.
                 *
                 * Operational delivery state of this package. 'not_delivering' means the package is within its scheduled flight but has delivered zero impressions for at least one full staleness cycle — the signal for automated price adjustments or buyer alerts. Implementers must not return 'not_delivering' until at least staleness_seconds have elapsed since package activation.
                 *
                 * @return GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status|null
                 */
                public function getDeliveryStatus(): ?GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status
                {
                    

                    return $this->deliveryStatus;
                }
            

            
                /**
                 * Set the value of delivery_status.
                 *
                 * @param string|GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status|null $deliveryStatus Operational delivery state of this package. 'not_delivering' means the package is within its scheduled flight but has delivered zero impressions for at least one full staleness cycle — the signal for automated price adjustments or buyer alerts. Implementers must not return 'not_delivering' until at least staleness_seconds have elapsed since package activation.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setDeliveryStatus(
                    string | GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status | null $deliveryStatus
                ): static {
                    if ($this->deliveryStatus === $deliveryStatus) {
                        return $this;
                    }

                    $value = $modelData['delivery_status'] = $deliveryStatus;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateDeliveryStatus($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->deliveryStatus = $value;
                    $this->_rawModelDataInput['delivery_status'] = $deliveryStatus;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property deliveryStatus
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processDeliveryStatus(array $modelData): void
            {
                
                    if (!array_key_exists('delivery_status', $modelData) && $this->deliveryStatus === null) {
                        return;
                    }
                

                $value = array_key_exists('delivery_status', $modelData) ? $modelData['delivery_status'] : $this->deliveryStatus;

                

                $this->deliveryStatus = $this->validateDeliveryStatus($value, $modelData);
            }

            /**
             * Execute all validators for the property deliveryStatus
             */
            protected function validateDeliveryStatus($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'delivery_status',
  1 => 'GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'delivery_status',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'delivering',
   'not_delivering',
   'completed',
   'budget_exhausted',
   'flight_ended',
   'goal_met',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'delivery_status',
  1 => 
  array (
    0 => 'delivering',
    1 => 'not_delivering',
    2 => 'completed',
    3 => 'budget_exhausted',
    4 => 'flight_ended',
    5 => 'goal_met',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'delivery_status',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'delivery_status',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of ext.
                 *
                 * Optional extension object for seller-specific snapshot fields.
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
                 * @param GetMediaBuysResponse_ExtensionObject $ext Optional extension object for seller-specific snapshot fields.
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
    

    
        
            if (array_key_exists('as_of', $modelData) &&
                $modelData['as_of'] !== $this->asOf
            ) {
                

                $rollbackValues['asOf'] = $this->asOf;
                $this->processAsOf($modelData);
            }
        
    
        
            if (array_key_exists('staleness_seconds', $modelData) &&
                $modelData['staleness_seconds'] !== $this->stalenessSeconds
            ) {
                

                $rollbackValues['stalenessSeconds'] = $this->stalenessSeconds;
                $this->processStalenessSeconds($modelData);
            }
        
    
        
            if (array_key_exists('impressions', $modelData) &&
                $modelData['impressions'] !== $this->impressions
            ) {
                

                $rollbackValues['impressions'] = $this->impressions;
                $this->processImpressions($modelData);
            }
        
    
        
            if (array_key_exists('spend', $modelData) &&
                $modelData['spend'] !== $this->spend
            ) {
                

                $rollbackValues['spend'] = $this->spend;
                $this->processSpend($modelData);
            }
        
    
        
            if (array_key_exists('currency', $modelData) &&
                $modelData['currency'] !== $this->currency
            ) {
                

                $rollbackValues['currency'] = $this->currency;
                $this->processCurrency($modelData);
            }
        
    
        
            if (array_key_exists('clicks', $modelData) &&
                $modelData['clicks'] !== $this->clicks
            ) {
                

                $rollbackValues['clicks'] = $this->clicks;
                $this->processClicks($modelData);
            }
        
    
        
            if (array_key_exists('pacing_index', $modelData) &&
                $modelData['pacing_index'] !== $this->pacingIndex
            ) {
                

                $rollbackValues['pacingIndex'] = $this->pacingIndex;
                $this->processPacingIndex($modelData);
            }
        
    
        
            if (array_key_exists('delivery_status', $modelData) &&
                $modelData['delivery_status'] !== $this->deliveryStatus
            ) {
                

                $rollbackValues['deliveryStatus'] = $this->deliveryStatus;
                $this->processDeliveryStatus($modelData);
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
 * serialize the property deliveryStatus
 */
protected function serializeDeliveryStatus()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->deliveryStatus, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuysResponse_Snapshot2308d2a610637988e7da2c8d3b1823deDelivery_Status',
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



}

// @codeCoverageIgnoreEnd
