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
 * Class GetMediaBuyDeliveryResponse_Reporting_Period4f4ea69d50b7be4f6e69fe30ff8c56ad
 * @package AdCP\MediaBuy 
 *
 * Date range for the report. All periods use UTC timezone.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/reporting_period')]

class GetMediaBuyDeliveryResponse_Reporting_Period4f4ea69d50b7be4f6e69fe30ff8c56ad implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/reporting_period/properties/start')]
        
            #[SchemaName('start')]
        
            #[Required]
        
        /** @var string ISO 8601 start timestamp in UTC (e.g., 2024-02-05T00:00:00Z) */
        protected $start;
    
        
            #[JsonPointer('/properties/reporting_period/properties/end')]
        
            #[SchemaName('end')]
        
            #[Required]
        
        /** @var string ISO 8601 end timestamp in UTC (e.g., 2024-02-05T23:59:59Z) */
        protected $end;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
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
     * GetMediaBuyDeliveryResponse_Reporting_Period4f4ea69d50b7be4f6e69fe30ff8c56ad constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processStart($rawModelDataInput);
            
        
            
                $this->processEnd($rawModelDataInput);
            
        
            
        
            
        

        
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
   'start',
   'end',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuyDeliveryResponse_Reporting_Period4f4ea69d50b7be4f6e69fe30ff8c56ad',
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
                 * Get the value of start.
                 *
                 * ISO 8601 start timestamp in UTC (e.g., 2024-02-05T00:00:00Z)
                 *
                 * @return string
                 */
                public function getStart(): string
                {
                    

                    return $this->start;
                }
            

            
                /**
                 * Set the value of start.
                 *
                 * @param string $start ISO 8601 start timestamp in UTC (e.g., 2024-02-05T00:00:00Z)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setStart(
                    string $start
                ): static {
                    if ($this->start === $start) {
                        return $this;
                    }

                    $value = $modelData['start'] = $start;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateStart($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->start = $value;
                    $this->_rawModelDataInput['start'] = $start;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property start
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processStart(array $modelData): void
            {
                

                $value = array_key_exists('start', $modelData) ? $modelData['start'] : $this->start;

                

                $this->start = $this->validateStart($value, $modelData);
            }

            /**
             * Execute all validators for the property start
             */
            protected function validateStart($value, array $modelData)
            {
                
                    

if (!array_key_exists('start', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'start',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'start',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'start',
  1 => 'date-time',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of end.
                 *
                 * ISO 8601 end timestamp in UTC (e.g., 2024-02-05T23:59:59Z)
                 *
                 * @return string
                 */
                public function getEnd(): string
                {
                    

                    return $this->end;
                }
            

            
                /**
                 * Set the value of end.
                 *
                 * @param string $end ISO 8601 end timestamp in UTC (e.g., 2024-02-05T23:59:59Z)
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setEnd(
                    string $end
                ): static {
                    if ($this->end === $end) {
                        return $this;
                    }

                    $value = $modelData['end'] = $end;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateEnd($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->end = $value;
                    $this->_rawModelDataInput['end'] = $end;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property end
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processEnd(array $modelData): void
            {
                

                $value = array_key_exists('end', $modelData) ? $modelData['end'] : $this->end;

                

                $this->end = $this->validateEnd($value, $modelData);
            }

            /**
             * Execute all validators for the property end
             */
            protected function validateEnd($value, array $modelData)
            {
                
                    

if (!array_key_exists('end', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'end',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'end',
  1 => 'string',
)));
}

                
                    

if (!\PHPModelGenerator\Format\FormatValidatorFromRegEx::validate($value, '/^\\d{4}-\\d{2}-\\d{2}[Tt]\\d{2}:\\d{2}:\\d{2}(\\.\\d+)?([Zz]|[+\\-]\\d{2}:\\d{2})$/')) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\FormatException($value ?? null, ...array (
  0 => 'end',
  1 => 'date-time',
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
    

    
        
            if (array_key_exists('start', $modelData) &&
                $modelData['start'] !== $this->start
            ) {
                

                $rollbackValues['start'] = $this->start;
                $this->processStart($modelData);
            }
        
    
        
            if (array_key_exists('end', $modelData) &&
                $modelData['end'] !== $this->end
            ) {
                

                $rollbackValues['end'] = $this->end;
                $this->processEnd($modelData);
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



}

// @codeCoverageIgnoreEnd
