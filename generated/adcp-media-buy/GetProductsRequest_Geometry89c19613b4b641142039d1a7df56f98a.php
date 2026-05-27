<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a
 * @package AdCP\MediaBuy 
 *
 * Pre-computed GeoJSON geometry defining the proximity boundary
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/geo_proximity/items/properties/geometry')]

class GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/properties/geometry/properties/type')]
        
            #[SchemaName('type')]
        
            #[Required]
        
        /** @var GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType GeoJSON geometry type */
        protected $type;
    
        
            #[JsonPointer('/properties/filters/properties/geo_proximity/items/properties/geometry/properties/coordinates')]
        
            #[SchemaName('coordinates')]
        
            #[Required]
        
        /** @var array GeoJSON coordinates array */
        protected $coordinates;
    
        
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
     * GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processType($rawModelDataInput);
            
        
            
                $this->processCoordinates($rawModelDataInput);
            
        
            
        

        
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
   'type',
   'coordinates',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98a',
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
                 * Get the value of type.
                 *
                 * GeoJSON geometry type
                 *
                 * @return GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType
                 */
                public function getType(): GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType
                {
                    

                    return $this->type;
                }
            

            
                /**
                 * Set the value of type.
                 *
                 * @param string|GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType $type GeoJSON geometry type
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setType(
                    string | GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType $type
                ): static {
                    if ($this->type === $type) {
                        return $this;
                    }

                    $value = $modelData['type'] = $type;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->type = $value;
                    $this->_rawModelDataInput['type'] = $type;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property type
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processType(array $modelData): void
            {
                

                $value = array_key_exists('type', $modelData) ? $modelData['type'] : $this->type;

                

                $this->type = $this->validateType($value, $modelData);
            }

            /**
             * Execute all validators for the property type
             */
            protected function validateType($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'type',
  1 => 'GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType',
)));
}

                
                    

if (!array_key_exists('type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'type',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'Polygon',
   'MultiPolygon',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'type',
  1 => 
  array (
    0 => 'Polygon',
    1 => 'MultiPolygon',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'type',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'type',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of coordinates.
                 *
                 * GeoJSON coordinates array
                 *
                 * @return array
                 */
                public function getCoordinates(): array
                {
                    

                    return $this->coordinates;
                }
            

            
                /**
                 * Set the value of coordinates.
                 *
                 * @param array $coordinates GeoJSON coordinates array
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCoordinates(
                    array $coordinates
                ): static {
                    if ($this->coordinates === $coordinates) {
                        return $this;
                    }

                    $value = $modelData['coordinates'] = $coordinates;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCoordinates($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->coordinates = $value;
                    $this->_rawModelDataInput['coordinates'] = $coordinates;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property coordinates
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCoordinates(array $modelData): void
            {
                

                $value = array_key_exists('coordinates', $modelData) ? $modelData['coordinates'] : $this->coordinates;

                

                $this->coordinates = $this->validateCoordinates($value, $modelData);
            }

            /**
             * Execute all validators for the property coordinates
             */
            protected function validateCoordinates($value, array $modelData)
            {
                
                    

if (!array_key_exists('coordinates', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'coordinates',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'coordinates',
  1 => 'array',
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
    

    
        
            if (array_key_exists('type', $modelData) &&
                $modelData['type'] !== $this->type
            ) {
                

                $rollbackValues['type'] = $this->type;
                $this->processType($modelData);
            }
        
    
        
            if (array_key_exists('coordinates', $modelData) &&
                $modelData['coordinates'] !== $this->coordinates
            ) {
                

                $rollbackValues['coordinates'] = $this->coordinates;
                $this->processCoordinates($modelData);
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
 * serialize the property type
 */
protected function serializeType()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->type, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetProductsRequest_Geometry89c19613b4b641142039d1a7df56f98aType',
));
}





}

// @codeCoverageIgnoreEnd
