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

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001d5b392d89eb0397d01ef36b451045a72Action;

    use AdCP\MediaBuy\Enums\GetProductsRequest_GetProductsRequest_ItemOfArrayRefineb01dc616de18c8735fba8f8095f15001966d960c0a8231c9cf148f923aed05adAction;

    use AdCP\MediaBuy\Enums\DigitalSourceType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ProvenanceHuman_Oversight;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Declared_By13c986791ce55365e13a7cd5ff90f7dcRole;

    use AdCP\MediaBuy\Enums\EmbeddedProvenanceMethod;

    use AdCP\MediaBuy\Enums\WatermarkMediaType;

    use AdCP\MediaBuy\Enums\C2PAWatermarkAction;

    use AdCP\MediaBuy\Enums\DisclosurePersistence;

    use AdCP\MediaBuy\Enums\DisclosurePosition;

    use AdCP\MediaBuy\Enums\GetProductsRequest_ItemOfArrayVerificationab0379bc9ff851960f9f645c9916029eResult;

    use AdCP\MediaBuy\Enums\CatalogType;

    use AdCP\MediaBuy\Enums\FeedFormat;

    use AdCP\MediaBuy\Enums\UpdateFrequency;

    use AdCP\MediaBuy\Enums\ContentIDType;

    use AdCP\MediaBuy\Enums\EventType;

    use AdCP\MediaBuy\Enums\GetProductsRequest_CatalogFieldMappingTransform;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_AccountReference
 * @package AdCP\MediaBuy 
 *
 * Account for product lookup. Returns products with pricing specific to this account's rate card.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/account')]

