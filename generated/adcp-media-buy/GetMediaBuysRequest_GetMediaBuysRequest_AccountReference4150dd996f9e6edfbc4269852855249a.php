<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use UnitEnum;

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

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account/oneOf/1')]

class GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand')]
        
            #[SchemaName('brand')]
        
            #[Required]
        
        /** @var GetMediaBuysRequest_BrandReference Brand reference identifying the advertiser */
        protected $brand;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/operator')]
        
            #[SchemaName('operator')]
        
            #[Required]
        
        /** @var string Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain. */
        protected $operator;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/sandbox')]
        
            #[SchemaName('sandbox')]
        
        /** @var bool When true, references the sandbox account for this brand/operator pair. Defaults to false (production account). */
        protected $sandbox = false;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processBrand($rawModelDataInput);
            
        
            
                $this->processOperator($rawModelDataInput);
            
        
            
                $this->processSandbox($rawModelDataInput);
            
        
            
        

        
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
   'brand',
   'operator',
   'sandbox',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysRequest_GetMediaBuysRequest_AccountReference4150dd996f9e6edfbc4269852855249a',
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
                 * Get the value of brand.
                 *
                 * Brand reference identifying the advertiser
                 * @example {"domain":"nova-brands.com","brand_id":"spark"}
                 * @example {"domain":"nova-brands.com","brand_id":"glow"}
                 * @example {"domain":"acme-corp.com"}
                 *
                 * @return GetMediaBuysRequest_BrandReference
                 */
                public function getBrand(): GetMediaBuysRequest_BrandReference
                {
                    

                    return $this->brand;
                }
            

            
                /**
                 * Set the value of brand.
                 *
                 * @param GetMediaBuysRequest_BrandReference $brand Brand reference identifying the advertiser
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setBrand(
                    GetMediaBuysRequest_BrandReference $brand
                ): static {
                    if ($this->brand === $brand) {
                        return $this;
                    }

                    $value = $modelData['brand'] = $brand;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateBrand($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->brand = $value;
                    $this->_rawModelDataInput['brand'] = $brand;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property brand
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processBrand(array $modelData): void
            {
                

                $value = array_key_exists('brand', $modelData) ? $modelData['brand'] : $this->brand;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetMediaBuysRequest_BrandReference($value) : $value;
    } catch (\Exception $instantiationException) {
        
            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\NestedObjectException($value ?? null, ...array (
  0 => 'brand',
  1 => $instantiationException,
)));
        

        
            return $instantiationException;
        
    }
})($value)
;

                $this->brand = $this->validateBrand($value, $modelData);
            }

            /**
             * Execute all validators for the property brand
             */
            protected function validateBrand($value, array $modelData)
            {
                
                    

if (!array_key_exists('brand', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'brand',
)));
}

                
                    

if ((!is_object($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'brand',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetMediaBuysRequest_BrandReference)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'brand',
  1 => 'GetMediaBuysRequest_BrandReference',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of operator.
                 *
                 * Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
                 *
                 * @return string
                 */
                public function getOperator(): string
                {
                    

                    return $this->operator;
                }
            

            
                /**
                 * Set the value of operator.
                 *
                 * @param string $operator Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setOperator(
                    string $operator
                ): static {
                    if ($this->operator === $operator) {
                        return $this;
                    }

                    $value = $modelData['operator'] = $operator;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateOperator($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->operator = $value;
                    $this->_rawModelDataInput['operator'] = $operator;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property operator
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processOperator(array $modelData): void
            {
                

                $value = array_key_exists('operator', $modelData) ? $modelData['operator'] : $this->operator;

                

                $this->operator = $this->validateOperator($value, $modelData);
            }

            /**
             * Execute all validators for the property operator
             */
            protected function validateOperator($value, array $modelData)
            {
                
                    

if (!array_key_exists('operator', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'operator',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'operator',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'operator',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sandbox.
                 *
                 * When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
                 *
                 * @return bool
                 */
                public function getSandbox(): bool
                {
                    

                    return $this->sandbox;
                }
            

            
                /**
                 * Set the value of sandbox.
                 *
                 * @param bool $sandbox When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSandbox(
                    bool $sandbox
                ): static {
                    if ($this->sandbox === $sandbox) {
                        return $this;
                    }

                    $value = $modelData['sandbox'] = $sandbox;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSandbox($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->sandbox = $value;
                    $this->_rawModelDataInput['sandbox'] = $sandbox;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property sandbox
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSandbox(array $modelData): void
            {
                
                    if (!array_key_exists('sandbox', $modelData) && $this->sandbox === null) {
                        return;
                    }
                

                $value = array_key_exists('sandbox', $modelData) ? $modelData['sandbox'] : $this->sandbox;

                

                $this->sandbox = $this->validateSandbox($value, $modelData);
            }

            /**
             * Execute all validators for the property sandbox
             */
            protected function validateSandbox($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'sandbox',
  1 => 'bool',
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
    

    
        
            if (array_key_exists('brand', $modelData) &&
                $modelData['brand'] !== $this->brand
            ) {
                

                $rollbackValues['brand'] = $this->brand;
                $this->processBrand($modelData);
            }
        
    
        
            if (array_key_exists('operator', $modelData) &&
                $modelData['operator'] !== $this->operator
            ) {
                

                $rollbackValues['operator'] = $this->operator;
                $this->processOperator($modelData);
            }
        
    
        
            if (array_key_exists('sandbox', $modelData) &&
                $modelData['sandbox'] !== $this->sandbox
            ) {
                

                $rollbackValues['sandbox'] = $this->sandbox;
                $this->processSandbox($modelData);
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





}

// @codeCoverageIgnoreEnd
