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
 * Class GetProductsResponse_ItemOfArrayPublisher_Propertiescdf14a762de7904e8b101407e1024d29
 * @package AdCP\MediaBuy 
 *
 * Select specific properties by ID. Single-publisher only — property IDs are publisher-scoped, so the compact `publisher_domains[]` form is intentionally NOT available for this selector. Use multiple `publisher_properties[]` entries (one per publisher) when each publisher's ID set differs.
 *
 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/1')]

class GetProductsResponse_ItemOfArrayPublisher_Propertiescdf14a762de7904e8b101407e1024d29 implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/1/properties/publisher_domain')]
        
            #[SchemaName('publisher_domain')]
        
            #[Required]
        
        /** @var string Domain where publisher's adagents.json is hosted (e.g., 'cnn.com'). */
        protected $publisherDomain;
    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/1/properties/selection_type')]
        
            #[SchemaName('selection_type')]
        
            #[Required]
        
        /** @var string Discriminator indicating selection by specific property IDs */
        protected $selectionType;
    
        
            #[JsonPointer('/properties/products/items/properties/publisher_properties/items/allOf/0/oneOf/1/properties/property_ids')]
        
            #[SchemaName('property_ids')]
        
            #[Required]
        
        /** @var string[] Specific property IDs from the publisher's adagents.json */
        protected $propertyIds;
    
        
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
     * GetProductsResponse_ItemOfArrayPublisher_Propertiescdf14a762de7904e8b101407e1024d29 constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        
            $this->executeBaseValidators($rawModelDataInput);
        

        
            
                $this->processPublisherDomain($rawModelDataInput);
            
        
            
                $this->processSelectionType($rawModelDataInput);
            
        
            
                $this->processPropertyIds($rawModelDataInput);
            
        
            
        
            
        

        
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
   'publisher_domain',
   'selection_type',
   'property_ids',
)) as $propertyKey) {
        

        $this->_additionalProperties[$propertyKey] = $value[$propertyKey];
    }

    return false;
})()) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\InvalidAdditionalPropertiesException($value ?? null, ...array (
  0 => 'GetProductsResponse_ItemOfArrayPublisher_Propertiescdf14a762de7904e8b101407e1024d29',
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
                 * Get the value of publisher_domain.
                 *
                 * Domain where publisher's adagents.json is hosted (e.g., 'cnn.com').
                 *
                 * @return string
                 */
                public function getPublisherDomain(): string
                {
                    

                    return $this->publisherDomain;
                }
            

            
                /**
                 * Set the value of publisher_domain.
                 *
                 * @param string $publisherDomain Domain where publisher's adagents.json is hosted (e.g., 'cnn.com').
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPublisherDomain(
                    string $publisherDomain
                ): static {
                    if ($this->publisherDomain === $publisherDomain) {
                        return $this;
                    }

                    $value = $modelData['publisher_domain'] = $publisherDomain;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePublisherDomain($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->publisherDomain = $value;
                    $this->_rawModelDataInput['publisher_domain'] = $publisherDomain;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property publisherDomain
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPublisherDomain(array $modelData): void
            {
                

                $value = array_key_exists('publisher_domain', $modelData) ? $modelData['publisher_domain'] : $this->publisherDomain;

                

                $this->publisherDomain = $this->validatePublisherDomain($value, $modelData);
            }

            /**
             * Execute all validators for the property publisherDomain
             */
            protected function validatePublisherDomain($value, array $modelData)
            {
                
                    

if (!array_key_exists('publisher_domain', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'publisher_domain',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'publisher_domain',
  1 => 'string',
)));
}

                
                    

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05XShbYS16MC05LV0qW2EtejAtOV0pPyhcLlthLXowLTldKFthLXowLTktXSpbYS16MC05XSk/KSokLw=='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'publisher_domain',
  1 => '^[a-z0-9]([a-z0-9-]*[a-z0-9])?(\\.[a-z0-9]([a-z0-9-]*[a-z0-9])?)*$',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of selection_type.
                 *
                 * Discriminator indicating selection by specific property IDs
                 *
                 * @return string
                 */
                public function getSelectionType(): string
                {
                    

                    return $this->selectionType;
                }
            

            
                /**
                 * Set the value of selection_type.
                 *
                 * @param string $selectionType Discriminator indicating selection by specific property IDs
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setSelectionType(
                    string $selectionType
                ): static {
                    if ($this->selectionType === $selectionType) {
                        return $this;
                    }

                    $value = $modelData['selection_type'] = $selectionType;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateSelectionType($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->selectionType = $value;
                    $this->_rawModelDataInput['selection_type'] = $selectionType;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property selectionType
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processSelectionType(array $modelData): void
            {
                

                $value = array_key_exists('selection_type', $modelData) ? $modelData['selection_type'] : $this->selectionType;

                

                $this->selectionType = $this->validateSelectionType($value, $modelData);
            }

            /**
             * Execute all validators for the property selectionType
             */
            protected function validateSelectionType($value, array $modelData)
            {
                
                    

if (!array_key_exists('selection_type', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'selection_type',
)));
}

                
                    

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'selection_type',
  1 => 'string',
)));
}

                
                    

