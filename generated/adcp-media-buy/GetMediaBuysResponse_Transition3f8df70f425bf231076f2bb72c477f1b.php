<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\ImpairmentOfflineState;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b
 * @package AdCP\MediaBuy 
 *
 * The resource-level status transition that triggered this impairment.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/transition')]

class GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/transition/properties/from')]
        
            #[SchemaName('from')]
        
        /** @var string|null Prior status of the resource (e.g., 'ready', 'approved', 'good'). Optional — sellers SHOULD include when known, MAY omit when the resource was discovered already in an offline state (e.g., a property depublished via brand.json crawl with no prior snapshot). Open string at the schema layer because each resource_type has its own serviceable-state vocabulary; the pattern constraint blocks free-form garbage, and the impairment.coherence assertion validates that 'from' is a known serviceable value for the resource_type. */
        protected $from;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/impairments/items/properties/transition/properties/to')]
        
            #[SchemaName('to')]
        
            #[Required]
        
        /** @var ImpairmentOfflineState Current (offline) status of the resource. Drawn from the resource_type's canonical lifecycle enum; see impairment-offline-state for per-value resource_type pairing. The pairing is validated by impairment.coherence. */
        protected $to;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'from',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processFrom($rawModelDataInput);
            
        
            
                $this->processTo($rawModelDataInput);
            
        
            
        

        
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
   'from',
   'to',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Transition3f8df70f425bf231076f2bb72c477f1b',
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
                 * Get the value of from.
                 *
                 * Prior status of the resource (e.g., 'ready', 'approved', 'good'). Optional — sellers SHOULD include when known, MAY omit when the resource was discovered already in an offline state (e.g., a property depublished via brand.json crawl with no prior snapshot). Open string at the schema layer because each resource_type has its own serviceable-state vocabulary; the pattern constraint blocks free-form garbage, and the impairment.coherence assertion validates that 'from' is a known serviceable value for the resource_type.
                 *
                 * @return string|null
                 */
                public function getFrom(): ?string
                {
                    

                    return $this->from;
                }
            

            
                /**
                 * Set the value of from.
                 *
                 * @param string $from Prior status of the resource (e.g., 'ready', 'approved', 'good'). Optional — sellers SHOULD include when known, MAY omit when the resource was discovered already in an offline state (e.g., a property depublished via brand.json crawl with no prior snapshot). Open string at the schema layer because each resource_type has its own serviceable-state vocabulary; the pattern constraint blocks free-form garbage, and the impairment.coherence assertion validates that 'from' is a known serviceable value for the resource_type.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFrom(
                    string $from
                ): static {
                    if ($this->from === $from) {
                        return $this;
                    }

                    $value = $modelData['from'] = $from;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFrom($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->from = $value;
                    $this->_rawModelDataInput['from'] = $from;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property from
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFrom(array $modelData): void
            {
                
                    if (!array_key_exists('from', $modelData) && $this->from === null) {
                        return;
                    }
                

                $value = array_key_exists('from', $modelData) ? $modelData['from'] : $this->from;

                

                $this->from = $this->validateFrom($value, $modelData);
            }

            /**
             * Execute all validators for the property from
             */
            protected function validateFrom($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'from',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16XVthLXowLTlfXSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'from',
  1 => '^[a-z][a-z0-9_]*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of to.
                 *
                 * Current (offline) status of the resource. Drawn from the resource_type's canonical lifecycle enum; see impairment-offline-state for per-value resource_type pairing. The pairing is validated by impairment.coherence.
                 *
                 * @return ImpairmentOfflineState
                 */
                public function getTo(): ImpairmentOfflineState
                {
                    

                    return $this->to;
                }
            

            
                /**
                 * Set the value of to.
                 *
                 * @param string|ImpairmentOfflineState $to Current (offline) status of the resource. Drawn from the resource_type's canonical lifecycle enum; see impairment-offline-state for per-value resource_type pairing. The pairing is validated by impairment.coherence.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setTo(
                    string | ImpairmentOfflineState $to
                ): static {
                    if ($this->to === $to) {
                        return $this;
                    }

                    $value = $modelData['to'] = $to;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateTo($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->to = $value;
                    $this->_rawModelDataInput['to'] = $to;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property to
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processTo(array $modelData): void
            {
                

                $value = array_key_exists('to', $modelData) ? $modelData['to'] : $this->to;

                

                $this->to = $this->validateTo($value, $modelData);
            }

            /**
             * Execute all validators for the property to
             */
            protected function validateTo($value, array $modelData)
            {
                
                    

if ($value instanceof UnitEnum && !($value instanceof ImpairmentOfflineState)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'to',
  1 => 'ImpairmentOfflineState',
)));
}

                
                    

if (!array_key_exists('to', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'to',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'to',
  1 => 'string',
)));
}

                
                    

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'suspended',
   'rejected',
   'withdrawn',
   'insufficient',
   'depublished',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'to',
  1 => 
  array (
    0 => 'suspended',
    1 => 'rejected',
    2 => 'withdrawn',
    3 => 'insufficient',
    4 => 'depublished',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ImpairmentOfflineState',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'to',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'to',
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
    

    
        
            if (array_key_exists('from', $modelData) &&
                $modelData['from'] !== $this->from
            ) {
                

                $rollbackValues['from'] = $this->from;
                $this->processFrom($modelData);
            }
        
    
        
            if (array_key_exists('to', $modelData) &&
                $modelData['to'] !== $this->to
            ) {
                

                $rollbackValues['to'] = $this->to;
                $this->processTo($modelData);
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
 * serialize the property to
 */
protected function serializeTo()
{
    return \PHPModelGenerator\Filter\Enum::serialize($this->to, array (
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\ImpairmentOfflineState',
));
}





}

// @codeCoverageIgnoreEnd
