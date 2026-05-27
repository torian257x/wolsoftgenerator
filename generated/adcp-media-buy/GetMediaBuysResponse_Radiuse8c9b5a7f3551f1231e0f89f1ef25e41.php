<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\DistanceUnit;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41
 * @package AdCP\MediaBuy 
 *
 * Simple radius from the point. The platform draws a circle of this distance around the coordinates.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/radius')]

class GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/radius/properties/value')]
        
            #[SchemaName('value')]
        
            #[Required]
        
        /** @var float Radius distance. */
        protected $value;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/geo_proximity/items/properties/radius/properties/unit')]
        
            #[SchemaName('unit')]
        
            #[Required]
        
        /** @var DistanceUnit Distance unit. */
        protected $unit;
    
        
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
     * GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processValue($rawModelDataInput);
            
        
            
                $this->processUnit($rawModelDataInput);
            
        
            
        

        
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
   'value',
   'unit',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Radiuse8c9b5a7f3551f1231e0f89f1ef25e41',
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
                 * Get the value of value.
                 *
                 * Radius distance.
                 *
                 * @return float
                 */
                public function getValue(): float
                {
                    

                    return $this->value;
                }
            

            
                /**
                 * Set the value of value.
                 *
                 * @param float $value Radius distance.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValue(
                    float $value
                ): static {
                    if ($this->value === $value) {
                        return $this;
                    }

                    $value = $modelData['value'] = $value;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateValue($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->value = $value;
                    $this->_rawModelDataInput['value'] = $value;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property value
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processValue(array $modelData): void
            {
                

                $value = array_key_exists('value', $modelData) ? $modelData['value'] : $this->value;

                $value = is_int($value) ? (float) $value : $value;

                $this->value = $this->validateValue($value, $modelData);
            }

            /**
             * Execute all validators for the property value
             */
            protected function validateValue($value, array $modelData)
            {
                
                    

if (!array_key_exists('value', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value',
)));
}

                
                    

if ((!is_float($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'value',
  1 => 'float',
)));
}

                
                    

if (is_float($value) && $value <= 0) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\ExclusiveMinimumException($value ?? null, ...array (
  0 => 'value',
  1 => 0,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of unit.
                 *
                 * Distance unit.
                 *
                 * @return DistanceUnit
                 */
                public function getUnit(): DistanceUnit
                {
                    

                    return $this->unit;
                }
            

            
                /**
                 * Set the value of unit.
                 *
                 * @param string|DistanceUnit $unit Distance unit.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUnit(
                    string | DistanceUnit $unit
                ): static {
                    if ($this->unit === $unit) {
                        return $this;
                    }

                    $value = $modelData['unit'] = $unit;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateUnit($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->unit = $value;
                    $this->_rawModelDataInput['unit'] = $unit;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property unit
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processUnit(array $modelData): void
            {
                

                $value = array_key_exists('unit', $modelData) ? $modelData['unit'] : $this->unit;

                

                $this->unit = $this->validateUnit($value, $modelData);
            }

            /**
             * Execute all validators for the property unit
             */
            protected function validateUnit($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof DistanceUnit)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'unit',
  1 => 'DistanceUnit',
)));
}

                
                    

if (!array_key_exists('unit', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'unit',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'unit',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'km',
   'mi',
   'm',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'unit',
  1 => 
  array (
    0 => 'km',
    1 => 'mi',
    2 => 'm',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DistanceUnit',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'unit',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'unit',
  1 => 'php_model_generator_enum',
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
    

    
        
            if (array_key_exists('value', $modelData) &&
                $modelData['value'] !== $this->value
            ) {
                

                $rollbackValues['value'] = $this->value;
                $this->processValue($modelData);
            }
        
    
        
            if (array_key_exists('unit', $modelData) &&
                $modelData['unit'] !== $this->unit
            ) {
                

                $rollbackValues['unit'] = $this->unit;
                $this->processUnit($modelData);
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
 * serialize the property unit
 */
protected function serializeUnit()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->unit, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\DistanceUnit',
));
}





}

// @codeCoverageIgnoreEnd
