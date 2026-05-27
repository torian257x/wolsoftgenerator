<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\GetMediaBuyDeliveryResponse_DurationUnit;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuyDeliveryResponse_Duration
 * @package AdCP\MediaBuy 
 *
 * A time duration expressed as an interval and unit. Used for frequency cap windows, attribution windows, reach optimization windows, time budgets, and other time-based settings. When unit is 'campaign', interval must be 1 — the window spans the full campaign flight.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/attribution_window/properties/post_click/allOf/0')]

class GetMediaBuyDeliveryResponse_Duration implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/attribution_window/properties/post_click/allOf/0/properties/interval')]
        
            #[SchemaName('interval')]
        
            #[Required]
        
        /** @var int Number of time units. Must be 1 when unit is 'campaign'. */
        protected $interval;
    
        
            #[JsonPointer('/properties/attribution_window/properties/post_click/allOf/0/properties/unit')]
        
            #[SchemaName('unit')]
        
            #[Required]
        
        /** @var GetMediaBuyDeliveryResponse_DurationUnit Time unit. 'seconds' for sub-minute precision. 'campaign' spans the full campaign flight. */
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
     * GetMediaBuyDeliveryResponse_Duration constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processInterval($rawModelDataInput);
            
        
            
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
   'interval',
   'unit',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryResponse_Duration',
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
                 * Get the value of interval.
                 *
                 * Number of time units. Must be 1 when unit is 'campaign'.
                 *
                 * @return int
                 */
                public function getInterval(): int
                {
                    

                    return $this->interval;
                }
            

            
                /**
                 * Set the value of interval.
                 *
                 * @param int $interval Number of time units. Must be 1 when unit is 'campaign'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setInterval(
                    int $interval
                ): static {
                    if ($this->interval === $interval) {
                        return $this;
                    }

                    $value = $modelData['interval'] = $interval;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateInterval($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->interval = $value;
                    $this->_rawModelDataInput['interval'] = $interval;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property interval
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processInterval(array $modelData): void
            {
                

                $value = array_key_exists('interval', $modelData) ? $modelData['interval'] : $this->interval;

                

                $this->interval = $this->validateInterval($value, $modelData);
            }

            /**
             * Execute all validators for the property interval
             */
            protected function validateInterval($value, array $modelData)
            {
                
                    

if (!array_key_exists('interval', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'interval',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'interval',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'interval',
  1 => 1,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of unit.
                 *
                 * Time unit. 'seconds' for sub-minute precision. 'campaign' spans the full campaign flight.
                 *
                 * @return GetMediaBuyDeliveryResponse_DurationUnit
                 */
                public function getUnit(): GetMediaBuyDeliveryResponse_DurationUnit
                {
                    

                    return $this->unit;
                }
            

            
                /**
                 * Set the value of unit.
                 *
                 * @param string|GetMediaBuyDeliveryResponse_DurationUnit $unit Time unit. 'seconds' for sub-minute precision. 'campaign' spans the full campaign flight.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setUnit(
                    string | GetMediaBuyDeliveryResponse_DurationUnit $unit
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
                
                    

if ($value instanceof UnitEnum && !($value instanceof GetMediaBuyDeliveryResponse_DurationUnit)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'unit',
  1 => 'GetMediaBuyDeliveryResponse_DurationUnit',
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
   'seconds',
   'minutes',
   'hours',
   'days',
   'campaign',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'unit',
  1 => 
  array (
    0 => 'seconds',
    1 => 'minutes',
    2 => 'hours',
    3 => 'days',
    4 => 'campaign',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuyDeliveryResponse_DurationUnit',
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
    

    
        
            if (array_key_exists('interval', $modelData) &&
                $modelData['interval'] !== $this->interval
            ) {
                

                $rollbackValues['interval'] = $this->interval;
                $this->processInterval($modelData);
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\GetMediaBuyDeliveryResponse_DurationUnit',
));
}





}

// @codeCoverageIgnoreEnd
