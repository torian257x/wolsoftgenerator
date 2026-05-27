<?php

// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart

declare(strict_types = 1);


    namespace AdCP\MediaBuy;



    use PHPModelGenerator\Interfaces\JSONModelInterface;

    use UnitEnum;

    use AdCP\MediaBuy\Enums\AgeVerificationMethod;

    use PHPModelGenerator\Traits\SerializableTrait;

    use JsonSerializable;

    use PHPModelGenerator\Interfaces\SerializationInterface;

    use PHPModelGenerator\Attributes\JsonPointer;

    use PHPModelGenerator\Attributes\SchemaName;

    use PHPModelGenerator\Attributes\Required;

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b
 * @package AdCP\MediaBuy 
 *
 * Age restriction for compliance. Use for legal requirements (alcohol, gambling), not audience targeting.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/age_restriction')]

class GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/age_restriction/properties/min')]
        
            #[SchemaName('min')]
        
            #[Required]
        
        /** @var int Minimum age required */
        protected $min;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/age_restriction/properties/verification_required')]
        
            #[SchemaName('verification_required')]
        
        /** @var bool Whether verified age (not inferred) is required for compliance */
        protected $verificationRequired = false;
    
        
            #[JsonPointer('/properties/media_buys/items/properties/packages/items/properties/targeting_overlay/properties/age_restriction/properties/accepted_methods')]
        
            #[SchemaName('accepted_methods')]
        
        /** @var AgeVerificationMethod[]|null Accepted verification methods. If omitted, any method the platform supports is acceptable. */
        protected $acceptedMethods;
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  2 => 'accepted_methods',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processMin($rawModelDataInput);
            
        
            
                $this->processVerificationRequired($rawModelDataInput);
            
        
            
                $this->processAcceptedMethods($rawModelDataInput);
            
        
            
        

        
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
   'min',
   'verification_required',
   'accepted_methods',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_Age_Restriction6714619d098d483efb70f0bb0f8cbb1b',
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
                 * Get the value of min.
                 *
                 * Minimum age required
                 *
                 * @return int
                 */
                public function getMin(): int
                {
                    

                    return $this->min;
                }
            

            
                /**
                 * Set the value of min.
                 *
                 * @param int $min Minimum age required
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setMin(
                    int $min
                ): static {
                    if ($this->min === $min) {
                        return $this;
                    }

                    $value = $modelData['min'] = $min;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateMin($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->min = $value;
                    $this->_rawModelDataInput['min'] = $min;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property min
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processMin(array $modelData): void
            {
                

                $value = array_key_exists('min', $modelData) ? $modelData['min'] : $this->min;

                

                $this->min = $this->validateMin($value, $modelData);
            }

            /**
             * Execute all validators for the property min
             */
            protected function validateMin($value, array $modelData)
            {
                
                    

if (!array_key_exists('min', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'min',
)));
}

                
                    

if ((!is_int($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'min',
  1 => 'int',
)));
}

                
                    

if (is_int($value) && $value < 13) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MinimumException($value ?? null, ...array (
  0 => 'min',
  1 => 13,
)));
}

                
                    

