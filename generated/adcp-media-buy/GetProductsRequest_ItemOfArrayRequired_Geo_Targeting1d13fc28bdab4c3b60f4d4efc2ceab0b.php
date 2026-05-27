<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GeographicTargetingLevel;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/required_geo_targeting/items')]

class GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/required_geo_targeting/items/properties/level')]
        
            #[SchemaName('level')]
        
            #[Required]
        
        /** @var GeographicTargetingLevel Geographic targeting level (country, region, metro, postal_area) */
        protected $level;
    
        
            #[JsonPointer('/properties/filters/properties/required_geo_targeting/items/properties/system')]
        
            #[SchemaName('system')]
        
        /** @var string|null Classification system within the level. Required for metro (e.g., 'nielsen_dma') and postal_area (e.g., 'us_zip'). Not applicable for country/region which use ISO standards. */
        protected $system;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  1 => 'system',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processLevel($rawModelDataInput);
            
        
            
                $this->processSystem($rawModelDataInput);
            
        
            
        

        
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
   'level',
   'system',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayRequired_Geo_Targeting1d13fc28bdab4c3b60f4d4efc2ceab0b',
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
                 * Get the value of level.
                 *
                 * Geographic targeting level (country, region, metro, postal_area)
                 *
                 * @return GeographicTargetingLevel
                 */
                public function getLevel(): GeographicTargetingLevel
                {
                    

                    return $this->level;
                }
            

            
                /**
                 * Set the value of level.
                 *
                 * @param string|GeographicTargetingLevel $level Geographic targeting level (country, region, metro, postal_area)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setLevel(
                    string | GeographicTargetingLevel $level
                ): static {
                    if ($this->level === $level) {
                        return $this;
                    }

                    $value = $modelData['level'] = $level;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateLevel($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->level = $value;
                    $this->_rawModelDataInput['level'] = $level;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property level
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processLevel(array $modelData): void
            {
                

                $value = array_key_exists('level', $modelData) ? $modelData['level'] : $this->level;

                

                $this->level = $this->validateLevel($value, $modelData);
            }

            /**
             * Execute all validators for the property level
             */
            protected function validateLevel($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof GeographicTargetingLevel)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level',
  1 => 'GeographicTargetingLevel',
)));
}

                
                    

if (!array_key_exists('level', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'level',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'level',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'country',
   'region',
   'metro',
   'postal_area',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'level',
  1 => 
  array (
    0 => 'country',
    1 => 'region',
    2 => 'metro',
    3 => 'postal_area',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GeographicTargetingLevel',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'level',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'level',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of system.
                 *
                 * Classification system within the level. Required for metro (e.g., 'nielsen_dma') and postal_area (e.g., 'us_zip'). Not applicable for country/region which use ISO standards.
                 *
                 * @return string|null
                 */
                public function getSystem(): ?string
                {
                    

                    return $this->system;
                }
            

            
                /**
                 * Set the value of system.
                 *
                 * @param string $system Classification system within the level. Required for metro (e.g., 'nielsen_dma') and postal_area (e.g., 'us_zip'). Not applicable for country/region which use ISO standards.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSystem(
                    string $system
                ): static {
                    if ($this->system === $system) {
                        return $this;
                    }

                    $value = $modelData['system'] = $system;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSystem($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->system = $value;
                    $this->_rawModelDataInput['system'] = $system;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property system
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSystem(array $modelData): void
            {
                
                    if (!array_key_exists('system', $modelData) && $this->system === null) {
                        return;
                    }
                

                $value = array_key_exists('system', $modelData) ? $modelData['system'] : $this->system;

                

                $this->system = $this->validateSystem($value, $modelData);
            }

            /**
             * Execute all validators for the property system
             */
            protected function validateSystem($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'string',
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
    

    
        
            if (array_key_exists('level', $modelData) &&
                $modelData['level'] !== $this->level
            ) {
                

                $rollbackValues['level'] = $this->level;
                $this->processLevel($modelData);
            }
        
    
        
            if (array_key_exists('system', $modelData) &&
                $modelData['system'] !== $this->system
            ) {
                

                $rollbackValues['system'] = $this->system;
                $this->processSystem($modelData);
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
 * serialize the property level
 */
protected function serializeLevel()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->level, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GeographicTargetingLevel',
));
}





}

// @codeCoverageIgnoreEnd