if ($value !== 'by_id') {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidConstException($value ?? null, ...array (
  0 => 'selection_type',
  1 => 'by_id',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of property_ids.
                 *
                 * Specific property IDs from the publisher's adagents.json
                 *
                 * @return string[]
                 */
                public function getPropertyIds(): array
                {
                    

                    return $this->propertyIds;
                }
            

            
                /**
                 * Set the value of property_ids.
                 *
                 * @param string[] $propertyIds Specific property IDs from the publisher's adagents.json
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setPropertyIds(
                    array $propertyIds
                ): static {
                    if ($this->propertyIds === $propertyIds) {
                        return $this;
                    }

                    $value = $modelData['property_ids'] = $propertyIds;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validatePropertyIds($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->propertyIds = $value;
                    $this->_rawModelDataInput['property_ids'] = $propertyIds;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property propertyIds
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processPropertyIds(array $modelData): void
            {
                

                $value = array_key_exists('property_ids', $modelData) ? $modelData['property_ids'] : $this->propertyIds;

                

                $this->propertyIds = $this->validatePropertyIds($value, $modelData);
            }

            /**
             * Execute all validators for the property propertyIds
             */
            protected function validatePropertyIds($value, array $modelData)
            {
                
                    

if (!array_key_exists('property_ids', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'property_ids',
)));
}

                
                    

if ((!is_array($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'property_ids',
  1 => 'array',
)));
}

                
                    $this->validatePropertyIds_ArrayItem_22d2ef781dab0c964b6467c340376d0a($value, $modelData);
                
                    

if (is_array($value) && count($value) < 1) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\MinItemsException($value ?? null, ...array (
  0 => 'property_ids',
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
    

    
        
            if (array_key_exists('publisher_domain', $modelData) &&
                $modelData['publisher_domain'] !== $this->publisherDomain
            ) {
                

                $rollbackValues['publisherDomain'] = $this->publisherDomain;
                $this->processPublisherDomain($modelData);
            }
        
    
        
            if (array_key_exists('selection_type', $modelData) &&
                $modelData['selection_type'] !== $this->selectionType
            ) {
                

                $rollbackValues['selectionType'] = $this->selectionType;
                $this->processSelectionType($modelData);
            }
        
    
        
            if (array_key_exists('property_ids', $modelData) &&
                $modelData['property_ids'] !== $this->propertyIds
            ) {
                

                $rollbackValues['propertyIds'] = $this->propertyIds;
                $this->processPropertyIds($modelData);
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


private function validatePropertyIds_ArrayItem_22d2ef781dab0c964b6467c340376d0a(&$value, $modelData): void {
                    $invalidItems_6f44d58ac125439adb0c90e8d2352242 = [];
                    
                    if (is_array($value) && (function (&$items) use (&$invalidItems_6f44d58ac125439adb0c90e8d2352242, $modelData) {
    
        $originalErrorRegistry = $this->_errorRegistry;
    

    foreach ($items as $index => &$value) {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        try {
            

            
                

if ((!is_string($value) && !$value instanceof UnitEnum) ) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Generic\InvalidTypeException($value ?? null, ...array (
  0 => 'item of array property_ids',
  1 => 'string',
)));
}

            
                

if (is_string($value) && !preg_match(base64_decode('L15bYS16MC05X10rJC8='), $value)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\String\PatternException($value ?? null, ...array (
  0 => 'item of array property_ids',
  1 => '^[a-z0-9_]+$',
)));
}

            

            
                if ($this->_errorRegistry->getErrors()) {
                    $invalidItems_6f44d58ac125439adb0c90e8d2352242[$index] = $this->_errorRegistry->getErrors();
                }
            
        } catch (\Exception $e) {
            // collect all errors concerning invalid items
            isset($invalidItems_6f44d58ac125439adb0c90e8d2352242[$index])
                ? $invalidItems_6f44d58ac125439adb0c90e8d2352242[$index][] = $e
                : $invalidItems_6f44d58ac125439adb0c90e8d2352242[$index] = [$e];
        }
    }

    
        $this->_errorRegistry = $originalErrorRegistry;
    

    return !empty($invalidItems_6f44d58ac125439adb0c90e8d2352242);
})($value)) {
                        $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Arrays\InvalidItemException($value ?? null, ...array (
  0 => 'property_ids',
  1 => $invalidItems_6f44d58ac125439adb0c90e8d2352242,
)));
                    }
                }


}

// @codeCoverageIgnoreEnd