if (is_int($value) && $value > 99) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Number\MaximumException($value ?? null, ...array (
  0 => 'min',
  1 => 99,
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of verification_required.
                 *
                 * Whether verified age (not inferred) is required for compliance
                 *
                 * @return bool
                 */
                public function getVerificationRequired(): bool
                {
                    

                    return $this->verificationRequired;
                }
            

            
                /**
                 * Set the value of verification_required.
                 *
                 * @param bool $verificationRequired Whether verified age (not inferred) is required for compliance
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setVerificationRequired(
                    bool $verificationRequired
                ): static {
                    if ($this->verificationRequired === $verificationRequired) {
                        return $this;
                    }

                    $value = $modelData['verification_required'] = $verificationRequired;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateVerificationRequired($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->verificationRequired = $value;
                    $this->_rawModelDataInput['verification_required'] = $verificationRequired;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property verificationRequired
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processVerificationRequired(array $modelData): void
            {
                
                    if (!array_key_exists('verification_required', $modelData) && $this->verificationRequired === null) {
                        return;
                    }
                

                $value = array_key_exists('verification_required', $modelData) ? $modelData['verification_required'] : $this->verificationRequired;

                

                $this->verificationRequired = $this->validateVerificationRequired($value, $modelData);
            }

            /**
             * Execute all validators for the property verificationRequired
             */
            protected function validateVerificationRequired($value, array $modelData)
            {
                
                    

if ((!is_bool($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'verification_required',
  1 => 'bool',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of accepted_methods.
                 *
                 * Accepted verification methods. If omitted, any method the platform supports is acceptable.
                 *
                 * @return AgeVerificationMethod[]|null
                 */
                public function getAcceptedMethods(): array | AgeVerificationMethod | null
                {
                    

                    return $this->acceptedMethods;
                }
            

            
                /**
                 * Set the value of accepted_methods.
                 *
                 * @param string[]|AgeVerificationMethod[]|null $acceptedMethods Accepted verification methods. If omitted, any method the platform supports is acceptable.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAcceptedMethods(
                    array | AgeVerificationMethod | null $acceptedMethods
                ): static {
                    if ($this->acceptedMethods === $acceptedMethods) {
                        return $this;
                    }

                    $value = $modelData['accepted_methods'] = $acceptedMethods;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAcceptedMethods($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->acceptedMethods = $value;
                    $this->_rawModelDataInput['accepted_methods'] = $acceptedMethods;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property acceptedMethods
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAcceptedMethods(array $modelData): void
            {
                
                    if (!array_key_exists('accepted_methods', $modelData) && $this->acceptedMethods === null) {
                        return;
                    }
                

                $value = array_key_exists('accepted_methods', $modelData) ? $modelData['accepted_methods'] : $this->acceptedMethods;

                

                $this->acceptedMethods = $this->validateAcceptedMethods($value, $modelData);
            }

            /**
             * Execute all validators for the property acceptedMethods
             */
            protected function validateAcceptedMethods($value, array $modelData)
            {
                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'accepted_methods',
  1 => 'array',
)));
}

                
                    $this->validateAcceptedMethods_ArrayItem_1c903ca2db83536bb19fca8e6552cf88($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'accepted_methods',
  1 => 1,
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
    

    
        
            if (array_key_exists('min', $modelData) &&
                $modelData['min'] !== $this->min
            ) {
                

                $rollbackValues['min'] = $this->min;
                $this->processMin($modelData);
            }
        
    
        
            if (array_key_exists('verification_required', $modelData) &&
                $modelData['verification_required'] !== $this->verificationRequired
            ) {
                

                $rollbackValues['verificationRequired'] = $this->verificationRequired;
                $this->processVerificationRequired($modelData);
            }
        
    
        
            if (array_key_exists('accepted_methods', $modelData) &&
                $modelData['accepted_methods'] !== $this->acceptedMethods
            ) {
                

                $rollbackValues['acceptedMethods'] = $this->acceptedMethods;
                $this->processAcceptedMethods($modelData);
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




private function validateAcceptedMethods_ArrayItem_1c903ca2db83536bb19fca8e6552cf88(&$value, $modelData): void {
                    $invalidItems_9f13ccdff8b30292f0532d785f2251a4 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_9f13ccdff8b30292f0532d785f2251a4, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ($value instanceof UnitEnum && !($value instanceof AgeVerificationMethod)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array accepted_methods',
  1 => 'AgeVerificationMethod',
)));
}

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array accepted_methods',
  1 => 'string',
)));
}

            
                

if (!($value instanceof UnitEnum) && !in_array($value, array (
   'facial_age_estimation',
   'id_document',
   'digital_id',
   'credit_card',
   'world_id',
), true)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\EnumException($value ?? null, ...array (
  0 => 'item of array accepted_methods',
  1 => 
  array (
    0 => 'facial_age_estimation',
    1 => 'id_document',
    2 => 'digital_id',
    3 => 'credit_card',
    4 => 'world_id',
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
  'fqcn' => 'AdCP\\MediaBuy\\Enums\\AgeVerificationMethod',
));
        } catch (\Throwable $filterException) {
            
                $transformationFailed = true;
            

            $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\InvalidFilterValueException($value ?? null, ...array (
  0 => 'item of array accepted_methods',
  1 => 'php_model_generator_enum',
  2 => $filterException,
)));
        }

        return false;
    })($value)
)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Filter\IncompatibleFilterException($value ?? null, ...array (
  0 => 'item of array accepted_methods',
  1 => 'php_model_generator_enum',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_9f13ccdff8b30292f0532d785f2251a4[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_9f13ccdff8b30292f0532d785f2251a4[$index])
                ? $invalidItems_9f13ccdff8b30292f0532d785f2251a4[$index][] = $e
                : $invalidItems_9f13ccdff8b30292f0532d785f2251a4[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_9f13ccdff8b30292f0532d785f2251a4);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'accepted_methods',
  1 => $invalidItems_9f13ccdff8b30292f0532d785f2251a4,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
