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
 * Class GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/errors/items/properties/issues/items/properties/discriminator/items')]

class GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/discriminator/items/properties/property_name')]
        
            #[SchemaName('property_name')]
        
            #[Required]
        
        /** @var string Discriminator property name (e.g., `type`, `value_type`). Aligns with OpenAPI 3.x `discriminator.propertyName`. */
        protected $propertyName;
    
        
            #[JsonPointer('/properties/errors/items/properties/issues/items/properties/discriminator/items/properties/value')]
        
            #[SchemaName('value')]
        
            #[Required]
        
        /** @var string|float|bool|null Value the caller sent at `property_name`. Typically a string for const-discriminated unions; numeric/boolean/null permitted. Object and array values are forbidden — const discriminators are scalars, and emitting a structured value would conflate 'caller sent a complex shape' with 'validator inferred from a structural match'. */
        protected $value;
    
        
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
     * GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPropertyName($rawModelDataInput);
            
        
            
                $this->processValue($rawModelDataInput);
            
        
            
        

        
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
   'property_name',
   'value',
));

    

    return $additionalProperties;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\AdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetMediaBuysResponse_ItemOfArrayDiscriminatordbb0b5aa570d64014a1a640189c32038',
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
                 * Get the value of property_name.
                 *
                 * Discriminator property name (e.g., `type`, `value_type`). Aligns with OpenAPI 3.x `discriminator.propertyName`.
                 *
                 * @return string
                 */
                public function getPropertyName(): string
                {
                    

                    return $this->propertyName;
                }
            

            
                /**
                 * Set the value of property_name.
                 *
                 * @param string $propertyName Discriminator property name (e.g., `type`, `value_type`). Aligns with OpenAPI 3.x `discriminator.propertyName`.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPropertyName(
                    string $propertyName
                ): static {
                    if ($this->propertyName === $propertyName) {
                        return $this;
                    }

                    $value = $modelData['property_name'] = $propertyName;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePropertyName($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->propertyName = $value;
                    $this->_rawModelDataInput['property_name'] = $propertyName;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property propertyName
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPropertyName(array $modelData): void
            {
                

                $value = array_key_exists('property_name', $modelData) ? $modelData['property_name'] : $this->propertyName;

                

                $this->propertyName = $this->validatePropertyName($value, $modelData);
            }

            /**
             * Execute all validators for the property propertyName
             */
            protected function validatePropertyName($value, array $modelData)
            {
                
                    

if (!array_key_exists('property_name', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'property_name',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'property_name',
  1 => 'string',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of value.
                 *
                 * Value the caller sent at `property_name`. Typically a string for const-discriminated unions; numeric/boolean/null permitted. Object and array values are forbidden — const discriminators are scalars, and emitting a structured value would conflate 'caller sent a complex shape' with 'validator inferred from a structural match'.
                 *
                 * @return string|float|bool|null
                 */
                public function getValue(): string | float | bool | null
                {
                    

                    return $this->value;
                }
            

            
                /**
                 * Set the value of value.
                 *
                 * @param string|float|bool|null $value Value the caller sent at `property_name`. Typically a string for const-discriminated unions; numeric/boolean/null permitted. Object and array values are forbidden — const discriminators are scalars, and emitting a structured value would conflate 'caller sent a complex shape' with 'validator inferred from a structural match'.
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValue(
                    string | float | bool | null $value
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

                
                    

if (!array_key_exists('value', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value',
)));
}

                
                    

if (!array_key_exists('value', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value',
)));
}

                
                    

if (!array_key_exists('value', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value',
)));
}

                
                    

if (!array_key_exists('value', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'value',
)));
}

                
                    

if (!is_string($value) && !is_float($value) && !is_bool($value) && !is_null($value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'value',
  1 => 
  array (
    0 => 'string',
    1 => 'float',
    2 => 'bool',
    3 => 'null',
  ),
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
    

    
        
            if (array_key_exists('property_name', $modelData) &&
                $modelData['property_name'] !== $this->propertyName
            ) {
                

                $rollbackValues['propertyName'] = $this->propertyName;
                $this->processPropertyName($modelData);
            }
        
    
        
            if (array_key_exists('value', $modelData) &&
                $modelData['value'] !== $this->value
            ) {
                

                $rollbackValues['value'] = $this->value;
                $this->processValue($modelData);
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





}

// @codeCoverageIgnoreEnd
