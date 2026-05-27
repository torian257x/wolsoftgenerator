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
 * Class GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1/not/0')]

class GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/1/not/0/anyOf/0/properties/travel_time')]
        
            #[SchemaName('travel_time')]
        
            #[Required]
        
        /** @var mixed */
        protected $travelTime;
    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/oneOf/0/not/0/anyOf/1/properties/geometry')]
        
            #[SchemaName('geometry')]
        
            #[Required]
        
        /** @var mixed */
        protected $geometry;
    
        
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
  0 => 'travel_time',
  1 => 'geometry',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processTravelTime($rawModelDataInput);
            
        
            
                $this->processGeometry($rawModelDataInput);
            
        
            
        
            
        

        
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
                 * Get the value of travel_time.
                 *
                 *
                 * @return mixed
                 */
                public function getTravelTime(): mixed
                {
                    

                    return $this->travelTime;
                }
            

            
                /**
                 * Set the value of travel_time.
                 *
                 * @param mixed $travelTime
                 *
                 * 
                 *
                 * @return static
                 */
                public function setTravelTime(
                    mixed $travelTime
                ): static {
                    if ($this->travelTime === $travelTime) {
                        return $this;
                    }

                    $value = $modelData['travel_time'] = $travelTime;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateTravelTime($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->travelTime = $value;
                    $this->_rawModelDataInput['travel_time'] = $travelTime;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property travelTime
             *
             * @param array $modelData
             *
             * 
             */
            protected function processTravelTime(array $modelData): void
            {
                
                    if (!array_key_exists('travel_time', $modelData) && $this->travelTime === null) {
                        return;
                    }
                

                $value = array_key_exists('travel_time', $modelData) ? $modelData['travel_time'] : $this->travelTime;

                

                $this->travelTime = $this->validateTravelTime($value, $modelData);
            }

            /**
             * Execute all validators for the property travelTime
             */
            protected function validateTravelTime($value, array $modelData)
            {
                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of geometry.
                 *
                 *
                 * @return mixed
                 */
                public function getGeometry(): mixed
                {
                    

                    return $this->geometry;
                }
            

            
                /**
                 * Set the value of geometry.
                 *
                 * @param mixed $geometry
                 *
                 * 
                 *
                 * @return static
                 */
                public function setGeometry(
                    mixed $geometry
                ): static {
                    if ($this->geometry === $geometry) {
                        return $this;
                    }

                    $value = $modelData['geometry'] = $geometry;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    $this->validateComposition_0($modelData);



                    $value = $this->validateGeometry($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->geometry = $value;
                    $this->_rawModelDataInput['geometry'] = $geometry;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property geometry
             *
             * @param array $modelData
             *
             * 
             */
            protected function processGeometry(array $modelData): void
            {
                
                    if (!array_key_exists('geometry', $modelData) && $this->geometry === null) {
                        return;
                    }
                

                $value = array_key_exists('geometry', $modelData) ? $modelData['geometry'] : $this->geometry;

                

                $this->geometry = $this->validateGeometry($value, $modelData);
            }

            /**
             * Execute all validators for the property geometry
             */
            protected function validateGeometry($value, array $modelData)
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
                            
                                'travel_time',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc($value) : $value;
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
  0 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
  1 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a6096643c32ab45b8c456d5c98f08b2396f14bc',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_e1cc6($originalModelData, $value));
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
                            
                                'geometry',
                            
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
        return is_array($value) ? new GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545d9cf058bb7158c09444c1caa88e27e75($value) : $value;
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
  0 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
  1 => 'object',
)));
}

                
                    

if (is_object($value) && !($value instanceof \Exception) && !($value instanceof GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545d9cf058bb7158c09444c1caa88e27e75)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidInstanceOfException($value ?? null, ...array (
  0 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
  1 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db7b0485cc6ae67dccb91bdb62f50ca24f8230f1fc93dea43e227ba526af977545d9cf058bb7158c09444c1caa88e27e75',
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
                    $modifiedValues = array_merge($modifiedValues, $this->_getModifiedValues_e1cc6($originalModelData, $value));
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
  0 => 'GetProductsRequest_GetProductsRequest_GetProductsRequest_ItemOfArrayGeo_Proximityb0160231995f80d26603d6288cd1a1db1d52d88f0d009813f8b6db3574d377d6537e7d8420e439b439bbf2dc6a609664',
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
    

    
        
            if (array_key_exists('travel_time', $modelData) &&
                $modelData['travel_time'] !== $this->travelTime
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['travelTime'] = $this->travelTime;
                $this->processTravelTime($modelData);
            }
        
    
        
            if (array_key_exists('geometry', $modelData) &&
                $modelData['geometry'] !== $this->geometry
            ) {
                $this->validateComposition_0($modelData);



                $rollbackValues['geometry'] = $this->geometry;
                $this->processGeometry($modelData);
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





                        private function _getModifiedValues_e1cc6(array $originalModelData, object $nestedCompositionObject): array {
                            $modifiedValues = [];
                            $defaultValueMap = array (
  0 => 'skipNotProvidedPropertiesMap',
  1 => 'skipNotProvidedPropertiesMap',
);
    
                            foreach (array (
  'travel_time' => 'getTravelTime',
  'skipNotProvidedPropertiesMap' => 'get_skipNotProvidedPropertiesMap',
  'geometry' => 'getGeometry',
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
