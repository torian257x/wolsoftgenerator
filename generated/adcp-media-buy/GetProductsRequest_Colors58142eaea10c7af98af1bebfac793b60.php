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

    use PHPModelGenerator\Attributes\Internal;

    use PHPModelGenerator\Exception\ErrorRegistryException;


/**
 * Class GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60
 * @package AdCP\MediaBuy 
 *
 * Override brand colors (hex strings).
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/brand/properties/brand_kit_override/properties/colors')]

class GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/colors/properties/primary')]
        
            #[SchemaName('primary')]
        
        /** @var string|null */
        protected $primary;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/colors/properties/secondary')]
        
            #[SchemaName('secondary')]
        
        /** @var string|null */
        protected $secondary;
    
        
            #[JsonPointer('/properties/brand/properties/brand_kit_override/properties/colors/properties/accent')]
        
            #[SchemaName('accent')]
        
        /** @var string|null */
        protected $accent;
    
        
            #[Internal]
        
        /** @var array Collect all additional properties provided to the schema */
        private $_additionalProperties = array (
);
    
        
            #[Internal]
        
        /** @var array Values which might be skipped for serialization if not provided */
        private $_skipNotProvidedPropertiesMap = array (
  0 => 'primary',
  1 => 'secondary',
  2 => 'accent',
);
    
    #[Internal]
    /** @var array */
    protected $_rawModelDataInput = [];

    
        #[Internal]
        /** @var ErrorRegistryException Collect all validation errors */
        protected $_errorRegistry;
    

    /**
     * GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPrimary($rawModelDataInput);
            
        
            
                $this->processSecondary($rawModelDataInput);
            
        
            
                $this->processAccent($rawModelDataInput);
            
        
            
        
            
        

        
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
   'primary',
   'secondary',
   'accent',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsRequest_Colors58142eaea10c7af98af1bebfac793b60',
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
                 * Get the value of primary.
                 *
                 *
                 * @return string|null
                 */
                public function getPrimary(): ?string
                {
                    

                    return $this->primary;
                }
            

            
                /**
                 * Set the value of primary.
                 *
                 * @param string $primary
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPrimary(
                    string $primary
                ): static {
                    if ($this->primary === $primary) {
                        return $this;
                    }

                    $value = $modelData['primary'] = $primary;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePrimary($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->primary = $value;
                    $this->_rawModelDataInput['primary'] = $primary;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property primary
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPrimary(array $modelData): void
            {
                
                    if (!array_key_exists('primary', $modelData) && $this->primary === null) {
                        return;
                    }
                

                $value = array_key_exists('primary', $modelData) ? $modelData['primary'] : $this->primary;

                

                $this->primary = $this->validatePrimary($value, $modelData);
            }

            /**
             * Execute all validators for the property primary
             */
            protected function validatePrimary($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'primary',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L14jWzAtOWEtZkEtRl17Nn0kLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'primary',
  1 => '^#[0-9a-fA-F]{6}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of secondary.
                 *
                 *
                 * @return string|null
                 */
                public function getSecondary(): ?string
                {
                    

                    return $this->secondary;
                }
            

            
                /**
                 * Set the value of secondary.
                 *
                 * @param string $secondary
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSecondary(
                    string $secondary
                ): static {
                    if ($this->secondary === $secondary) {
                        return $this;
                    }

                    $value = $modelData['secondary'] = $secondary;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSecondary($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->secondary = $value;
                    $this->_rawModelDataInput['secondary'] = $secondary;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property secondary
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSecondary(array $modelData): void
            {
                
                    if (!array_key_exists('secondary', $modelData) && $this->secondary === null) {
                        return;
                    }
                

                $value = array_key_exists('secondary', $modelData) ? $modelData['secondary'] : $this->secondary;

                

                $this->secondary = $this->validateSecondary($value, $modelData);
            }

            /**
             * Execute all validators for the property secondary
             */
            protected function validateSecondary($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'secondary',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L14jWzAtOWEtZkEtRl17Nn0kLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'secondary',
  1 => '^#[0-9a-fA-F]{6}$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of accent.
                 *
                 *
                 * @return string|null
                 */
                public function getAccent(): ?string
                {
                    

                    return $this->accent;
                }
            

            
                /**
                 * Set the value of accent.
                 *
                 * @param string $accent
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setAccent(
                    string $accent
                ): static {
                    if ($this->accent === $accent) {
                        return $this;
                    }

                    $value = $modelData['accent'] = $accent;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateAccent($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->accent = $value;
                    $this->_rawModelDataInput['accent'] = $accent;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property accent
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processAccent(array $modelData): void
            {
                
                    if (!array_key_exists('accent', $modelData) && $this->accent === null) {
                        return;
                    }
                

                $value = array_key_exists('accent', $modelData) ? $modelData['accent'] : $this->accent;

                

                $this->accent = $this->validateAccent($value, $modelData);
            }

            /**
             * Execute all validators for the property accent
             */
            protected function validateAccent($value, array $modelData)
            {
                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'accent',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L14jWzAtOWEtZkEtRl17Nn0kLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'accent',
  1 => '^#[0-9a-fA-F]{6}$',
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
    

    
        
            if (array_key_exists('primary', $modelData) &&
                $modelData['primary'] !== $this->primary
            ) {
                

                $rollbackValues['primary'] = $this->primary;
                $this->processPrimary($modelData);
            }
        
    
        
            if (array_key_exists('secondary', $modelData) &&
                $modelData['secondary'] !== $this->secondary
            ) {
                

                $rollbackValues['secondary'] = $this->secondary;
                $this->processSecondary($modelData);
            }
        
    
        
            if (array_key_exists('accent', $modelData) &&
                $modelData['accent'] !== $this->accent
            ) {
                

                $rollbackValues['accent'] = $this->accent;
                $this->processAccent($modelData);
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
