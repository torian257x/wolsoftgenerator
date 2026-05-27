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
 * Class GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a
 * @package AdCP\MediaBuy 
 *
 * Numeric signal targeting - target users within a value range. If min_value is provided, it must be <= max_value. Values should be within the signal's defined range (see signal definition).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/2')]

class GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/2/properties/signal_id')]
        
            #[SchemaName('signal_id')]
        
            #[Required]
        
        /** @var GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5 The signal to target */
        protected $signalId;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/2/properties/value_type')]
        
            #[SchemaName('value_type')]
        
            #[Required]
        
        /** @var string Discriminator for numeric signals */
        protected $valueType;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/2/properties/min_value')]
        
            #[SchemaName('min_value')]
        
        /** @var float|null Minimum value (inclusive). Omit for no minimum. Must be <= max_value when both are provided. Should be >= signal's range.min if defined. */
        protected $minValue;
    
        
            #[JsonPointer('/properties/filters/properties/signal_targeting/items/oneOf/2/properties/max_value')]
        
            #[SchemaName('max_value')]
        
        /** @var float|null Maximum value (inclusive). Omit for no maximum. Must be >= min_value when both are provided. Should be <= signal's range.max if defined. */
        protected $maxValue;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'min_value',
  3 => 'max_value',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSignalId($rawModelDataInput);
            
        
            
                $this->processValueType($rawModelDataInput);
            
        
            
                $this->processMinValue($rawModelDataInput);
            
        
            
                $this->processMaxValue($rawModelDataInput);
            
        
            
        
            
        

        
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
   'signal_id',
   'value_type',
   'min_value',
   'max_value',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArraySignal_Targeting0f5bb047709f03ceb1cbfb035822362a',
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
                 * Get the value of signal_id.
                 *
                 * The signal to target
                 *
                 * @return GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5
                 */
                public function getSignalId(): mixed
                {
                    

                    return $this->signalId;
                }
            

            
                /**
                 * Set the value of signal_id.
                 *
                 * @param GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653|GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5 $signalId The signal to target
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSignalId(
                    mixed $signalId
                ): static {
                    if ($this->signalId === $signalId) {
                        return $this;
                    }

                    $value = $modelData['signal_id'] = $signalId;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSignalId($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->signalId = $value;
                    $this->_rawModelDataInput['signal_id'] = $signalId;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property signalId
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSignalId(array $modelData): void
            {
                

                $value = array_key_exists('signal_id', $modelData) ? $modelData['signal_id'] : $this->signalId;

                

                $this->signalId = $this->validateSignalId($value, $modelData);
            }

            /**
             * Execute all validators for the property signalId
             */
            protected function validateSignalId($value, array $modelData)
            {
                
                    

if (!array_key_exists('signal_id', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'signal_id',
)));
}

                
                    $this->validateSignalId_ComposedProperty_e2b591581a2365df5f07d141cbbc8229($value, $modelData);
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of value_type.
                 *
                 * Discriminator for numeric signals
                 *
                 * @return string
                 */
                public function getValueType(): string
                {
                    

                    return $this->valueType;
                }
            

            
                /**
                 * Set the value of value_type.
                 *
                 * @param string $valueType Discriminator for numeric signals
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValueType(
                    string $valueType
                ): static {
                    if ($this->valueType === $valueType) {
                        return $this;
                    }

                    $value = $modelData['value_type'] = $valueType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateValueType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->valueType = $value;
                    $this->_rawModelDataInput['value_type'] = $valueType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property valueType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processValueType(array $modelData): void
            {
                

                $value = array_key_exists('value_type', $modelData) ? $modelData['value_type'] : $this->valueType;

                

                $this->valueType = $this->validateValueType($value, $modelData);
            }

            /**
             * Execute all validators for the property valueType
             */
            protected function validateValueType($value, array $modelData)
            {
                
                    

if (!array_key_exists('value_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'value_type',
  1 => 'string',
)));
}

                
                    

