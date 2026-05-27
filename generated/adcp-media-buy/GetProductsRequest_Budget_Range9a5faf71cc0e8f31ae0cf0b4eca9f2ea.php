<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea
 * @package AdCP\MediaBuy 
 *
 * Budget range to filter appropriate products
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/budget_range')]

class GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/budget_range/properties/min')]
        
            #[SchemaName('min')]
        
        /** @var float|null Minimum budget amount */
        protected $min;
    
        
            #[JsonPointer('/properties/filters/properties/budget_range/properties/max')]
        
            #[SchemaName('max')]
        
        /** @var float|null Maximum budget amount */
        protected $max;
    
        
            #[JsonPointer('/properties/filters/properties/budget_range/properties/currency')]
        
            #[SchemaName('currency')]
        
            #[Required]
        
        /** @var string ISO 4217 currency code (e.g., 'USD', 'EUR', 'GBP') */
        protected $currency;
    
        
            #[Internal]
        
        /** @var array Track the internal validation state of composed validations */
        private $_propertyValidationState = array (
  0 => 
  array (
  ),
);
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'min',
  1 => 'max',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMin($rawModelDataInput);
            
        
            
                $this->processMax($rawModelDataInput);
            
        
            
                $this->processCurrency($rawModelDataInput);
            
        
            
        
            
        
            
        

        
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
   'min',
   'max',
   'currency',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
)));
}

            

            
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
                 * Get the value of min.
                 *
                 * Minimum budget amount
                 *
                 * @return float|null
                 */
                public function getMin(): ?float
                {
                    

                    return $this->min;
                }
            

            
                /**
                 * Set the value of min.
                 *
                 * @param float $min Minimum budget amount
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMin(
                    float $min
                ): static {
                    if ($this->min === $min) {
                        return $this;
                    }

                    $value = $modelData['min'] = $min;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateMin($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->min = $value;
                    $this->_rawModelDataInput['min'] = $min;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property min
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMin(array $modelData): void
            {
                
                    if (!array_key_exists('min', $modelData) && $this->min === null) {
                        return;
                    }
                

                $value = array_key_exists('min', $modelData) ? $modelData['min'] : $this->min;

                $value = is_int($value) ? (float) $value : $value;

                $this->min = $this->validateMin($value, $modelData);
            }

            /**
             * Execute all validators for the property min
             */
            protected function validateMin($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'min',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'min',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of max.
                 *
                 * Maximum budget amount
                 *
                 * @return float|null
                 */
                public function getMax(): ?float
                {
                    

                    return $this->max;
                }
            

            
                /**
                 * Set the value of max.
                 *
                 * @param float $max Maximum budget amount
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMax(
                    float $max
                ): static {
                    if ($this->max === $max) {
                        return $this;
                    }

                    $value = $modelData['max'] = $max;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateMax($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->max = $value;
                    $this->_rawModelDataInput['max'] = $max;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property max
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMax(array $modelData): void
            {
                
                    if (!array_key_exists('max', $modelData) && $this->max === null) {
                        return;
                    }
                

                $value = array_key_exists('max', $modelData) ? $modelData['max'] : $this->max;

                $value = is_int($value) ? (float) $value : $value;

                $this->max = $this->validateMax($value, $modelData);
            }

            /**
             * Execute all validators for the property max
             */
            protected function validateMax($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value < 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'max',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of currency.
                 *
                 * ISO 4217 currency code (e.g., 'USD', 'EUR', 'GBP')
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
                 * @param string $currency ISO 4217 currency code (e.g., 'USD', 'EUR', 'GBP')
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
                            
                                'min',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c($value) : $value;
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
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
  1 => 'GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea3c5a3c0c3a4d0ed54c2e059584512a1c',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_754b8($originalModelData, $value));
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
                            
                                'max',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9($value) : $value;
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
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
  1 => 'GetProductsRequest_GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea82baf901b7cd78e9727f7514fc8227b9',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_754b8($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements > 0);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\AnyOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_Budget_Range9a5faf71cc0e8f31ae0cf0b4eca9f2ea',
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
    

    
        
            if (array_key_exists('min', $modelData) &&
                $modelData['min'] !== $this->min
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['min'] = $this->min;
                $this->processMin($modelData);
            }
        
    
        
            if (array_key_exists('max', $modelData) &&
                $modelData['max'] !== $this->max
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['max'] = $this->max;
                $this->processMax($modelData);
            }
        
    
        
            if (array_key_exists('currency', $modelData) &&
                $modelData['currency'] !== $this->currency
            ) {
                



                $rollbackValues['currency'] = $this->currency;
                $this->processCurrency($modelData);
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



                        private function _getModifiedValues_754b8(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'min' => 'getMin',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'max' => 'getMax',
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
