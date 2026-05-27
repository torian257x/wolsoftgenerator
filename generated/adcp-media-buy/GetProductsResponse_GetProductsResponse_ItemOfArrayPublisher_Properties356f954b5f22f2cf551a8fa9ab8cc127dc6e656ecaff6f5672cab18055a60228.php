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
 * Class GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/allOf/1')]

class GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/allOf/1/anyOf/0/properties/publisher_domain')]
        
            #[SchemaName('publisher_domain')]
        
            #[Required]
        
        /** @var mixed */
        protected $publisherDomain;
    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/0/allOf/1/anyOf/1/properties/publisher_domains')]
        
            #[SchemaName('publisher_domains')]
        
            #[Required]
        
        /** @var mixed */
        protected $publisherDomains;
    
        
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
  0 => 'publisher_domain',
  1 => 'publisher_domains',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPublisherDomain($rawModelDataInput);
            
        
            
                $this->processPublisherDomains($rawModelDataInput);
            
        
            
        
            
        

        
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
                 * Get the value of publisher_domain.
                 *
                 *
                 * @return mixed
                 */
                public function getPublisherDomain(): mixed
                {
                    

                    return $this->publisherDomain;
                }
            

            
                /**
                 * Set the value of publisher_domain.
                 *
                 * @param mixed $publisherDomain
                 *
                 * 
                 *
                 * @return static
                 */
                public function setPublisherDomain(
                    mixed $publisherDomain
                ): static {
                    if ($this->publisherDomain === $publisherDomain) {
                        return $this;
                    }

                    $value = $modelData['publisher_domain'] = $publisherDomain;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validatePublisherDomain($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomain = $value;
                    $this->_rawModelDataInput['publisher_domain'] = $publisherDomain;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomain
             *
             * @param array $modelData
             *
             * 
             */
            protected function processPublisherDomain(array $modelData): void
            {
                
                    if (!array_key_exists('publisher_domain', $modelData) && $this->publisherDomain === null) {
                        return;
                    }
                

                $value = array_key_exists('publisher_domain', $modelData) ? $modelData['publisher_domain'] : $this->publisherDomain;

                

                $this->publisherDomain = $this->validatePublisherDomain($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomain
             */
            protected function validatePublisherDomain($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of publisher_domains.
                 *
                 *
                 * @return mixed
                 */
                public function getPublisherDomains(): mixed
                {
                    

                    return $this->publisherDomains;
                }
            

            
                /**
                 * Set the value of publisher_domains.
                 *
                 * @param mixed $publisherDomains
                 *
                 * 
                 *
                 * @return static
                 */
                public function setPublisherDomains(
                    mixed $publisherDomains
                ): static {
                    if ($this->publisherDomains === $publisherDomains) {
                        return $this;
                    }

                    $value = $modelData['publisher_domains'] = $publisherDomains;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validatePublisherDomains($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomains = $value;
                    $this->_rawModelDataInput['publisher_domains'] = $publisherDomains;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomains
             *
             * @param array $modelData
             *
             * 
             */
            protected function processPublisherDomains(array $modelData): void
            {
                
                    if (!array_key_exists('publisher_domains', $modelData) && $this->publisherDomains === null) {
                        return;
                    }
                

                $value = array_key_exists('publisher_domains', $modelData) ? $modelData['publisher_domains'] : $this->publisherDomains;

                

                $this->publisherDomains = $this->validatePublisherDomains($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomains
             */
            protected function validatePublisherDomains($value, array $modelData)
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
                            
                                'publisher_domain',
                            
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a602287b84979b11887102c2f7619db7499be8($value) : $value;
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
  0 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a602287b84979b11887102c2f7619db7499be8)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
  1 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a602287b84979b11887102c2f7619db7499be8',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_80dee($originalModelData, $value));
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
                            
                                'publisher_domains',
                            
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
        return is_array($value) ? new GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed($value) : $value;
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
  0 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
  1 => 'GetProductsResponse_GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228e5df19e5d3b624c74a2c4a83269a40ed',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_80dee($originalModelData, $value));
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
  0 => 'GetProductsResponse_GetProductsResponse_ItemOfArrayPublisher_Properties356f954b5f22f2cf551a8fa9ab8cc127dc6e656ecaff6f5672cab18055a60228',
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
    

    
        
            if (array_key_exists('publisher_domain', $modelData) &&
                $modelData['publisher_domain'] !== $this->publisherDomain
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['publisherDomain'] = $this->publisherDomain;
                $this->processPublisherDomain($modelData);
            }
        
    
        
            if (array_key_exists('publisher_domains', $modelData) &&
                $modelData['publisher_domains'] !== $this->publisherDomains
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['publisherDomains'] = $this->publisherDomains;
                $this->processPublisherDomains($modelData);
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





                        private function _getModifiedValues_80dee(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'publisher_domain' => 'getPublisherDomain',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'publisher_domains' => 'getPublisherDomains',
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