if ($value !== 'numeric') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'value_type',
  1 => 'numeric',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of min_value.
                 *
                 * Minimum value (inclusive). Omit for no minimum. Must be <= max_value when both are provided. Should be >= signal's range.min if defined.
                 *
                 * @return float|null
                 */
                public function getMinValue(): ?float
                {
                    

                    return $this->minValue;
                }
            

            
                /**
                 * Set the value of min_value.
                 *
                 * @param float $minValue Minimum value (inclusive). Omit for no minimum. Must be <= max_value when both are provided. Should be >= signal's range.min if defined.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMinValue(
                    float $minValue
                ): static {
                    if ($this->minValue === $minValue) {
                        return $this;
                    }

                    $value = $modelData['min_value'] = $minValue;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMinValue($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->minValue = $value;
                    $this->_rawModelDataInput['min_value'] = $minValue;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property minValue
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMinValue(array $modelData): void
            {
                
                    if (!array_key_exists('min_value', $modelData) && $this->minValue === null) {
                        return;
                    }
                

                $value = array_key_exists('min_value', $modelData) ? $modelData['min_value'] : $this->minValue;

                $value = is_int($value) ? (float) $value : $value;

                $this->minValue = $this->validateMinValue($value, $modelData);
            }

            /**
             * Execute all validators for the property minValue
             */
            protected function validateMinValue($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'min_value',
  1 => 'float',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of max_value.
                 *
                 * Maximum value (inclusive). Omit for no maximum. Must be >= min_value when both are provided. Should be <= signal's range.max if defined.
                 *
                 * @return float|null
                 */
                public function getMaxValue(): ?float
                {
                    

                    return $this->maxValue;
                }
            

            
                /**
                 * Set the value of max_value.
                 *
                 * @param float $maxValue Maximum value (inclusive). Omit for no maximum. Must be >= min_value when both are provided. Should be <= signal's range.max if defined.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMaxValue(
                    float $maxValue
                ): static {
                    if ($this->maxValue === $maxValue) {
                        return $this;
                    }

                    $value = $modelData['max_value'] = $maxValue;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMaxValue($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->maxValue = $value;
                    $this->_rawModelDataInput['max_value'] = $maxValue;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property maxValue
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMaxValue(array $modelData): void
            {
                
                    if (!array_key_exists('max_value', $modelData) && $this->maxValue === null) {
                        return;
                    }
                

                $value = array_key_exists('max_value', $modelData) ? $modelData['max_value'] : $this->maxValue;

                $value = is_int($value) ? (float) $value : $value;

                $this->maxValue = $this->validateMaxValue($value, $modelData);
            }

            /**
             * Execute all validators for the property maxValue
             */
            protected function validateMaxValue($value, array $modelData)
            {
                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'max_value',
  1 => 'float',
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
    

    
        
            if (array_key_exists('signal_id', $modelData) &&
                $modelData['signal_id'] !== $this->signalId
            ) {
                

                $rollbackValues['signalId'] = $this->signalId;
                $this->processSignalId($modelData);
            }
        
    
        
            if (array_key_exists('value_type', $modelData) &&
                $modelData['value_type'] !== $this->valueType
            ) {
                

                $rollbackValues['valueType'] = $this->valueType;
                $this->processValueType($modelData);
            }
        
    
        
            if (array_key_exists('min_value', $modelData) &&
                $modelData['min_value'] !== $this->minValue
            ) {
                

                $rollbackValues['minValue'] = $this->minValue;
                $this->processMinValue($modelData);
            }
        
    
        
            if (array_key_exists('max_value', $modelData) &&
                $modelData['max_value'] !== $this->maxValue
            ) {
                

                $rollbackValues['maxValue'] = $this->maxValue;
                $this->processMaxValue($modelData);
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


private function validateSignalId_ComposedProperty_e2b591581a2365df5f07d141cbbc8229(&$value, $modelData): void {
                    
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

    

    
        $originalErrorRegistry = $this->_errorRegistry;
    

    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653($value) : $value;
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
  0 => 'signal_id',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'signal_id',
  1 => 'GetProductsRequest_Signal_Idc051d99d9bca014b860d0fddcd4e1653',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_bea03($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    
        try {
            

                
                    // collect errors for each composition element
                    $this->_errorRegistry = new ErrorRegistryException();
                

                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5($value) : $value;
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
  0 => 'signal_id',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'signal_id',
  1 => 'GetProductsRequest_Signal_Idc45bc7f200ab2d9d28f6da1ac702bfc5',
)));
}

                

                
                    $compositionErrorCollection[] = $this->_errorRegistry;

                    

                    // an error inside the composed validation occurred. Throw an exception to count the validity of the
                    // composition item
                    if ($this->_errorRegistry->getErrors()) {
                        throw new \Exception();
                    }
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_bea03($originalModelData, $value));
                }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 1);

    

    return $result;
})($value)
) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\OneOfException($value ?? null, ...array (
  0 => 'signal_id',
  1 => $succeededCompositionElements,
  2 => $compositionErrorCollection,
)));
                    }
                }


                        private function _getModifiedValues_bea03(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'additionalProperties',
  1 => 'skipNotProvidedPropertiesMap',
  2 => 'additionalProperties',
  3 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'source' => 'getSource',
  'data_provider_domain' => 'getDataProviderDomain',
  'id' => 'getId',
  'additionalProperties' => 'get_additionalProperties',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'agent_url' => 'getAgentUrl',
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