class GetProductsRequest_AccountReference implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/account/oneOf/0/properties/account_id')]
        
            #[SchemaName('account_id')]
        
            #[Required]
        
        /** @var string|null Seller-assigned account identifier (from sync_accounts or list_accounts) */
        protected $accountId;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/brand')]
        
            #[SchemaName('brand')]
        
            #[Required]
        
        /** @var GetProductsRequest_BrandReference|null Brand reference identifying the advertiser */
        protected $brand;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/operator')]
        
            #[SchemaName('operator')]
        
            #[Required]
        
        /** @var string|null Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain. */
        protected $operator;
    
        
            #[JsonPointer('/properties/account/oneOf/1/properties/sandbox')]
        
            #[SchemaName('sandbox')]
        
        /** @var bool|null When true, references the sandbox account for this brand/operator pair. Defaults to false (production account). */
        protected $sandbox = false;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'account_id',
  1 => 'brand',
  2 => 'operator',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_AccountReference constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processAccountId($rawModelDataInput);
            
        
            
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
                 * Get the value of account_id.
                 *
                 * Seller-assigned account identifier (from sync_accounts or list_accounts)
                 *
                 * @return string|null
                 */
                public function getAccountId(): ?string
                {
                    

                    return $this->accountId;
                }
            

            
                /**
                 * Set the value of account_id.
                 *
                 * @param string|null $accountId Seller-assigned account identifier (from sync_accounts or list_accounts)
                 *
                 * 
                 *
                 * @return static
                 */
                public function setAccountId(
                    ?string $accountId
                ): static {
                    if ($this->accountId === $accountId) {
                        return $this;
                    }

                    $value = $modelData['account_id'] = $accountId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateAccountId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accountId = $value;
                    $this->_rawModelDataInput['account_id'] = $accountId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accountId
             *
             * @param array $modelData
             *
             * 
             */
            protected function processAccountId(array $modelData): void
            {
                
                    if (!array_key_exists('account_id', $modelData) && $this->accountId === null) {
                        return;
                    }
                

                $value = array_key_exists('account_id', $modelData) ? $modelData['account_id'] : $this->accountId;

                

                $this->accountId = $this->validateAccountId($value, $modelData);
            }

            /**
             * Execute all validators for the property accountId
             */
            protected function validateAccountId($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of brand.
                 *
                 * Brand reference identifying the advertiser
                 * @example {"domain":"nova-brands.com","brand_id":"spark"}
                 * @example {"domain":"nova-brands.com","brand_id":"glow"}
                 * @example {"domain":"acme-corp.com"}
                 *
                 * @return GetProductsRequest_BrandReference|null
                 */
                public function getBrand(): ?GetProductsRequest_BrandReference
                {
                    

                    return $this->brand;
                }
            

            
                /**
                 * Set the value of brand.
                 *
                 * @param GetProductsRequest_BrandReference|null $brand Brand reference identifying the advertiser
                 *
                 * 
                 *
                 * @return static
                 */
                public function setBrand(
                    ?GetProductsRequest_BrandReference $brand
                ): static {
                    if ($this->brand === $brand) {
                        return $this;
                    }

                    $value = $modelData['brand'] = $brand;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
             * 
             */
            protected function processBrand(array $modelData): void
            {
                
                    if (!array_key_exists('brand', $modelData) && $this->brand === null) {
                        return;
                    }
                

                $value = array_key_exists('brand', $modelData) ? $modelData['brand'] : $this->brand;

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_BrandReference($value) : $value;
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
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of operator.
                 *
                 * Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
                 *
                 * @return string|null
                 */
                public function getOperator(): ?string
                {
                    

                    return $this->operator;
                }
            

            
                /**
                 * Set the value of operator.
                 *
                 * @param string|null $operator Domain of the entity operating on the brand's behalf. When the brand operates directly, this is the brand's domain.
                 *
                 * 
                 *
                 * @return static
                 */
                public function setOperator(
                    ?string $operator
                ): static {
                    if ($this->operator === $operator) {
                        return $this;
                    }

                    $value = $modelData['operator'] = $operator;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
             * 
             */
            protected function processOperator(array $modelData): void
            {
                
                    if (!array_key_exists('operator', $modelData) && $this->operator === null) {
                        return;
                    }
                

                $value = array_key_exists('operator', $modelData) ? $modelData['operator'] : $this->operator;

                

                $this->operator = $this->validateOperator($value, $modelData);
            }

            /**
             * Execute all validators for the property operator
             */
            protected function validateOperator($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of sandbox.
                 *
                 * When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
                 *
                 * @return bool|null
                 */
                public function getSandbox(): ?bool
                {
                    

                    return $this->sandbox;
                }
            

            
                /**
                 * Set the value of sandbox.
                 *
                 * @param bool|null $sandbox When true, references the sandbox account for this brand/operator pair. Defaults to false (production account).
                 *
                 * 
                 *
                 * @return static
                 */
                public function setSandbox(
                    ?bool $sandbox
                ): static {
                    if ($this->sandbox === $sandbox) {
                        return $this;
                    }

                    $value = $modelData['sandbox'] = $sandbox;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



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
             * 
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
    $succeededCompositionElements = 2;
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
                            
                                'account_id',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_AccountReference391339b2537fe704903ad118e237c1c0($value) : $value;
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
  0 => 'GetProductsRequest_AccountReference',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_AccountReference391339b2537fe704903ad118e237c1c0)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_AccountReference',
  1 => 'GetProductsRequest_GetProductsRequest_AccountReference391339b2537fe704903ad118e237c1c0',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_c9e80($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            
                // check if the state of the validator is already known.
                // If none of the properties affected by the validator are changed the validator must not be re-evaluated
                if (isset($validatorIndex) &&
                    isset($this->_propertyValidationState[$validatorIndex][$validatorComponentIndex]) &&
                    !array_intersect(
                        array_keys($modifiedModelData),
                        [
                            
                                'brand',
                            
                                'operator',
                            
                                'sandbox',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_AccountReference47f43b3cd376206043e6323433aadf5c($value) : $value;
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
  0 => 'GetProductsRequest_AccountReference',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_AccountReference47f43b3cd376206043e6323433aadf5c)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_AccountReference',
  1 => 'GetProductsRequest_GetProductsRequest_AccountReference47f43b3cd376206043e6323433aadf5c',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_c9e80($originalModelData, $value));
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
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_AccountReference',
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
    

    
        
            if (array_key_exists('account_id', $modelData) &&
                $modelData['account_id'] !== $this->accountId
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['accountId'] = $this->accountId;
                $this->processAccountId($modelData);
            }
        
    
        
            if (array_key_exists('brand', $modelData) &&
                $modelData['brand'] !== $this->brand
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['brand'] = $this->brand;
                $this->processBrand($modelData);
            }
        
    
        
            if (array_key_exists('operator', $modelData) &&
                $modelData['operator'] !== $this->operator
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['operator'] = $this->operator;
                $this->processOperator($modelData);
            }
        
    
        
            if (array_key_exists('sandbox', $modelData) &&
                $modelData['sandbox'] !== $this->sandbox
            ) {
                $this->validateComposition_0($modelData);



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





                        private function _getModifiedValues_c9e80(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'sandbox',
  2 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'account_id' => 'getAccountId',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'brand' => 'getBrand',
  'operator' => 'getOperator',
  'sandbox' => 'getSandbox',
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
