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
 * Class GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1')]

class GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1/properties/lat')]
        
            #[SchemaName('lat')]
        
            #[Required]
        
        /** @var mixed */
        protected $lat;
    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1/properties/lng')]
        
            #[SchemaName('lng')]
        
            #[Required]
        
        /** @var mixed */
        protected $lng;
    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1/properties/radius')]
        
            #[SchemaName('radius')]
        
            #[Required]
        
        /** @var mixed */
        protected $radius;
    
        
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
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLat($rawModelDataInput);
            
        
            
                $this->processLng($rawModelDataInput);
            
        
            
                $this->processRadius($rawModelDataInput);
            
        
            
        
            
        

        
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
                 * Get the value of lat.
                 *
                 *
                 * @return mixed
                 */
                public function getLat(): mixed
                {
                    

                    return $this->lat;
                }
            

            
                /**
                 * Set the value of lat.
                 *
                 * @param mixed $lat
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLat(
                    mixed $lat
                ): static {
                    if ($this->lat === $lat) {
                        return $this;
                    }

                    $value = $modelData['lat'] = $lat;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateLat($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->lat = $value;
                    $this->_rawModelDataInput['lat'] = $lat;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property lat
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLat(array $modelData): void
            {
                

                $value = array_key_exists('lat', $modelData) ? $modelData['lat'] : $this->lat;

                

                $this->lat = $this->validateLat($value, $modelData);
            }

            /**
             * Execute all validators for the property lat
             */
            protected function validateLat($value, array $modelData)
            {
                
                    

if (!array_key_exists('lat', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'lat',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of lng.
                 *
                 *
                 * @return mixed
                 */
                public function getLng(): mixed
                {
                    

                    return $this->lng;
                }
            

            
                /**
                 * Set the value of lng.
                 *
                 * @param mixed $lng
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLng(
                    mixed $lng
                ): static {
                    if ($this->lng === $lng) {
                        return $this;
                    }

                    $value = $modelData['lng'] = $lng;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateLng($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->lng = $value;
                    $this->_rawModelDataInput['lng'] = $lng;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property lng
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLng(array $modelData): void
            {
                

                $value = array_key_exists('lng', $modelData) ? $modelData['lng'] : $this->lng;

                

                $this->lng = $this->validateLng($value, $modelData);
            }

            /**
             * Execute all validators for the property lng
             */
            protected function validateLng($value, array $modelData)
            {
                
                    

if (!array_key_exists('lng', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'lng',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of radius.
                 *
                 *
                 * @return mixed
                 */
                public function getRadius(): mixed
                {
                    

                    return $this->radius;
                }
            

            
                /**
                 * Set the value of radius.
                 *
                 * @param mixed $radius
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setRadius(
                    mixed $radius
                ): static {
                    if ($this->radius === $radius) {
                        return $this;
                    }

                    $value = $modelData['radius'] = $radius;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    



                    $value = $this->validateRadius($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->radius = $value;
                    $this->_rawModelDataInput['radius'] = $radius;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property radius
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processRadius(array $modelData): void
            {
                

                $value = array_key_exists('radius', $modelData) ? $modelData['radius'] : $this->radius;

                

                $this->radius = $this->validateRadius($value, $modelData);
            }

            /**
             * Execute all validators for the property radius
             */
            protected function validateRadius($value, array $modelData)
            {
                
                    

if (!array_key_exists('radius', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'radius',
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
    $succeededCompositionElements = 1;
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
                

                
                    $proposedValue = $proposedValue ?? $value;
                

                $value = (function ($value) {
    try {
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664($value) : $value;
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
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6',
  1 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
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
                

                

                if (is_object($value) && is_array($originalModelData)) {
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_ffe8d($originalModelData, $value));
                }
            
                
            }
            
        } catch (\Exception $e) {
            

            $succeededCompositionElements--;
        }

        $value = $originalModelData;
        $validatorComponentIndex++;
    

    
        $value = $proposedValue;
    

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    $result = !($succeededCompositionElements === 0);

    
        if ($result) {
            $this->_propertyValidationState = $originalPropertyValidationState;
        }
    

    return $result;
})($value)
) {
        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\ComposedValue\NotException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6',
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
    

    
        
            if (array_key_exists('lat', $modelData) &&
                $modelData['lat'] !== $this->lat
            ) {
                



                $rollbackValues['lat'] = $this->lat;
                $this->processLat($modelData);
            }
        
    
        
            if (array_key_exists('lng', $modelData) &&
                $modelData['lng'] !== $this->lng
            ) {
                



                $rollbackValues['lng'] = $this->lng;
                $this->processLng($modelData);
            }
        
    
        
            if (array_key_exists('radius', $modelData) &&
                $modelData['radius'] !== $this->radius
            ) {
                



                $rollbackValues['radius'] = $this->radius;
                $this->processRadius($modelData);
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





                        private function _getModifiedValues_ffe8d(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'propertyValidationState',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'travel_time' => 'getTravelTime',
  'geometry' => 'getGeometry',
  'propertyValidationState' => 'get_propertyValidationState',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
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
