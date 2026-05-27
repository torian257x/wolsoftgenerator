<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\MetroAreaSystem;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/filters/properties/metros/items')]

class GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/filters/properties/metros/items/properties/system')]
        
            #[SchemaName('system')]
        
            #[Required]
        
        /** @var MetroAreaSystem Metro classification system */
        protected $system;
    
        
            #[JsonPointer('/properties/filters/properties/metros/items/properties/code')]
        
            #[SchemaName('code')]
        
            #[Required]
        
        /** @var string Metro code within the system (e.g., '501' for NYC DMA) */
        protected $code;
    
        
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
     * GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processSystem($rawModelDataInput);
            
        
            
                $this->processCode($rawModelDataInput);
            
        
            
        

        
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
   'system',
   'code',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_ItemOfArrayMetros472ea43ac39eac07a0c61f755935e5bf',
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
                 * Get the value of system.
                 *
                 * Metro classification system
                 *
                 * @return MetroAreaSystem
                 */
                public function getSystem(): MetroAreaSystem
                {
                    

                    return $this->system;
                }
            

            
                /**
                 * Set the value of system.
                 *
                 * @param string|MetroAreaSystem $system Metro classification system
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSystem(
                    string | MetroAreaSystem $system
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
                

                $value = array_key_exists('system', $modelData) ? $modelData['system'] : $this->system;

                

                $this->system = $this->validateSystem($value, $modelData);
            }

            /**
             * Execute all validators for the property system
             */
            protected function validateSystem($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof MetroAreaSystem)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'MetroAreaSystem',
)));
}

                
                    

if (!array_key_exists('system', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'system',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'system',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'nielsen_dma',
   'uk_itl1',
   'uk_itl2',
   'eurostat_nuts2',
   'custom',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'system',
  1 => 
  array (
    0 => 'nielsen_dma',
    1 => 'uk_itl1',
    2 => 'uk_itl2',
    3 => 'eurostat_nuts2',
    4 => 'custom',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MetroAreaSystem',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'system',
  1 => 'php_model_generator_enum',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of code.
                 *
                 * Metro code within the system (e.g., '501' for NYC DMA)
                 *
                 * @return string
                 */
                public function getCode(): string
                {
                    

                    return $this->code;
                }
            

            
                /**
                 * Set the value of code.
                 *
                 * @param string $code Metro code within the system (e.g., '501' for NYC DMA)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setCode(
                    string $code
                ): static {
                    if ($this->code === $code) {
                        return $this;
                    }

                    $value = $modelData['code'] = $code;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateCode($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->code = $value;
                    $this->_rawModelDataInput['code'] = $code;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property code
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processCode(array $modelData): void
            {
                

                $value = array_key_exists('code', $modelData) ? $modelData['code'] : $this->code;

                

                $this->code = $this->validateCode($value, $modelData);
            }

            /**
             * Execute all validators for the property code
             */
            protected function validateCode($value, array $modelData)
            {
                
                    

if (!array_key_exists('code', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'code',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'code',
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
    

    
        
            if (array_key_exists('system', $modelData) &&
                $modelData['system'] !== $this->system
            ) {
                

                $rollbackValues['system'] = $this->system;
                $this->processSystem($modelData);
            }
        
    
        
            if (array_key_exists('code', $modelData) &&
                $modelData['code'] !== $this->code
            ) {
                

                $rollbackValues['code'] = $this->code;
                $this->processCode($modelData);
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
 * serialize the property system
 */
protected function serializeSystem()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->system, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\MetroAreaSystem',
));
}





}

// @codeCoverageIgnoreEnd
