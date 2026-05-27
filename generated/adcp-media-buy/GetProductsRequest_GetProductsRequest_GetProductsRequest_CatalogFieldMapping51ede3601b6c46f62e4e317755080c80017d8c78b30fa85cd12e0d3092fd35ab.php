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
 * Class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab
 * @package AdCP\MediaBuy 
 *

 * This is an auto-implemented class implemented by the php-json-schema-model-generator.
 * If you need to implement something in this class use inheritance. Else you will lose your changes if the classes
 * are re-generated.
 */

#[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/0/not/0')]

class GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab implements JSONModelInterface, JsonSerializable, SerializationInterface
{
    use SerializableTrait;

    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/0/not/0/properties/feed_field')]
        
            #[SchemaName('feed_field')]
        
            #[Required]
        
        /** @var mixed */
        protected $feedField;
    
        
            #[JsonPointer('/properties/catalog/properties/feed_field_mappings/items/allOf/0/not/0/properties/value')]
        
            #[SchemaName('value')]
        
            #[Required]
        
        /** @var mixed */
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
     * GetProductsRequest_GetProductsRequest_GetProductsRequest_CatalogFieldMapping51ede3601b6c46f62e4e317755080c80017d8c78b30fa85cd12e0d3092fd35ab constructor.
     *
     * @param array $rawModelDataInput
     *
     * @throws ErrorRegistryException
     */
    public function __construct(array $rawModelDataInput = [])
    {
        
            $this->_errorRegistry = new ErrorRegistryException();
        

        

        

        
            
                $this->processFeedField($rawModelDataInput);
            
        
            
                $this->processValue($rawModelDataInput);
            
        
            
        

        
            if (count($this->_errorRegistry->getErrors())) {
                throw $this->_errorRegistry;
            }
        

        $this->_rawModelDataInput = $rawModelDataInput;

        
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
                 * Get the value of feed_field.
                 *
                 *
                 * @return mixed
                 */
                public function getFeedField(): mixed
                {
                    

                    return $this->feedField;
                }
            

            
                /**
                 * Set the value of feed_field.
                 *
                 * @param mixed $feedField
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setFeedField(
                    mixed $feedField
                ): static {
                    if ($this->feedField === $feedField) {
                        return $this;
                    }

                    $value = $modelData['feed_field'] = $feedField;

                    
                        $this->_errorRegistry = new ErrorRegistryException();
                    

                    

                    $value = $this->validateFeedField($value, $modelData);

                    
                        if ($this->_errorRegistry->getErrors()) {
                            throw $this->_errorRegistry;
                        }
                    

                    $this->feedField = $value;
                    $this->_rawModelDataInput['feed_field'] = $feedField;

                    

                    return $this;
                }
            

            /**
             * Extract the value, perform validations and set the property feedField
             *
             * @param array $modelData
             *
             * @throws ErrorRegistryException
             */
            protected function processFeedField(array $modelData): void
            {
                

                $value = array_key_exists('feed_field', $modelData) ? $modelData['feed_field'] : $this->feedField;

                

                $this->feedField = $this->validateFeedField($value, $modelData);
            }

            /**
             * Execute all validators for the property feedField
             */
            protected function validateFeedField($value, array $modelData)
            {
                
                    

if (!array_key_exists('feed_field', $modelData)) {
    $this->_errorRegistry->addError(new \PHPModelGenerator\Exception\Object\RequiredValueException($value ?? null, ...array (
  0 => 'feed_field',
)));
}

                

                return $value;
            }
        
    
        
            
                /**
                 * Get the value of value.
                 *
                 *
                 * @return mixed
                 */
                public function getValue(): mixed
                {
                    

                    return $this->value;
                }
            

            
                /**
                 * Set the value of value.
                 *
                 * @param mixed $value
                 *
                 * @throws ErrorRegistryException
                 *
                 * @return static
                 */
                public function setValue(
                    mixed $value
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

    

    
        
            if (array_key_exists('feed_field', $modelData) &&
                $modelData['feed_field'] !== $this->feedField
            ) {
                

                $rollbackValues['feedField'] = $this->feedField;
                $this->processFeedField($modelData);
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
