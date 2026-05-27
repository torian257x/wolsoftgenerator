<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MatchType;

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

    use AdCP\MediaBuy\Enums\MediaBuyValidAction;

    use AdCP\MediaBuy\Enums\MediaBuyActionMode;

    use AdCP\MediaBuy\Enums\GetMediaBuysResponse_WebhookActivityRecordStatus;

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

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/keyword_targets/items')]

class GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/keyword_targets/items/properties/keyword')]
        
            #[SchemaName('keyword')]
        
            #[Required]
        
        /** @var string The keyword to target */
        protected $keyword;
    
        
            #[JsonPointer('/$defs/MatchType')]
        
            #[SchemaName('match_type')]
        
            #[Required]
        
        /** @var MatchType Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly. */
        protected $matchType;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/keyword_targets/items/properties/bid_price')]
        
            #[SchemaName('bid_price')]
        
        /** @var float|null Per-keyword bid price, denominated in the same currency as the package's pricing option. Overrides the package-level bid_price for this keyword. Inherits the max_bid interpretation from the pricing option: when max_bid is true, this is the keyword's bid ceiling; when false, this is the exact bid. If omitted, the package bid_price applies. */
        protected $bidPrice;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'bid_price',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processKeyword($rawModelDataInput);
            
        
            
                $this->processMatchType($rawModelDataInput);
            
        
            
                $this->processBidPrice($rawModelDataInput);
            
        
            
        

        
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
   'keyword',
   'match_type',
   'bid_price',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayKeyword_Targetsdde9cd46979b9032445cd1de5c128ed9',
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
                 * Get the value of keyword.
                 *
                 * The keyword to target
                 *
                 * @return string
                 */
                public function getKeyword(): string
                {
                    

                    return $this->keyword;
                }
            

            
                /**
                 * Set the value of keyword.
                 *
                 * @param string $keyword The keyword to target
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setKeyword(
                    string $keyword
                ): static {
                    if ($this->keyword === $keyword) {
                        return $this;
                    }

                    $value = $modelData['keyword'] = $keyword;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateKeyword($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->keyword = $value;
                    $this->_rawModelDataInput['keyword'] = $keyword;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property keyword
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processKeyword(array $modelData): void
            {
                

                $value = array_key_exists('keyword', $modelData) ? $modelData['keyword'] : $this->keyword;

                

                $this->keyword = $this->validateKeyword($value, $modelData);
            }

            /**
             * Execute all validators for the property keyword
             */
            protected function validateKeyword($value, array $modelData)
            {
                
                    

if (!array_key_exists('keyword', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'keyword',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'keyword',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && mb_strlen($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\MinLengthException($value ?? null, ...array (
  0 => 'keyword',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of match_type.
                 *
                 * Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
                 *
                 * @return MatchType
                 */
                public function getMatchType(): MatchType
                {
                    

                    return $this->matchType;
                }
            

            
                /**
                 * Set the value of match_type.
                 *
                 * @param string|MatchType $matchType Keyword targeting match type. broad: ads may serve on queries semantically related to the keyword. phrase: ads serve when the query contains the keyword phrase. exact: ads serve only when the query matches the keyword exactly.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMatchType(
                    string | MatchType $matchType
                ): static {
                    if ($this->matchType === $matchType) {
                        return $this;
                    }

                    $value = $modelData['match_type'] = $matchType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMatchType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->matchType = $value;
                    $this->_rawModelDataInput['match_type'] = $matchType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property matchType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMatchType(array $modelData): void
            {
                

                $value = array_key_exists('match_type', $modelData) ? $modelData['match_type'] : $this->matchType;

                

                $this->matchType = $this->validateMatchType($value, $modelData);
            }

            /**
             * Execute all validators for the property matchType
             */
            protected function validateMatchType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MatchType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'MatchType',
)));
}

                
                    

if (!array_key_exists('match_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'match_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'broad',
   'phrase',
   'exact',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'match_type',
  1 => 
  array (
    0 => 'broad',
    1 => 'phrase',
    2 => 'exact',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MatchType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'match_type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of bid_price.
                 *
                 * Per-keyword bid price, denominated in the same currency as the package's pricing option. Overrides the package-level bid_price for this keyword. Inherits the max_bid interpretation from the pricing option: when max_bid is true, this is the keyword's bid ceiling; when false, this is the exact bid. If omitted, the package bid_price applies.
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
                 * @param float $bidPrice Per-keyword bid price, denominated in the same currency as the package's pricing option. Overrides the package-level bid_price for this keyword. Inherits the max_bid interpretation from the pricing option: when max_bid is true, this is the keyword's bid ceiling; when false, this is the exact bid. If omitted, the package bid_price applies.
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
    

    
        
            if (array_key_exists('keyword', $modelData) &&
                $modelData['keyword'] !== $this->keyword
            ) {
                

                $rollbackValues['keyword'] = $this->keyword;
                $this->processKeyword($modelData);
            }
        
    
        
            if (array_key_exists('match_type', $modelData) &&
                $modelData['match_type'] !== $this->matchType
            ) {
                

                $rollbackValues['matchType'] = $this->matchType;
                $this->processMatchType($modelData);
            }
        
    
        
            if (array_key_exists('bid_price', $modelData) &&
                $modelData['bid_price'] !== $this->bidPrice
            ) {
                

                $rollbackValues['bidPrice'] = $this->bidPrice;
                $this->processBidPrice($modelData);
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
 * serialize the property matchType
 */
protected function serializeMatchType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->matchType, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MatchType',
));
}





}

// @codeCoverageIgnoreEnd
